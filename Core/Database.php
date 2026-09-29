<?php

class Database
{
  public $connection;

  public function __construct($config)
  {
      $dsn = 'mysql:' . http_build_query([
          'host' => $config['host'],
          'port' => $config['port'],
          'dbname' => $config['dbname'],
          'charset' => $config['charset']
      ], '', ';');

      $this->connection = new PDO(
          $dsn,
          $config['username'],
          $config['password']
      );
  }

  public function query($query, $params = [])
  {
    $statement = $this->connection->prepare($query);

    $statement->execute($params);

    return $statement;
  }
}