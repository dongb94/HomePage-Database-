<?PHP
$ea = $_POST['ea'];
$mname = $_GET['name'];
$price = $_GET['price'];
$user_ID = $_COOKIE['user_id'];
$value = $ea * $price;

$mysqli=mysqli_connect("localhost", "root", "database123", "macdelivery");
$query = "SELECT * ";
$query = $query."FROM orders ";
$res = $mysqli->query($query);
$onum = $res->num_rows + 1;
$date=date("Y-m-d",time());

echo "$user_ID, ";

$query = "insert into orders values";
$query = $query."('$onum', '$user_ID', '$mname', '$ea', '$value','$date')";

if($res = $mysqli->query($query)){
//		echo "<script>alert('query OK');</script>";
        echo "<script>alert('$value 원 결재되었습니다.');</script>";
}
else{
	echo "<script>alert('query fail');</script>";
	exit;
}
?>
<meta http-equiv='refresh' content='0;url=../index.php'>