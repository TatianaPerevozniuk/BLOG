<?php


class ArticleRepository
{
    public function getAll()
    {
        $sql = "SELECT * FROM articles ORDER BY createdAt DESC";
        $articles = DbConnector::getConnection()->query($sql);
        return $articles;
    }
}
