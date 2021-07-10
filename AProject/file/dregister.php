<?php   
require 'connection.php';
$error ='';
//var_dump($_POST);
//	die();
//include "upload.php";

if(empty($_POST["dfname"]) ||
empty($_POST["dlname"]) ||
empty($_POST["dmail"]) ||
empty($_POST["dpassword"]) ||
empty($_POST["dphone"]) ||
empty($_POST["dcity"]) ||
empty($_POST["duser_name"]))
{echo "<p style='display:block;text-align:center;color:red'> .الرجاء ادخال القيم المطلوبة </p>";}

else{


if(strlen($_POST["duser_name"]) <=4 )

{ $error  = "<p style='display:block;text-align:center;color:red'> اسم المستخدم يجب ان يكون اكثر من اربع احرف او ارقام <br></p>";}

if(!preg_match('/^[a-zA-Z0-9]+$/',$_POST["duser_name"]))

{ $error .= "<p style='display:block;text-align:center;color:red'> اسم المستخدم لايجب ان يحتوي على رموز خاصة <br></p>"; }

if(is_numeric($_POST["duser_name"][0]))

{ $error .="<p style='display:block;text-align:center;color:red'> اسم المستخدم لا يجب ان يبدأ برقم<br></p>";}

if(!filter_var($_POST["dmail"],FILTER_VALIDATE_EMAIL))

{ $error .= "<p style='display:block;text-align:center;color:red'> يرجى أدخال الايميل بشكل صحيح<br></p>";}

if(strlen($_POST["dpassword"]) <=8)

{ $error .= "<p style='display:block;text-align:center;color:red'> الرجاء ادخال كلمة مرور اكثر من ثمان حروف او ارقام او رموز <br></p>";}

if(empty($error))
{

   
$dfname = mysqli_real_escape_string($conn,$_POST["dfname"]);
$dlname = mysqli_real_escape_string($conn , $_POST["dlname"]);
$dmail = mysqli_real_escape_string($conn , $_POST["dmail"]);
$dpassword = mysqli_real_escape_string($conn , $_POST["dpassword"]);
$dphone = mysqli_real_escape_string($conn , $_POST["dphone"]);
$dcity = mysqli_real_escape_string($conn , $_POST["dcity"]);
$duser_name = mysqli_real_escape_string($conn , $_POST["duser_name"]);

$req = "INSERT INTO donor(dfname, dlname, dmail, dpassword, dphone, dcity , duser_name)
VALUES ('$dfname','$dlname','$dmail', '$dpassword', '$dphone', '$dcity','$duser_name')";


$insuser = mysqli_query($conn , $req);
if($insuser)

{echo "<p style='display:block;text-align:center;color:red'> تم التسجيل بنجاح <br></p>";}
else echo mysqli_error($conn);



}
}
echo $error;
?>

