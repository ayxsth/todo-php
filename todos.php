<?php

include 'Database.php';
include 'utils.php';

$title = 'Todos';

$db = new Database();

session_start();

if (!isset($_SESSION['user'])) {
  header('Location: login.php');
}


// Create a new PDOStatement instance to prepare the SQL query
$statement = $db->query('SELECT * FROM todos WHERE created_by = :createdBy', [
  'createdBy' =>  $_SESSION['user']['id'],
]);

// Fetch all the results
$todos = $statement->fetchAll();

// Dumps the values of the variables and stop the server
// dd($todos);

include "views/todos.view.php";
