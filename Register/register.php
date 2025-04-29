<?php
$name = $_POST['name'];
$dob = $_POST['dob'];
$cname = $_POST['cname'];
$schname = $_POST['schname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];


if (isset($name, $dob, $cname, $schname, $email, $username, $password)) {
    require_once "../connection/config.php";

    $stmt = $pdo->prepare("select count(*) from users;");
    $stmt->execute();
    $count = $stmt->fetchColumn();
    $id = $count + 1;

    $stmt = $pdo->prepare("insert into users(id,name,date_of_birth,childhood_name,school_name,email,user_name,user_password)values(?,?,?,?,?,?,?,?); ");
    if ($stmt->execute([$id, $name, $dob, $cname, $schname, $email, $username, $password])) {
        echo "register";
    } else {
        echo "not registered";
    }
} else {
    echo "data not found";
}