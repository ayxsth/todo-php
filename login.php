<?php

include 'utils.php';
include 'Database.php';

$title = 'Login';

session_start();

$errors = [];

if (isset($_SESSION['user'])) {
  header('Location: todos.php');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];

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

    $sql = "SELECT * FROM users WHERE email = :email";

    $user = $db->query($sql, [
      'email' => $email
    ])->fetch();

    $isPasswordCorrect = password_verify($password, $user['password']);

    if (!$user || !$isPasswordCorrect) {
      $errors['password'] = 'Email or password is incorrect';
    }

    if (empty($errors)){
      $_SESSION['user'] = [
        'id' => $user['id'],
        'name' => $user['name'],
        'email' => $user['email']
      ];

      header('Location: todos.php');
    }
  }
}

include 'views/login.view.php';
