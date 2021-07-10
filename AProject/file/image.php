<?php
$tmpJSon =[];
if(isset($_FILES['device_pic'])):
    $pics = $_FILES['device_pic'];

 for ($i=0; $i < count($pics['name']); $i++) { 
     
      $target_dir = "D:\\Wamp\\www\\GProject\\file\\pics\\";
      $tmp_name = time().'_'.basename($pics["name"][$i]);
    $target_file = $target_dir .$tmp_name ;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
      $check = getimagesize($pics["tmp_name"][$i]);
      if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "<p style='display:block;text-align:center;color:red'> File is not an image.<br></p>";
        $uploadOk = 0;
      }
    }
    
    // Check if file already exists
  
    
    // Check file size
    if ($pics["size"][$i] > 1000000) {
      echo "<p style='display:block;text-align:center;color:red'>Sorry, your file is too large.<br></p>";
      $uploadOk = 0;
    }
    
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
      echo "<p style='display:block;text-align:center;color:red'>Sorry, only JPG, JPEG, PNG files are allowed.</p>" ;
      $uploadOk = 0;
    }
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "<p style='display:block;text-align:center;color:red'>Sorry, your file was not uploaded.</p>" ;

    // if everything is ok, try to upload file
    } else {
    
      if (move_uploaded_file($pics["tmp_name"][$i], $target_file)) {
       //echo "The file ". htmlspecialchars( basename( $pics["name"][$i])). " has been uploaded.";
        array_push($tmpJSon,$tmp_name);
      } else {
        echo "<p style='display:block;text-align:center;color:red'> Sorry, there was an error uploading your file.</p>";
      }
    }

  }


endif;
?>