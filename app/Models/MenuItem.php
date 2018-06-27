<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model{

protected $table = "food_menu_item";

protected $primaryKey = 'menu_item_id';

protected $fillable = ['menu_id', 'item_name', 'description', 'item_picture', 'item_price', 'item_quantity', 'item_options','status'];

public function menuRelationship(){
  return $this->belongsTo('App\Models\Menu', 'menu_id', 'menu_id');
}

public function order(){
  return $this->belongsToMany('App\Models\Order', 'order_menu_item', 'order_id', 'menu_item_id')->withPivot('quantity', 'price', 'subtotal', 'options', 'notes');
}

}
