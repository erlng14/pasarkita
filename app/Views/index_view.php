  <!-- ======= Hero Section ======= -->
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <?php foreach ($list_home as $key => $value): ?>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $key ?>" <?= ($key === 0) ? 'class="active"' : '' ?> aria-label="Slide <?= $key + 1 ?>"></button>
    <?php endforeach; ?>
  </div>
  <div class="carousel-inner">
    <?php foreach ($list_home as $key => $value): ?>
      <div class="carousel-item <?= ($key === 0) ? 'active' : '' ?>">
        <img src="<?= base_url('img/background/') . $value['background'] ?>" class="d-block w-100" >
        <div class="carousel-caption" data-aos="fade-up" data-aos-delay="500">
          <h1><?= $value['judul'] ?></h1>
          <h5><?= $value['tagline'] ?></h5>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  <!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

      <div class="section-title">
          <span>Tentang Kami</span>
          <h2>Tentang Kami</h2><hr>
          <p>"Komitmen Kami Mengubah Visi Menjadi Kenyataan."</p>
        </div>

        <div class="row">
          <?php foreach($list_about as $key => $value): ?>
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
            <img src="<?= base_url('img/about/') . $value['foto']?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
            <br><p><?= $value['visi']?></p><br>
            <p>
            <h5><a href="<?= base_url('/about')?>" class="btn-get-started scrollto">Baca Selengkapnya <i class="bi bi-arrow-right-circle-fill"></i></a>
            </i></h5>
            </p>
          </div>
          <?php endforeach; ?>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <?php foreach($list_cta as $key => $value): ?>
          <h1 style="color: white;"><?= $value['judul']?></h1>
          <p><?= $value['deskripsi']?></p>
          <a class="cta-btn" href="<?= base_url('cta/click/' . $value['id']) ?>" target="_blank">Cari di Google Maps</a>
          <?php endforeach; ?>
        </div>

      </div>
    </section>
    <!-- End Cta Section -->

    <!-- ======= Acara Section ======= -->
    <section id="acara" class="acara">
      <div class="container">

        <div class="section-title">
          <span>Acara</span>
          <h2>Acara</h2><hr>
          <p>"Kami Menghidupkan Impian Melalui Setiap Acara."</p>
        </div>

      <div class="row">
        <?php
          $maxAcara = 3; // Tentukan jumlah acara yang ingin ditampilkan
          $acaraCount = 0;

          foreach ($list_acara as $key => $value) :
            if ($acaraCount >= $maxAcara) {
            break; // Berhenti jika sudah mencapai jumlah maksimal acara
          }
          ?>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
            <div class="post-img">
              <a href="<?= base_url('acara/') . $value['slug']?>">
              <img class="img-fluid" src="<?= base_url('img/acara/') . $value['foto'] ?>" width="600" height="600"></img>
              </a>
              <h2 class="text-truncate"><?= $value['judul'] ?></h2>
              <p>
              <a href="<?= base_url('acara/') . $value['slug']?>" class="text-center small">Baca Selengkapnya <i class="bi bi-arrow-right-circle-fill mt-5"></i></a>
              </p>
            </div>
          </div>
          <?php
        $acaraCount++;
        endforeach;
        ?>
        <div class="text-center"><br>
        <form action="<?= url_to('acara')?>" class="d-inline">
            <button type="submit" class="btn btn-outline-danger">Muat Lebih Banyak</button>
            </form>
        </div>
      </div>
      </div>
    </section>
    <!-- End Acara Section -->

  </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

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

</body>

</html>