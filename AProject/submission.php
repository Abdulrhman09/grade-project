<?php 
session_start();
if(!isset($_SESSION['user'])){
    header('Location: index.php');
    exit();
}


?>

<html>
    <head>
        <link rel="stylesheet" href="css/reg.css">
        <link rel="stylesheet" href="css/sty.css">

    </head>
    <body>
    <nav class="style-3">
  <ul class="menu-3">
  <li><a href="index.php">الصفحة الرئيسية</a></li>
  </ul>
</nav>

        <!--صفحه المستفيد-->
<div class="user">
    <header class="user__header">
        <h1 class="user__title">تقديم طلب</h1>
    </header>
    <form class="form">
        <form class="form">
            <div class="form__group">
                <input type="text" name="#" placeholder="اسم المستفيد" class="form__input" value=" <?php echo $_SESSION['user']['blname']?>" /> 
            </div>
            <div class="form__group">
                <input type="text" name="#" placeholder="عمر المستفيد" class="form__input" />
            </div>
            <div class="form__group">
                <input type="text" name="#" placeholder=" اسباب تملك هذا الجهاز " class="form__input" />
            </div>
        <form class="form">
        <div class="form__group">
        <label for="formFileMultiple" class="form-label">تقرير لحالة المستفيد (PDF)</label>
          <input type="file" name="report" class="form__input" placeholder="تقرير لحالة المستفيد  (PDF)" id="formFileMultiple" multiple value=" <?php echo $_SESSION['user']['report']?>"/>
        </div>
        <input type="submit" name="submit" value="تقديم الان" class="btn">
    </form>
</div>
</body>
</html>