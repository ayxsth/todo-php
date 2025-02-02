<?php

include 'utils.php';
include 'Database.php';

session_start();

$title = 'Register User';

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  if (empty($name)) {
    $errors['name'] = 'Name is required';
  }

  if (empty($email)) {
    $errors['email'] = 'Email is required';
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Email is invalid';
  }

  if (empty($password)) {
    $errors['password'] = 'Password is required';
  } elseif (strlen($password) < 6) {
    $errors['password'] = 'Password must be at least 6 characters';
  }

  if (empty($errors)) {
  $db = new Database();

    $sql = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";

    $id = $db->insert($sql, [
      'name' => $name,
      'email' => $email,
      'password' => password_hash($password, PASSWORD_BCRYPT)
    ]);

    $_SESSION['user'] = [
      'id' => $id,
      'name' => $name,
      'email' => $email
    ];

    header('Location: todos.php');
  }
}

include 'views/register.view.php';
