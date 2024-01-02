<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<section id="about" class="about">
  
      <div class="container">

      <div class="section-title mt-5">
          <span>Detail</span>
          <h2>Detail</h2><hr>
          <p>"Kami Menghidupkan Impian Melalui Setiap Acara."</p>
        </div>

        <div class="row mb-5">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
            <img src="<?= base_url('img/acara/') . $acara->foto ?>" class="img-fluid" width="600" height="600">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
            <br><h3><?= $acara->judul ?></h3><br>
            <p>
              <em><?= '<i class="fa-regular fa-calendar"></i>' . $acara->tanggal ?></em>
            </p>
            <p>
              <?= $acara->deskripsi ?>
            </p>
          </div>
        </div>

        <nav aria-label="Page navigation" data-aos="fade-left">
          <ul class="pagination justify-content-end">
            <?php if ($prev_acara !== null) : ?>
              <li class="page-item" style="border: 1px solid red;">
                <a class="page-link text-danger" href="<?= base_url('acara/' . $prev_acara['slug']); ?>"><<</a>
              </li>
            <?php else : ?>
              <li class="page-item disabled" style="border: 1px solid red;">
              </li>
            <?php endif; ?>
            
            <?php $nomer = 1; ?>
            <?php foreach ($list_acara as $acara) : ?>
              <li class="page-item <?= ($acara['slug'] == $nomer ) ? 'active' : ''; ?>" style="border: 1px solid red;">
                <a class="page-link text-danger" href="<?= base_url('acara/' . $acara['slug']); ?>"><?= $nomer++; ?></a>
            </li>
            <?php endforeach; ?>
            
            <?php if ($next_acara !== null) : ?>
              <li class="page-item" style="border: 1px solid red;">
                <a class="page-link text-danger" href="<?= base_url('acara/' . $next_acara['slug']); ?>">>></a>
              </li>
            <?php else : ?>
              <li class="page-item disabled" style="border: 1px solid red;">
              </li>
            <?php endif; ?>
          </ul>
        </nav>
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