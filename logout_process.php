<?php
session_start();
unset($_SESSION["user_id"]);
unset($_SESSION["eMail"]);
unset($_SESSION["uPassword"]);

echo "<script>alert('Logout successful!');
            window.location.href='index.php';
            </script>";
?>