<?php

require 'config.php';
require 'functions.php';
require 'Database.php';
require 'Model.php';
require 'Controller.php';
require 'App.php';

<<<<<<< HEAD
spl_autoload_register(function ($class_name) {

    require '../app/models/' . $class_name . '.php';
=======
spl_autoload_register(function ($class_name){
  
  require '../app/models/' . $class_name . '.php';
>>>>>>> 8241826c17a394fa2a0feee0ef50a5b46c3adb1f
});