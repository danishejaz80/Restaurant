<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model{

  protected $table = "food_order";

  protected $primaryKey = 'order_id';

  protected $fillable = ['order_id', 'user_id', 'order_quantity', 'order_price', 'order_date', 'status', 'payment_method'];

  public function menuItem(){
    return $this->belongsToMany('App\Models\MenuItem', 'order_menu_item', 'order_id', 'menu_item_id')->withPivot('quantity', 'price', 'subtotal', 'options', 'notes');
  }

  public function user(){
    return $this->hasOne('App\Models\User', 'id');
  }

  public function get_user($user_id){
  	$this->hasOne('App\Models\User', 'id');
  	return User::where('id', $user_id)->get();
  }

}
