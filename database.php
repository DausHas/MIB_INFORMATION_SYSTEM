<?php
    $url='localhost';
    $username='root';
    $password='';
    $conn=mysqli_connect($url,$username,$password,'melayu_islam_beraja');
    if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
    }
?>