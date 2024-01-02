<section>
  <div>
    <ul>
      <a href="<?= url_to('cms/about') ?>" class="btn btn-info"><?=lang('Kembali')?></a>
      </ul>
      <form method="post" action="<?= base_url('cms/about/update/save')?>" enctype="multipart/form-data">
      <?= csrf_field(); ?>
        <input type="hidden" name="id" value="<?=$about->id ?>">
        <div class="card-body">
          <div class="form-group">
            <label for="visi">Visi</label>
            <input type="text" class="form-control" id="visi" placeholder="Visi" name="visi" value="<?=$about->visi?>">
          </div>
          <div class="custom-file">
            <label for="foto">Foto</label>
            <input type="file" class="form-control mb-5" id="foto" placeholder="Foto" name="foto">
            <img src="<?= base_url('img/about/') . $about->foto; ?>" width="100">
          </div>
          <div class="form-group mt-5">
            <label for="deskripsi">Deskripsi</label>
            <input type="text" class="form-control " id="deskripsi" placeholder="Deskripsi" name="deskripsi" value="<?= $about->deskripsi; ?>">
          </div>
        </div>
        <div class="card-footer">
        <input type="submit"  class="btn btn-primary" value="Submit">
        </div>
        </form>
    </div>
</section>