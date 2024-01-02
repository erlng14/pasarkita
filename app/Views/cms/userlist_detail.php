<section class="content">
    <a href="<?= url_to('cms/userlist') ?>" class="btn btn-info"><?=lang('Kembali')?></a><hr>
    <div class="row">
        <div class="col-lg-8">
        <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
    <img src="<?= base_url('assets' . $user->userid)?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <h4><?= $user->username; ?></h4>
          </li>
          <li class="list-group-item">
            <h5><?= $user->email;?></h5>
          </li>
          <li class="list-group-item">
            <span><?= $user->name;?></span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
        </div>
    </div>
</section>