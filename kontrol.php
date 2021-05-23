<?php
$email_kontrol="burak.kozluca@ogr.sakarya.edu.tr";
$sifre_kontrol="b191210044";
if(isset($_POST['email']) && isset($_POST['sifre'])) {
   $email = $_POST['email'];
   $sifre = $_POST['sifre'];
 
   if(($email == $email_kontrol)&&($sifre == $sifre_kontrol)) {
      echo 'Hoşgeldiniz!  '. $sifre;
      echo " \nAnasayfaya yönlendiriliyorsunuz!";
      header("Refresh: 2; url=index.html");
      exit;
   } 
   else {
      
      echo "Giriş Başarısız!";
      echo "\nGiriş Sayfasına yönlendiriliyorsunuz!";
      header("Refresh: 2; url=giris.html");
      exit;
   }
} 
else {
   echo 'Lütfen formu kullanın';
   echo "\nGiriş Sayfasına yönlendiriliyorsunuz!";
   header("Refresh: 2; url=giris.html");
   exit;
}
?>