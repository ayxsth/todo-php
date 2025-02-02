<?php

include_once "utils.php";
include_once "Database.php";

$config = include_once "config.php";

// Start a session
session_start();

$title = "Register User";

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  // Validate the name
  if (empty($name)) {
    $errors['name'] = "Name is required";
  }

  // Validate the email
  if (empty($email)) {
    $errors['email'] = "Email is required";
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "Email is invalid";
  }

  // Validate the password
  if (empty($password)) {
    $errors['password'] = "Password is required";
  }

  $db = new Database($config["database"]);

  $statement = $db->query("SELECT * FROM users WHERE email = :email", ["email" => $email]);
  $user = $statement->find();

  // Check if the user already exists
  if ($user) {
    header("Location: login.php");

    // Stop the script
    exit();
  }

  // Proceed with registration if there are no errors
  if (empty($errors)) {
    $statement = $db->query("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)", [
      "name" => $name,
      "email" => $email,
      "password" => password_hash($password, PASSWORD_DEFAULT)
    ]);

    $id = $statement->insert();

    // Store the user in the session
    $_SESSION["user"] = [
      "id" => $id,
      "name" => $name,
      "email" => $email
    ];

    // Redirect to the login page
    header("Location: .");

    // Stop the script
    exit();
  }
}

include_once "views/register.view.php";
