<?php

require 'DbConnector.php';
require 'controllers/HomeController.php';
require 'repositories/ArticleRepository.php';
//if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//    $articleTitle = trim($_POST['title']);
//    $articleText = $_POST['text'];
//    $createdAt = date('Y-m-d H:i:s');
//    if (!$articleTitle or !$articleText) {
//        $error = 'Error: Empty field.';
//    } else {
//        $result = DbConnector::getConnection()->query("INSERT INTO articles (title, text, createdAt) VALUES ('$articleTitle','$articleText','$createdAt')");
//        if (!$result) {
//            echo 'Information not entered into the database';
//        }
//    }
//}
//


$controllerObject = new HomeController();
$controllerObject ->default();


