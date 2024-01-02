<link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<section class="content">
    <?php if (session()->getFlashdata('alert')): ?>
    <div class="alert alert-danger" role="alert">
      <?= session()->getFlashdata('alert'); ?>
    </div>
    <?php endif; ?>

  <div>
    <h2>Contact Info</h2>
    <ul>
      </ul>
      <form method="post" action="<?= base_url('cms/contact/save2')?>" enctype="multipart/form-data">
      <?= csrf_field(); ?>
      <?php foreach($list_info as $key => $value):  ?>
        <input type="hidden" name="id" value="<?= $value['id'] ?>">
        <div class="card-body">
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" placeholder="Masukan Alamat" name="alamat" value="<?= $value['alamat'] ?>" required>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Masukan Email" name="email" value="<?= $value['email'] ?>" required>
          </div>
            <div class="form-group">
              <label for="telp">No.Telp</label>
              <input type="number" class="form-control" id="telp" placeholder="Masukan No.telp" name="telp" value="<?= $value['telp'] ?>" required>
            </div>
            <div class="form-group">
              <label for="map">Link Map</label>
              <input type="text" class="form-control" id="map" placeholder="Masukan Link Map" name="map" value="<?= $value['map'] ?>" required>
            </div>
        </div>
        <div class="card-footer">
        <input type="submit" class="btn btn-primary" value="Submit">
        </div>
        <?php endforeach; ?>
        </form>
    </div>
<br>

    <h2>Inbox</h2>
    <div class="row">
        <div class="col-lg-12" width="100%">
        <table id="myTable" class="table table-dark">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Subjek</th>
      <th scope="col">Pesan</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=1; 
    foreach ($list_contact as $key => $value) :
      # code...
    ?>
    <tr>
      <th scope="row"><?= $i++?></th>
      <td><?= $value['nama'] ?></td>
      <td><?= $value['email'] ?></td>
      <td><?= $value['subjek'] ?></td>
      <td><?= $value['pesan'] ?></td>
      <td><form action="<?= base_url('cms/contact/delete/' . $value['id']); ?>" method="post" class="d-inline" onsubmit="return confirm('Apa anda yakin ingin menghapus ini?');">
            <button type="submit" style="border: none; background: none; color: white;">
            <i class="fa-regular fa-trash-can"></i>
          </button>
          </form>
      </td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
        </div>
    </div>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <!-- DataTables JS -->
    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <!-- Page specific script -->
    <script>
      let table = new DataTable('#myTable');
    </script>
</section>
