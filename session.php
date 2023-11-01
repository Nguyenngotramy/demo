<?php 
session_start();
$_SESSION['user'] = 'Nguyenngotramy';
$_SESSION['name'] = 'Tramy234';
echo '<pre>';
print_r($_SESSION['user']);
echo '<pre>';
echo '<pre>';
print_r($_SESSION['name']);
echo '<pre>';


unset($_SESSION['user']);



?>