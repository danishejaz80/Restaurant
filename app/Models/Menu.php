<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model{

  protected $table = "food_menu_category";

  protected $fillable = ['menu_name', 'menu_image','status'];

}
