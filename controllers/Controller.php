<?php
  global $params, $valid;

  class Controller {
    public static $renderQueue = array();

    function validate($test, &$var, $msg) {
      global $valid;
      if (!$valid) return;
      if (!$test) {
        $valid = false;
        $var = $msg;
      }
    }
    function isValid() {global $valid; return $valid;}
    function startValidations() {global $valid; $valid = true;}

    function render($view, $vars = false) {
      self::$renderQueue[] = array($view, $vars);
    }
    function directrender($view, $vars = false) {
      // Actual view here
      global $viewVars;
      if ($vars === false) $viewVars = array();
      else $viewVars = $vars;
      require_once("views/$view.php");
    }
    function finish() {
      if (count(self::$renderQueue) == 0) return;

      require_once('includes/htmlheader.php');

      foreach (self::$renderQueue as $pair) {
        $view = $pair[0]; $vars = $pair[1];
        self::directrender($view, $vars);
      }

      require_once('includes/htmlfooter.php'); 
    }
    function redirect($page, $params = NULL) {
      if ($params == NULL)
        header("Location: /$page.php");
      else {
        $query = http_build_query($params);
        header("Location: /$page.php?$query");
      }
      die();
    }
  }

  global $params;
  $params = $_POST;

  // REFACTOR ALL LOGIN/SESSION HANDLING CODE
  session_start();
?>