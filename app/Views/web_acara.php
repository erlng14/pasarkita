<section id="acara" class="acara">
      <div class="container">

        <div class="section-title mt-5">
          <span>Acara</span>
          <h2>Acara</h2><hr>
          <p>"Kami Menghidupkan Impian Melalui Setiap Acara."</p>
        </div>

        <div class="row">
          <?php foreach ($list_acara as $key => $value) { ?>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
            <div class="post-img">
              <a href="<?= base_url('acara/') . $value['slug']?>">
              <img class="img-fluid" src="<?= base_url('img/acara/') . $value['foto'] ?>" width="600" height="600"></img>
              </a>
              <h2 class="text-truncate"><?= $value['judul'] ?></h2>
              <p>
              <a href="<?= base_url('acara/') . $value['slug']?>" class="text-center">Baca Selengkapnya <i class="bi bi-arrow-right-circle-fill mt-5"></i></a>
              </p>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </section>
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