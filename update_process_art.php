<?php

include('database.php');

if(isset($_POST['text_editor'])){
    $a_title = $_POST['a_title'];
    $editorText = $_POST['text_editor'];
    $editorCategory = $_POST['a_type'];
    $a_id = $_POST['a_id'];


    if(!empty($editorText) || !empty($a_title)){
    $query = mysqli_query($conn, "UPDATE articles SET a_title='$a_title',a_content='$editorText', a_type ='$editorCategory' WHERE a_id ='$a_id'");

    if($query){
        $statusMsg="Article sucessfully Updated!";
    }else{
        $statusMsg="problem occured. Please Check.";
    }
}else{
    $statusMsg="Please add content before creating an article.";
}

}
?>
