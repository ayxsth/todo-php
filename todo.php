<?php

include 'Database.php';
include 'utils.php';

$title = "Todo";

$db = new Database();

$statement = $db->query('SELECT * FROM todos WHERE id = ' . $_GET['id']);

$todo = $statement->fetch();

// dd($todo);

include "views/todo.view.php";
