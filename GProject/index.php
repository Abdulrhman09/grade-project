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
<meta charset="utf-8">
<meta name="description" content="مشروع خيري للتبرع بالاجهزة ">
</head>
<body>
<style>
	/* Common Styles - Can ignore*/
	body{
	  
    background: #458aaa 10% ;
        background-size: 600% 350%;
	  padding:20px;
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
	.spacer {
	 padding: 30px 0;
	}
	</style>
  <!--nav bar-->
<header>
<h1>مشروع خيري للتبرع بالاجهزة</h1>
<br>
<nav class="style-3">
  <ul class="menu-3">
  <li><a href="About.php">نبذة عن الموقع</a></li>
  <li><a href="Donitnow.php">تبرع الان</a></li>
  <li><a href="beneficier_reg.php">تسجيل مستفيد</a></li>
  <li><a href="Doniter_reg.php">تسجيل متبرع</a></li>
  <li><a href="login.php">تسجيل الدخول</a></li>
  <li><a href="index.php">الصفحة الرئيسية</a></li>
  </ul>
</nav>
</header>

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
  <?php
    // var_dump($data);exit;
  ?>
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
        <a href="submission.php" class="btn btn-primary">تقديم طلب</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="cards">
      <img src="img/us.jpg" class="phcard" alt="..."  >
      <div class="card-body">
        <h5 class="card-title">كرسي متحرك</h5>
        <p class="card-text">كرسي متخصص لذوى الاحتياجات الخاصه</p>
        <a href="submission.php" class="btn btn-primary">تقديم طلب</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="cards">
      <img src="img/us.jpg" class="phcard" alt="..." >
      <div class="card-body">
        <h5 class="card-title">كرسي متحرك</h5>
        <p class="card-text">كرسي متخصص لذو الاحتياجات الخاصه</p>
        <a href="submission.php" class="btn btn-primary">تقديم طلب</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="cards">
      <img src="img/cr.jpg" class="phcard" alt="..." >
      <div class="card-body">
        <h5 class="card-title">كرسي متحرك</h5>
        <p class="card-text">كرسي متخصص لذوى الاحتياجات الخاصه</p>
        <a href="submission.php" class="btn btn-primary">تقديم طلب</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="cards">
      <img src="img/us.jpg" class="phcard" alt="..." >
      <div class="card-body">
        <h5 class="card-title">كرسي متحرك</h5>
        <p class="card-text">كرسي متخصص لذو الاحتياجات الخاصه</p>
        <a href="submission.php" class="btn btn-primary">تقديم طلب</a>
      </div>
    </div>
  </div>
</div>
<!--نبذة عن الموقع-->





<!--تواصل معنا-->
<div class="contact-section">
<br><br><br>
  <h1>تواصل معنا</h1>
  <div class="border"></div>
  <form class="contact-form" action="index.html" method="post">
    <input type="text" class="contact-form-text" placeholder="الاسم">
    <input type="email" class="contact-form-text" placeholder="البريد الالكتروني">
    <input type="text" class="contact-form-text" placeholder="رقم الجوال">
    <textarea class="contact-form-text" placeholder="الرسالة"></textarea>
    <input type="submit" a href="#" class="contact-form-btn" value="ارسال">

  </form>
</div>

  </div>
</div>

</body>
</html>