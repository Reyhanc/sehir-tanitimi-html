<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
  
<?php

function girisKontrol();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
// Kullanıcıdan gelen e-posta ve şifre bilgilerini alın
$email = $_POST['email'];
$password = $_POST['password'];

// E-posta ve şifre kontrolü yapın
if ($email === 'g221210036@ssakarya.edu.tr' && $password === 'g221210036') {
    // E-posta ve şifre doğru ise hoşgeldin mesajı gösterin
    echo 'Hoşgeldiniz, ' . $email;
} else {
    // E-posta ve şifre yanlış ise hata mesajı gösterin
    echo 'E-posta veya şifre hatalı';
}
}
?>



</body>
</html>