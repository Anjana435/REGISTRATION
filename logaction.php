<?php
   $uname=$_REQUEST['uname'];
   //echo $uname;
   $passwd=$_REQUEST['password'];
   //echo $passwd;
   $servername = "localhost";
   $username = "root";
   $pass= "";
   $dbname="db_banking";

   $conn = mysqli_connect($servername,$username,$pass,$dbname);
   //check connection
   if($conn === false)
   {
       die("error,could'nt connect".mysqli_connect_error());
   }
   $sql="SELECT * FROM tbl_login WHERE uname='$uname'AND password='$passwd'";
   //echo $sql;
   $res = mysqli_query($conn,$sql);
   $num=mysqli_num_rows($res);
   if ($num==1)
   {
       session_start();
       $_SESSION['username']=$uname;
       header('location:index.php');
   }
   else
   {
       header('location:login.html');
   }

?>
