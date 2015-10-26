<?php
  $GLOBALS['dirpre'] = 'app/';
  require_once($dirpre.'includes/header.php');

  // Register functions to call. Try to have these in alphabetical order.
  Router::register('admin/questions', function() {
    AdminControllerQuestions::manage();
  });
  Router::register('backtoindex', function() {
    Controller::redirect('../index');
  });
  Router::register('changepass', function() {
    GLOBALvarGet('CStudent')->changePass();
  });
  Router::register('confirm', function() {
    GLOBALvarGet('CStudent')->confirm();
  });
  Router::register('editprofile', function() {
    GLOBALvarGet('CStudent')->edit();
  });
  Router::register('employers/addcompany', function() {
    GLOBALvarGet('CCompany')->add();
  });
  Router::register('employers/addjob', function() {
    GLOBALvarGet('CJob')->add();
  });
  Router::register('employers/approve', function() {
    GLOBALvarGet('CRecruiter')->approve();
  });
  Router::register('employers/changepass', function() {
    GLOBALvarGet('CRecruiter')->changePass();
  });
  Router::register('employers/company', function() {
    GLOBALvarGet('CCompany')->view();
  });
  Router::register('employers/createcustom', function () {
    echo ApplicationController::createCustom();
  });
  Router::register('employers/deletecustom', function () {
    echo ApplicationController::deleteCustom();
  });
  Router::register('employers/searchcustom', function () {
    echo ApplicationController::searchCustom();
  });
  Router::register('employers/editapplication', function (array $restOfRoute) {
    ApplicationController::edit($restOfRoute);
  });
  Router::register('employers/editcompany', function() {
    GLOBALvarGet('CCompany')->edit();
  });
  Router::register('employers/editjob', function() {
    GLOBALvarGet('CJob')->edit();
  });
  Router::register('employers/editprofile', function() {
    GLOBALvarGet('CRecruiter')->edit();
  });
  Router::register('employers/forgotpass', function() {
    GLOBALvarGet('CRecruiter')->forgotPass();
  });
  Router::register('employers/home', function() {
    GLOBALvarGet('CRecruiter')->home();
    GLOBALvarGet('CJob')->manage();
  });
  Router::register('employers/index', function() {
    GLOBALvarGet('CRecruiter')->index();
  });
  Router::register('employers/login', function() {
    GLOBALvarGet('CRecruiter')->login();
  });
  Router::register('employers/loginregister', function() {
    GLOBALvarGet('CRecruiter')->register();
    GLOBALvarGet('CRecruiter')->login();
  });
  Router::register('employers/logout', function() {
    GLOBALvarGet('CRecruiter')->logout();
  });
  Router::register('employers/profile', function() {
    // PROB THINK OF ANOTHER WAY OF REFACTORING THE FOLLOWING CODE
    if (isset($_SESSION['email'])) echo 'yay!';
    else echo 'nay...';
  });
  Router::register('employers/recruiter', function() {
    GLOBALvarGet('CRecruiter')->view();
  });
  Router::register('employers/register', function() {
    GLOBALvarGet('CRecruiter')->register();
  });
  Router::register('employers/S3', function() {
    GLOBALvarGet('CS3')->upload();
  });
  Router::register('faq', function() {
    GLOBALvarGet('CApp')->faq();
  });
  Router::register('feedback', function() {
    GLOBALvarGet('CApp')->feedback();
  });
  Router::register('forgotpass', function() {
    GLOBALvarGet('CStudent')->forgotPass();
  });
  Router::register('graph', function() {
    GLOBALvarGet('CJob')->requireLogin();
    GLOBALvarGet('CStats')->graph();
  });
  Router::register('home', function() {
    GLOBALvarGet('CStudent')->home();
    GLOBALvarGet('CSublet')->manage();
  });
  Router::register('housing/addsublet', function() {
    GLOBALvarGet('CSublet')->add();
  });
  Router::register('housing/editsublet', function() {
    GLOBALvarGet('CSublet')->edit();
  });
  Router::register('housing/search', function() {
    GLOBALvarGet('CSublet')->search();
  });
  Router::register('housing/sublet', function() {
    GLOBALvarGet('CSublet')->view();
  });
  Router::register('hubs/admin', function() {
    GLOBALvarGet('CSocial')->admin();
  });
  Router::register('hubs/adminapi', function() {
    echo GLOBALvarGet('CSocial')->adminapi();
  });
  Router::register('hubs/api', function() {
    echo GLOBALvarGet('CSocial')->api();
  });
  Router::register('hubs/hub', function() {
    echo GLOBALvarGet('CSocial')->hub();
  });
  Router::register('hubs/start', function() {
    echo GLOBALvarGet('CSocial')->index();
  });
  Router::register('index', function() {
    GLOBALvarGet('CStudent')->index();
  });
  Router::register('jobs/editprofile', function() {
    GLOBALvarGet('CStudent')->editStudentProfile();
  });
  Router::register('jobs/apply', function (array $restOfRoute) {
    ApplicationController::apply($restOfRoute);
  });
  Router::register('jobs/job', function() {
    GLOBALvarGet('CJob')->view();
  });
  Router::register('jobs/recruiter', function() {
    GLOBALvarGet('CRecruiter')->view();
  });
  Router::register('jobs/search', function() {
    GLOBALvarGet('CJob')->search();
  });
  Router::register('jobs/company', function() {
    GLOBALvarGet('CCompany')->view();
  });
  Router::register('login', function() {
    GLOBALvarGet('CStudent')->login();
  });
  Router::register('logout', function() {
    GLOBALvarGet('CStudent')->logout();
  });
  Router::register('messages', function() {
    GLOBALvarGet('CMessage')->reply();
  });
  Router::register('messagestats', function() {
    GLOBALvarGet('CStats')->requireLogin();
    GLOBALvarGet('CStats')->messages();
  });
  Router::register('migrate', function() {
    GLOBALvarGet('CMigrations')->migrate();
  });
  Router::register('newmessage', function() {
    GLOBALvarGet('CMessage')->add();
  });
  Router::register('privacy', function() {
    GLOBALvarGet('CApp')->privacy();
  });
  Router::register('redirect', function() {
    GLOBALvarGet('MJob')->incrementApply($_GET['id']);
    if(filter_var($_GET['url'], FILTER_VALIDATE_EMAIL)) {
      header("Location: mailto:" . $_GET['url']);
    } else {
      $link = $_GET['url'];
      if (!preg_match('`^(https?:\/\/)`', $_GET['url']))
        $link = "http://" . $link;
      header("Location: " . $link);
    }
  });
  Router::register('refer', function() {
    GLOBALvarGet('CStudent')->sendReferral();
  });
  Router::register('register', function() {
    GLOBALvarGet('CStudent')->register();
  });
  Router::register('runtests', function() {
    require_once($GLOBALS['dirpre'].'tests/runtests.php');
  });
  Router::register('S3', function() {
    GLOBALvarGet('CS3')->upload();
  });
  Router::register('stats', function() {
    GLOBALvarGet('CJob')->requireLogin();
    GLOBALvarGet('CStats')->update();
    GLOBALvarGet('CStats')->nojobs();
    GLOBALvarGet('CStats')->students();
    GLOBALvarGet('CStats')->missingrecruiter();
    GLOBALvarGet('CStats')->recruiterbydate();
    GLOBALvarGet('CStats')->subletsended2014();
    GLOBALvarGet('CStats')->unknownschools();
    GLOBALvarGet('CStats')->cumulative();
    GLOBALvarGet('CStats')->getMessageParticipants();
  });
  Router::register('team', function() {
    GLOBALvarGet('CApp')->team();
  });
  Router::register('terms', function() {
    GLOBALvarGet('CApp')->terms();
  });
  Router::register('whereto', function() {
    GLOBALvarGet('CStudent')->whereto();
  });

  // Map route to registered functions. Try to have these in alphabetical order,
  // and then in groupings.
  Router::route('/index', 'index');
  Router::route('/', 'index');

  Router::route('/admin/questions', 'admin/questions');

  Router::route('/housing', 'backtoindex');
  Router::route('/housing/index', 'backtoindex');
  Router::route('/jobs', 'backtoindex');
  Router::route('/jobs/index', 'backtoindex');
  Router::route('/hubs', 'backtoindex');
  Router::route('/hubs/index', 'backtoindex');

  Router::route('/changepass', 'changepass');
  Router::route('/confirm', 'confirm');

  Router::route('/housing/editprofile', 'editprofile');

  Router::route('/employers/addcompany', 'employers/addcompany');
  Router::route('/employers/addjob', 'employers/addjob');
  Router::route('/employers/approve', 'employers/approve');
  Router::route('/employers/changepass', 'employers/changepass');
  Router::route('/employers/company', 'employers/company');
  Router::route('/employers/createcustom', 'employers/createcustom');
  Router::route('/employers/deletecustom', 'employers/deletecustom');
  Router::route('/employers/searchcustom', 'employers/searchcustom');
  Router::routeTree('/employers/editapplication', 'employers/editapplication');
  Router::route('/employers/editcompany', 'employers/editcompany');
  Router::route('/employers/editjob', 'employers/editjob');
  Router::route('/employers/editprofile', 'employers/editprofile');
  Router::route('/employers/forgotpass', 'employers/forgotpass');
  Router::route('/employers/home', 'employers/home');
  Router::route('/employers', 'employers/index');
  Router::route('/employers/index', 'employers/index');
  Router::route('/employers/login', 'employers/login');
  Router::route('/employers/loginregister', 'employers/loginregister');
  Router::route('/employers/logout', 'employers/logout');
  Router::route('/employers/profile', 'employers/profile');
  Router::route('/employers/recruiter', 'employers/recruiter');
  Router::route('/employers/register', 'employers/register');

  Router::route('/faq', 'faq');
  Router::route('/feedback', 'feedback');

  Router::route('/forgotpass', 'forgotpass');
  Router::route('/jobs/forgotpass', 'forgotpass');

  Router::route('/graph', 'graph');

  Router::route('/housing/home', 'home');
  Router::route('/jobs/home', 'home');

  Router::route('/housing/search', 'housing/search');
  Router::route('/housing/sublet', 'housing/sublet');
  Router::route('/housing/addsublet', 'housing/addsublet');
  Router::route('/housing/editsublet', 'housing/editsublet');

  Router::route('/hubs/admin', 'hubs/admin');
  Router::route('/hubs/adminapi', 'hubs/adminapi');
  Router::route('/hubs/api', 'hubs/api');
  Router::route('/hubs/hub', 'hubs/hub');
  Router::route('/hubs/start', 'hubs/start');

  Router::routeTree('/jobs/apply', 'jobs/apply');
  // Router::route('/jobs/apply/index', 'index');
  Router::route('/jobs/company', 'jobs/company');
  Router::route('/jobs/editprofile', 'jobs/editprofile');
  Router::route('/employers/job', 'jobs/job');
  Router::route('/jobs/job', 'jobs/job');
  Router::route('/jobs/recruiter', 'jobs/recruiter');
  Router::route('/employers/search', 'jobs/search');
  Router::route('/jobs/search', 'jobs/search');

  Router::route('/login', 'login');
  Router::route('/housing/login', 'login');
  Router::route('/jobs/login', 'login');

  Router::route('/logout', 'logout');
  Router::route('/housing/logout', 'logout');
  Router::route('/jobs/logout', 'logout');

  Router::route('/messagestats', 'messagestats');

  Router::route('/messages', 'messages');
  Router::route('/employers/messages', 'messages');
  Router::route('/housing/messages', 'messages');
  Router::route('/jobs/messages', 'messages');
  Router::route('/newmessage', 'newmessage');
  Router::route('/employers/newmessage', 'newmessage');
  Router::route('/housing/newmessage', 'newmessage');
  Router::route('/jobs/newmessage', 'newmessage');

  Router::route('/migrate', 'migrate');

  Router::route('/privacy', 'privacy');

  Router::route('/redirect', 'redirect');

  Router::route('/refer', 'refer');

  Router::route('/register', 'register');
  Router::route('/housing/register', 'register');
  Router::route('/jobs/register', 'register');

  Router::route('/runtests', 'runtests');

  Router::route('/S3', 'S3');
  Router::route('/employers/S3', 'S3');
  Router::route('/housing/S3', 'S3');

  Router::route('/stats', 'stats');

  Router::route('/team', 'team');

  Router::route('/terms', 'terms');

  Router::route('/whereto', 'whereto');
  Router::route('/housing/whereto', 'whereto');
  Router::route('/jobs/whereto', 'whereto');

  // Perform the routing.
  Router::run();

  require_once($dirpre.'includes/footer.php');
?>