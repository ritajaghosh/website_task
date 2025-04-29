<?php

   require_once "./connection/config.php";
   if(isset($_POST["useremail"]) && $_POST["userpassword"]) {
     $email=$_POST ["useremail"] ;
     $password=$_POST ["userpassword"] ;
     $stmt=$pdo->prepare("select * from users where email=? and user_password=?");
     $stmt->execute([$email,$password ]);
     $user=$stmt->fetch(PDO::FETCH_ASSOC);
     $returnarray=[];
     
     if(empty($user)){
          
          $returnarray["status"]= false;
     }else{
          
          $returnarray["status"]= true;
     }
     echo json_encode($returnarray);
    }else{
        echo "please fulfill the requirements";
     }
   