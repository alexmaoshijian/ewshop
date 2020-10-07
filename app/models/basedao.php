<?php
  namespace models;

  use Medoo\Medoo;

  class BaseDao extends Medoo {
    function __construct(){
      $options = [
        'database_type' => 'mysql',
        'database_name' => DBNAME,
        'server' => SERVERNAME,
        'port' => PORT,
        'username' => USERNAME,
        'password' => PASSWORD,
        'prefix' => PREFIX
      ];
      parent::__construct($options);
    }
  }
