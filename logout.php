<?php

include "utils.php";

// Start a session
session_start();

authenticate();

// Unset and destroy the session
session_unset();
session_destroy();

// Redirect to the login page
header("Location: .");

// Stop the script
exit();
