<?php
require('database.php');
//single login

    
session_start();
    if (isset($_POST['login'])){
        $eMail = $_POST['eMail'];
        $uPassword = md5($_POST['uPassword']);

        $sql = "SELECT * FROM users WHERE eMail = '$eMail' AND uPassword = '$uPassword'";
        $result = mysqli_query($conn,$sql);

            if ($result->num_rows > 0) {
                $row = mysqli_fetch_assoc($result);
                $_SESSION['fName'] = $row['fName'];
                $_SESSION['user_id'] = $row['user_id'];
        
                $userType = $row['userType'];
                if ($userType === 'Admin'){
                    echo "<script>alert('Welcome Admin');
                    window.location.href='index_admin.php';
                </script>";
                } else {
                    echo "<script>alert('Login Successful');
                    window.location.href='index_user.php';
                    </script>";    
                }
        }else{
            echo "<script>alert('Email or Password is wrong!');
            window.location.href='login.php';
            </script>";
        }
    }

    


?>