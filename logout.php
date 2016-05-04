<?php
  session_start();
  $_SESSION = array();
  session_destroy();

  setcookie('cookie1', '', strtotime('-2 days'));
  setcookie('cookie2', '', strtotime('-2 days'));
  // etc.
  header('Location: login.php');
  exit();
?>
