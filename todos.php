<?php

include_once "utils.php";
include_once "Database.php";

// Start a session
session_start();

authenticate();

$config = include_once "config.php";

$title = "Todos";

$db = new Database($config["database"]);

$query = "SELECT * FROM todos WHERE created_by = :created_by";

$todos = $db->query($query, ["created_by" => $_SESSION['user']['id']])->get();

include_once "views/todos.view.php";
