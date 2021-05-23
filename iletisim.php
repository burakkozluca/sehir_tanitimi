<?php
    echo "BİLGİLER\n" . '<br>';
    echo "Adınız : ". $_POST['ad'] .'<br>'; 
    echo "Soyadınız : ". $_POST['soyad'] .'<br>';
    echo "E-mail adresiniz : ". $_POST['mail'] .'<br>';
    echo "Telefon numaranız : ". $_POST['telefon'] .'<br>';
    echo "Ülke : ". $_POST['ulke'] .'<br>';
    echo "Cinsiyetiniz : ". $_POST['cinsiyet'] .'<br>';
    echo "Diller : ". $_POST['lang1']." ". $_POST['lang2']." ". $_POST['lang3'] .'<br>';
    echo "Mesajınız : ". $_POST['subject'] .'<br>';
?>