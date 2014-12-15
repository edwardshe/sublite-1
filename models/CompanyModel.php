<?php
  require_once('models/Model.php');

  class CompanyModel extends Model {
    function __construct() {
      parent::__construct('companies');
    }

    function save($data) {
      $this->collection->save($data);
      return $data['_id']->{'$id'};
    }

    function get($id) {
      return $this->collection->findOne(array('_id' => new MongoId($id)));
    }

    function delete($id) {
      
    }
    
    function exists($id) {
      return ($this->get($id) !== NULL);
    }
  }

  $MCompany = new CompanyModel();

?>