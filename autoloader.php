<?php
spl_autoload_register ('autoloadAbsClass');
spl_autoload_register ('autoloadClass');
spl_autoload_register ('autoloadInterface');


function autoloadAbsClass ()
{
  $AbsClassDir = (__DIR__  .  DIRECTORY_SEPARATOR  . abstractclasses);
  $AbsClfiles = scandir($AbsClassDir);
  foreach ($AbsClfiles as $index => $filetype) 
  {
    If  (strrpos($filetype, 'php')) {$AbsClassFiles[]= $filetype;}
  }
  
  foreach ($AbsClassFiles as $AbsclassName)
  {
    $Absclass = __DIR__.DIRECTORY_SEPARATOR.abstractclasses.DIRECTORY_SEPARATOR.$AbsclassName;
    include_once $Absclass;
  }
}

function autoloadClass ()
{
  $ClassDir = (__DIR__  .  DIRECTORY_SEPARATOR  . classes);
  $Clfiles = scandir($ClassDir);
  foreach ($Clfiles as $index => $filetype) 
  {
    If  (strrpos($filetype, 'php')) {$ClassFiles[]= $filetype;}
  }
  
  foreach ($ClassFiles as $className)
  {
    $class = __DIR__.DIRECTORY_SEPARATOR.classes.DIRECTORY_SEPARATOR. $className;
    include_once $class;

  }
}

function autoloadInterface ()
{
  $InterfaceDir = (__DIR__  .  DIRECTORY_SEPARATOR  . interfaces);
  $Infiles = scandir($InterfaceDir);
  foreach ($Infiles as $filetype) 
  {
    If  (strrpos($filetype, 'php')) {$InterfaceFiles[]= $filetype;}
  }
  
  foreach ($InterfaceFiles as  $InterfaceName)
  {
    $interface = __DIR__.DIRECTORY_SEPARATOR.interfaces.DIRECTORY_SEPARATOR.$InterfaceName;
    include_once $interface;
  }
}
autoloadAbsClass ();
autoloadInterface ();
autoloadClass ();