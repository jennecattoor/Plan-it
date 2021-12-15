<?php

use \Illuminate\Database\Eloquent\Model;

class Item extends Model {
  public $timestamps = false;

  public static function validate($data){
    $errors = [];

    if(empty($data['name'])){
      $errors['addItem'] = 'Please fill in a necessity';
    }
    return $errors;
  }

  public function events(){
    return $this->belongsToMany(Event::class);
  }

  public function users(){
    return $this->belongsToMany(User::class);
  }
}
