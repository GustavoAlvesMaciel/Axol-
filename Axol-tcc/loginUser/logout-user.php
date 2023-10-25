<?php

session_start();
unset($_SESSION["autorizacao"]);
session_destroy();
header("Location: entrar-user.php");

?>
