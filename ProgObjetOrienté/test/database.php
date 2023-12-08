<?php
$connect = mysqli_connect("localhost","root","","db1");
// $query = "CREATE DATABASE `db1`";
// mysqli_query($connect, $query);// création d'une base de données , lancer cette page pour finaliser la création 
$query = "CREATE TABLE `users` (
    `user_id` int(11) NOT NULL,
    `name` varchar(50) NOT NULL,
    `email` varchar(50) NOT NULL,
    `password` varchar(100) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";
  mysqli_query($connect, $query);
?>