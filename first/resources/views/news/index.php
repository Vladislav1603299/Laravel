<h1 style="text-align:center">Категории:</h1>
<?php foreach ($category as $keyCategory => $categoryNews) { ?>
    <div>
        <a href="/news/category/<?= $keyCategory ?>"><p style="text-align:center"><?= $categoryNews[
    'category'
] ?></p></a>
    </div>
<?php } ?>
<div style="text-align:center; margin-top: 100px;">
    <a href="/news">Назад</a>
</div>
