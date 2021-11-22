<?php
// set routes
$routes = array(
  'home' => array(
    'controller' => 'Users',
    'action' => 'index'
  ),
  'login' => array(
    'controller' => 'Users',
    'action' => 'login'
  ),
  'overview' => array(
    'controller' => 'Users',
    'action' => 'overview'
  )
);

if(empty($_GET['page'])) {
  $_GET['page'] = 'home';
}
if(empty($routes[$_GET['page']])) {
  header('Location: index.php');
  exit();
}

$route = $routes[$_GET['page']];
