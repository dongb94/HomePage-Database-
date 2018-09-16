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
								<form method="post" action="php_file/submitUser.php">
           	    				   	<h1>회원가입</h1>
							    	<div class="row uniform">
                  				    <div class="6u 12u$(xsmall)">
										<input type="text" name="name" id="name" value="" placeholder="Name" />
									</div>
									<div class="6u$ 12u$(xsmall)">
										<input type="email" name="email" id="email" value="" placeholder="Email" />
                                        <br>
									</div>
                                            <div class="6u$ 12u$(xsmall)">
												<input type="password" name="password1" id="password1" value="" placeholder="Password" />
											</div>
                                            <div class="6u$ 12u$(xsmall)">
												<input type="password" name="password2" id="password2" value="" placeholder="Repeat Password" />
											</div>
											<!-- Break -->
															<div class="3u 12u$(small)">
                                                                <h2>성별</h2>
																<input type="radio" id="man" name="sex" value="남" checked>
																<label for="man">남</label>
															</div>
															<div class="3u 12u$(small)">
                                                                <h2>　</h2>
																<input type="radio" id="women" value="여" name="sex">
																<label for="women">여</label>
															</div>
															<!-- Break -->
                                                            <div class="6u 12u$"></div>                                           
															<div class="3u 12u$">
                                                                <h2>생년월일</h2>     
																<div class="select-wrapper">
																	<select name="year" id="year">
																		<option value="">년</option>
                                                                        <option value="2010">2010</option>
                                                                        <option value="2000">2000</option>
																		<option value="1990">1990</option>
																		<option value="1980">1980</option>
																	</select>
																</div>
															</div>
                                                            <div class="3u$ 12u$">
																<div class="select-wrapper">
																	<select name="month" id="month">
																		<option value="">월</option>
																		<option value="01">1</option>
																		<option value="02">2</option>
                                                                        <option value="03">3</option>
																		<option value="04">4</option>
                                                                        <option value="05">5</option>
																		<option value="06">6</option>
                                                                        <option value="07">7</option>
																		<option value="08">8</option>
                                                                        <option value="09">9</option>
																		<option value="10">10</option>
                                                                        <option value="11">11</option>
																		<option value="12">12</option>
																	</select>
																</div>
															</div>
                                                            <div class="3u 12u$">
																<div class="select-wrapper">
																	<select name="day" id="day">
																		<option value="">일</option>
																		<option value="01">1</option>
																		<option value="02">2</option>
                                                                        <option value="03">3</option>
																		<option value="04">4</option>
                                                                        <option value="05">5</option>
																		<option value="06">6</option>
                                                                        <option value="07">7</option>
																		<option value="08">8</option>
                                                                        <option value="09">9</option>
																		<option value="10">10</option>
                                                                        <option value="11">11</option>
																		<option value="12">12</option>
                                                                        <option value="13">13</option>
																		<option value="14">14</option>
                                                                        <option value="15">15</option>
																		<option value="16">16</option>
                                                                        <option value="17">17</option>
																		<option value="18">18</option>
                                                                        <option value="19">19</option>
																		<option value="20">20</option>
                                                                        <option value="21">21</option>
																		<option value="22">22</option>
                                                                        <option value="23">23</option>
																		<option value="24">24</option>
																		<option value="25">25</option>
																		<option value="26">26</option>
                                                                        <option value="27">27</option>
																		<option value="28">28</option>
                                                                        <option value="29">29</option>
																		<option value="30">30</option>
                                                                        <option value="31">31</option>
																		</select>
																</div>
															</div>
															<!-- Break -->
															<div class="12u$">
                                                            <h2>주소</h2>     
															<textarea name="address" id="address" placeholder="배달될 주소를 적어주세요"></textarea>
															</div>
                                                            <!-- Break -->
															<div class="4u 12u$(small)">
																<input type="checkbox" id="agree" name="agree">
																<label for="agree">회원 약관에 동의합니다.</label>
															</div>
															<!-- Break -->
															<div class="12u$">
																<ul class="actions">
																	<h2><li><input type="submit" class="button special small" value="가입"/></li>
																	<li><a href="index.php"><input class="button small" value="취소" /></a></li></h2>
																	</ul>
															</div>

								    					</div>
								</form>
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