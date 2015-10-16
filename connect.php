<?php

$connection = mysql_connect("localhost", "root", "akirachix") or die(mysql_errno().' - '.mysql_error()); // Establishing Connection with Server
mysql_select_db("sony", $connection); // Selecting Database from Server
?>