<?php

require_once __DIR__ . '/models/news.php';

if(isset($_GET['id']))
{
    $article = $basa_one->One_news();
}
include 'view/article.php';