<?php
    $name=$_POST['name'];
    $dob=$_POST['dob'];
    $cname=$_POST['cname'];
    $schname=$_POST['schname'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $rpassword=$_POST['rpassword'];

   if (isset($name , $dob , $cname ,$schname ,$email ,$username ,$password  )){
    require_once "config.php";
    
      $stmt=$pdo->prepare("insert into users(name,date_of_birth,childhood_name,school_name,email,user_name,user_password)values(?,?,?,?,?,?,?); ");
      if($stmt->execute([$name,$dob,$cname,$schname,$email,$username,$password])){
        echo "register";
    }else{
        echo "not registered";
    }
    //   $returnarray=Array();
      
      
    //   echo json_encode($returnarray);
    
   }else{
    echo "data not found";
   }