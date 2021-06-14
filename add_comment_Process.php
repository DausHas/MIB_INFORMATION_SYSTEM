<?php


include 'database.php';

if(isset($_POST['submit'])){
    //SINI GET EDITOR CONTENT OK?
    $a_id = $_POST['a_id'];
    $user_id = $_POST['user_id'];
    $comment = $_POST['comment'];
	$username = $_POST['username'];

	if(!empty($comment)){
	$query = "INSERT INTO `comment` (`a_id`,`user_id`,`username`,`comment`,`created`) values ('$a_id','$user_id','$username','$comment',now());";
	$result = mysqli_query ($conn, $query);

		if($query){
			$statusMsg="test yes";
		}else{
			$statusMsg="terst no";
		}
	}else{
		$statusMsg="add comment";
	}
}
?>

