<?php
session_start();
ob_start();
unset($_SESSION["user"]);
session_unset();
header("Location:index.php");