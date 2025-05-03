<?php

 if(isset($_POST["user_name"]) && $_POST["dob"] && $_POST["childhood"] && $_POST["school"] && $_POST["mailid"] && $_POST["pass"]) {
    $stmt=$pdo->prepare("select * from users where name=?and user_password=? school_name=? and email=? childhood_name=?");
     $stmt->execute([$_POST["user_name"],$_POST["pass"],$_POST["school"],$_POST["mailid"],$_POST["childhood"]]);
     $user=$stmt->fetch(PDO::FETCH_ASSOC);
     $returnarray=[];
     if($user) {
        $returnarray["status"]= true;
     }else{
        $returnarray["status"]=false;
     }
     print_r($returnarray[]);
 }else{
    echo "Please fulfill requirements";
 }
