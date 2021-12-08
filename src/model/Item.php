<?php

use \Illuminate\Database\Eloquent\Model;

class Item extends Model {
  public $timestamps = false;

  public function events(){
    return $this->belongsToMany(Event::class);
  }

  public function users(){
    return $this->belongsToMany(User::class);
  }
}
