<?php

use \Illuminate\Database\Eloquent\Model;

class User extends Model {
  public $timestamps = false;

  public static function validate($data){
    $errors = [];

    if(empty($data['name'])){
      $errors['name'] = 'Please fill in your name';
    }
    if(empty($data['email'])){
      $errors['email'] = 'Please fill in your email';
    }
    if(empty($data['password'])){
      $errors['password'] = 'Please fill in your password';
    }
    return $errors;
  }

  public function groups(){
    return $this->belongsToMany(Group::class);
  }
}
