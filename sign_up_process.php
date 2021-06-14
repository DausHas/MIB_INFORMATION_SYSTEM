<?php

require_once('database.php');

if(isset($_POST['signup'])){
    
    $fName= mysqli_real_escape_string($conn,$_POST['fName']);
    $lName = mysqli_real_escape_string($conn,$_POST['lName']);
    $phoneNum = mysqli_real_escape_string($conn,$_POST['phoneNum']);
    $eMail = mysqli_real_escape_string($conn,$_POST['eMail']);
    $uPassword = mysqli_real_escape_string($conn,$_POST['uPassword']);
    $userType = mysqli_real_escape_string($conn,$_POST['userType']);

    $check_dup_email = "SELECT eMail from users WHERE eMail = '$eMail'";
    $result_check = mysqli_query($conn,$check_dup_email);
    
    $count = mysqli_num_rows($result_check);
    if($count > 0){
        echo "<script>
        alert('Email Exist!');
        window.location.href='sign-up.php';
        </script>";
    }else{

    $sql = "INSERT into users (fName, lName, phoneNum, eMail, uPassword, userType) VALUES ('$fName','$lName', '$phoneNum', '$eMail','" . md5($uPassword) . "', '$userType')";
    $result = mysqli_query($conn,$sql);
    }if($result){
        echo "<script>
        alert(`Register Successful!. Please login!`);
        window.location.href='login.php';
        </script>";
    }else{
        echo 'Check query!';
    }
}
?>