<?php
  interface DBExecuteInterface {
    public function __construct($collection);

    /**
     * Inserts the document $data into the database. $data must be nonempty.
     * Returns the document _id, or null if error.
     */
    public static function insert(MongoCollection $collection, array $data);

    public static function query(MongoCollection $collection,
                                 array $query,
                                 array $projection = array());
    public static function queryForOne(MongoCollection $collection,
                                       array $query,
                                       array $projection = array());
    public static function update(MongoCollection $collection,
                                  array $query,
                                  array $update);
    public static function remove(MongoCollection $collection,
                                  array $query);
  }

  // DBQuery - performs (query, projection)
  interface DBQueryInterface {
    public function toQuery($name, $val);
    public function toTextQuery($text);
    public function toNotQuery($name, $val);

    /**
     * Add this field to the projection.
     */
    public function projectField($name);

    /**
     * Just project _id field.
     */
    // TODO: Unit test this to make sure when we actually run the query, just
    // passing in an empty array limits the projection to just _id.
    public function projectId();

    /**
     * Returns single document if found, null if no document with _id $id.
     */
    public function queryForId(MongoId $id);

    /**
     * Runs the query to just find and return one document.
     */
    public function findOne();

    /**
     * Run the query and return the results.
     */
    public function run();

    /**
     * VISIBLE FOR TESTING
     */
    public function getQuery();
  }

  interface DBUpdateQueryInterface {
    /**
     * Set individual update field.
     */
    public function toUpdate($name, $newval);

    /**
     * Set entire update data.
     */
    public function setUpdate($update);

    public function run();

    /**
     * VISIBLE FOR TESTING
     */
    public function getUpdate();
  }

  interface DBRemoveQueryInterface {
    public function run();
  }

  interface DBInsertInterface {
    public function setData(array $data);
    public function run();
  }

  /**
   * Contains functions for performing commands on the DB.
   */
  class DBExecute implements DBExecuteInterface {
    public function __construct($collection) {
      $this->collection = $collection;
    }

    public static function insert(MongoCollection $collection, array $data) {
      if (count($data) == 0) {
        return null;
      }

      $collection->insert($data);
      return $data['_id'];
    }

    public static function query(MongoCollection $collection,
                                 array $query,
                                 array $projection = array()) {
      return self::cursorToArray($collection->find($query, $projection));
    }

    public static function queryForOne(MongoCollection $collection,
                                       array $query,
                                       array $projection = array()) {
      return $collection->findOne($query, $projection);
    }

    public static function update(MongoCollection $collection,
                                  array $query,
                                  array $update) {
      return $collection->update($query, $update);
    }

    public static function remove(MongoCollection $collection,
                                  array $query) {
      return $collection->remove($query);
    }

    private static function cursorToArray(MongoCursor $cursor) {
      $docs = [];
      foreach ($cursor as $doc) {
        $docs[] = $doc;
      }
      return $docs;
    }
  }

  ////////////////
  // Below has classes:

  // DBUpdateQuery - performs (query, $set)
  // DBRemoveQuery - performs (query) -> remove
  ////////////////

  class DBQuery extends DBExecute implements DBQueryInterface {
    public function toQuery($name, $val) {
      $this->query[$name] = $val;
      return $this;
    }

    public function toTextQuery($text) {
      $this->query['$text'] = array('$search' => $text);
      return $this;
    }

    public function toNotQuery($name, $val) {
      $this->query[$name] = array('$ne' => $val);
      return $this;
    }

    public function projectField($name) {
      $this->projection[$name] = true;
      return $this;
    }

    public function projectId() {
      $this->projection = array();
    }

    public function queryForId(MongoId $id) {
      $this->query['_id'] = $id;
      return $this;
    }

    public function findOne() {
      return self::queryForOne(
        $this->collection, $this->query, $this->projection);
    }

    public function run() {
      return self::query($this->collection, $this->query, $this->projection);
    }

    public function getQuery() {
      return $this->query;
    }

    protected $collection;

    protected $query = array();
    protected $projection = array();
  }

  class DBUpdateQuery extends DBQuery implements DBUpdateQueryInterface {
    public function toUpdate($name, $newval) {
      $this->update[$name] = $newval;
      return $this;
    }

    public function setUpdate($update) {
      $this->update = $update;
    }

    public function run() {
      // This an update, so run an update, and return success/failure.
      self::update(
        $this->collection, $this->query, array('$set' => $this->update));
    }

    public function getUpdate() {
      return $this->update;
    }

    private $update = array();
  }

  class DBRemoveQuery extends DBQuery implements DBRemoveQueryInterface {
    public function run() {
      // Run the remove query, always returns true.
      self::remove($this->collection, $this->query);
    }
  }

  class DBInsert extends DBExecute implements DBInsertInterface {
    public function setData(array $data) {
      $this->data = $data;
      return $this;
    }

    public function run() {
      invariant(isset($this->data));

      return self::insert($this->collection, $this->data);
    }

    private $data;
  }
?>