<h2><?= esc($news['title']) ?></h2>
<p><?= esc($news['body']) ?></p>

<p>
    <a href="/news/edit/<?= esc($news['slug'], 'url') ?>">Edit Article</a> |
    <form action="/news/<?= esc($news['slug'], 'url') ?>" method="post" style="display: inline;">
        <?= csrf_field() ?>
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit" onclick="return confirm('Are you sure you want to delete this article?');">Delete Article</button>
    </form>
</p>