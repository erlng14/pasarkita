<link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<section class="content">
    <a href="<?= base_url('cms/homepage/upload') ?>" class="btn btn-info mb-5"><?=lang('Upload')?></a>

    <div class="row">
        <div class="col-lg-12" width="100%">
        <table id="myTable" class="table table-dark">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Judul</th>
      <th scope="col">Tagline</th>
      <th scope="col">Background</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=1; 
    foreach ($list_home as $key => $value) {
    ?>
    <tr>
      <th scope="row"><?= $i++?></th>
      <td><?= $value['judul'] ?></td>
      <td><?= $value['tagline']?></td>
      <td><img src="<?= base_url('img/background/') . $value['background']?>" width="100"></img></td>
      <td>
      <form action="<?= base_url('cms/homepage/update_status/' . $value['id']); ?>" method="post" class="d-inline">
          <input type="hidden" name="status" value="<?= $value['status']; ?>">
          <button type="submit" style="border: none; border-radius: 5px; background: <?= $value['status'] == 1 ? 'green' : 'red'; ?>; color: white;">
              <?= $value['status'] == 1 ? 'Active' : 'Inactive'; ?>
          </button>
        </form>
      </td>
      <td>
        <form action="<?= base_url('cms/homepage/update/' . $value['id']); ?>" method="post" class="d-inline">
        <button type="submit" style="border: none; background: none; color: white;">
        <i class="fa-regular fa-pen-to-square"></i>
          </button>
          </form>
        <form action="<?= base_url('cms/homepage/delete/' . $value['id']); ?>" method="post" class="d-inline" onsubmit="return confirm('Apa anda yakin ingin menghapus ini?');">
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