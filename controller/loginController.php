<?php

include '../model/user.php';
include '../model/conexion.php';

$femail = $_POST['femail'];
$fpassword = $_POST['fpassword'];

//echo "email es {$femail} y la contraseña es {$fpassword}";

// creo una instancia de la clase User

$user = new User($femail, $fpassword);
echo $user->getEmail(). "<br>";
echo $user->getPassword() ;

$sql = "SELECT * FROM tbl_user WHERE email=? and password=?";
$snt = $pdo->prepare($sql);
$snt->bindParam(1, $femail);
$snt->bindParam(2, $fpassword);

$snt->execute();

$numUser = $snt->rowCount();

echo $numUser;


if($numUser == 1){
    header("Location: ../view/home.php");
}else{
    header("Location: ../view/vista_login.html?error=1");
}
