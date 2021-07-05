<?php

require 'file/connection.php';
require 'file/bregister.php';

?>
<!DOCTYPE ><html>
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
        <form class="form"action=""method="POST" enctype="multipart/form-data">
<div class="user">
    <header class="user__header">
        <h1 class="user__title">تسجيل مستفيد جديد</h1>
    </header>
    
        <div class="form__group">
            <input type="text" name="bfname" placeholder="الاسم الاول" class="form__input"  />
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
        <label for="formFileMultiple" class="form-label">ارفاق التقارير الطبية (PDF)</label>
          <input type="file" name="report[]" class="form__input" placeholder="ارفاق التقارير الطبية (PDF)" id="formFileMultiple" multiple/>
        </div>
        
    
    
        <div class="form__group">
            <input type="text" name="buser_name" placeholder="الاسم المستخدم" class="form__input" />
            <button  type="submit" name="bregister" value="send" placeholder="تسجيل" class="btn">
            </form>
        </div>
</div>
</body>
</html>