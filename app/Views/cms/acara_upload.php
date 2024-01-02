<section>
  <div>
    <ul>
      <a href="<?= url_to('cms/acara') ?>" class="btn btn-info"><?=lang('Kembali')?></a>
      </ul>
      <form method="post" action="<?= base_url('cms/acara/upload/save')?>">

        <div class="card-body">
          <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" id="judul" class="form-control <?= isset(session('errors')['judul']) && session('errors')['judul'] ? 'is-invalid' : '' ?>" placeholder="Judul" name="judul">
            <div class="invalid-feedback">
              <?= (session()->has('errors') && session('errors')['judul']) ? session('errors')['judul'] : ''; ?>
            </div>
          </div>
          <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" class="form-control <?= isset(session('errors')['tanggal']) && session('errors')['tanggal'] ? 'is-invalid' : '' ?>" id="tanggal" placeholder="Tanggal" name="tanggal">
            <div class="invalid-feedback">
              <?= (session()->has('errors') && session('errors')['tanggal']) ? session('errors')['tanggal'] : ''; ?>
            </div>
          </div>
          <div class="custom-file">
            <label for="foto">Foto</label>
            <input type="file" class="form-control <?= isset(session('errors')['foto']) && session('errors')['foto'] ? 'is-invalid' : '' ?>" id="foto" placeholder="Foto" name="foto" accept="image/*">
            <div class="invalid-feedback">
              <?= (session()->has('errors') && session('errors')['foto']) ? session('errors')['foto'] : ''; ?>
            </div>
          </div>
          <div class="form-group mt-3">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control summernote <?= isset(session('errors')['deskripsi']) && session('errors')['deskripsi'] ? 'is-invalid' : '' ?>" name="deskripsi" id="deskripsi"></textarea>
            <div class="invalid-feedback">
              <?= (session()->has('errors') && session('errors')['deskripsi']) ? session('errors')['deskripsi'] : ''; ?>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <input type="submit" class="btn btn-primary" value="Submit">
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