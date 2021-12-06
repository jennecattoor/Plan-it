<?php
use Illuminate\Database\Capsule\Manager as Capsule;
$capsule = new Capsule;
$capsule->addConnection([
 'driver'    => 'mysql',
 'host'      => getenv('PHP_DB_HOST') ?: 'ID338682_jennecattoorbe.db.webhosting.be',
 'database'  => getenv('PHP_DB_DATABASE') ?: 'ID338682_jennecattoorbe',
 'username'  => getenv('PHP_DB_USERNAME') ?: 'ID338682_jennecattoorbe',
 'password'  => getenv('PHP_DB_PASSWORD') ?: 'J7T35LcCepm7mSA2',
 'charset'   => 'utf8mb4',
 'collation' => 'utf8mb4_unicode_ci',
 'prefix'    => '',
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();
