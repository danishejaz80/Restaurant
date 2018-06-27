<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model{

protected $table = 'food_user';

protected $fillable = ['username', 'password', 'email', 'role', 'address', 'phone_number', 'type', 'balance','status','borrow'];

public function setPassword($password){
   $this->update(['password' => password_hash($password, PASSWORD_DEFAULT)]);
 }

 public function order(){
   return $this->hasOne('App\Models\Order', 'order_id');
 }

}
