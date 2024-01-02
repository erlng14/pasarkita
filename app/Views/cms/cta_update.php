<section>
  <div>
    <ul>
      </ul>
      <form method="post" action="<?= base_url('cms/cta/update/save')?>" enctype="multipart/form-data">
      <?= csrf_field(); ?>
        <input type="hidden" name="id" value="<?= $cta->id ?>">
        <div class="card-body">
          <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" id="judul" placeholder="Judul" name="judul" value="<?= $cta->judul; ?>">
          </div>
          <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <input type="text" class="form-control" id="deskripsi" placeholder="Deskripsi" name="deskripsi" value="<?= $cta->deskripsi; ?>">
          </div>
            <div class="form-group">
              <label for="link">Link</label>
              <input type="text" class="form-control" id="link" placeholder="Link" name="link" value="<?= $cta->link; ?>" required>
            </div>
        </div>
        <div class="card-footer">
        <input type="submit" class="btn btn-primary" value="Submit">
        </div>
        </form>
    </div>
</section>