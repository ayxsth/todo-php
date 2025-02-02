<?php

include "utils.php";
include "Database.php";

$config = include "config.php";

// Start the session
session_start();

$title = "Login";

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Validate the email
  if (empty($email)) {
    $errors['email'] = "Email is required";
  }

  // Validate the password
  if (empty($password)) {
    $errors['password'] = "Password is required";
  }

  if (empty($errors)) {
    $db = new Database($config['database']);
    $user = $db->query("SELECT * FROM users WHERE email = :email", [':email' => $email])->find();
    $isPasswordCorrect = password_verify($password, $user['password'] ?? '');

    // If the user exists and the password is correct
    if ($user && $isPasswordCorrect) {
      $_SESSION['user'] = [
        'id' => $user['id'],
        'email' => $user['email'],
        'name' => $user['name'],
      ];

      header("Location: .");
    } else {
      $errors['credentials'] = "Invalid credentials";
    }
  }
}

include_once "views/login.view.php";
