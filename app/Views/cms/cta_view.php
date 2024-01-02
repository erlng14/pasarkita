<section>
  <div>
    <ul>
      </ul>
      <form method="post" action="<?= base_url('cms/cta/save')?>" enctype="multipart/form-data">
      <?= csrf_field(); ?>
      <?php foreach($list_cta as $key => $value): ?>
        <input type="hidden" name="id" value="<?= $value['id'] ?>" required>
        <div class="card-body">
          <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" id="judul" placeholder="Judul" name="judul" value="<?=$value['judul'] ?>" required>
          </div>
          <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <input type="text" class="form-control" id="deskripsi" placeholder="Deskripsi" name="deskripsi" value="<?=$value['deskripsi'] ?>" required>
          </div>
            <div class="form-group">
              <label for="link">Link</label>
              <input type="text" class="form-control" id="link" placeholder="Link" name="link" value="<?=$value['link'] ?>" required>
            </div>
        </div>
        <div class="card-footer">
        <input type="submit" class="btn btn-primary" value="Submit">
        </div>
        <?php endforeach; ?>
        </form>

        
    </div>
</section>