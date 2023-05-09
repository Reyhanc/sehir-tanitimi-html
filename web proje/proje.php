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
</body>
</html>