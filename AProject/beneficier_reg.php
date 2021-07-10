<?php

require 'file/connection.php';
require 'file/bregister.php';

?>

<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
</script>
<link rel="stylesheet" href="css/style-3.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/reg.css">

<meta charset="utf-8">
<meta name="description" content="موقع تبرع للاجهزة">
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
<h1 class="title">تسجيل مستفيد</h1>
<div class="border"></div>

        <!--صفحه المستفيد-->
        <form class="form"action=""method="POST" enctype="multipart/form-data">
        
        <div class="user">
     
          
              <div class="form__group">
                  <input type="text" name="bfname" placeholder="الاسم الاول" class="form__input" />
              </div>
              
                  <div class="form__group">
                      <input type="text" name="blname" placeholder="الاسم الاخير" class="form__input" />
                  </div>
                  <div class="form__group">
                  <input type="email" name="bmail" placeholder="البريد الالكتروني" class="form__input" />
              </div>
              <div class="form__group">
                  <input type="password" name="bpassword" placeholder="الرقم السري" class="form__input" required minlength="6" />
              </div>
              
                      <div class="form__group">
                          <input type="tel" name="bphone" placeholder="رقم الجوال" class="form__input" required pattern="[0,6-9]{1}[0-9]{9,11}" title="Password must have start from 0,6,7,8 or 9 and must have 10 to 12 digit">
                      </div>
              <div class="form__group">
                  <input type="text"  name="bcity" placeholder="المدينة" class="form__input" />
              </div>
          
              <div class="form__group">
                  <input type="text" name="buser_name" placeholder="الاسم المستخدم" class="form__input" />
              </div>
              
              <div class="form__group">
              <label for="formFileMultiple" class="form-label">ارفاق التقارير الطبية (PDF)</label>
                <input type="file" name="report[]" class="form__input" placeholder="ارفاق التقارير الطبية (PDF)" id="formFileMultiple" multiple/>
              </div>
              <input type="submit" name="bregister" value="تسجيل الان" class="btn">
          </form>
      </div>

<!-- footer-->

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