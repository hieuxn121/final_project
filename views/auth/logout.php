<?php 
session_start();
unset($_SESSION['login']);
header("Location:index.php?type=frontend&mod=home&act=index");
 ?>