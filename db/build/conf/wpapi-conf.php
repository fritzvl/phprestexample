<?php
// This file generated by Propel 1.6.7 convert-conf target
// from XML runtime conf file /home/bogdan/Source/wp-api/db/runtime-conf.xml
$conf = array (
  'datasources' => 
  array (
    'wpapi' => 
    array (
      'adapter' => 'mysql',
      'connection' => 
      array (
        'dsn' => 'mysql:host=localhost;dbname=wordpress',
        'user' => 'root',
        'password' => '123456',
      ),
    ),
    'default' => 'wpapi',
  ),
  'generator_version' => '1.6.7',
);
$conf['classmap'] = include(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'classmap-wpapi-conf.php');
return $conf;