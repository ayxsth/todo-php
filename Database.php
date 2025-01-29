<?php

class Database {
  private $connection; // PDO instance
  private $statement; // PDOStatement instance

  public function __construct($config, $username = 'root', $password = '') {
    $dsn = 'mysql:' . http_build_query($config, '', ';'); // Converts an associative array to a query string

    $this->connection = new PDO($dsn, $username, $password, [
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Fetches an associative array
    ]);
  }

  public function query($sql, $params = []) {
    $this->statement = $this->connection->prepare($sql);
    $this->statement->execute($params);

    return $this; // Returns the Database instance
  }

  public function get() {
    return $this->statement->fetchAll(); // Returns an array of rows
  }

  public function find() {
    return $this->statement->fetch(); // Returns a single row
  }

  public function insert() {
    return $this->connection->lastInsertId(); // Returns the ID of the last inserted row
  }

  public function update() {
    return $this->statement->rowCount(); // Returns the number of affected rows
  }

  public function delete() {
    return $this->statement->rowCount(); // Returns the number of affected rows
  }
}
