<?php   
require 'connection.php';
$error ='';
$files_up='';


if(empty($_POST["bfname"]) ||
empty($_POST["blname"]) ||
empty($_POST["bmail"]) ||
empty($_POST["bpassword"]) ||
empty($_POST["bphone"]) ||
empty($_POST["bcity"]) ||
count($_FILES) == 0||
empty($_POST["buser_name"]))
echo "<p style='display:block;text-align:center;color:red'> .الرجاء ادخال القيم المطلوبة </p>";
else{

if(strlen($_POST["buser_name"]) <=4 )

{ $error  = "<p style='display:block;text-align:center;color:red'> اسم المستخدم يجب ان يكون اكثر من اربع احرف او ارقام <br></p>";}

if(!preg_match('/^[a-zA-Z0-9]+$/',$_POST['buser_name']))

{ $error .= "<p style='display:block;text-align:center;color:red'> اسم المستخدم لايجب ان يحتوي على رموز خاصة <br></p>"; }

if(is_numeric($_POST["buser_name"][0]))

{ $error .="<p style='display:block;text-align:center;color:red'> اسم المستخدم لا يجب ان يبدأ برقم<br></p>";}

if(!filter_var($_POST["bmail"],FILTER_VALIDATE_EMAIL))

{ $error .= "<p style='display:block;text-align:center;color:red'> يرجى أدخال الايميل بشكل صحيح <br></p>";}

if(strlen($_POST["bpassword"]) <=8)

{ $error .= "<p style='display:block;text-align:center;color:red'> الرجاء ادخال كلمة مرور اكثر من ثمان حروف او ارقام او رموز<br></p>";}

if(empty($error))
{
	include "upload.php";
	$files_up =json_encode($tmpJSon);
	
$bfname = mysqli_real_escape_string($conn,$_POST["bfname"]);
$blname = mysqli_real_escape_string($conn , $_POST["blname"]);
$bmail = mysqli_real_escape_string($conn , $_POST["bmail"]);
$bpassword = mysqli_real_escape_string($conn , $_POST["bpassword"]);
$bphone = mysqli_real_escape_string($conn , $_POST["bphone"]);
$bcity = mysqli_real_escape_string($conn , $_POST["bcity"]);
$report = mysqli_real_escape_string($conn ,$files_up);
$buser_name = mysqli_real_escape_string($conn , $_POST["buser_name"]);

$req = "INSERT INTO beneficiary(bfname, blname, bmail, bpassword, bphone, bcity , report , buser_name)
VALUES ('$bfname','$blname','$bmail', '$bpassword', '$bphone', '$bcity','$report','$buser_name')";

$insuser = mysqli_query($conn , $req);
if($insuser)

{

	echo "<p style='display:block;text-align:center;color:red'>تم التسجيل بنجاح <br></p>";
header("location: donitnow.php");
}
else echo "<p style='display:block;text-align:center;color:red'>".mysqli_error($conn)."</p>";



}
}
echo $error;
?>

