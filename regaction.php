<?php
    $fname=$_REQUEST['fname'];
    //echo $fname;
    $lname=$_REQUEST['lname'];
    $db=$_REQUEST['dob'];
    $mb=$_REQUEST['phone'];
    $mail=$_REQUEST['email'];
    $addr=$_REQUEST['address'];
    $gender=$_REQUEST['gender'];
    $interest1=$_REQUEST['interest1'];
    $interest2=$_REQUEST['interest2'];
    $interest3=$_REQUEST['interest3'];
    $interest= $interest1. $interest2. $interest3;
    $city=$_REQUEST['city'];
    $clgname=$_REQUEST['clgname'];
    $gy=$_REQUEST['yr'];
    $img=$_FILES['img']['name'];
    //echo $img;
   
  
        
   // $resm=$_FILES['resume']['name'];

    $txt=$_REQUEST['txt'];
    $uname=$_REQUEST['uname'];
    $pssword=$_REQUEST['pwd'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="db_banking";
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    //check connection
    if($conn === false)
    {
        die("error,could'nt connect".mysqli_connect_error());
    }
    
    $target_dir = "Photos/";
    $target_file = $target_dir . basename($_FILES["img"]["name"]);
    $uploadOk = 1;
    /*
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["img"]["tmp_name"]);
      if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      }else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
    }
    
    // Check if file already exists
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    
    // Check file size
    if ($_FILES["img"]["size"] > 500000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
      echo "The file ". htmlspecialchars( basename( $_FILES["img"]["name"])). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }
  */
    $sql="INSERT INTO tbl_reg(`fname`,`lname`,`db`,`interest`,`mobile`,`mail`,`address`,`gender`,`city`,`clgname`,`yearofpassing`,`img`,`text`) VALUES('$fname','$lname','$db','$interest','$mb','$mail','$addr','$gender','$city','$clgname','$gy',' $target_file','$txt')";
    //echo $sql;
    $insert="INSERT INTO tbl_login(`uname`,`password`)VALUES('$uname','$pssword')";
    //echo $insert;
    $res = mysqli_query($conn,$sql);
    //echo $res;
    $res1= mysqli_query($conn,$insert);
    if ($res==1)
    {
        header('location:login.html');
    }
    



?>