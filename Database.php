<?php

class Database {
  private $connection; // Database connection
  private $dsn = 'mysql:host=localhost;dbname=new;port=3306'; // DSN: Data Source Name
  private $username = 'root'; // Database username
  private $password = ''; // Database password
  private $options = [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Return an array indexed by column name as returned in your result set
  ]; // Connection options

  public function __construct() {
    // Create a new PDO instance to connect to the database
    $this->connection = new PDO($this->dsn, $this->username, $this->password, $this->options);
  }

  public function query($sql, $params = []) {
    $statement = $this->connection->prepare($sql);
    $statement->execute($params);

    return $statement;
  }

  public function insert($sql, $params = []) {
    $statement = $this->connection->prepare($sql);
    $statement->execute($params);

    return $this->connection->lastInsertId();
  }
}
