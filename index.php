<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>JIYEON CHAE - PORTFOLIO</title>
		<meta charset="utf-8" http-equiv="X-UA-Compatible" content="IE=edge"/>
		<link rel="icon" href="images/icon2.png"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="./assets/css/main.css?after" />
		<!-- progressbar -->
		<link rel="stylesheet" href="./assets/css/jquery.lineProgressbar.css" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
		<script src="./assets/js/jquery.lineProgressbar.js"></script>
		<script>
			function test() {
				LoadingWithMask('images/spinner.gif');
				setTimeout("closeLoadingWithMask()", 3000);
			}
			
			function LoadingWithMask(gif) {
				//화면의 높이와 너비를 구합니다.
				var maskHeight = $(document).height();
				var maskWidth  = $(document).width();
				
				//화면에 출력할 마스크를 설정해줍니다.
				var mask       ="<div id='mask' style='position:absolute; z-index:9000; background-color:#000000; display:none; left:0; top:0;'></div>";
				var loadingImg ='';
				
				loadingImg +="<div id='loadingImg' style='position: fixed; top: 50%;	left: 50%; display: -webkit-box; display: -ms-flexbox; display: flex; -webkit-box-align: center; -ms-flex-align: center; align-items: center; -webkit-box-pack: center;	-ms-flex-pack: center; justify-content: center;'>";
				loadingImg +=" <img src='"+ gif +"' style='position: absolute; display: block; margin: 0px auto;'/>";
				loadingImg +="</div>";
			
				//화면에 레이어 추가
				$('body')
					.append(mask)
			
				//마스크의 높이와 너비를 화면 것으로 만들어 전체 화면을 채웁니다.
				$('#mask').css({
						'width' : maskWidth,
						'height': maskHeight,
						'opacity' :'0.5'
				});
			
				//마스크 표시
				$('#mask').show();
			
				//로딩중 이미지 표시
				$('body').append(loadingImg);
				$('#loadingImg').show();
			}
			
			function closeLoadingWithMask() {
				$('#mask, #loadingImg').hide();
				$('#mask, #loadingImg').empty(); 
			}

		// bxslider 설정
			$(document).ready(function(){
				test();
				
				$('.slider1').bxSlider({
					minSlides:1,
					slideWidth:450,
					controls: false,
					auto: true,
					speed: 1000,
					preloadImages:'all',
					onSliderLoad: function(){
						$("#edd").css("visibility", "visible").animate({opacity:1});
					}
				});

				$('.slider2').bxSlider({
					minSlides:1,
					controls: false,
					auto: true,
					speed: 1000,
					preloadImages:'all',
					onSliderLoad: function(){
						$("#edd2").css("visibility", "visible").animate({opacity:1});
					}
				});

				$('.slider3').bxSlider({
					minSlides:1,
					controls: false,
					auto: true,
					speed: 1000,
					preloadImages:'all',
					onSliderLoad: function(){
						$("#edd4").css("visibility", "visible").animate({opacity:1}); 
					}
				});




				// Movie app slider option
				$('.slider_1').bxSlider({
					
					controls: false,
					auto: false,
					speed: 1000,
					pager: false,
					preloadImages:'all',
					onSliderLoad: function(){
						$("#edd3").css("visibility", "visible").animate({opacity:1});
					}
				});
			});


			$(function() {
    			$(window).scroll(function() {
      			  if ($(this).scrollTop() >= Math.ceil($('#project1').offset().top)) {
						$('#progressbar_1').LineProgressbar({
						percentage: 80,
						fillBackgroundColor: '#e67e22'
						}); 
     			   } 
					if($(this).scrollTop() >= Math.ceil($('#project2').offset().top)) {
						$('#progressbar_2').LineProgressbar({
							percentage: 70,
						}); 
					}
					if($(this).scrollTop() >= Math.ceil($('#project3').offset().top)) {
						$('#progressbar_3').LineProgressbar({
							percentage: 100,
							fillBackgroundColor: '#1abc9c'
						}); 

					}
					if($(this).scrollTop() >= Math.ceil($('#project4').offset().top)) {
						$('#progressbar_4').LineProgressbar({
							percentage: 55,
							fillBackgroundColor: '#9b59b6'
						});  
					}
				});
			});
			
				
				
		</script>
		<noscript><link rel="stylesheet" href="./assets/css/noscript.css" /></noscript>
	</head>


	<body class="is-preload">

		

		<div class="container" id="bgwrapper">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<span class="logo"><img class="profile" src="images/profile.jpg" alt="" /></span>
						<h1 class="profilename">JIYEON CHAE</h1>
						<div class="typingarea">
							<div class="typing-txt">
								<ul class="txt">
									<li>안녕하세요.</li>
									<li>저는 사용자 관점의 서비스를 지향하는</li>
									<li>신입 개발자 채지연입니다.</li>
								</ul>
							</div>
							<div class="typing">
								<ul class="txt">
									<li></li>
									<li></li>
									<li></li>
								</ul>
							</div> 
						</div>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="#intro" class="active">Introduction</a></li>
							<li><a href="#first">Skills</a></li>
							<li><a href="#second">Projects</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Introduction -->
							<section id="intro" class="main">
								<div class="spotlight">
									<div class="content">
										<header class="major">
											<h2>About Me</h2>
										</header>

							<!-- about me -->
							<div class="AboutMe_whole_wrapeer">
								<div class="aboutme_wholeinner_wrapper">
									<div class="aboutme_wrapper">
										<div class="aboutme_inner_wrapper">
											<div class="aboutme_icon">
												<span class="icon solid fa-user"></span>
											</div>
											<div class="info">
												<div class="info_title">이름</div>
												<div>채지연</div>
											</div>
										</div>
									</div>
									<div class="aboutme_wrapper">
										<div class="aboutme_inner_wrapper">
											<div class="aboutme_icon">
												<span id="abouticon" class="icon solid fa-calendar"></span>
											</div>
											<div class="info">
												<div class="info_title">생년월일</div>
												<div>1996.04.20</div>
											</div> 
										</div>
									</div>
									<div class="aboutme_wrapper">
										<div class="aboutme_inner_wrapper">
											<div class="aboutme_icon">
												<span class="icon solid fa-map-marked"></span>
											</div>
											<div class="info">
												<div class="info_title">주소지</div>
												<div>부산광역시 사상구</div>
											</div>
										</div>
									</div>
									<div class="aboutme_wrapper">
										<div class="aboutme_inner_wrapper">
											<div class="aboutme_icon">
												<span class="icon solid fa-phone"></span>
											</div>
											<div class="info">
												<div class="info_title">연락처</div>
												<div>010-8299-6001</div>
											</div>
										</div>
									</div>
									
									<div class="aboutme_wrapper_1">
										<div class="aboutme_inner_wrapper">
											<div class="aboutme_icon">
												<span class="icon solid fa-trophy"></span>
											</div>
											<div class="info">
												<div class="info_title">자격증</div>
												<div class="info_text">컴퓨터 활용능력 1급<br>정보처리기사 필기합격<br>빅데이터 시각화 과정 수료</div>
											</div>
										</div>
									</div>
								</div>
							</div>

								<!-- connect me -->
										<ul class="icons">
											<li>Contact <a href="mailto:govl2411@naver.com" class="icon solid alt fa-envelope"><span class="label">Email</span></a></li>
										</ul>
									</div>
								</div>
							</section>
						<!-- end introduction -->

						<!-- Skills Section -->
							<section id="first" class="main special">
								<header class="major">
									<h2>Skills</h2>
								</header>
								<ul class="features">
									<li>
										<span class="icon solid major style1 fa-desktop"></span>
										<h3>Frontend</h3>
										<p>Html5, CSS, Dart, Javascript, React, JQuery 를 사용한 경험이 있으며, Bootstrap 및 Open Source를 활용하여 프로젝트에 적용 가능합니다.</p>
									</li>
									<li>
										<span class="icon solid major style3 fa-database"></span>
										<h3>Backend</h3>
										<p>Java, Kotlin, Python, Mysql, Oracle, Firebase, MongoDB 를 사용한 경험이 있으며, DB를 연결하여 Join Query 및 CRUD를 활용할 수 있습니다.</p>
									</li>
									<li>
										<span class="icon solid major style5 fa-users"></span>
										<h3>Devops</h3>
										<p>인턴 당시 SVN을 통해 형상관리를 해보았고, IT교육 참여 당시 Github를 셋팅해 협업하였습니다.</p>
									</li>
								</ul>
								<ul class="icons">
									<li>Skill Details <a href="보유기술 및 능력_채지연.hwp" download="보유기술 및 능력" class="icon object alt fa-file-pdf"><span class="label">PDF</span></a></li>
								</ul>
								
							</section>

						<!-- Second Section -->
							<section id="second" class="main special">
								<header class="major">
									<h2>Projects</h2>
								</header>
								
									<div id="project1" class="box">
										<p>
											<div class="project_skill">
												<div id="edd" class="imageslide">
													<ul class="slider1">
														<li>
															<img src="images/TourRainbow/Tourrainbow.png" alt=""/>
														</li>
														<li>
															<img src="images/TourRainbow/TourRainbow_1.png" alt=""/>
														</li>
														<li>
															<img src="images/TourRainbow/TourRainbow_2.png" alt=""/>
														</li>
														<li>
															<img src="images/TourRainbow/TourRainbow_3.png" alt=""/>
														</li>
														<li>
															<img src="images/TourRainbow/TourRainbow_4.png" alt=""/>
														</li>
														<li>
															<img src="images/TourRainbow/TourRainbow_5.png" alt=""/>
														</li>
														<li>
															<img src="images/TourRainbow/TourRainbow_6.png" alt=""/>
														</li>
													</ul>
												</div>
												<div class="project_content">
													<h3 class="project_content_title">Tour Rainbow</h3>
													프로젝트를 기획 및 문서를 작성하고 UI디자인과 게시판 기능 구현을 진행하였습니다.
													Spring Boot를 이용한 웹 사이트이며, 기본적인
													MVC 패턴을 바탕으로 로그인, 회원가입, 게시판, 게시글 관리 기능을 구현하였습니다.
												</div>
											</div>

											<div class="project_skill">
												<p class="skill_title">사용 기술</p>
												<ul class="skill-wrap">
													<li class="skill">Java</li>
													<li class="skill">HTML</li>
													<li class="skill">CSS</li>
													<li class="skill">Javascript</li>
													<li class="skill">JQuery</li>
													<li class="skill">Mysql</li>
													<li class="skill">Github</li>
												</ul>
											</div>

										
											<div class="progress_fixed">
												<div class="progress_title">참여도</div>
												<div id="progressbar_1"></div>
											</div>
											<ul class="icons">
												<li>Project Details <a href="2팀_프로젝트기획서_최종.pptx" download="TOUR RAINBOW" class="icon object alt fa-file-pdf"><span class="label">PDF</span></a></li>
											</ul>
										</p>
									
									</div>

									<div id="project2" class="box">
										<p>
											<div class="project_skill">
												<div id="edd2" class="imageslide">
													<ul class="slider2">
														<li>
															<img src="images/Udondo/udonmain.png" alt=""/>
														</li>
														<li>
															<img src="images/Udondo/Udondo_1.png" alt="" />
														</li>
														<li>
															<img src="images/Udondo/Udondo_2.png" alt="" />
														</li>
														<li>
															<img src="images/Udondo/Udondo_3.png" alt="" />
														</li>
													</ul>
												</div>
												<div class="project_content">
													<h3 class="project_content_title">우리동네도서관(우동도)</h3>
													프로젝트를 기획 및 문서를 작성하고 Firebase와 연동하여 도서 등록, 찜한 도서목록,
													메인화면 및 내정보 수정 등 세부 기능을 구현하였습니다.
												</div>
											</div>
												
											<div class="project_skill">
												<p class="skill_title">사용 기술</p>
												<ul class="skill-wrap">
													<li class="skill">Kotlin</li>
													<li class="skill">Firebase</li>
													<li class="skill">Github</li>
												</ul>
											</div>

											<div class="progress_fixed">
												<div class="progress_title">참여도</div>
												<div id="progressbar_2"></div>
											</div>
											<ul class="icons">
												<li>Project Details <a href="안드로이드 프로젝트_기획서_4조_최종.pptx" download="UDONDO" class="icon object alt fa-file-pdf"><span class="label">PDF</span></a></li>
											</ul>
										</p>
									</div>

									<div id="project3" class="box">
										<p>
											<div class="project_skill">
												<div id="edd3" class="image left">
													<ul class="slider_1">
														<li>
															<img src="images/movie_app.png" alt=""/>
														</li>
													</ul>
												</div>
												<div class="project_content">
													<h3 class="project_content_title">Movie App</h3>
													React 클론코딩으로 기본적인 Dom을 활용하여 렌더링을 하였고,
													Git을 통해 배포하였습니다.
												</div>
											</div>
												
					
											<div class="project_skill">
												<p class="skill_title">사용 기술</p>
												<ul class="skill-wrap">
													<li class="skill">React</li>
													<li class="skill">HTML</li>
													<li class="skill">Github</li>
												</ul>
											</div>

											<div class="progress_fixed">
												<div class="progress_title">참여도</div>
												<div id="progressbar_3"></div>
											</div>
											<ul class="icons">
												<li>Project Link <a href="https://lemonjiyeon.github.io/movie_app_2020" class="icon solid alt fa-link"><span class="label">Link</span></a></li>
											</ul>
										</p>
									</div>

									<div id="project4" class="box">
										<p>
											<div class="project_skill">
												<div id="edd4" class="image left">
													<ul class="slider3">
														<li>
															<img src="images/Dagumbari/dagumbari.jpg" alt=""/>
														</li>
														<li>
															<img src="images/Dagumbari/Dagumbari_1.png" alt="" />
														</li>
														<li>
															<img src="images/Dagumbari/Dagumbari_2.png" alt="" />
														</li>
														<li>
															<img src="images/Dagumbari/Dagumbari_3.png" alt="" />
														</li>
														<li>
															<img src="images/Dagumbari/Dagumbari_4.png" alt="" />
														</li>
													</ul>
												</div>
												<div class="project_content">
													<h3 class="project_content_title">다금바리를 찾아서</h3>
													이미지 딥러닝 모델을 통해 다금바리를 판별하는 어플로,
													프로젝트를 기획하고, 
													데이터 수집 · 정제와 안드로이드 UI 및 기능을 구현하였습니다.
												</div>
											</div>
						
											
											<div class="project_skill">
												<p class="skill_title">사용 기술</p>
												<ul class="skill-wrap">
													<li class="skill">Python</li>
													<li class="skill">Kotlin</li>
													<li class="skill">Github</li>
												</ul>
											</div>

											<div class="progress_fixed">
												<div class="progress_title">참여도</div>
												<div id="progressbar_4"></div>
											</div>
											<ul class="icons">
												<li>Project Details <a href="빅데이터 시각화.pptx" download="다금바리를 찾아서" class="icon object alt fa-file-pdf"><span class="label">PDF</span></a></li>
											</ul>
										</p>
									</div>
							</section>

						<!-- Get Started -->
							<section id="cta" class="main special">
								<header class="major">
								<h2 class="footercm">Thank you for visit!</h2>
								</header>
							
							</section>

					</div>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
					</footer>

			</div>
		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="assets/js/typing.js"></script>
			
	</body>
</html>