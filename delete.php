<?php
include 'database/connection.php';
session_start();
$database = new Database();
$deletedid = $_GET['id'];
$database->DeleteNote($deletedid);


?>