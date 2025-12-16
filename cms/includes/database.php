<?php

$connect = mysqli_connect('YOUR_DB_HOST', 'YOUR_DB_USERNAME', 'YOUR_DB_PASSWORD', 'YOUR_DB_NAME');

if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}