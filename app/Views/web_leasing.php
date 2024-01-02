<section id="leasing" class="leasing">
      <div class="container">
        <div class="section-title mt-5">
          <span>Leasing</span>
          <h2>Leasing</h2><hr>
          <p>"Lebih dari Sekadar Tempat - Ini adalah Awal Perjalanan Anda."</p>
        </div>
      <div class="row mt-5">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
            <img src="<?= base_url()?>assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6" data-aos="fade-right">
            <form action="<?= base_url('leasing/save')?>" method="post" role="form">
            <?= csrf_field(); ?>
            <h3 class="text-uppercase text-center">leasing form</h3>
              <div class="row">
              <div class="form-group mt-3">
                <label for="nama">Nama</label>
                <input type="text" aria-required="true" class="form-control mt-2 required nama" name="nama" id="nama" placeholder="Masukan nama anda" required>
              </div>
              <div class="form-group mt-3">
                <label for="nohp">Nomer Hp</label>
                <input type="number" aria-required="true" class="form-control mt-2 required" name="nohp" id="nohp" placeholder="Masukan nomer hp anda" required>
              </div>
              <div class="form-group mt-3">
                <label for="email">Email</label>
                <input type="email" aria-required="true" class="form-control mt-2 required email" name="email" id="email" placeholder="Masukan email anda" required>
              </div>
              <?php if (session()->has('success_message')) : ?>
                  <div class="alert alert-success mt-3">
                      <?= session('success_message') ?>
                  </div>
              <?php endif; ?>
              <?php if (session()->has('error_message')) : ?>
                  <div class="alert alert-success mt-3">
                      <?= session('success_message') ?>
                  </div>
              <?php endif; ?>
              <div class="text-center mt-3 mb-3"><button type="submit" class="btn btn-danger">Submit</button>
            </div>
            </form>
          </div>
        </div>
      </div>
      </div>
    </section>

    <?php if (session()->has('success_message')) : ?>
      <script>
        setTimeout(function() {
          var whatsappLink = '<?= $whatsappLink . urlencode($whatsappMessage) ?>';
          window.location.href = whatsappLink;
        }, 5000); // Tunggu 5 detik sebelum mengarahkan
      </script>
    <?php endif; ?>

        <!-- Include Bootstrap JS (Popper.js and Bootstrap JS) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>

<!-- Your existing Vendor JS Files -->
<script src="<?= base_url()?>assets/vendor/aos/aos.js"></script>
<script src="<?= base_url()?>assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?= base_url()?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?= base_url()?>assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?= base_url()?>assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="<?= base_url()?>assets/js/main.js"></script>

  <!-- End Header -->