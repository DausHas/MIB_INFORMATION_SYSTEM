<?php

require 'database.php';

$editorContent = $statusMsg ='';

if(isset($_POST['submit'])){

    //SINI GET EDITOR CONTENT OK?
    $editorTitle = $_POST['a_title'];
    $editorContent = $_POST['a_content'];
    $editorCategory = $_POST['a_type'];

    //CHECK KALAU IA KUSUNG
    if(!empty($editorContent) || !empty($editorTitle)){
        //ANI MASUKAN KE DATABASE
        $insert = $conn->query("INSERT INTO articles (a_title, a_content, a_created, a_type) VALUES ('".$editorTitle."','".$editorContent."', NOW(),'".$editorCategory."')");

        //kalau mau
        if($insert){
            $statusMsg="Article sucessfully created!";
        }else{
            $statusMsg="problem occured. Please Check.";
        }
    }else{
        $statusMsg="Please add content before creating an article.";
    }
}

?>