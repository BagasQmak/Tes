<div class="col-md-8 mt-3" id="content">
    <h2 class=""><?= $content->title; ?></h2>
    <p><?= $content->username; ?> - <?= date('d F Y', $content->date); ?></p>
    <img src="<?= base_url('assets/img/content/') . $content->coverImage; ?>" class="img-fluid" alt="Responsive image">
    <div class="content mt-3">
        <?= $content->content; ?>
    </div>
</div>