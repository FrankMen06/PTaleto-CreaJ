<?php
  session_start();

  session_destroy();
  header("Location: ../vista/loginEst.php");
  sleep(1);
  exit;
?>