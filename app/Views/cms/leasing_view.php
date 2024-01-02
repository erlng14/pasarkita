<link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<section class="content">
    <?php if (session()->getFlashdata('alert')): ?>
    <div class="alert alert-danger" role="alert">
      <?= session()->getFlashdata('alert'); ?>
    </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-lg-12" width="100%">
        <table id="myTable" class="table table-dark">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Nama</th>
      <th scope="col">Nomer Hp</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=1; 
    foreach ($list_leasing as $key => $value) {
      # code...
    ?>
    <tr>
      <th scope="row"><?= $i++?></th>
      <td><?= $value['nama'] ?></td>
      <td><?= $value['nohp'] ?></td>
      <td><?= $value['email'] ?></td>
      <td><form action="<?= base_url('cms/leasing/delete/' . $value['id']); ?>" method="post" class="d-inline" onsubmit="return confirm('Apa anda yakin ingin menghapus ini?');">
      <button type="submit" style="border: none; background: none; color: white;">
        <i class="fa-regular fa-trash-can"></i>
        </button>
            </form></td>
    </tr>
  <?php } ?>
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
