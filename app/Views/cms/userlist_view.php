<link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<section class="content">
<a href="<?= url_to('cms/register') ?>" class="btn btn-info mb-5"><?=lang('Tambah User')?></a>
    <div class="row">
        <div class="col-lg-12" width="100%">
        <table id="myTable" class="table table-dark">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=1;
     foreach ($users as $user) { ?>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td><?= $user->username ?></td>
      <td><?= $user->email; ?></td>
      <td>
      <form action="<?= base_url('cms/userlist/' . $user->userid); ?>" method="get" class="d-inline">
      <button type="submit" style="border: none; background: none; color: white;">
        <i class="fa-solid fa-magnifying-glass"></i>
          </button>
        </form>
      <form action="<?= base_url('cms/userlist/' . $user->userid); ?>" method="post" class="d-inline" onsubmit="return confirm('Apa anda yakin ingin menghapus ini?');">
      <button type="submit" style="border: none; background: none; color: white;">
        <i class="fa-regular fa-trash-can"></i>
        </button>
        </form>
      </td>
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