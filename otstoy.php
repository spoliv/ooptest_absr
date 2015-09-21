
<a href="<?=$article['text'];?>" target="_blank">
        <?=$article['title'];?>
</a>

<?php foreach ($news as $article): ?>
    <li>
        <a href="<?=$article['text'];?>" target="_blank">
            <?=$article['title'];?>
        </a>
    </li>
<?php endforeach; ?>