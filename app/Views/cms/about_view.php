<link rel="stylesheet" href="https://github.com/twbs/bootstrap/tree/v5.1.3/site/assets/scss">
<section class="content">
    <?php if (session()->getFlashdata('pesan')): ?>
      <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
      </div>
      <?php endif; ?>
    <?php if (session()->getFlashdata('alert')): ?>
    <div class="alert alert-danger" role="alert">
      <?= session()->getFlashdata('alert'); ?>
    </div>
    <?php endif; ?>
    
    <form method="post" action="<?= base_url('cms/about/update/save')?>" enctype="multipart/form-data">
      <?= csrf_field(); ?>
      <?php foreach($list_about as $key => $value): ?>
        <input type="hidden" name="id" value="<?= $value['id'] ?>" required>
        <div class="card-body">
          <div class="form-group">
            <label for="visi">Visi</label>
            <textarea class="form-control summernote" id="visi" name="visi" required><?= $value['visi'] ?></textarea>
          </div>
          <div class="custom-file">
            <label for="foto">Foto</label>
            <input type="file" class="form-control mb-2" id="foto" placeholder="Foto" name="foto" accept="image/*">
            <img src="<?= base_url('img/about/') . $value['foto']; ?>" width="100">
          </div>
          <div class="form-group mt-5">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control summernote" id="deskripsi" name="deskripsi" required><?= $value['deskripsi'] ?></textarea>
            <div class="invalid-feedback">
              <?= (session()->has('errors') && session('errors')['deskripsi']) ? session('errors')['deskripsi'] : ''; ?>
            </div>
          </div>
        </div>
        <div class="card-footer">
        <input type="submit"  class="btn btn-primary" value="Submit">
        </div>
        <?php endforeach;?>
        </form>
        
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<!-- Page specific script -->
<script>
    // Initialize Summernote
    $(document).ready(function() {
        $('.summernote').summernote({
            height: 200, // You can adjust the height as needed
        });
    });
</script>
</section>
