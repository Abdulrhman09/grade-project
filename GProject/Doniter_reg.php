<?php 
//هنا استعنا في الملف اللذي يربط قاغدة البيانات مع الموقع
require 'file/connection.php';
require 'file/dregister.php';

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
        <!--صفحه المتبرع-->
<div class="user">
    <header class="user__header">
        <h1 class="user__title">تسجيل متبرع جديد</h1>
    </header>
    <form class="form" method="post">
        <div class="form__group">
            <input type="text" name="dfname" placeholder="الاسم الاول" class="form__input" />
        </div>
        <form class="form">
            <div class="form__group">
                <input type="text" name="dlname" placeholder="الاسم الاخير" class="form__input" />
            </div>
            <div class="form__group">
            <input type="email" name="dmail" placeholder="البريد الالكتروني" class="form__input" />
        </div>
        <div class="form__group">
            <input type="password" name="dpassword" placeholder="الرقم السري" class="form__input" required minlength="6" />
        </div>
        <form class="form">
                <div class="form__group">
                    <input type="tel" name="dphone" placeholder="رقم الجوال" class="form__input" required pattern="[0,6-9]{1}[0-9]{9,11}" title="Password must have start from 0,6,7,8 or 9 and must have 10 to 12 digit">
                </div>
        <div class="form__group">
            <input type="text"  name="dcity" placeholder="المدينة" class="form__input" />
        </div>
    <form class="form">
        <div class="form__group">
            <input type="text" name="duser_name"placeholder="الاسم المستخدم" class="form__input" />
        </div>
        <input type="submit" name="dregister" value="تسجيل الان" class="btn">
    </form>
</div>
</body>
</html>