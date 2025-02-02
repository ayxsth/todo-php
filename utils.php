<?php

function dd($data) {
  echo "<pre>";
  print_r($data);
  echo "</pre>";

  die();
}

function authenticate() {
  // Check if the user is not logged in
  if (!isset($_SESSION["user"])) {
    header("Location: login.php");

    // Stop the script
    exit();
  }
}
