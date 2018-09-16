<!DOCTYPE HTML>
<?PHP
if(!isset($_COOKIE['user_id']) || !isset($_COOKIE['user_name'])) {
	echo "<script>alert('로그인이 필요합니다.');history.back();</script>";
  	exit;
}
?>
<html>
	<head>
		<title>맥딜리버리</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>
		<!-- Wrapper -->
			<div id="wrapper">
				<!-- Main -->
					<div id="main">
						<div class="inner">
							<!-- Header -->
								<header id="header">
									<a href="index.php" class="logo"><strong>맥딜리버리</strong> by HTML5 UP</a>
									<ul class="icons">
										<li><a href="twitter.html" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="facebook.html" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="insta.html" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
									</ul>
								</header>

							<!-- Section -->
								<section>
									<header class="major">
										<ul class='actions'>
											<h4><li><a href='berger.php' class='button'>버거&세트</a></li>
											<li><a href='side.php' class='button'>스낵&사이드</a></li>
											<li><a href='drink.php' class='button'>음료</a></li>
											<li><a href='dessert.php' class='special button'>디저트</a></li></h4>
										</ul>
										<h2>Menu</h2>
									</header>
									<div class="posts">
<?php
header("Content_Type: text/html; charset=UTF-8");
$mysqli=mysqli_connect("localhost", "root", "database123", "macdelivery");
$query = "SELECT M.mname, M.price ";
$query = $query."FROM menu M ";
$query = $query."WHERE M.kinds='디저트'";
if($mysqli->query($query)){
//	echo "<script>alert('query OK');</script>";
}
else{
	echo "<script>alert('false');history.back();</script>";
	exit;
}
$res = $mysqli->query($query);
$n = $res->num_rows;


for($a=0; $a<$n; $a++){
	$row = $res->fetch_array(MYSQLI_NUM);
	echo "<article>
		<h1>$row[0]</h1>
		<h2>$row[1]원</h2>
		<ul class='actions'>
			<h4><li><a href='order.php?name=$row[0]&price=$row[1]' class='button'>주문하기</a></li></h4>
		</ul>
		</article>";
}
?>
									</div>
								</section>
						</div>
					</div>

					<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<?PHP
										if(!isset($_COOKIE['user_id']) || !isset($_COOKIE['user_name'])){
										echo "<ul class='actions'>
											<li><a href='login.html' class='button big'>Login</a></li>
											<li><a href='submit.php' class='button big'>회원가입</a></li>
											</ul>";
										}
										else{
										$user_name = $_COOKIE['user_name'];
										echo "<p>안녕하세요. $user_name 님<p>";
										echo "<ul class='actions'>
											<li><a href='php_file/logout.php' class='button big'>LOGOUT</a></li>
											</ul>";
										}
										?>	
								</section>

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h1>Menu</h1>
									</header>
									<ul>
										<h2><li><a href="index.php">Home</a></li></h2>
										<li>
											<span class="opener"><h2>MyPage</h2></span>
											<ul>
												<h2><li><a href="user_setting.php">회원정보 관리</a></li>
												<li><a href="order_list.php">주문내역</a></li></h2>
											</ul>
										</li>
										<li>
											<span class="opener"><h2>주문</h2></span>
											<ul>
												<h2><li><a href="berger.php">버거 & 세트</a></li>
												<li><a href="side.php">스낵 & 사이드</a></li>
												<li><a href="drink.php">음료</a></li>
												<li><a href="dessert.php">디저트</a></li></h2>
											</ul>
										</li>
										<li>
											<span class="opener"><h2>기타 정보</h2></span>
											<ul>
												<h2><li><a href="store.php">지점</a></li>
												<li><a href="locate.html">원산지 표기</a></li></h2>
											</ul>
										</li></h2>
									</ul>
								</nav>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>관련 사이트</h2>
									</header>
									<div class="mini-posts">
										<article>
											<a href="http://www.mcdonalds.co.kr/" class="image"><img src="images/MChome.png" alt="" /></a>
											<p>	   맥도날드 홈페이지로 연결됩니다.</p>
										</article>
										<article>
											<a href="https://www.mcdelivery.co.kr/" class="image"><img src="images/MCDhome.png" alt="" /></a>
											<p>	   맥딜리버리 홈페이지로 연결됩니다.</p>
										</article>
									</div>
									<ul class="actions">
										<li><a href="http://portal.jnu.ac.kr/" class="button">More</a></li>
									</ul>
								</section>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>연락처</h2>
									</header>
									<p>문의사항이 있다면 아래에 표기된 연락처중 하나로 연락주시기 바랍니다.</p>
									<ul class="contact">
										<li class="fa-envelope-o"><a href="#">관리자@이메일.com</a></li>
										<li class="fa-phone">(062) 530-0000</li>
										<li class="fa-home">전남대학교<br />
										공7-442 데이터베이스 연구실</li>
									</ul>
								</section>

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; 출처들 image: <a href="http://google.com">Google</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
								</footer>

						</div>
					</div>

				</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>