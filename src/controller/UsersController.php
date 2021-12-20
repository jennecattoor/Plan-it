<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../model/User.php';
require_once __DIR__ . '/../model/Group.php';
require_once __DIR__ . '/../model/Event.php';
require_once __DIR__ . '/../model/Item.php';

function izrand($length = 6) {

  $random_string="";
    while(strlen($random_string)<$length && $length > 0) {
        $randnum = mt_rand(0,61);
          $random_string .= ($randnum < 10) ?
            chr($randnum+48) : ($randnum < 36 ?
                hr($randnum+55) : $randnum+61);
    }
    return $random_string;
}

function dateFormat($dateString) {
  $myDateTime = DateTime::createFromFormat('Y-m-d', $dateString);
  $newDateString = $myDateTime->format('d M Y');
  return $newDateString;
}


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

    $_SESSION['valid'] = false;
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

      if(!empty($_POST['action'])){
      if($_POST['action'] === 'joinGroup'){
        $group = Group::where('code', $_POST['code']);
          if ($group->exists()) {
            $groupnew = $group->first()->id;

            foreach ($user->groups as $group) {
              $checkingGroup = $group->pivot->group_id;
            }

            if($user->groups->first()->pivot->user_id == $_SESSION['id'] && $checkingGroup == $groupnew){
              header('Location: index.php?page=overview');
              exit();
            }

            else {
              $user->groups()->attach($groupnew);
              header('Location: index.php?page=overview');
              exit();
            }
        }
      }
    }

    $this->set('user', $user);
    $this->set('title', 'Overview');
  }

  public function createGroup() {
    $user = User::find($_SESSION['id']);

    if (!empty($_POST['action'])) {
      if ($_POST['action'] == 'createGroup') {
        $createGroup = new Group();
        $createGroup->name = $_POST['groupName'];
        $createGroup->description = $_POST['groupDesc'];
        $createGroup->color = $_POST['groupColor'];
        $createGroup->code = $groupCode = izrand();
        $errors = Group::validate($createGroup);
        if (empty($errors)) {
          $createGroup->save();
          $group = Group::where('code', $groupCode);
          $groupnew = $group->first()->id;
          $user->groups()->attach($groupnew);
          header('Location: index.php?page=overview');
          exit();
        } else {
          $this->set('errors', $errors);
        }
      }
    }

    $this->set('title', 'Create Group');
  }

  public function group() {
    if(!empty($_GET['id'])) {
      $group = Group::find($_GET['id']);
    }
    if(empty($group)){
      header('Location:index.php');
      exit();
    }

    $this->set('group', $group);
    $this->set('title', 'Group Details');
  }

  public function createEvent() {
    $group = Group::find($_GET['id']);

    if (!empty($_POST['action'])) {
      if ($_POST['action'] == 'createEvent') {
        $createEvent = new Event();
        $createEvent->name = $_POST['eventName'];
        $createEvent->description = $_POST['eventDesc'];
        $createEvent->location = $_POST['eventLocation'];
        $createEvent->date = $_POST['eventDate'];
        $errors = Event::validate($createEvent);
        if (empty($errors)) {
          $createEvent->save();
          $event = Event::where('name', $_POST['eventName'])->where('description', $_POST['eventDesc'])->where('location', $_POST['eventLocation']);
          $eventnew = $event->first()->id;
          $group->events()->attach($eventnew);
          header('Location: index.php?page=group&id=' . $_GET['id']);
          exit();
        } else {
          $this->set('errors', $errors);
        }
      }
    }

    $this->set('title', 'Create Event');
  }

  public function eventChange() {
    if(!empty($_GET['id'])){
      $event = Event::find($_GET['id']);
    }
    if(empty($event)){
      header('Location:index.php?page=overview');
      exit();
    }

    if (!empty($_POST['action'])) {
      if ($_POST['action'] == 'eventChange') {
        $event->name = $_POST['eventName'];
        $event->description = $_POST['eventDesc'];
        $event->location = $_POST['eventLocation'];
        $event->date = $_POST['eventDate'];
        $errors = Event::validate($event);
        if (empty($errors)) {
          $event->save();
          header('Location: index.php?page=event&id=' . $_GET['id']);
          exit();
        } else {
          $this->set('errors', $errors);
        }
      }
    }

    $this->set('event', $event);
    $this->set('title', 'Change event');
  }

  public function event() {
    if(!empty($_GET['id'])) {
      $event = Event::find($_GET['id']);
      $user = User::find($_SESSION['id']);
    }
    if(empty($event)){
      header('Location:index.php');
      exit();
    }

    if (!empty($_POST['action'])) {
      if ($_POST['action'] == 'necessity') {
        $createItem = new Item();
        $createItem->name = $_POST['addItem'];
        $errors = Item::validate($createItem);
        if (empty($errors)) {
          $createItem->save();
          $item = Item::where('name', $_POST['addItem']);
          $itemnew = $item->first()->id;
          $event->items()->attach($itemnew);
          header('Location: index.php?' . http_build_query($_GET));
          exit();
        } else {
          $this->set('errors', $errors);
        }
      }
    }

    if(!empty($_POST['action'])){
      if($_POST['action'] === 'doItem'){
        $item = $_POST['itemID'];
        $user->items()->attach($item);
        header('Location: index.php?' . http_build_query($_GET));
        exit();
      }
    }

    if(!empty($_POST['action'])){
      if($_POST['action'] === 'deleteItem'){
        $item = $_POST['itemID'];
        $user->items()->detach($item);
        header('Location: index.php?' . http_build_query($_GET));
        exit();
      }
    }

    $this->set('user', $user);
    $this->set('event', $event);
    $this->set('title', 'Event');
  }
}
