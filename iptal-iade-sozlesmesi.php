<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Psikolog Yasemin erdal | Dinamik Psikoterapi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&family=Playfair+Display:wght@500;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

  <style>
    :root {
      /* Yeşil Renk Paleti */
      --primary-green: #3A6B58;
      /* Ana koyu yeşil */
      --secondary-green: #689F88;
      /* Orta ton */
      --light-green: #F0F7F4;
      /* Açık arka plan */
      --accent-gold: #D4AF37;
      /* Küçük dokunuşlar için */
      --text-dark: #2C3E50;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: 'Montserrat', sans-serif;
      color: var(--text-dark);
      line-height: 1.7;
      padding-top: 80px;
    }

    h1,
    h2,
    h3,
    h4,
    h5 {
      font-family: 'Playfair Display', serif;
      color: var(--primary-green);
    }

    /* Navbar */
    .navbar {
      background-color: #fff;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
      padding: 15px 0;
    }

    .navbar-brand {
      font-weight: 700;
      color: var(--primary-green) !important;
      font-size: 1.5rem;
    }

    .nav-link {
      color: var(--text-dark) !important;
      font-weight: 500;
      margin-right: 15px;
    }

    .nav-link:hover {
      color: var(--secondary-green) !important;
    }

    /* Buton Stilleri */
    .btn-green {
      background-color: var(--primary-green);
      color: white;
      padding: 10px 25px;
      border-radius: 30px;
      font-weight: 600;
      border: none;
      transition: all 0.3s;
      text-decoration: none;
      display: inline-block;
    }

    .btn-green:hover {
      background-color: var(--secondary-green);
      color: white;
      transform: translateY(-2px);
      box-shadow: 0 4px 10px rgba(58, 107, 88, 0.3);
    }

    /* Navbar Randevu Butonu */
    .btn-nav-appointment {
      background-color: var(--primary-green);
      color: white !important;
      padding: 8px 20px;
      border-radius: 5px;
      font-weight: 600;
      transition: all 0.3s;
    }

    .btn-nav-appointment:hover {
      background-color: var(--secondary-green);
    }

    /* Hero Section */
    .hero {
      background: linear-gradient(rgba(58, 107, 88, 0.9), rgba(58, 107, 88, 0.8)), url('https://images.unsplash.com/photo-1529333166437-7750a6dd5a70?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');
      background-size: cover;
      background-position: center;
      color: white;
      padding: 160px 0;
      text-align: center;
    }

    .hero h1 {
      color: white;
      font-size: 3.5rem;
      margin-bottom: 20px;
    }

    .hero p {
      font-size: 1.2rem;
      font-weight: 300;
    }

    /* Section Styling */
    section {
      padding: 80px 0;
    }

    .section-title {
      text-align: center;
      margin-bottom: 50px;
      position: relative;
    }

    .section-title::after {
      content: '';
      display: block;
      width: 60px;
      height: 3px;
      background-color: var(--secondary-green);
      margin: 15px auto;
    }

    /* Specialties Chips */
    .specialty-badge {
      background-color: var(--light-green);
      color: var(--primary-green);
      padding: 10px 20px;
      border-radius: 30px;
      margin: 5px;
      display: inline-block;
      font-weight: 500;
      transition: all 0.3s;
      border: 1px solid transparent;
    }

    .specialty-badge:hover {
      background-color: var(--primary-green);
      color: white;
      transform: translateY(-2px);
    }

    /* Resume Cards */
    .resume-card {
      border-left: 3px solid var(--secondary-green);
      background: #fff;
      padding: 20px;
      margin-bottom: 20px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.03);
      transition: transform 0.3s;
    }

    .resume-card:hover {
      transform: translateX(5px);
    }

    .resume-card h5 {
      font-size: 1.1rem;
      font-weight: 700;
      margin-bottom: 5px;
    }

    .resume-card span {
      font-size: 0.9rem;
      color: #777;
      font-style: italic;
    }

    /* Contact Form */
    .bg-light-green {
      background-color: var(--light-green);
    }

    .form-control {
      padding: 15px;
      border-radius: 8px;
      border: 1px solid #ddd;
    }

    /* Footer */
    footer {
      background-color: var(--primary-green);
      color: white;
      padding: 40px 0;
      text-align: center;
    }

    /* Sticky Floating Button (Sabit Randevu Butonu) */
    .floating-cta {
      position: fixed;
      bottom: 30px;
      right: 30px;
      background-color: var(--accent-gold);
      color: white;
      width: 70px;
      height: 70px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
      font-size: 24px;
      z-index: 1000;
      transition: all 0.3s;
      text-decoration: none;
      animation: pulse 2s infinite;
    }

    .floating-cta:hover {
      background-color: #c49f2f;
      color: white;
      transform: scale(1.1);
    }

    /* Basit bir animasyon dikkati çekmek için */
    @keyframes pulse {
      0% {
        box-shadow: 0 0 0 0 rgba(212, 175, 55, 0.7);
      }

      70% {
        box-shadow: 0 0 0 10px rgba(212, 175, 55, 0);
      }

      100% {
        box-shadow: 0 0 0 0 rgba(212, 175, 55, 0);
      }
    }

    /* Sözleşme Container */
    .sozlesme-container {
      font-family: 'Montserrat', sans-serif;
      line-height: 1.8;
      color: #444;
      max-width: 850px;
      margin: auto;
      padding: 30px;
      background: #f9f9f9;
      border-radius: 8px;
    }

    .sozlesme-baslik {
      text-align: center;
      color: var(--primary-green);
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .alt-baslik {
      color: var(--primary-green);
      margin-top: 25px;
      border-bottom: 1px solid #ddd;
      padding-bottom: 5px;
    }

    .iletisim-liste {
      list-style: none;
      padding: 15px;
      background: #fff;
      border-radius: 5px;
      border: 1px solid #eee;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php"><i class="fas fa-spa me-2"></i>Psk. Yasemin Erdal</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav align-items-center">
          <li class="nav-item"><a class="nav-link" href="index.php#hakkimda">Hakkımda</a></li>
          <li class="nav-item"><a class="nav-link" href="index.php#uzmanliklar">Uzmanlıklar</a></li>
          <li class="nav-item"><a class="nav-link" href="index.php#egitim">Eğitim</a></li>
          <li class="nav-item"><a class="nav-link" href="index.php#iletisim">İletişim</a></li>
          <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
            <a class="btn btn-nav-appointment" href="index.php#iletisim">
              <i class="far fa-calendar-check me-2"></i>Randevu Al
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="sozlesme-container">
    <h2 class="sozlesme-baslik">İPTAL VE İADE ŞARTLARI</h2>

    <p>İşbu sözleşme, alıcının satın aldığı hizmet veya ürünlerin iptal, iade ve değişim süreçlerini düzenlemektedir.
    </p>

    <h3 class="alt-baslik">1. Cayma Hakkı</h3>
    <p>Alıcı, hizmet sözleşmelerinde sözleşmenin kurulduğu günden; mal teslimine ilişkin sözleşmelerde ise teslimat
      tarihinden itibaren <b>14 (on dört) gün</b> içerisinde herhangi bir gerekçe göstermeksizin cayma hakkına sahiptir.
    </p>

    <h3 class="alt-baslik">2. İade ve İptal Koşulları</h3>
    <ul>
      <li>Hizmet ifasına başlanmış olan (örneğin seansın gerçekleşmiş olması) durumlarda cayma hakkı kullanılamaz.</li>
      <li>Randevulu hizmetlerde, randevu saatine 24 saatten az süre kala yapılan iptallerde iade politikası işletme
        insiyatifindedir.</li>
      <li>Dijital olarak sunulan içerikler veya anında ifa edilen hizmetlerde iade kabul edilmemektedir.</li>
    </ul>

    <h3 class="alt-baslik">3. Geri Ödeme Süreci</h3>
    <p>İptal veya iade talebi onaylandıktan sonra, ödenen tutar <b>14 iş günü</b> içerisinde alıcının kullandığı ödeme
      yöntemine (kredi kartı, EFT/Havale vb.) iade edilir.</p>

    <hr>

    <h3 class="alt-baslik">Satıcı İletişim Bilgileri</h3>
    <ul class="ml-4 mt-3 iletisim-liste">
      <li class="mt-2">
        <b>Adres</b> : İstanbul
      </li>
      <li class="mt-2">
        <b>Telefon</b> : 533 343 14 66
      </li>
      <li class="mt-2">
        <b>e-posta</b> : info@psikologyaseminerdal.com
      </li>
    </ul>
  </div>

  <footer>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-md-6">
          <h3>Psikolog Yasemin Erdal</h3>
          <p>Dinamik Ekolde Bireysel Psikoterapi</p>
          <div class="social-icons mb-4">
            <a href="#" class="text-white mx-2"><i class="fab fa-instagram fa-lg"></i></a>
            <a href="#" class="text-white mx-2"><i class="fab fa-linkedin fa-lg"></i></a>
            <a href="#" class="text-white mx-2"><i class="fas fa-envelope fa-lg"></i></a>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <img src="logo-band.avif" alt="">
          <div class="social-icons mb-4">
            <a href="kvkk.php" class="text-white mx-2">
              KVKK Aydınlatma Metni
            </a>
            <a href="iptal-iade-sozlesmesi.php" class="text-white mx-2">
              İptal İade Sözleşmesi
            </a>
            <a href="gizlilik-politikasi.php" class="text-white mx-2">
              Gizlilik Politikası
            </a>
          </div>
        </div>
      </div>
      <small>&copy; 2025 Tüm Hakları Saklıdır.</small>
    </div>
  </footer>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>