<html>
<head>
    <mata charset="utf-8">
</head>
<body>
<?php
header("Content_Type: text/html; charset=UTF-8");

if(!$_POST['name']){
  echo "<script>alert('이름을 입력하세요.');history.back();</script>";
  exit;
}
if(!$_POST['email']){
  echo "<script>alert('이메일을 입력하세요.');history.back();</script>";
  exit;
}
if(!$_POST['password1']){
  echo "<script>alert('비밀번호를 입력하세요.');history.back();</script>";
  exit;
}
if(!$_POST['password2']){
  echo "<script>alert('비밀번호를 다시한번 입력하세요.');history.back();</script>";
  exit;
}
if(!$_POST['year']||!$_POST['month']||!$_POST['day']){
  echo "<script>alert('생년월일을 입력하세요.');history.back();</script>";
  exit;
}
if(!$_POST['address']){
  echo "<script>alert('주소를 입력하세요.');history.back();</script>";
  exit;
}
if(!$_POST['agree']){
  echo "<script>alert('약관에 동의하세요.');history.back();</script>";
  exit;
}
$mysqli=mysqli_connect("localhost", "root", "database123", "macdelivery");
$user_name = $_POST['name'];
$user_id = $_POST['email'];
$user_pw = $_POST['password1'];
$user_pw2 = $_POST['password2'];
$user_gender = $_POST['sex'];
$user_year = $_POST['year'];
$user_month = $_POST['month'];
$user_day = $_POST['day'];
$user_address = $_POST['address'];

$user_birth=$user_year."-".$user_month."-".$user_day;

if($user_pw!=$user_pw2){
  echo "<script>alert('비밀번호가 일치하지 않습니다.');history.back();</script>";
  exit;
}
$sql = "insert into user values";
$sql = $sql."('$user_name', '$user_id', '$user_pw', '$user_gender', '$user_birth', '$user_address')";
if($mysqli->query($sql)){
    echo "<script>alert(\"회원가입이 완료되었습니다.\");</script>";
}
else{
  echo "<script>alert(\"fail query.\");history.back();</script>";
  exit;
}
echo "<a href='../submitCP.php'></a>";
?>
<meta http-equiv='refresh' content='0;url=../submitCP.html'>
</body>
</html>
