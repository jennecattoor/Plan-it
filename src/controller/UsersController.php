<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../model/User.php';
require_once __DIR__ . '/../model/Group.php';


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

  public function login() {

    if (!empty($_POST['action'])) {
      if ($_POST['action'] == 'logIn') {
        $errors = [];
        if (empty($_POST['emailLogin'])) {
          $errors['emailLogin'] = 'Please fill in your email';
        }

        if (empty($_POST['passwordLogin'])) {
          $errors['passwordLogin'] = 'Please fill in your password';
        }
        $this->set('errors', $errors);

        if (empty($errors)) {
          $user = User::where('email', $_POST['emailLogin']);
          if ($user->exists() && $user->first()->password == $_POST['passwordLogin']){
            $_SESSION['valid'] = true;
            $_SESSION['name'] = $user->first()->name;
            $_SESSION['id'] = $user->first()->id;
            header('Location: index.php?page=overview');
            exit();
          }
        }
      }
    }

    $this->set('title', 'Login');
  }

  public function overview() {
    $user = User::find($_SESSION['id']);

    $this->set('user', $user);
    $this->set('title', 'Overview');
  }

  public function createGroup() {

    if (!empty($_POST['action'])) {
      if ($_POST['action'] == 'createGroup') {
        $createGroup = new Group();
        $createGroup->name = $_POST['groupName'];
        $createGroup->description = $_POST['groupDesc'];
        $errors = Group::validate($createGroup);
        if (empty($errors)) {
          $createGroup->save();
          header('Location: index.php?' . http_build_query($_GET));
          exit();
        } else {
          $this->set('errors', $errors);
        }
      }
    }

    $this->set('title', 'Create Group');
  }

  public function group() {


    $this->set('title', 'Group Details');
  }
}
