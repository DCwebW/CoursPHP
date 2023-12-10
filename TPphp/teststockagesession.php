<?php

session_start();

$test = 4550;
$_SESSION["newsession"]= $test;



echo $_SESSION["newsession"];
?>