<?php

include 'utils.php';
include 'Database.php';

session_start();

$title = "Create Todo";

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $todoTitle = $_POST['title'];
  $description = $_POST['description'];

  if (empty($todoTitle)) {
    $errors['title'] = 'Title is required';
  }

  if (empty($description)) {
    $errors['description'] = 'Description is required';
  }

  if (empty($errors)) {
    $db = new Database();

    $sql = "INSERT INTO todos (title, description, created_by) VALUES (:title, :description, :createdBy)";

    $statement = $db->query($sql, [
      'title' => $todoTitle,
      'description' => $description,
      'createdBy' => $_SESSION['user']['id'],
    ]);

    header('Location: todos.php');
  }
}


include "views/todo-create.view.php";
