<div style="border: 1px solid green; margin-top: 30px;">
    <h2><?= $news['title'] ?></h2>
    <p><?= $news['autor'] ?> - <?= $news['created_at'] ?></p>
    <p><?= $news['description'] ?></p>
</div>
<div style="text-align:center; margin-top: 100px;">
    <a href="/news/category/<?= $news['id'] ?>">Назад</a>
</div>