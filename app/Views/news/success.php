<h2>News item created successfully!</h2>

<p>Redirecting to news list in 3 seconds...</p>

<p><a href="/news">Click here if you are not redirected automatically</a></p>

<script>
setTimeout(function() {
    window.location.href = '<?= base_url('news') ?>';
}, 3000);
</script>