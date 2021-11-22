<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../model/User.php';


class UsersController extends Controller {

  public function index() {

    if (!empty($_POST['action'])) {
      if ($_POST['action'] == 'signUp') {
        $signup = new User();
        $signup->name = $_POST['name'];
        $signup->email = $_POST['email'];
        $signup->password = $_POST['password'];
        $errors = User::validate($signup);
        if (empty($errors)) {
          $signup->save();
          header('Location: index.php?' . http_build_query($_GET));
          exit();
        } else {
          $this->set('errors', $errors);
        }
      }
    }

    $this->set('title', 'Home');
  }

  public function overview() {


    $this->set('title', 'Overview');
  }
}
