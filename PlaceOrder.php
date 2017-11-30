<?php
  require_once 'autoloader.php';
  session_start();
    error_reporting(0);
  
  $Order = new Order;
  $Order->PlaceOrder($a);            

