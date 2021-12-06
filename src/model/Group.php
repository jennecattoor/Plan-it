<?php

use \Illuminate\Database\Eloquent\Model;

class Group extends Model {

  public $timestamps = false;

  public static function validate($data){
    $errors = [];

    if(empty($data['name'])){
      $errors['groupName'] = 'Please fill in the group name';
    }
    if(empty($data['description'])){
      $errors['groupDesc'] = 'Please fill in the group description';
    }
    if(empty($data['code'])){
      $errors['code'] = 'Please fill in the group description';
    }
    return $errors;
  }

  public function users(){
    return $this->belongsToMany(User::class);
  }

  public function events(){
    return $this->belongsToMany(Event::class);
  }
}
