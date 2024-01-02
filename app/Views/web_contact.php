<section id="contact" class="contact">
      <div class="container">
        
        <div class="section-title mt-5">
          <span class="text-grey">Kontak</span>
          <h2>Kontak</h2><hr>
          <p>"Kami Menyambut Pertanyaan dan Masukan - Hubungi Kami Sekarang!"</p>
        </div>
        
        <div class="row justify-content-center" data-aos="fade-up">
          <?php foreach($list_info as $key => $value) { ?>
          <div class="col-lg-4 col-md-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p><?= $value['alamat']?></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p><?= $value['email']?></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p><?= $value['telp']?></p>
            </div>
          </div>
          <?php } ?>
        </div>

        <div class="row" data-aos="fade-up">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="<?= $value['map']?>" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>
          <div class="col-lg-6">
            <form action="<?= base_url('contact/save')?>" method="post" role="form">
            <?= csrf_field(); ?>
            <h3 class="text-uppercase">apa ada pertanyaan?</h3>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subjek" id="subjek" placeholder="Subjek" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="pesan" rows="5" placeholder="Pesan" required></textarea>
              </div>
              <?php if (session()->has('success_message')) : ?>
                  <div class="alert alert-success mt-3">
                      <?= session('success_message') ?>
                  </div>
              <?php endif; ?>
              <div class="text-center mt-3"><button type="submit" class="btn btn-danger"><i class="bi bi-send"></i> Kirim Pesan</button>
            </div>
            </form>
          </div>
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