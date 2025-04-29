<?php
  print_r($_POST);
   require_once "./connection/config.php";
   if(isset($_POST["useremail"]) && $_POST["userpassword"]) {
     $stmt=$pdo->prepare("select * from users where email=? and user_password=?");
     $stmt->execute([$_POST ["useremail"], $_POST ["userpassword"]]);
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
   