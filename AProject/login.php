<?php
session_start();
require 'file/connection.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $buser_name = $_POST['user_name'];
    $bpassword = $_POST['password'];
 
    $sql = "SELECT * FROM beneficiary WHERE buser_name = '$buser_name' AND bpassword = '$bpassword'";
   

    $result = mysqli_query($conn , $sql);

    
    
    if($result){
        
    
        if($result && mysqli_num_rows($result) > 0){ 
    
            $user_data = mysqli_fetch_assoc($result);
           
    
            if($user_data['bpassword'] === $bpassword && $user_data['buser_name'] === $buser_name)
            { 
                  $_SESSION['user'] = $user_data;
                  header("location: index.php");
                  echo "<p style='display:block;text-align:center;color:black'> تم تسجيل الدخول بنجاح </p>";
            }
    
        }else{ 
            $sql = "SELECT * FROM donor WHERE duser_name = '$buser_name' AND dpassword = '$bpassword'";
            $result = mysqli_query($conn , $sql);
            if($result && mysqli_num_rows($result) > 0){ 
    
                $user_data = mysqli_fetch_assoc($result);
               
                
        
                if($user_data['dpassword'] === $bpassword && $user_data['duser_name'] === $buser_name)
                { 
                    $_SESSION['donor'] = $user_data;
                      header("location: index.php");
                      echo "<p style='display:block;text-align:center;color:black'> تم تسجيل الدخول بنجاح </p>";
                }
        
            }echo"<p style='display:block;text-align:center;color:black'> عذرا اسم المستخدم او الرمز غير صحيح  <br></p>";
        }
        
    }
    
    
}
    
    


?>
<html>
<head>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <link rel="stylesheet" href="css/mm.css">


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
</script>
<link rel="stylesheet" href="css/style-3.css">
<link rel="stylesheet" href="css/style.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/reg.css">

<meta charset="utf-8">
<meta name="description" content="موقع تبرع للاجهزة"
</head>
<body>
<style>
	/* Common Styles - Can ignore*/
	body{
	
	  text-align:center;
	  font-family: 'Oswald', sans-serif;
	  font-size: 18px;
	  height: 100vh;
   
	}
	h1{
	  color:#212121;
	  font-weight:300px;
    font-family:'Amiri', serif;
	}
.cards{
  border: 2px rgb(243, 245, 245);
  background-color: rgba(255, 255, 255, 0.993);
  box-shadow: 0 3px 6px rgba(3, 47, 243, 0.16), 0 3px 6px rgba(0,0,0,0.23);

}
.btn-primary{
  background-color: #458aaa;
}
  
	</style>
  <!--nav bar-->
<header>
<nav class="style-3">
  <ul class="menu-3">
    
  <li><a href="donitnow.php">تبرع الان</a></li>
  <li><a href="beneficier_reg.php">تسجيل مستفيد</a></li>
  <li><a href="Doniter_reg.php">تسجيل متبرع</a></li>
  <li><a href="login.php">تسجيل الدخول</a></li>
  <li><a href="index.php">الصفحة الرئيسية</a></li>

  </ul>
</nav>
</header>
<h1 class="title">تسجيل الدخول</h1>
<div class="border"></div>
					
<!--تسجيل الدخول-->
<div class="user">
  <header class="user__header">
  </header>
  <form action ="<?=$_SERVER['PHP_SELF']?>" method="POST" class="form" >
          <form class="form">
          <div class="form__group">
          <input type="text" class="form__input" name="user_name" placeholder="أسم المستخدم" >
          <div id="emailHelp" class=""></div>
          </div>
      <form class="form">
              <div class="form__group">
              <input type="password" name="password" placeholder="رقم السري" class="form__input" required minlength="6">
              </div>
      <input type="submit" name="login" value="تسجيل الدخول" class="btn">
      <a class="forget" href="ResetPassword.html">نسيت كلمة المرور؟</a>
  </form>
</div>
<div class="w3hubs-footer">
   	  
    <div class="w3hubs-icon">
      <ul>
        <li><a href="#" target="black"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#" target="black"><i class="fa fa-google-plus"></i></a></li>
        <li><a href="#" target="black"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#" target="black"><i class="fa fa-instagram"></i></a></li>
        <li><a href="#" target="black"><i class="fa fa-youtube-play"></i></a></li>
      </ul>
    </div>
    
    <div class="w3hubs-nav">
    
   
  <h5> موقع يستطيع من خلاله الاشخاص الذي لديهم اجهزة طبية ويريدون التبرع بها ويسهل طريقة عرض الاجهزة بحيث يكون اسهل للمستفيد بالحصول على الجهاز الذي يريده</h5>
    </div>
  
  
    <div class="w3hubs-nav2">
      <ul>
        
        <li><a href="#" title="To Top"><i class="fa fa-chevron-down"></i></a></li>
        
      </ul>
    </div>
  </div>
  
  <div class="footer-end">
    <p>الحقوق محفوظة © 2021
  </p>
  </div>
  </body>
  </html>