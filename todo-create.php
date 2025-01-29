<?php

include_once "utils.php";
include_once "Database.php";

$config = include_once "config.php";

$title = "Create Todo";

// Check if the form has been submitted and the request method is POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $title = $_POST["title"];
  $description = $_POST["description"];
  $completed = $_POST["completed"] ?? 0;

  $db = new Database($config["database"]);

  $query = "INSERT INTO todos (title, description, completed, created_by) VALUES (:title, :description, :completed, :createdBy)";

  $id = $db->query($query, [
    "title" => $title,
    "description" => $description,
    "completed" => $completed,
    "createdBy" => 1
  ])->insert();

  header("Location: todo.php?id=$id");
}

// Show the form if the request method is not POST
include_once "views/todo-create.view.php";
