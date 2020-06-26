<?php

require 'DbConnector.php';

$sql = "CREATE TABLE articles (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(255) NOT NULL,
text TEXT NOT NULL,
createdAt TIMESTAMP NOT NULL)";
$result = DbConnector::getConnection()>query($sql);
if($result)
{
    echo "Создание таблицы прошло успешно";
}
