<h2><?= esc($title) ?></h2>

<?php if (session()->getFlashdata('message')): ?>
<div class="alert">
    <?= session()->getFlashdata('message') ?>
</div>
<?php endif ?>

<?php if ($news_list !== []): ?>

<?php foreach ($news_list as $news_item): ?>

<h3><?= esc($news_item['title']) ?></h3>
<div class="main">
    <?= esc($news_item['body']) ?>
</div>
<p><a href="/news/<?= esc($news_item['slug'], 'url') ?>">View Article</a></p>

<?php endforeach; ?>

<?php else: ?>

<h3>No News</h3>
<p>Unable to find news for you</p>

<?php endif; ?>