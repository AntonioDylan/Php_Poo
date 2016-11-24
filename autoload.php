<?php
class AutoLoader
{
  static function Register(){
    spl_autoload_register(array(__CLASS__, 'AutoLoad'));
  }

  static function AutoLoad($class_name){
    require 'Entity/' . $class_name .  '.php';
    require 'Service/' . $class_name .  '.php';
  }
}