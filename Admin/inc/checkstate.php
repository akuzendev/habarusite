<?php
session_start();

$_SESSION['userid'];
$_SESSION['username'];
$_SESSION['designation'];
$_SESSION['status'];





if($_SESSION['status'] == 0){
//check if user state is 0


if($_SESSION['designation'] == 3){
    echo '';
}else{
    header('Location: ../index.php');
    exit();
}

}else if($_SESSION['status'] == 1){
//check if user is pending approval
    session_destroy();
    header('Location: ../pending.php');
    exit();
}else if($_SESSION['status'] == 2) {
//check if user is set to be deleted
    header('Location: ../settobedeleted.php');
    exit();
}else if($_SESSION['status'] == 3){
//check if user is blocked
    session_destroy();
    header('Location: ../blocked.php');
    exit();
}else{
//send user to guest.php
    header('Location: ../index.php');
    exit();
}