<?php


class HomeController
{
    public $setArticles;
    public function __construct()
    {
        $sql = "SELECT * FROM articles ORDER BY createdAt DESC";
        $setArticles = DbConnector::getConnection()->query($sql);
        include '../pages/home.php';
    }
}