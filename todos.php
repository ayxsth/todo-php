<?php

include_once "utils.php";
include_once "Database.php";

$config = include_once "config.php";

$title = "Todos";

$db = new Database($config["database"]);

$query = "SELECT * FROM todos WHERE created_by = :created_by";

$todos = $db->query($query, ["created_by" => 1])->get();

include_once "views/todos.view.php";
