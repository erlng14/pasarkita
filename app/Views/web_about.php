<section id="about" class="about">
      <div class="container">

      <div class="section-title mt-5">
          <span>Tentang Kami</span>
          <h2>Tentang Kami</h2><hr>
          <p>"Komitmen Kami: Mengubah Visi Menjadi Kenyataan."</p>
        </div>

        <div class="row">
          <?php foreach($list_about as $key => $value): ?>
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
            <img src="<?= base_url('img/about/') . $value['foto']?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
            <br><p><?= $value['visi']?></p><br>
            <p>
              <?= $value['deskripsi']?>
            </p>
          </div>
          <?php endforeach; ?>
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