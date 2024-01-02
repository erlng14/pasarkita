<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Pasar <span class="text-danger">Kita</span></h3>
              <p>
              Jl. Pajajaran No.1, Pamulang Bar., Kec. Pamulang, Kota Tangerang Selatan, Banten 15417<br><br>
                <strong>Phone:</strong> 0838-7979-3200<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/pasar.pamulangkota/" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/pasarkitapamulang.id/?hl=en" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-5 col-md-6 footer-newsletter">
            <h3>Our Newsletter</h3>
            <div class="subscribe-form">
            <form action="<?= base_url('news/save')?>" method="post" role="form">
              <div class="input-group">
                <input aria-required="true" type="email" name="email" class="form-control required email" placeholder="Masukan Email Anda">
                <span class="input-group-btn">
                  <button type="submit" class="btn send-subscribe btn-danger">
                  <i class="bi bi-send"></i>
                  </button>
                </span>
              </div>
            </div>
          </form>
          <p style="font-size: x-small;">Privasi Anda adalah prioritas kami. Kami tidak akan meminta alamat email Anda.</p>
          <?php if (session()->has('pesan_news')) : ?>
            <div class="alert alert-success mt-3">
                <?= session('pesan_news') ?>
                <?php endif; ?>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><a href="<?= base_url('/')?>">Pasar Kita</a></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/day-multipurpose-html-template-for-free/ -->
      </div>
    </div>
  </footer>
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