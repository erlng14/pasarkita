<section>
  <div>
    <ul>
      <a href="<?= url_to('cms/acara') ?>" class="btn btn-info"><?=lang('Kembali')?></a>
      </ul>
      <form method="post" action="<?= base_url('cms/acara/update/save')?>" enctype="multipart/form-data">
      <?= csrf_field(); ?>
        <input type="hidden" name="id" value="<?=$acara->id ?>">
        <div class="card-body">
          <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" id="judul" placeholder="Judul" name="judul" value="<?= $acara->judul; ?>" required>
          </div>
          <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" placeholder="Tanggal" name="tanggal" value="<?= $acara->tanggal; ?>" required>
          </div>
          <div class="custom-file">
            <label for="foto">Foto</label>
            <input type="file" class="form-control mb-3" id="foto" placeholder="Foto" name="foto" accept="image/*">
            <img src="<?= base_url('img/acara/') . $acara->foto; ?>" width="100">
            </div>
            <div class="form-group mt-5">
              <label for="deskripsi">Deskripsi</label>
              <textarea class="form-control summernote" id="deskripsi" name="deskripsi" required><?= $acara->deskripsi; ?></textarea>
            </div>
        </div>
        <div class="card-footer">
          <input type="submit"  class="btn btn-primary" value="Submit">
        </div>
        </form>
    </div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

<script>
    $(document).ready(function() {
        $('.summernote').summernote({
            height: 200, // You can adjust the height as needed
        });
    });
</script>
</section>