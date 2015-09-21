<?php
    require_once __DIR__ . '/../classes/classArticle.php';

    $basa_all = new News('localhost', 'root', '', 'test');

    $basa_all -> table = "SELECT * FROM news";

    $basa_add = new News('localhost', 'root', '', 'test');

    $tit = $_POST['title'];

    $txt = $_POST['text'];

    $basa_add->table = "INSERT INTO news(title, text) VALUES ('$tit', '$txt')";


    $basa_one = new News('localhost', 'root', '', 'test');

    $id = $_GET['id'];

    $basa_one->table = "SELECT*FROM news WHERE id = $id";

