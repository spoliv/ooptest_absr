<?php
    require_once __DIR__ . '/models/news.php';
    $news = $basa_all -> All_news();
    include 'view/index.php';
    /*include 'view/forms.php';*/
