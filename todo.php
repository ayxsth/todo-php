<?php

include_once "utils.php";
include_once "Database.php";

// Start a session
session_start();

authenticate();

$config = include_once "config.php";

$title = "Todo";

$todoId = $_GET["id"];

if (!is_numeric($todoId)) {
  die("Invalid todo ID");
}

$db = new Database($config["database"]);

$query = "SELECT * FROM todos WHERE created_by = :created_by AND id = :id";

$todo = $db->query($query, ["created_by" => $_SESSION['user']['id'], "id" => $todoId])->find();

include_once "views/todo.view.php";
