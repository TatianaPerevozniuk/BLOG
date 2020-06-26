<?php


class HomeController
{
    public function default()
    {
        $articleRepository = new ArticleRepository();
        $articles = $articleRepository->getAll();
        include  __DIR__.'/../pages/home.php';
    }
}

