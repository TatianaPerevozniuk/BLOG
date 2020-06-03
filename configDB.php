<?php

$dbUser = 'root';
$dbPassword = '';
$dbName = 'blog';
$pdo = new PDO("mysql:host=localhost;dbname=$dbName", $dbUser, $dbPassword);