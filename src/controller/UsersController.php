<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../model/User.php';


class UsersController extends Controller {

  public function index() {
    // this should refer to a database query, a hard-coded object is used for demo purposes
    $users = User::all();

    //$demos = array(new Demo('first item'), new Demo('second item'), new Demo('last item'));
    $this->set('users',$users);

  }
}
