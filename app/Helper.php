<?php

namespace App;

class Helper{

  public function getIntArraysFromString($values){
    $string_array = explode(":", $values);
    return $string_array;
 }

}