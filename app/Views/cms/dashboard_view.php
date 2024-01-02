<!-- Main content -->
    <section class="content-center">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?= $totalUsers ?></h3>

                <p>Users</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="<?= base_url('cms/userlist')?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
            <!-- ./col -->

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?= $totalAcara ?></h3>

                <p>Acara</p>
              </div>
              <div class="icon">
                <i class="ion ion-calendar"></i>
                <!-- <i class="ion ion-bag"></i> -->
              </div>
              <a href="<?= base_url('cms/acara')?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?= $totalContact ?></h3>

                <p>Mail</p>
              </div>
              <div class="icon">
              <i class="nav-icon fa-regular fa-envelope"></i>
              </div>
              <a href="<?= base_url('cms/contact')?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3><?= $totalClick ?></h3>

                <p>CTA</p>
              </div>
              <div class="icon">
              <i class="nav-icon fa-solid fa-pen-nib"></i>
              </div>
              <a href="<?= base_url('cms/cta')?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

        </section>
        
        <!-- Include Chart.js library -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<h3 class="col-sm-6">Visitor</h3>

<div class="col-lg-8">
    <?php $i = 1; if (!empty($userAgentData)): ?>
        <table class="table table-dark">
            <!-- Table contents as before -->
        </table>
        <canvas id="userAgentChart" width="400" height="200"></canvas>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var ctx = document.getElementById('userAgentChart').getContext('2d');
                var platforms = <?= json_encode(array_column($userAgentData, 'platform')); ?>;
                var platformCounts = Object.values(platforms.reduce((acc, platform) => {
                    acc[platform] = (acc[platform] || 0) + 1;
                    return acc;
                }, {}));

                var platformLabels = Object.keys(platforms.reduce((acc, platform) => {
                    acc[platform] = true;
                    return acc;
                }, {}));

                var chart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: platformLabels,
                        datasets: [{
                            label: 'User',
                            data: platformCounts,
                            backgroundColor: 'rgba(0, 96, 205, 0.8)',
                            borderWidth: 2
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            });
        </script>
    <?php else: ?>
        <p>No user agent data available.</p>
    <?php endif; ?>
</div>

        <div class="row">
          <src style="display: block; margin-left: 200px; margin-right: 200px; margin-top: 200px; margin-bottom: 0px;">
          <h2 class="text-center" style="font-family: Quicksand, sans-serif;"> CMS Pasar Kita </h2>
          <p class="text-center">Alamat : Jl. Pajajaran No.1, Pamulang | Email : info@example.com | Nomor Telpon : 083879793200 </p>
        </div>
          
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
