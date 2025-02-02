<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['user'])) {
  session_destroy();

  header('Location: .');

  exit;
}
