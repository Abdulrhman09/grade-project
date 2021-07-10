<?php
include 'file/connection.php';

//$user_data = check_login($con);



$sql = "SELECT * FROM device";

$stmt = mysqli_query($conn,$sql)
?>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
</script>
<link rel="stylesheet" href="css/style-3.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
.hero {
    width: 100vw;
    height: 100vh;
    
    display: flex;
    justify-content: center;
    align-items: center;
    
    text-align: center;
}
.hero h1 {
    font-size: 5em;
    
    margin-top: 0;
    margin-bottom: 0.5em;
}

.hero {
  width: 99vw;
    height: 100vh;
    
    display: flex;
    justify-content: center;
    align-items: center;
    
    text-align: center;
    color: white;
    
    background-image: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)), url('https://www.nist.gov/sites/default/files/styles/960_x_960_limit/public/images/2020/10/22/medical-device-blogFeaturedImage-763-2.png?itok=kVxRV8J1');
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
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
</nav><!--ا صورة-->
<section class="hero">
  <div class="hero-inner">
      <h1>موقع لتبرع بالاجهزة</h1>
      <div class="border"></div>
      <h2>(وَمَنْ أَحْيَاهَا فَكَأَنَّمَا أَحْيَا النَّاسَ جَمِيعًا)</h2>
  </div>
</section>

<!--تقسيمات الشاشه-->
<div class="container">
  <div class="row">
    <div class="col">
    </div>
    <div class="col">
    </div>
    <div class="col">
    </div>
  <!-- بطاقات العرض -->
<div class="row row-cols-1 row-cols-md-2 g-4">
<?php while($row = $stmt->fetch_assoc()): ?>
  <div class="col">
    <div class="cards">
    <img src="./file/pics/<?=json_decode($row['device_pic'])[0]?>" class="phcard" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?=$row["dvname"]?></h5>
        <p class="card-text"><?=$row["description"]?></p>
        <a href="submission.php" class="btn btn-primary">تقديم طلب</a>
      </div>
    </div>
  </div>
  <?php  endwhile;?>
  <div class="col">
    <div class="cards">
      <img src="img/us.jpg" class="phcard" alt="User">
      <div class="card-body">
        <h5 class="card-title">كرسي متحرك</h5>
        <p class="card-text">كرسي متخصص لذوى الاحتياجات الخاصه</p>
        <a href="#" class="btn btn-primary">تقديم طلب</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="cards">
      <img src="img/us.jpg" class="phcard" alt="..."  >
      <div class="card-body">
        <h5 class="card-title">كرسي متحرك</h5>
        <p class="card-text">كرسي متخصص لذوى الاحتياجات الخاصه</p>
        <a href="#" class="btn btn-primary">تقديم طلب</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="cards">
      <img src="img/us.jpg" class="phcard" alt="..." >
      <div class="card-body">
        <h5 class="card-title">كرسي متحرك</h5>
        <p class="card-text">كرسي متخصص لذو الاحتياجات الخاصه</p>
        <a href="#" class="btn btn-primary">تقديم طلب</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="cards">
      <img src="img/us.jpg" class="phcard" alt="..." >
      <div class="card-body">
        <h5 class="card-title">كرسي متحرك</h5>
        <p class="card-text">كرسي متخصص لذوى الاحتياجات الخاصه</p>
        <a href="#" class="btn btn-primary">تقديم طلب</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="cards">
      <img src="img/us.jpg" class="phcard" alt="..." >
      <div class="card-body">
        <h5 class="card-title">كرسي متحرك</h5>
        <p class="card-text">كرسي متخصص لذو الاحتياجات الخاصه</p>
        <a href="#" class="btn btn-primary">تقديم طلب</a>
      </div>
    </div>
  </div>
</div>
<!--تواصل معنا-->
<div class="contact-section">
<br><br><br>
  <h1>تواصل معنا</h1>
  <div class="border"></div>
  <form class="contact-form" action="index.php" method="post">
    <input type="text" class="contact-form-text" placeholder="الاسم">
    <input type="email" class="contact-form-text" placeholder="البريد الالكتروني">
    <input type="text" class="contact-form-text" placeholder="رقم الجوال">
    <textarea class="contact-form-text" placeholder="الرسالة"></textarea>
    <input type="submit" a href="#" class="contact-form-btn" value="ارسال">

  </form>
</div>

  </div>
</div>
  <!--footer bar-->

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