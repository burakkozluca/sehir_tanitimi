<?php
if(isset($_POST['email']) && isset($_POST['sifre'])) {
   $email = $_POST['email'];
   $sifre = $_POST['sifre'];
 
   if(empty($email) || empty($sifre)) {
      echo 'Lütfen boş bırakmayın';
   } else {
      echo 'Girilen kullanıcı adı: ' . $email . ' şifre: ' . $sifre;
      echo "Giriş Başarılı"
   }
} else {
   echo 'Lütfen formu kullanın';
}
?>