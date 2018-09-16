<?php
$user_id = $_COOKIE['user_id'];

$mysqli=mysqli_connect("localhost", "root", "database123", "macdelivery");
$query = "DELETE ";
$query = $query."FROM user ";
$query = $query."WHERE email = '$user_id'";
if($mysqli->query($query)){
		echo "<script>alert('탈퇴되었습니다.');</script>";
}
else{
	echo "<script>alert('query fail');history.back();</script>";
	exit;
}
setcookie('user_id', '', time()-3600, '/');
setcookie('user_name', '', time()-3600, '/');
?>
<meta http-equiv='refresh' content='0;url=../index.php'>