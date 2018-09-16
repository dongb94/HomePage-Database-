<?php
if(!isset($_POST['email']) || !isset($_POST['pw'])) exit;
$user_id = $_POST['email'];
$user_pw = $_POST['pw'];

$mysqli=mysqli_connect("localhost", "root", "database123", "macdelivery");
$query = "SELECT U.name, U.password ";
$query = $query."FROM user U ";
$query = $query."WHERE U.email = '$user_id'";

if($user = $mysqli->query($query)){
//		echo "<script>alert('query OK');</script>";
}
else{
	echo "<script>alert('query fail');history.back();</script>";
	exit;
}

if($row = $user->fetch_array(MYSQLI_ASSOC)){
//		echo "<script>alert('query OK');</script>";
}
else{
	echo "<script>alert('아이디가 잘못되었습니다.');history.back();</script>";
	exit;
}
if($row['password'] != $user_pw) {
	echo "<script>alert('패스워드가 잘못되었습니다.');history.back();</script>";
	exit;
}
setcookie('user_id',$user_id,time()+(86400*30),'/');
setcookie('user_name',$row['name'],time()+(86400*30),'/');
?>
<meta http-equiv='refresh' content='0;url=../index.php'>