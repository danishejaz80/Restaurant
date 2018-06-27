<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model{

  protected $table = "food_complaint";

  protected $primaryKey = 'complaint_id';

  protected $fillable = ['complaint_id', 'user_id', 'name', 'complain'];

  public function user($user_id){
  	
    return $this->hasOne('App\Models\User', 'id');
  }

  public function get_complaint_user($user_id){
  	$this->hasOne('App\Models\User', 'id');
  	return User::where('id', $user_id)->get();
  }

}
