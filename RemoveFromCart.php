<?php
  require_once 'autoloader.php';
  session_start();
    error_reporting(0);
  
  $Cart = new Cart;
  $Cart->RemoveFromCart($a);            

