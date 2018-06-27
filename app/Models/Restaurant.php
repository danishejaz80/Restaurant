<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model{

  protected $table = "food_restaurant";

  protected $fillable = ['name', 'description', 'address', 'phone', 'email', 'opening_time', 'closing_time'];

}
