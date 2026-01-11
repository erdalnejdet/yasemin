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
      position: relative;
      background-color: var(--primary-green);
      color: white;
      text-align: center;
      overflow: hidden;
      height: 85vh;
      margin-top: 80px;
    }

    .hero-video {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: 0;
    }

    .hero-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(rgba(58, 107, 88, 0.9), rgba(58, 107, 88, 0.8));
      opacity: 0.7;
      z-index: 1;
    }

    .hero h1 {
      color: white;
      font-size: 3.5rem;
      margin-bottom: 20px;
    }

    .hero p {
      font-size: 1.2rem;
      font-weight: bold;
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

    .floating-whatsapp {
      position: fixed;
      bottom: 115px;
      /* Stacked above the calendar button (30px + 70px + 15px gap) */
      right: 30px;
      background-color: #25D366;
      color: white;
      width: 70px;
      height: 70px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
      font-size: 32px;
      z-index: 1000;
      transition: all 0.3s;
      text-decoration: none;
    }

    .floating-whatsapp:hover {
      background-color: #20BA5A;
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
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Psikolog Yasemin Erdal</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav align-items-center">
          <li class="nav-item"><a class="nav-link" href="#hakkimda">Hakkımda</a></li>
          <li class="nav-item"><a class="nav-link" href="#uzmanliklar">Uzmanlıklar</a></li>
          <li class="nav-item"><a class="nav-link" href="#egitim">Eğitim</a></li>
          <li class="nav-item"><a class="nav-link" href="#iletisim">İletişim</a></li>
          <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
            <a class="btn btn-nav-appointment" href="#iletisim">
              <i class="far fa-calendar-check me-2"></i>Randevu Al
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="hero d-flex align-items-center">
    <video autoplay muted loop playsinline class="hero-video">
      <source src="video.mp4" type="video/mp4">
    </video>
    <div class="hero-overlay"></div>
    <div class="container position-relative" style="z-index: 2;">
      <h1>Psikolog Yasemin Erdal</h1>
      <p class="mb-4">İnsanın içi, yalnızca ona ait bir bahçedir; toprağı yaşadıklarıyla biçimlenir, ışığı ve gölgesi
        kendi hikâyesini taşır. Buna uygun psikoterapi ile , bu bahçeye yaklaşarak köklerin neyi tutup neyi
        bırakamadığını anlamaya çalışır. Hedeflenen şey ise ruhsal ıstırabın şiddetini azaltmaktır.</p>
      <div class="d-flex justify-content-center gap-3">
        <a href="#iletisim" class="btn btn-outline-light btn-lg rounded-pill px-5">İletişime Geç</a>
        <a href="#iletisim" class="btn btn-green btn-lg rounded-pill px-5">Randevu Al</a>
      </div>
    </div>
  </header>

  <section id="hakkimda" class="container">
    <div class="row">
      <div class="col-md-5 mb-4 mb-md-0">
        <img src="yasemin.jpeg" alt="Psikolog Yasemin Erdal" class="img-fluid rounded shadow-lg"
          style="width:100%; object-fit: cover; height: 400px;">
      </div>
      <div class="col-md-7 ps-md-5">
        <h2 class="section-title  mx-0">Hakkımda</h2>
        <p>
          Uzman Psikolog Yasemin Erdal, Esenyurt Üniversitesi Psikoloji Bölümü mezunudur. Aile ve Evlilik Danışmanlığı
          yüksek lisansını Ankara Yıldırım Beyazıt Üniversitesi'nde tamamlamış; eğitim sürecinden itibaren psikodinamik
          ve psikanalitik yönelimle çalışmaya devam etmektedir.
        </p>
        <button type="button" class="btn btn-green" data-bs-toggle="modal" data-bs-target="#hakkimdaModal">
          Devamını Oku
        </button>
      </div>
    </div>
  </section>

  <section id="uzmanliklar" class="bg-light-green">
    <div class="container text-center">
      <h2 class="section-title">Çalışma Alanlarım</h2>
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="d-flex flex-wrap justify-content-center">
            <span class="specialty-badge">İlişki problemleri</span>
            <span class="specialty-badge">Öfke</span>
            <span class="specialty-badge">Depresyon</span>
            <span class="specialty-badge">Yaygın Kaygı Bozukluğu</span>
            <span class="specialty-badge">Bağlanma sorunları</span>
            <span class="specialty-badge">Özgüven ve özdeğer sorunları</span>
            <span class="specialty-badge">Sınır koyma güçlükleri</span>
            <span class="specialty-badge">Depresyon</span>
            <span class="specialty-badge">Yas ve kayıp süreci</span>
            <span class="specialty-badge">Yeme bozuklukları</span>
            <span class="specialty-badge">Psikosomatik hastalıklar</span>
            <span class="specialty-badge">sosyal anksiyete</span>
            <span class="specialty-badge">Kendini tanıma</span>
            <span class="specialty-badge">Fobiler</span>

          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="egitim" class="container">
    <h2 class="section-title">Eğitim ve Tecrübeler</h2>
    <div class="row">
      <div class="col-lg-8 col-md-12">
        <h4 class="mb-4 text-center"><i class="fas fa-graduation-cap me-2"></i>Eğitimler</h4>
        <div class="row">
          <div class="col-md-6 mb-3">
            <div class="resume-card h-100">
              <h5>Yüksek Lisans - Aile ve Evlilik Danışmanlığı</h5>
              <span>Ankara Yıldırım Beyazıt Üniversitesi</span>
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <div class="resume-card h-100">
              <h5>Psikoloji (Lisans)</h5>
              <span>İstanbul Esenyurt Üniversitesi</span>
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <div class="resume-card h-100">
              <h5>Aktarım Odaklı Dinamik Psikoterapi</h5>
              <span>Prof. Dr. Doğan Şahin</span>
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <div class="resume-card h-100">
              <h5>Psikanalize Giriş Seminerleri</h5>
              <span>Psike İstanbul</span>
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <div class="resume-card h-100">
              <h5>Narsisizm Seminerleri</h5>
              <span>Hakan Kızıltan</span>
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <div class="resume-card h-100">
              <h5>Ferenczı ve Psikanalitik Psikosomatik İstenmeyen Çocukların Keşfi ve Psikosomatik Bağlantısı</h5>
              <span>İPPD</span>
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <div class="resume-card h-100">
              <h5>Psikosomatik Hastalarla Çalışmak</h5>
              <span>Kl. Psk. Anjelika Hüseyınzade Şimşek</span>
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <div class="resume-card h-100">
              <h5>Ulusal Şema Terapi Eğitimi</h5>
              <span>Dr. Alp Karaosmanoğlu</span>
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <div class="resume-card h-100">
              <h5>Toplumsal Cinsiyet Eşitsizliği ve Şiddet</h5>
              <span>Kl. Psk. Dr. Serap Alptekin</span>
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <div class="resume-card h-100">
              <h5>Dinamik Ekolde Birebir Süpervizyon Eğitimi </h5>
              <span>Uzm. Kl. Psk. Kübra Nur Aslan</span>
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <div class="resume-card h-100">
              <h5> Aktarım Odaklı Grup Süpervizyonu </h5>
              <span>Prof. Doğan Şahin</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-12">
        <h4 class="mb-4 text-center"><i class="fas fa-briefcase me-2"></i>Tecrübeler</h4>
        <div class="resume-card">
          <h5>Psikolog</h5>
          <span>Terapi Sediri</span>
        </div>
        <div class="resume-card">
          <h5>Eğitim Koordinatörü</h5>
          <span>NLP Dil ve Grup Eğitimleri</span>
        </div>
        <div class="resume-card">
          <h5>Stajyer Psikolog</h5>
          <span>İTA Psikoloji Kliniği</span>
        </div>
        <div class="resume-card">
          <h5>Blog Yazarı</h5>
          <span>Sekizon Vapuru Dijital Dergi</span>
        </div>
      </div>
    </div>
  </section>

  <section id="iletisim" class="bg-light-green py-5">
    <div class="container">
      <h2 class="section-title text-center mb-5">İletişim & Randevu</h2>
      <div class="row justify-content-center">

        <div class="col-lg-4 mb-4">
          <div class="bg-white p-5 rounded shadow h-100">
            <h4 class="mb-4">İletişim Bilgileri</h4>
            <ul class="list-unstyled">
              <li class="mb-4">
                <i class="bi bi-geo-alt-fill text-success me-2"></i>
                <strong>Adres:</strong><br>
                <span class="text-muted">İstanbul</span>
              </li>
              <li class="mb-4">
                <i class="bi bi-telephone-fill text-success me-2"></i>
                <strong>Telefon:</strong><br>
                <a href="tel:5333431466" class="text-decoration-none text-muted">533 343 14 66</a>
              </li>
              <li class="mb-4">
                <i class="bi bi-envelope-fill text-success me-2"></i>
                <strong>E-posta:</strong><br>
                <a href="mailto:info@psikologyaseminerdal.com"
                  class="text-decoration-none text-muted">info@psikologyaseminerdal.com</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-lg-8">
          <div class="bg-white p-5 rounded shadow">
            <p class="text-center mb-4 text-muted">Aşağıdaki formu doldurarak randevu talebi oluşturabilirsiniz.</p>
            <form id="randevuForm">
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label class="form-label">Adınız Soyadınız</label>
                  <input type="text" class="form-control" name="adsoyad" id="adsoyad" placeholder="Adınız" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label class="form-label">Telefon Numaranız</label>
                  <input type="tel" class="form-control" name="telefon" id="telefon" placeholder="05XX XXX XX XX"
                    required>
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label">Konu</label>
                <select class="form-select" name="konu" id="konu" required>
                  <option value="">Seçiniz...</option>
                  <option value="Randevu Talebi">Randevu Talebi</option>
                  <option value="Bilgi Almak İstiyorum">Bilgi Almak İstiyorum</option>
                  <option value="Diğer">Diğer</option>
                </select>
              </div>
              <div class="mb-3">
                <label class="form-label">Mesajınız</label>
                <textarea class="form-control" name="mesaj" id="mesaj" rows="5"
                  placeholder="Mesajınızı buraya yazabilirsiniz..." required></textarea>
              </div>

              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="kvkkCheck" name="kvkk" required>
                <label class="form-check-label small text-muted" for="kvkkCheck">
                  <a href="gizlilik-politikasi.php" target="_blank">Gizlilik Politikasını</a> okudum ve kabul ediyorum.
                </label>
              </div>

              <!-- Başarı/Hata mesajları için -->
              <div id="formMesaj" class="alert d-none mb-3"></div>

              <div class="text-center">
                <button type="submit" class="btn btn-green w-100 py-3" id="submitBtn">
                  <span id="submitText">Randevu Talebini Gönder</span>
                  <span id="submitSpinner" class="spinner-border spinner-border-sm d-none" role="status"></span>
                </button>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>

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

  <a href="https://wa.me/905333431466" class="floating-whatsapp" title="WhatsApp ile İletişime Geç" target="_blank">
    <i class="fab fa-whatsapp"></i>
  </a>

  <a href="#iletisim" class="floating-cta" title="Hemen Randevu Al">
    <i class="fas fa-calendar-alt"></i>
  </a>

  <!-- Hakkımda Modal -->
  <div class="modal fade" id="hakkimdaModal" tabindex="-1" aria-labelledby="hakkimdaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header"
          style="background-color: var(--light-green); border-bottom: 3px solid var(--secondary-green);">
          <h4 class="modal-title" id="hakkimdaModalLabel" style="color: var(--primary-green);">
            <i class="fas fa-user-circle me-2"></i>Hakkımda
          </h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-4" style="line-height: 1.8;">

          <div class="my-4 p-3 rounded" style="background-color: var(--light-green);">
            <p>
              Uzman Psikolog Yasemin Erdal, İstanbul Esenyurt Üniversitesi Psikoloji Bölümü’nden mezun olmuştur.
              Ardından Ankara Yıldırım Beyazıt Üniversitesi Aile ve Evlilik Danışmanlığı Yüksek Lisans Programı’nda,
              <strong>“Aileden Gelen Sesler: Psikodinamik Evlilik Danışmanlığında Aktarımın İzini Sürmek”</strong>
              başlıklı projesiyle lisansüstü eğitimini tamamlamıştır.
            </p>

            <p>
              Lisans eğitimi süresince Klinik Psikoloji alanında staj yapmış; bunun yanı sıra kadın sığınma evleri,
              Çocuk Hizmetleri Genel Müdürlüğü’ne bağlı kurumlar (çocuk esirgeme kurumları) ve çocuk–gençlik
              cezaevlerinde
              gönüllü çalışmalar yürütmüştür. Bir sosyal sorumluluk derneği üyesi olarak, Adalet Bakanlığı’nın bir
              projesi
              kapsamında İstanbul’daki bir Çocuk ve Gençlik Kapalı Ceza İnfaz Kurumu’nda üç yıl boyunca gönüllü eğitmen
              olarak görev almıştır. Hâlen Psikososyal Destek Ekibi bünyesinde gönüllülük faaliyetlerine devam
              etmektedir.
            </p>

            <p>
              Psikanalitik kuramsal bilgi birikimini güçlendirmek amacıyla İstanbul Psikanaliz Derneği (İPD) ile
              İstanbul
              Psikanaliz Eğitim, Araştırma ve Geliştirme Derneği (PSİKE) tarafından düzenlenen pek çok seminer ve
              konferansa
              katılmıştır. Prof. Dr. Doğan Şahin tarafından verilen Aktarım Odaklı Psikoterapi (TFP) eğitimini
              tamamlamış;
              eğitim sonrasında yine Prof. Dr. Doğan Şahin tarafından yürütülen grup süpervizyonlarına düzenli olarak
              devam
              etmektedir. Ayrıca Psk. Dr. Hakan Kızıltan tarafından düzenlenen kuram, psikopatoloji ve psikoterapi
              içerikli
              Narsisizm Seminerlerine katılmıştır.
            </p>

            <p>
              Meslek yaşamı boyunca tüm süpervizyonlarını psikanalitik–psikodinamik yönelimle almıştır. Güncel olarak
              bireysel
              süpervizyonlarını Uzman Klinik Psikolog Kübra Nur Aslan ile sürdürmektedir. Online ve yüz yüze terapi
              görüşmelerini psikodinamik yönelimle gerçekleştirmektedir.
            </p>
          </div>


          <div class="d-flex gap-2">
            <a href="https://wa.me/905333431466" target="_blank" class="btn btn-green">
              <i class="fab fa-whatsapp me-2"></i>WhatsApp
            </a>
            <a href="#iletisim" class="btn btn-green" data-bs-dismiss="modal">
              <i class="far fa-calendar-check me-2"></i>Randevu Al
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const form = document.getElementById('randevuForm');
      const formMesaj = document.getElementById('formMesaj');
      const submitBtn = document.getElementById('submitBtn');
      const submitText = document.getElementById('submitText');
      const submitSpinner = document.getElementById('submitSpinner');

      form.addEventListener('submit', function (e) {
        e.preventDefault();

        // Form mesajını gizle
        formMesaj.classList.add('d-none');

        // Butonu devre dışı bırak ve loading göster
        submitBtn.disabled = true;
        submitText.textContent = 'Gönderiliyor...';
        submitSpinner.classList.remove('d-none');

        // Form verilerini topla
        const formData = new FormData(form);

        // AJAX isteği
        fetch('ajax.php', {
          method: 'POST',
          body: formData,
          headers: {
            'X-Requested-With': 'XMLHttpRequest'
          }
        })
          .then(response => response.text())
          .then(data => {
            // Butonu tekrar aktif et
            submitBtn.disabled = false;
            submitText.textContent = 'Randevu Talebini Gönder';
            submitSpinner.classList.add('d-none');

            // Mesajı göster
            formMesaj.classList.remove('d-none');

            if (data.trim() === 'Message sent!' || data.includes('Message sent!')) {
              formMesaj.className = 'alert alert-success';
              formMesaj.innerHTML = '<i class="fas fa-check-circle me-2"></i>Randevu talebiniz başarıyla gönderildi.';
              form.reset(); // Formu temizle
            } else {
              formMesaj.className = 'alert alert-danger';
              formMesaj.innerHTML = '<i class="fas fa-exclamation-circle me-2"></i>' + data;
            }

            // Mesajı 5 saniye sonra kaydır
            setTimeout(() => {
              formMesaj.classList.add('d-none');
            }, 5000);
          })
          .catch(error => {
            // Hata durumu
            submitBtn.disabled = false;
            submitText.textContent = 'Randevu Talebini Gönder';
            submitSpinner.classList.add('d-none');

            formMesaj.classList.remove('d-none');
            formMesaj.className = 'alert alert-danger';
            formMesaj.innerHTML = '<i class="fas fa-exclamation-circle me-2"></i>Bir hata oluştu: ' + error.message;

            console.error('Hata:', error);
          });
      });
    });
  </script>
</body>

</html>