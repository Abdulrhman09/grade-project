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
        <link rel="stylesheet" href="css/reg.css">
        <link rel="stylesheet" href="css/sty.css">
    </head>
    <body>
    <nav class="style-3">
  <ul class="menu-3">
  <li><a href="index.php">الصفحة الرئيسية</a></li>
  </ul>
</nav>
<!--صفحه تسجيل دخول-->
<div class="user">
    <header class="user__header">
        <h1 class="user__title">تسجيل دخول</h1>
    </header>
            <form action ="<?=$_SERVER['PHP_SELF']?>" method="POST" class="form" >
            <div class="form__group">
            <input type="text" class="form__input" name= "user_name" placeholder=" اسم المستدخدم " >
            
            </div>
      
                <div class="form__group">
                <input type="password" name="password" placeholder="رقم السري" class="form__input" required minlength="6">
                </div>
        <input type="submit" name="login" value="تسجيل الدخول" class="btn">
        <a href="ResetPassword.php">نسيت كلمة المرور؟</a>
    </form>
</div>
</body>
</html>