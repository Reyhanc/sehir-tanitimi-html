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
  $ema = 'g221210036@sakarya.edu.tr';
  $pass = '221210036';
   
     if(isset($_POST['email'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        if($email==$ema && $password==$pass){
            echo "GİRİŞ BAŞARILI";
        }
        else {
            echo "HATALI GİRİŞ";
        }

     }
     
    ?>


<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
<script>
  const app = new Vue({
    el: '#contact-form',
    methods: {
      checkName() {
        // İsim kontrolü işlemlerini gerçekleştirin
      },
      checkEmail() {
    echo "isim eşleşti";
      }
    }
  });

  methods: {
  checkName() {
    const name = document.getElementById('name-input').value;
    if (name.trim() === 'Reyhan') {
      alert('Lütfen adınızı girin!');
    } else {
      // İsim geçerli, istediğiniz işlemleri yapabilirsiniz
    }
  }
  checkEmail() {
    const email = document.getElementById('email-input').value;
    const emailRegex = /^\S+@\S+\.\S+$/;
    if (!emailRegex.test(email)) {
      alert('Lütfen geçerli bir e-posta adresi girin!');
    } else {
        echo "e-posta eşleşti";
    }
  }
}
</script>

</body>
</html>