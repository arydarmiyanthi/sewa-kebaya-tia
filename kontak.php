<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sewa Kebaya Tia</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@100;300;400;700&display=swap" rel="stylesheet" />

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Wa Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- Navbar start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">Sewa Kebaya Tia.</a>
      <div class="navbar-nav">
        <a href="/index.html">Home</a>
        <a href="/about.html">Tentang Kami</a>
        <a href="/produk.html">Produk</a>
        <a href="/kontak.php">Kontak</a>
      </div>
      <div class="navbar-extra">
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>
    <!-- Navbar end -->

    <!-- Contact Section start -->
    <section id="contact" class="contact">
      <h2><span>Kontak </span>Kami</h2>
      <?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
      <div class="success-message" style="margin-bottom: 20px;font-size: 20px;color: green;"><?php echo $_SESSION['success_message']; ?></div>
      <?php unset($_SESSION['success_message']); ?>
   <?php } ?>
      <p class="contact-p">Hubungi Kami untuk melalukan pemesanan sewa kebaya.</p>
      <form action="data.php" method="post" onsubmit="return validateForm()">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required /><br /><br />
        <label for="nama">No HP:</label>
        <input type="text" id="nama" name="nama" required /><br /><br />
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required /><br /><br />
        <label for="produk">Produk:</label>
        <select id="produk" name="produk" required>
          <option value="">Pilih Kebaya</option>
          <option value="Kebaya 1">Kebaya 1</option>
          <option value="Kebaya 2">Kebaya 2</option>
          <option value="Kebaya 3">Kebaya 3</option>
          <option value="Kebaya 4">Kebaya 4</option>
          <option value="Kebaya 5">Kebaya 5</option>
          <option value="Kebaya 6">Kebaya 6</option>
          <option value="Kebaya 7">Kebaya 7</option>
          <option value="Kebaya 8">Kebaya 8</option></select
        ><br /><br />
        <label for="jumlah">Jumlah:</label>
        <input type="number" id="jumlah" name="jumlah" min="1" required /><br /><br />
        <input type="submit" value="Pesan" style="background-color: #d375cd" />
      </form>
    </section>
    <!-- Contact Section end -->

    <!-- FAQ Section start -->
    <section id="faq" class="faq">
      <h2>Pertanyaan</h2>
      <div class="faq-container">
        <div class="faq-item">
          <button class="faq-question">Apa saja kebaya yang tersedia untuk disewa?</button>
          <div class="faq-answer">
            <p>Kami memiliki berbagai macam kebaya mulai dari kebaya tradisional hingga kebaya modern. Silakan lihat di bagian produk untuk informasi lebih lanjut.</p>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-question">Bagaimana cara melakukan pemesanan?</button>
          <div class="faq-answer">
            <p>Anda dapat melakukan pemesanan melalui formulir di bagian kontak. Pastikan untuk mengisi semua informasi yang diperlukan.</p>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-question">Berapa lama durasi sewa kebaya?</button>
          <div class="faq-answer">
            <p>Durasi sewa kebaya adalah 3 hari. Jika Anda membutuhkan waktu lebih lama, silakan hubungi kami untuk informasi lebih lanjut.</p>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-question">Apakah ada biaya tambahan untuk perpanjangan sewa?</button>
          <div class="faq-answer">
            <p>Ya, ada biaya tambahan untuk setiap hari perpanjangan. Silakan hubungi kami untuk detail biaya tambahan.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- FAQ Section end -->

    <!-- footer starts  -->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col">
            <h4>Contact Us</h4>
            <ul>
              <li><a href="#">Whatsapp : 083114370400</a></li>
              <li><a href="#">Email: kelompokcantik@gmail.com</a></li>
              <li><a href="#">Alamat: Jln. Puputan Renon, Denpasar, Bali</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Quick Link</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">Tentang Kami</a></li>
              <li><a href="#">Produk</a></li>
              <li><a href="#">Kontak</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Team Kelompok Cantik</h4>
            <ul>
              <li><a href="#">Ary Darmiyanthi</a></li>
              <li><a href="#">Pasya Agustin</a></li>
              <li><a href="#">Suhartia Ningsih</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>follow us</h4>
            <div class="social-links">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer end -->

    <!-- Wa Icons start -->
    <a href="https://wa.me/6285737020958?text=Hi%20Qiscus" class="floating" target="_blank">
      <i class="fab fa-whatsapp fab-icon"></i>
    </a>

    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>

    <!-- My Javascript -->
    <script src="js/script.js"></script>
  </body>
</html>
