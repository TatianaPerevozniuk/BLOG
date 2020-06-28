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

$url = trim($_SERVER['REQUEST_URI'], '/');
$parts = explode('/', $url);

$controllerName = $parts[0];
$controllerFullName = ucfirst($controllerName) . 'Controller';
if (!$controllerName) {
    $controller = new HomeController();
} elseif (class_exists($controllerFullName)) {
    $controller = new $controllerFullName();
} else {
    die('controller not found');
}

if (isset($parts[1])) {
    $methodName = $parts[1];
} else {
    $methodName = 'default';
}

if (method_exists($controller, $methodName)) {
    $controller->$methodName();
} else {
    die('method not found');
}
