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

  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="container" style="margin-bottom: 90px; margin-top: 50px;">
            <h1 style="font-weight: 600; font-size: 20px; display: block;">KİŞİSEL VERİLERİN KORUNMASI KANUNU
              ÇERÇEVESİNDE AYDINLATMA METNİ</h1>
            <h5 class="mt-4">VERİ SORUMLUSU</h5>
            <div class="mt-3 ml-4">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>PSİKOLOG YASEMİN TEKNOLOJİ YAZILIM DANIŞMANLIK
                HİZMETLERİ REKLAM TİCARET LİMİTED ŞİRKETİ</b> (Bundan sonra “Şirket” olarak anılacaktır), 6698 sayılı
              Kişisel Verilerin Korunması Kanunu (Bundan sonra “KVKK” olarak anılacaktır) ve sair mevzuatlar uyarınca
              “Veri Sorumlusu” olup, kişisel verilerinizi aşağıda açıklanan kapsamda ve KVKK uyarınca mevzuat tarafından
              emredilen sınırlar çerçevesinde işlemektedir. Bununla birlikte, Şirketimizin aşağıda yer alan iletişim
              bilgilerinden tarafımıza ulaşmanız mümkündür.

              <ul class="ml-4 mt-3">
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
            <h5 class="mt-4">KİŞİSEL VERİLERİN HANGİ AMAÇLA İŞLENECEĞİ</h5>
            <div class="mt-3 ml-4">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aşağıda belirtilen veri kategorisindeki kişisel
              verileriniz KVKK Madde 4.’de belirtilen genel ilkeler çerçevesinde ve KVKK Madde 5 Kişisel Verilerin
              İşlenme Şartları ile KVKK Madde 6 Özel Nitelikli Kişisel Verilerin İşlenme Şartları kapsamında
              karşılarında açıklanan işleme amaçları doğrultusunda işlenmektedir:
            </div>
            <div class="table-responsive mt-5">
              <table class="table" border="1">
                <thead class="table-secondary">
                  <tr>
                    <th>Veri Kategorisi</th>
                    <th>Veri İşleme Amaçları</th>
                    <th>Hukuki Sebep</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>İletişim</td>
                    <td>
                      <ul>
                        <li>İletişim Faaliyetlerinin Yürütülmesi</li>
                        <li>İş Faaliyetlerinin Yürütülmesi / Denetimi</li>
                      </ul>
                    </td>
                    <td>
                      <ul>
                        <li>Sözleşmenin İfası</li>
                      </ul>
                    </td>
                  </tr>
                  <tr>
                    <td>İletişim</td>
                    <td>
                      <ul>
                        <li>İletişim Faaliyetlerinin Yürütülmesi *</li>
                        <li>İş Faaliyetlerinin Yürütülmesi / Denetimi *</li>
                        <li>Müşteri İlişkileri Yönetimi Süreçlerinin Yürütülmesi</li>
                        <li>Müşteri Memnuniyetine Yönelik Aktivitelerin Yürütülmesi</li>
                        <li>Pazarlama Analiz Çalışmalarının Yürütülmesi</li>
                        <li>Performans Değerlendirme Süreçlerinin Yürütülmesi</li>
                        <li>Reklam / Kampanya / Promosyon Süreçlerinin Yürütülmesi</li>
                      </ul>
                    </td>
                    <td>
                      <ul>
                        <li>
                          Açık Rıza
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr>
                    <td>Sağlık Verisi</td>
                    <td>
                      <ul>
                        <li>Müşteri İlişkileri Yönetimi Süreçlerinin Yürütülmesi</li>
                        <li>Müşteri Memnuniyetine Yönelik Aktivitelerin Yürütülmesi</li>
                        <li>Pazarlama Analiz Çalışmalarının Yürütülmesi</li>
                        <li>Performans Değerlendirme Süreçlerinin Yürütülmesi</li>
                        <li>Reklam / Kampanya / Promosyon Süreçlerinin Yürütülmesi</li>
                      </ul>
                    </td>
                    <td>
                      <ul>
                        <li>
                          Açık Rıza
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <h5 class="mt-4">İŞLENEN KİŞİSEL VERİLERİN KİMLERE VE HANGİ AMAÇLA AKTARILABİLECEĞİ</h5>
            <div class="mt-3 ml-4">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kişisel verileriniz işbu Aydınlatma Metni’nin 2.
              Maddesinde yer alan amaçlarla, başta T.C. Anayasası ve KVKK olmak üzere, mevzuata uygun olarak, KVKK’nın
              8. maddesinde belirtilen kişisel verilerin aktarılması hükmü çerçevesinde Yetkili Kamu Kurum ve
              Kuruluşları olan alıcı gruplarına yurtiçinde aktarılabilecektir.<br><br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* İletişim yöntemlerinden sunucuları yurtdışında bulunan
              (Google Meet, Zoom, Whatsapp, Skype) iletişim hizmetini seçerseniz yurtdışına veri aktarımı olacağından
              söz konusu aktarım faaliyeti KVKK’nın 5.Maddesisinin 1.fıkrasına göre Açık Rıza şartına dayanarak
              gerçekleşecektir.
            </div>
            <h5 class="mt-4">KİŞİSEL VERİ TOPLAMANIN YÖNTEMİ VE HUKUKİ SEBEBİ</h5>
            <div class="mt-3 ml-4">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Şirketimiz kişisel verilerinizi işbu Aydınlatma Metni’nin
              2. Maddesinde yer verilen amaçlar doğrultusunda ve 3. Maddesinde yer verilen alıcı gruplarına KVKK’nın 5,
              6 ve 8. madde hükümlerinde öngörülen şekilde; Açık Rıza Alınması hukuki sebeplerine dayanarak elektronik
              ortamlarda toplamakta, işlemekte ve muhafaza etmektedir.
            </div>
            <h5 class="mt-4">KVKK’NIN 11. MADDESİ KAPSAMINDAKİ HAKLARINIZ VE BAŞVURUNUZ</h5>
            <div class="mt-3 ml-4">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kişisel Verilerinizin sahibi olarak KVKK uyarınca “ilgili
              kişi” sıfatına haizsiniz. KVKK’nın 11. Maddesi kapsamında, ilgili kişi olarak:
              <ul>
                <li>Kişisel verilerinizin işlenip işlenmediğini öğrenme,</li>
                <li>Kişisel verileriniz işlenmişse buna ilişkin bilgi talep etme,</li>
                <li>Kişisel verilerinizin işlenme amacını ve bunların amacına uygun kullanılıp kullanılmadığını öğrenme,
                </li>
                <li>Yurt içinde veya yurt dışında kişisel verilerinizin aktarıldığı üçüncü kişileri bilme,</li>
                <li>Kişisel verilerinizin eksik veya yanlış işlenmiş olması hâlinde bunların düzeltilmesini isteme ve bu
                  kapsamda yapılan işlemin kişisel verilerinizin aktarıldığı üçüncü kişilere bildirilmesini isteme,</li>
                <li>KVKK ile ilgili diğer kanun ve sair mevzuat hükümlerine uygun olarak işlenmiş olmasına rağmen,
                  işlenmesini gerektiren sebeplerin ortadan kalkması hâlinde, KVKK Madde 7’de öngörülen şartlar
                  çerçevesinde kişisel verilerinizin silinmesini veya yok edilmesini isteme ve bu kapsamda yapılan
                  işlemin kişisel verilerinizin aktarıldığı üçüncü kişilere bildirilmesini isteme,</li>
                <li>İşlenen verilerin münhasıran otomatik sistemler vasıtasıyla analiz edilmesi suretiyle şahsınız
                  aleyhine bir sonucun ortaya çıkmasına itiraz etme,</li>
                <li>
                  Kişisel verilerinizin kanuna aykırı olarak işlenmesi sebebiyle zarara uğramanız hâlinde zararın
                  giderilmesini talep etme,
                </li>
              </ul>
              haklarına sahipsiniz.<br><br>

              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bu çerçevede, KVKK’nın 11. Maddesinde ilgili kişilere
              tanınan haklar kapsamında, bahse konu haklarınıza ilişkin taleplerinizi bize iletmeniz durumunda,
              Şirketimiz, talebin niteliğine göre başvurunuzu en geç otuz gün içerisinde en kısa sürede
              sonuçlandıracaktır. İşlemin ayrıca bir maliyeti gerektirmesi hâlinde, Şirketimiz tarafından Kişisel
              Verileri Koruma Kurulunca belirlenen tarifedeki ücretin tarafınızdan alınabileceği hususunu da ayrıca
              bildiririz. Başvurunuza, Şirketimiz tarafından KVKK ve <b>Veri Sorumlusuna Başvuru Usul ve Esasları
                Hakkında Tebliğ</b> kapsamında tüm sorumluluklarımıza uyarak, tüm şekli ve usuli şartlar sağlanarak
              cevap verilecektir.
            </div>
            <br>

            <div class="mt-3 ml-4">
              <ul>
                <li><b>Şirket</b> : PSİKOLOG YASEMİN Teknoloji Yazılım Danışmanlık Hizmetleri Reklam Ticaret Limited
                  Şirketi
                </li>
                <li><b>Adres</b> : İLKBAHAR MAH. GÜNEYPARK KÜME EVLER NO: 19 B İÇ KAPI NO: 31 ÇANKAYA/ ANKARA
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
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