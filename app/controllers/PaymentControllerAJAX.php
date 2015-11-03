<?php
  require_once($GLOBALS['dirpre'].'controllers/Controller.php');
  require_once($GLOBALS['dirpre'].'controllers/modules/billing/StripeBilling.php');

  interface PaymentControllerAJAXInterface {
    public static function addPaymentInfo();
    public static function removePaymentInfo();
    public static function buyCredits();
  }

  class PaymentControllerAJAX extends Controller
                              implements PaymentControllerAJAXInterface {
    public static function addPaymentInfo() {
      RecruiterController::requireLogin();
      global $params;

      $recruiterId = $_SESSION['_id'];
      $customerId = RecruiterModel::getCustomerId($recruiterId);
      if (is_null($customerId)) {
        // Create new customer id.
        $email = $_SESSION['email'];
        $customerId = StripeBilling::createCustomer($email);
        RecruiterModel::setCustomerId($recruiterId, $customerId);
      }

      // Add card info.
      $token = $params['token'];

      StripeBilling::addCard($customerId, $token);

      return self::ajaxSuccess();
    }

    public static function removePaymentInfo() {
      RecruiterController::requireLogin();
      global $params;

      $recruiterId = $_SESSION['_id'];
      $customerId = RecruiterModel::getCustomerId($recruiterId);
      if (is_null($customerId)) {
        return self::ajaxError();
      }

      // Remove card.
      $cardId = $params['cardId'];
      StripeBilling::removeCard($customerId, $cardId);

      return self::ajaxSuccess();
    }

    public static function buyCredits() {
      RecruiterController::requireLogin();
      global $params;

      $recruiterId = $_SESSION['_id'];
      $customerId = RecruiterModel::getCustomerId($recruiterId);

      $cardId = $params['cardId'];
      $credits = $params['credits'];

      // How much do we charge per application?
      $amount = $credits * 8;

      // Charge the card.
      $res = StripeBilling::charge($customerId, $cardId, $amount);
      if (!$res) {
        return self::ajaxError('Charge failed!');
      }

      // Add the credits.
      RecruiterModel::addCredits($recruiterId, $credits);

      return self::ajaxSuccess();
    }
  }
?>