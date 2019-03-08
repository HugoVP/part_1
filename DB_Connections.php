<?php

  require_once(__DIR__ . '/MySQL_PDO.php');

  class DB_Connections {
    public function __construct($config_file = __DIR__ . '/config.json') {
      try {
        $content = file_get_contents($config_file);
      } catch (Exception $e) {
        print($e->getMessage());
      }

      $configs = json_decode($content, TRUE);
      
      foreach ($configs['connections'] as $key => $connection) {
        $this->{$key} = new MySQL_PDO($connection);
      }
    }
  }