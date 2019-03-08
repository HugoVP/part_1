<?php

  class MySQL_PDO extends PDO {
    public function __construct($config) {
      $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['database']}";
      $user = $config['username'];
      $password = $config['password'];
      
      parent::__construct($dsn, $user, $password);
    }
  }