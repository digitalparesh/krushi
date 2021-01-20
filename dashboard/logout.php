<?php

session_start();
session_unset();

include "./includes/helper.php";
header('Location:'.url('login.php'));

?>
