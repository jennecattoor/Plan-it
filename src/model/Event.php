<?php

use \Illuminate\Database\Eloquent\Model;

class Event extends Model {

  public $timestamps = false;

  public static function validate($data){
    $errors = [];

    if(empty($data['name'])){
      $errors['eventName'] = 'Please fill in the event name';
    }
    if(empty($data['description'])){
      $errors['eventDesc'] = 'Please fill in the event description';
    }
    if(empty($data['location'])){
      $errors['eventLocation'] = 'Please fill in the event location';
    }
    if(empty($data['date'])){
      $errors['eventDate'] = 'Please fill in the event date';
    }
    return $errors;
  }

  public function groups(){
    return $this->belongsToMany(Group::class);
  }

  public function items(){
    return $this->belongsToMany(Item::class);
  }

}
