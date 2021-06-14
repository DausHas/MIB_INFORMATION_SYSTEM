<?php
include_once 'database.php';

$editorContent = $statusMsg ='';

$sql = "DELETE FROM articles WHERE a_id='" . $_GET["a_id"] . "'";
if (mysqli_query($conn, $sql)) {
    header('Location:viewallarticles.php');
    $statusMsg="Article sucessfully created!";
} else {
    $statusMsg="problem occured. Please Check." . mysqli_error($conn);
}
mysqli_close($conn);
?>