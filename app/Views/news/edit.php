<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="/news/<?= esc($news['slug'], 'url') ?>" method="post">
    <?= csrf_field() ?>
    <input type="hidden" name="_method" value="PUT">

    <label for="title">Title</label>
    <input type="text" name="title" value="<?= esc($news['title']) ?>">
    <br>

    <label for="body">Text</label>
    <textarea name="body" cols="45" rows="4"><?= esc($news['body']) ?></textarea>
    <br>
    <br>

    <input type="submit" value="Update news item" name="submit">
</form>