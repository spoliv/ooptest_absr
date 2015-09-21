<?php

include 'view/forms.php';
require_once __DIR__ . '/models/news.php';

    if (isset($_POST['text']) && isset($_POST['title'])) {
        $basa_add->Add_news();
    }