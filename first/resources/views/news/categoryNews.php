<h1 style="text-align:center"><?= $newsList['category'] ?></h1>
<?php foreach ($newsList['news'] as $key => $new) { ?>
    <a href="/news/category/<?= $newsList[
        'id'
    ] ?>/<?= $key ?>"><div style="border: 1px solid green; margin-top: 30px;">
        <h3><?= $new['title'] ?></h3>
        <p><?= $new['autor'] ?> - <?= $new['created_at'] ?></p>
        <p><?= $new['description'] ?></p>
    </div></a>
<?php } ?>
<div style="text-align:center; margin-top: 50px;">
    <a href="/news/category">Назад</a>
</div><br><br><br>
