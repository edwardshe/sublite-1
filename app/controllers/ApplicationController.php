<?php
  require_once($GLOBALS['dirpre'].'controllers/Controller.php');
  require_once($GLOBALS['dirpre'].'controllers/modules/application/Question.php');

  interface ApplicationControllerInterface {
    public static function edit(array $restOfRoute);
    public static function createCustom();
    public static function deleteCustom();
    public static function searchCustom();
  }

  class ApplicationController extends Controller
                              implements ApplicationControllerInterface {
    public static function edit(array $restOfRoute) {
      if (!isset($restOfRoute[0]) || !MongoId::isValid($restOfRoute[0])) {
        self::error("invalid access");
        self::render('notice');
        return;
      }

      $jobId = new MongoId($restOfRoute[0]);

      // Make sure job exists.
      if (!JobModel::exists($jobId)) {
        self::error("nonexistent job");
        self::render('notice');
        return;
      }

      $vanillaQuestions = Question::getAllVanilla(true);
      $vanillaQuestionsData = [];
      $chosenData = [];

      // Get existing questions.
      $chosenIds = ApplicationModel::getJobApplication($jobId);
      // If no application, we show form to create application.
      // Else, we show form to edit existing application.
      if ($chosenIds === null) {
        $createEdit = 'create';
      } else {
        $createEdit = 'edit';

        // Remove any existing from $vanillaQuestions.
        foreach ($vanillaQuestions as $question) {
          $id = $question->getId();
          $data = $question->getData();
          $data['hide'] = in_array($id, $chosenIds);
          $vanillaQuestionsData[] = $data;
        }

        // Get the text for each $chosenIds.
        foreach ($chosenIds as $_id) {
          $data = QuestionModel::getById($_id, ['text' => 1, 'vanilla' => 1]);
          if ($data === null) continue;

          $text = $data['text'];
          $chosenData[] = [
            '_id' => $_id,
            'text' => $text,
            'vanilla' => $vanilla
          ];
        }
      }

      self::render('jobs/applications/edit', [
        'createEdit' => $createEdit,
        'vanillaQuestions' => $vanillaQuestionsData,
        'chosen' => $chosenData,
        'jobId' => $jobId
      ]);
    }

    public static function createCustom() {
      global $params;

      $text = $params['text'];
      $recruiterId = $_SESSION['_id'];

      $question = Question::createCustom($text, $recruiterId);

      return $question->getId();
    }

    public static function deleteCustom() {
      global $params;

      $questionId = new MongoId($params['questionId']);
      $jobId = new MongoId($params['jobId']);
      $recruiterId = $_SESSION['_id'];

      $question = Question::getById($questionId);
      if ($question->getVanilla() == true) {
        return;
      }

      $usesCount = $question->getUsesCount();

      // Delete question only if:
      // ('uses' is 0) or ('uses' is 1 and the only use is $jobId).
      if ($usesCount > 1) {
        return;
      }
      if ($usesCount == 1) {
        $use = $question->getUses()[0];
        if ($use != $jobId) {
          return;
        }
      }

      return Question::delete($questionId);
    }

    public static function searchCustom() {
      global $params;

      $search = $params['search'];

      $questions = Question::searchCustom($search);
      $questionData = self::questionArrayToJson($questions);

      return clean($questionData);
    }

    private static function questionArrayToJson(array $questions) {
      $questionData = [];
      foreach ($questions as $question) {
        $data = $question->getData();
        $data['_id'] = (string)$data['_id'];
        $questionData[] = $data;
      }
      return json_encode($questionData);
    }
  }
?>