<?php

  require_once(__DIR__ . '/../DB_Connections.php');

  $config_file = __DIR__ . '/../config.json';

  $db_connections = new DB_Connections($config_file);

  $statement_1 = $db_connections->default->query('SELECT 1');
  print_r($statement_1->fetchAll());

  $statement_2 = $db_connections->secondary->query('SELECT 1');
  print_r($statement_2->fetchAll());

