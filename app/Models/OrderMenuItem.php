<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderMenuItem extends Model{

  protected $table = "order_menu_item";

  protected $fillable = ['order_id', 'menu_item_id', 'quantity', 'price', 'subtotal', 'options', 'notes'];
  

}