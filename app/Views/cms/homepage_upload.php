<section>
  <div>
    <ul>
      <a href="<?= url_to('cms/homepage') ?>" class="btn btn-info"><?=lang('Kembali')?></a>
      </ul>
      <form method="post" action="<?= base_url('cms/homepage/upload/save')?>" enctype="multipart/form-data">
      <?= csrf_field(); ?>
        <div class="card-body">
          <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control <?= isset(session('errors')['judul']) && session('errors')['judul'] ? 'is-invalid' : '' ?>" id="judul" placeholder="Judul" name="judul">
            <div class="invalid-feedback">
              <?= (session()->has('errors') && session('errors')['judul']) ? session('errors')['judul'] : ''; ?>
            </div>
          </div>
          <div class="form-group">
            <label for="tagline">Tagline</label>
            <input type="text" class="form-control <?= isset(session('errors')['tagline']) && session('errors')['tagline'] ? 'is-invalid' : '' ?>" id="tagline" placeholder="Tagline" name="tagline">
            <div class="invalid-feedback">
              <?= (session()->has('errors') && session('errors')['tagline']) ? session('errors')['tagline'] : ''; ?>
            </div>
          </div>
          <div class="custom-file">
            <label for="background">Background</label>
            <input type="file" class="form-control <?= isset(session('errors')['background']) && session('errors')['background'] ? 'is-invalid' : '' ?>" id="background" placeholder="Background" name="background" accept="image/*">
            <div class="invalid-feedback">
              <?= (session()->has('errors') && session('errors')['background']) ? session('errors')['background'] : ''; ?>
            </div>
            </div>
        <div class="card-footer">
        <input type="submit" class="btn btn-primary mt-3" value="Submit">
        </div>
        </form>
    </div>
</section>