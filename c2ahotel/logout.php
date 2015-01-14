<?
session_start();
session_destroy();
include 'closeDbConnection.php';
header("location:login.php");
?>