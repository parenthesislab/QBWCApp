<?php

$dbhost = $_SERVER['RDS_HOSTNAME'];
$dbport = $_SERVER['RDS_PORT'];
$dbname = $_SERVER['RDS_DB_NAME'];
$dbUsername = $_SERVER['RDS_USERNAME'];
$dbPassword = $_SERVER['RDS_PASSWORD'];

// * MAKE SURE YOU CHANGE THE DATABASE CONNECTION STRING BELOW TO A VALID MYSQL USERNAME/PASSWORD/HOSTNAME *
$dsn = "mysql://{$dbUsername}:{$dbPassword}@{$dbhost}/{$dbname}";