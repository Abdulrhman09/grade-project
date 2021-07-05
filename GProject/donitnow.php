<?php
require "file/connection.php";
require "file/image.php";
session_start();
$error ='';
$files_up='';

if(!isset($_SESSION['donor'])){
    header('Location: index.php');
    exit();
}


if(empty($_POST["dvname"]) ||
empty($_POST["description"]) ||
empty($_POST["device_type"])||
count($_FILES) == 0 )
echo "<p style='display:block;text-align:center;color:black'> .الرجاء ادخال القيم المطلوبة </p>";
else{

    if(strlen($_POST["dvname"]) <=4 )
    
    { $error  = "<p style='display:block;text-align:center;color:black'> اسم الجهاز يجب ان يكون اكثر من اربع احرف او ارقام <br></p>";}
    
    if(!preg_match('/^[a-zA-Z0-9]+$/',$_POST['dvname']))
    
    { $error .= "<p style='display:block;text-align:center;color:black'> اسم الجهاز لايجب ان يحتوي على رموز خاصة <br></p>"; }
    
    
    if(empty($error))
    {
        include "upload.php";
        $files_up =json_encode($tmpJSon);
        
        $dvname = mysqli_real_escape_string($conn , $_POST["dvname"]); 
        $description = mysqli_real_escape_string($conn , $_POST["description"]);
        $device_type = mysqli_real_escape_string($conn , $_POST["device_type"]);
        $device_pic = mysqli_real_escape_string($conn ,$files_up);
       
    
    
    $req = "INSERT INTO device(dvname, description, device_type, device_pic) VALUES ('$dvname','$description', '$device_type','$device_pic')";
    
    $insuser = mysqli_query($conn , $req);
    if($insuser)

{

	echo "<p style='display:block;text-align:center;color:black'>تم التبرع بنجاح <br></p>";
header("location: index.php");
}
else echo "<p style='display:block;text-align:center;color:black'>".mysqli_error($conn)."</p>";



}
}
echo $error;

// if($_SERVER['REQUEST_METHOD'] == 'POST'){
//     var_dump($_POST);
//     var_dump($_FILES);
//     exit;
// }

?>

<!DOCTYPE ><html>
    <head>
        <link rel="stylesheet" href="css/reg.css">
        <link rel="stylesheet" href="css/sty.css">
    </head>
    <body>
    <header>
    <nav class="style-3">
  <ul class="donor">
  <li><a href="index.php">الصفحة الرئيسية</a></li>
  </ul>
</nav>
      <!--صفحه تبرع الان-->
<div class="donor">
    <header class="user__header">
        <h1 class="user__title">تبرع الان</h1>
    </header>
    <form class="form" action="" method="POST" enctype="multipart/form-data">
        <div class="form__group">
            <input type="text" name="dvname" placeholder="اسم الجهاز" class="form__input" />
        </div>
        
            <div class="form__group">
                <input type="text" name="description" placeholder="وصف الجهاز" class="form__input" />
            </div>
           
            <div class="form__group">
                <input type="text" name="device_type" placeholder="نوع الحهاز" class="form__input" />
            </div>
            <div class="form__group">
            <input type="email" name="email" placeholder="البريد الالكتروني" class="form__input" value="<?php echo $_SESSION['donor']['dmail']?> " />
        </div>
        
                <div class="form__group">
                    <input type="tel" name="phone" placeholder="رقم الجوال" value="<?php echo $_SESSION['donor']['dphone']?> "/>
                </div>
        <div class="form__group">
            <input type="text"  name="city" placeholder="المدينة" class="form__input" value="<?php echo $_SESSION['donor']['dcity']?> " />
        </div>
        
        <div class="form__group">
        <label for="formFileMultiple" class="form-label">ارفاق صور الجهاز </label>
          <input type="file" name="device_pic[]" class="form__input" placeholder="ارفاق صور الجهاز" id="formFileMultiple" multiple/>
          
        </div>
        <input type="submit" name="device_pic" value="تبرع الان" class="btn">
    </form>
</div>
</body>
</html>