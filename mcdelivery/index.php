<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
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

							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<header>
											<h1>맥딜리버리에 오신것을 환영합니다.<br /></h1>
											<?PHP
											if(!isset($_COOKIE['user_id']) || !isset($_COOKIE['user_name']))
												echo "<h2>로그인이 필요합니다</h2>";
											else{
												$user_id = $_COOKIE['user_id'];
												$user_name = $_COOKIE['user_name'];
												echo "<h2>안녕하세요. $user_name($user_id)님</h2>";	
											}
											?>
											<p>다양한 메뉴를 즐겨보세요</p>
										</header>
										<p>맥딜리버리는 집에서도 맥도날드의 다양한 메뉴를 즐길수 있는 서비스 입니다.</p>
										<?PHP
										if(!isset($_COOKIE['user_id']) || !isset($_COOKIE['user_name'])){
										echo "<ul class='actions'>
											<li><a href='login.html' class='button big'>Login</a></li>
											<li><a href='submit.php' class='button big'>회원가입</a></li>
											</ul>";
										}
										else
										echo "<ul class='actions'>
											<li><a href='php_file/logout.php' class='button big'>LOGOUT</a></li>
											</ul>";
										?>									
									</div>
									<span class="image object">
										<img src="images/McDelivery.png" alt="" />
									</span>
								</section>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>이용 방법</h2>
									</header>
									<article>
										<span class="image object">
											<a href="berger.php"><img src="images/이용방법.png" alt="" /></a>
										</span>
									</article>
									
								</section>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Menu</h2>
									</header>
									<div class="posts">
										<article>
											<a href="berger.php" class="image"><img src="images/berger.png" alt="" /></a>
											<p><br></p>
											<h3>버거 & 세트</h3>
											<ul class="actions">
												<h4><li><a href="berger.php" class="button">주문하기</a></li></h4>
											</ul>
										</article>
										<article>
											<a href="side.php" class="image"><img src="images/side.png" alt="" /></a>
											<h3>스넥 & 사이드</h3>
											<ul class="actions">
												<h4><li><a href="side.php" class="button">주문하기</a></li></h4>
											</ul>
										</article>
										<article>
											<a href="drink.php" class="image"><img src="images/drink.png" alt="" /></a>
											<h3>음료</h3>
											<ul class="actions">
												<h4><li><a href="drinkorder.php" class="button">주문하기</a></li></h4>
											</ul>
										</article>
										<article>
											<a href="dessert.php" class="image"><img src="images/disert.png" alt="" /></a>
											<h3>디저트</h3>
											<ul class="actions">
												<h4><li><a href="dessert.php" class="button">주문하기</a></li></h4>
											</ul>
										</article>
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