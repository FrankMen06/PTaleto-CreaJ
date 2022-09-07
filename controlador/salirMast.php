<?php
  session_start();

  session_destroy();
  header("Location: ../vista/loginMast.php");
  sleep(1);
  exit;
?>