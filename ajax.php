<?php
header('Content-Type: application/json; charset=utf-8');

// Hata raporlamayı kapat (production'da)
error_reporting(E_ALL);
ini_set('display_errors', 0);

// CORS ayarları (gerekirse)
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

// PHPMailer'ı dahil et
require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';
require_once 'PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Yanıt fonksiyonu
function sendResponse($success, $message) {
    echo json_encode([
        'success' => $success,
        'message' => $message
    ], JSON_UNESCAPED_UNICODE);
    exit;
}

// POST kontrolü
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    sendResponse(false, 'Geçersiz istek metodu.');
}

// Form verilerini al ve temizle
$adsoyad = isset($_POST['adsoyad']) ? trim($_POST['adsoyad']) : '';
$telefon = isset($_POST['telefon']) ? trim($_POST['telefon']) : '';
$konu = isset($_POST['konu']) ? trim($_POST['konu']) : '';
$mesaj = isset($_POST['mesaj']) ? trim($_POST['mesaj']) : '';
$kvkk = isset($_POST['kvkk']) ? true : false;

// Validasyon
if (empty($adsoyad)) {
    sendResponse(false, 'Ad Soyad alanı zorunludur.');
}

if (empty($telefon)) {
    sendResponse(false, 'Telefon numarası zorunludur.');
}

// Telefon formatı kontrolü (basit)
if (!preg_match('/^[0-9\s\+\-\(\)]{10,15}$/', $telefon)) {
    sendResponse(false, 'Geçerli bir telefon numarası giriniz.');
}

if (empty($konu)) {
    sendResponse(false, 'Lütfen bir konu seçiniz.');
}

if (empty($mesaj)) {
    sendResponse(false, 'Mesaj alanı zorunludur.');
}

if (!$kvkk) {
    sendResponse(false, 'Gizlilik politikasını kabul etmelisiniz.');
}

// Email ayarları
$toEmail = 'info@psikologyaseminerdal.com'; // Alıcı email
$fromEmail = 'noreply@psikologyaseminerdal.com'; // Gönderen email (kendi domain'iniz)
$fromName = 'Psikolog Yasemin Erdal Web Sitesi';

// Email içeriği
$emailSubject = 'Yeni Randevu Talebi: ' . $konu;
$emailBody = "
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background-color: #3A6B58; color: white; padding: 20px; text-align: center; }
        .content { background-color: #f9f9f9; padding: 20px; }
        .field { margin-bottom: 15px; }
        .label { font-weight: bold; color: #3A6B58; }
        .value { margin-top: 5px; }
        .footer { text-align: center; padding: 20px; color: #777; font-size: 12px; }
    </style>
</head>
<body>
    <div class='container'>
        <div class='header'>
            <h2>Yeni Randevu Talebi</h2>
        </div>
        <div class='content'>
            <div class='field'>
                <div class='label'>Ad Soyad:</div>
                <div class='value'>" . htmlspecialchars($adsoyad) . "</div>
            </div>
            <div class='field'>
                <div class='label'>Telefon:</div>
                <div class='value'>" . htmlspecialchars($telefon) . "</div>
            </div>
            <div class='field'>
                <div class='label'>Konu:</div>
                <div class='value'>" . htmlspecialchars($konu) . "</div>
            </div>
            <div class='field'>
                <div class='label'>Mesaj:</div>
                <div class='value'>" . nl2br(htmlspecialchars($mesaj)) . "</div>
            </div>
            <div class='field'>
                <div class='label'>KVKK Onayı:</div>
                <div class='value'>Kabul Edildi</div>
            </div>
        </div>
        <div class='footer'>
            <p>Bu email psikologyaseminerdal.com web sitesinden gönderilmiştir.</p>
            <p>Tarih: " . date('d.m.Y H:i') . "</p>
        </div>
    </div>
</body>
</html>
";

// PHPMailer ile email gönder
$mail = new PHPMailer(true);

try {
    // SMTP ayarları (kendi SMTP ayarlarınızı buraya yazın)
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // SMTP sunucu adresi
    $mail->SMTPAuth = true;
    $mail->Username = 'psikologyaseminerdal@gmail.com'; // SMTP kullanıcı adı
    $mail->Password = 'cipnshsltdroijys'; // SMTP şifresi (Gmail için App Password)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    $mail->CharSet = 'UTF-8';

    // Gönderen ve alıcı
    $mail->setFrom($fromEmail, $fromName);
    $mail->addAddress($toEmail);
    
    // İçerik
    $mail->isHTML(true);
    $mail->Subject = $emailSubject;
    $mail->Body = $emailBody;
    $mail->AltBody = strip_tags($emailBody); // Plain text versiyonu

    $mail->send();
    sendResponse(true, 'Randevu talebiniz başarıyla gönderildi. En kısa sürede sizinle iletişime geçeceğiz.');

} catch (Exception $e) {
    // Hata loglama (production'da)
    error_log("Email gönderme hatası: " . $mail->ErrorInfo);
    sendResponse(false, 'Email gönderilirken bir hata oluştu. Lütfen daha sonra tekrar deneyin veya telefon ile iletişime geçin.');
}
?>
