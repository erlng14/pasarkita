<section>
  <div>
    <ul>
      <a href="<?= url_to('cms/homepage') ?>" class="btn btn-info"><?=lang('Kembali')?></a>
      </ul>
      <form method="post" action="<?= base_url('cms/homepage/update/save')?>" enctype="multipart/form-data">
      <?= csrf_field(); ?>
      <input type="hidden" name="id" value="<?=$home->id ?>">
        <div class="card-body">
          <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" id="judul" placeholder="Judul" name="judul" value="<?= $home->judul;?>" required>
          </div>
          <div class="form-group">
            <label for="tagline">Tagline</label>
            <input type="text" class="form-control" id="tagline" placeholder="Tagline" name="tagline" value="<?= $home->tagline;?>" required>
          </div>
          <div class="custom-file">
            <label for="background">Background</label>
            <input type="file" class="form-control mb-5" id="background" placeholder="Background" name="background" accept="image/*">
            <img src="<?= base_url('img/background/') . $home->background; ?>" width="100">
            </div>
        <div class="card-footer mt-5">
        <input type="submit" class="btn btn-primary mt-3" value="Submit">
        </div>
        </form>
    </div>
</section>