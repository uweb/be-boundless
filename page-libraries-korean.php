<?php
/**
 * Template Name: Libraries
 */

	$twitter_photo = '';
	$twitter_title = '';
	$twitter_description = '';
	$meta = twitter_card($twitter_photo, $twitter_title, $twitter_description);

	$styles = "<link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/immersive-stories/css/libraries/animsition.min.css' type='text/css' media='all' /><link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/campaign/css/header.css' type='text/css' media='all' /><link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/immersive-stories/css/common.css' type='text/css' media='all' /><link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/immersive-stories/css/libraries.css' type='text/css' media='all' />";
	$scripts = "<script src='" . get_stylesheet_directory_uri() . "/campaign/js/animationLibraries.min.js' type='text/javascript'></script><script src='" . get_stylesheet_directory_uri() . "/immersive-stories/js/libraries.min.js' type='text/javascript'></script>";
	$scripts .= "<script src='" . get_stylesheet_directory_uri() . "/immersive-stories/js/libraries/animsition.min.js' type='text/javascript'></script>";
	$storyCodes = 'KORCAT,LIBDIS'; //,LSEEND,RENEWU,LIBFHL,LIBBOT,BUSFUN,LIBRAR
	$storyAppeal = 'Support undergraduate research and the future of invaluable library collections by contributing to the University Libraries.';
	get_header( "campaign-v2" );


?>

<div id="immersive-body">
	<section class="intro" id="intro-vid">
		<div id="version-switch">
			<button id="korean" href="libraries" class="animsition-link" data-animsition-out-class="fade-out" data-animsition-out-duration="1000">View English version</button>
		</div>
		<button id="pause">Pause</button>
		<video  autoplay loop muted playsinline class="media" data-object-fit poster="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/built-env/header.jpg' ?>" class="fullscreen-bg__video">
			<source src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/video/built-env/header-slow.mp4' ?>" type="video/mp4">
		</video>

		<div class="intro-body">
			<div class="row">
				<div class="col-md-7 col-lg-5 col-md-offset-1 col-xs-11 col-lg-offset-2 col-xs-offset-1" id='intro-text'>
					<h1>연구의 <br />핵심</h1>
					<span class="udub-slant"><span></span></span>
					<p>졸업논문 작성을 위해 Kristy Kwon은 UW의 동아시아 도서관에 연락했습니다. 그녀가 거기서 발견 한 것은 그녀의 세계를 열었습니다.</p>
				</div>
			</div>
		</div>
		<section class="scrollit read-more">
			<p>Scroll Down</p>
			<div class="mouse">
				<div class="scroll"></div>
			</div>
		</section>
	</section>

	<main id="main_content">

		<!-- Kristy Intro + Slideshow -->
		<section class="text-block transparent no-pad">
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-md-offset-1 copy">

						<p>크리스티 권 (Kristy Kwon)의 가족은 그녀가 6살이었을 때, 한국에서 워싱턴주 렌튼으로 이사했습니다. 작년까지 그녀는 한국에 돌아갈 기회가 없었습니다. 그래서 워싱턴 대학에서 수석졸업논문을 써야 할 때, 경제학과 국제학 전공인 그녀는 항상 듣기만 하던 고향에 대해 연구하고 싶었습니다.</p>

						<p>그러나 전체 국가가 논문 주제는 아닙니다. 그녀는 어떻게 주제 범위를 좁힐 수 있었을까요?  크리스티는 대학 도서관 시스템의 일부인 동아시아 도서관에서 답을 찾았습니다.</p>

						<p>학부 연구는 허스키 경험의 특징입니다 : 5명의 UW 학부생 중 4명이 연구, 창조적인 작업 또는 장학금에 참여합니다. 타코마에서 프라이데이 하버 지역에 걸쳐 16곳의 장소에 위치한 University Libraries는 모든 학부생의 연구를 돕기위해 수백만 권의 인쇄물과 디지털장서를 제공합니다.</p>

						<p>도서관은 또한 학생들에게 더욱 가치있는 자료를 제공합니다 : 도서관 사서, 기록보관담당자와 큐레이터는 광범위한 주제에 대해 깊은 지식을 갖고 있으며 학부생이 연구 과정의 각 단계를 탐색하도록 도와줍니다.</p>


					</div>                 
					<div class="col-md-6 arrow-right">
						<img src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/libraries/kristy-kwon.jpg' ?>" alt="ADD ALT TEXT">
						<div class="caption">Kristy Kwon / Senior, economics and international studies</div>
					</div> 
				</div>
			</div>   
		</section>

		<!-- Libraries Stats -->
		<section id="libraries-stats">

			<div id="stats-slides">
					<div class="statistic stat-1">
						<div class="stat-text">
							총<br />
							<span class="large">9,000,000</span><span class="large plus">+</span><br />
							권 (전자 서적 포함)
						</div>
					</div>
					<div class="statistic stat-2">
						<div class="stat-text">
							동아시아 도서관에는 전국에서 두 번째로 큰 한국어 장서를 포함하여 <br />
							<span class="large">770,000</span><span class="large plus">+</span><br />
							<span class="snap-right">권이 넘게 보관되어 있습니다.</span>
						</div>
					</div>
					<div class="statistic stat-3">
						<div class="stat-text">
							전 세계의 학자, 정부 기관 및 연구소에 <br />
							<span class="large">11,000</span><span class="large plus">+</span><br />
							개 이상의 문서가 대여됩니다.
						</div>
					</div>
			</div>

		</section>

		<section id="video" class="text-block white arrow-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<!-- INSERT SLASH BEFORE PLAY BUTTON -->
						<a data-lity href="https://www.youtube.com/embed/7AYdC1iNhZs?autoplay=1&rel=0&showinfo=0" class="center-block play">
							<div><h3>Taking research to the next level</h3>
							UW senior Kristy Kwon and Korean Studies librarian Hyokyoung Yi talk about Kwon’s research on Korean TV dramas.</div>
							<svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" viewBox="0 0 150 150" class="opening-slash">
								<circle id="play-cir" fill="none" stroke="#fff" stroke-width="4.649" stroke-miterlimit="10" cx="75" cy="75" r="70"/>
								<path id="play-tri" fill="#fff" d="M57.767,46.187L110.382,75l-52.616,28.816"/>
							</svg>
							<span>Play Full Video _</span>
						</a>
					</div><!-- .col-md-10 .col-md-offset-1 -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- #video .text-block .white -->



		<!-- Turning TV into a cultural lens + Pull quote + Slideshow -->
		<section class="text-block transparent no-pad">
			<div class="container copy">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 ">



						<div class="row">
							<div class="col-md-12"><h2>TV를 문화적 렌즈로 전환 </h2></div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<p>"모국에 대한 강한 자부심을 느끼기 때문에 항상 한국을 연구하고 싶었지만 학문적으로 탐구 할 기회가 없었습니다"   그래서 크리스티는 수석 졸업 논문의 방향을 결정하는 것이 쉬웠다고 합니다.  "물론, 나는 한국을 (주제로) 선택했습니다."</p>

								<p>그러나 다음 단계는 그리 단순하지 않았습니다.  크리스티는 연구 주제를 좁히기 위해 고심했습니다. 잭슨 국제 대학 부교수이며 크리스티의 논문 고문인 데보라 포터 (Deborah Porter) 교수는 크리스티에게 한국 사회에서의 여성의 역할을 연구하기위한 렌즈로 한국 드라마 (K-dramas)를 다뤄 볼 것을 제안했습니다.</p> 

								<p>미국 드라마와 마찬가지로 K-드라마는 진정한 사랑을 추구하는 이상적인 인물들을 주연으로 다룹니다. 67%에 가까운 한국 시청자가 90 년대 후반의 드라마 '너와 나'의 피날레를 지켜 보았고, 스페인에서 짐바브웨까지 관중들은 이 대단한 인기 쇼들에 매료되었습니다.   최초의 여성 어의가 된 고아의 이야기를 다룬 드라마 "대장금"( “궁전의 보석")은 91 개국에 배포되었습니다.</p> 

								<p class="callout">"드라마는 한국의 중요한 문화"라고 크리스티는 말합니다. "드라마를 보면서 자랐고, 내가 태어난 곳이기 때문에 나는 드라마들을 볼 때 소속감을 느낍니다."</p>

								<p>그러나 2016 년에 "아버지는 이상해" 에피소드를 보면서 크리스티는 좌절감이 커졌습니다.    "보통 한국 사회에서는 장남이 선호됩니다.”  그녀는 설명합니다.  “이 드라마는 오빠는 성공하지 못했지만, 반면에 권위있는 대학을 졸업하고 성공한 변호사가 된 여성에 초점을 맞췄습니다 "    그럼에도 불구하고 오빠의 잘못 행동은 가볍게 다루어졌지만 딸은 더 엄격한 벌을 받았다고 크리스티는 설명합니다.   이러한 불균형은 그녀를 잠시 생각하게 만들었습니다.</p>

								<p>한국 여성들은 특히 직장에서 평등을 향한 커다란 진보를 이루었습니다. 그럼에도 불구하고, 많은 젊은 전문직 여성들이 보다 보수적인 역할을 묘사하는 드라마를 보고 있습니다. 논문 프로젝트를 통해 크리스티는 이 명백한 역설과 그 경제적 사회적 영향을 조사하기로 했습니다.</p>

								<p>그녀 논문의 가설은 근대 한국 여성들은 드라마 속의 한국 여성들의 보수적 세계와 그들이 성장하고 교육받은 진보적인 현실을 차별화 할 수 있기 때문에 K- 드라마를 보고 감상 할 수 있다고 주장합니다.</p>


							</div>                 
							<div class="col-md-5 col-md-offset-1">
								<blockquote class="quote">"나는 한국에 대한 강한 자부심을 느끼기 때문에 항상 한국을 연구하고 싶었지만 학문적으로 탐구 할 기회는 없었습니다."</blockquote>
								<!-- <span class="rq">&rdquo;</span> --><div class="attribute">Kristy Kwon, 졸업반</div>

								<div class="arrow-right" style="clear: both;"><img src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/libraries/deborah-porter.jpg' ?>" alt="Deborah Porter"></div>
								<div class="caption">Deborah Porter / Associate Professor, Jackson School of International Studies</div>

							</div> 
						</div>



					</div>
				</div>
			</div>   
		</section>


		<!-- Korean Women Stats -->
		<!-- Libraries Stats -->
		<section id="korea-stats">

			<div id="women-slides">
					<div class="statistic stat-1">
						<div class="stat-text">
							<span class="large">67</span><span class="large plus">%</span><br />
							에 가까운 한국의 TV 시청자가 90 년대 후반의 드라마 '너와 나'의 피날레를 보았습니다.
						</div>
					</div>
					<div class="statistic stat-2">
						<div class="stat-text">
							최초의 여성 어의가 된 고아의 이야기를 다룬 드라마 '대장금'(궁전의 보석)은 <br />
							<span class="large">91</span><br />
							<span class="snap-right">개국에 배포되었습니다.</span>
						</div>
					</div>
			</div>

		</section>


		<!-- Going right to the source Text -->
		<section class="text-block transparent no-pad">
			<div class="container copy">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 ">
						<div class="row">
							<div class="col-md-12"><h2>연구 자료 근원에 바로 가기</h2></div>
						</div>
						<div class="row">
							<div class="col-md-6">
								
								<p>크리스티는 가설을 정한 후 기존의 K- 드라마 소비에 관한 연구를 읽기 시작했습니다.   많은 자료들이 한국어 데이터베이스를 통해서만 이용 가능했지만, 그녀는 접속하거나 탐색하는 방법을 모르고 있었습니다. 크리스티는 동아시아 도서관에 도움을 청했습니다.</p>

								<p>시애틀 UW 캠퍼스에 위치한 동아시아 도서관은 전국에서 두 번째로 큰 한국어 장서를 포함하여 770,000 권 이상을 보관하고 있습니다.</p>

								<p>한국학도서관 사서 이효경씨는 크리스티와 긴밀히 협력하기 시작했습니다. "첫 만남부터 나는 논문에 대한 그녀의 큰 호기심과 열정을 볼 수 있었습니다"라고 이씨는 말합니다. KISS 한국어 자료 데이터베이스를 비롯한 온라인 자료를 탐색하여 크리스티가 필요로하는 자료를 함께 찾았습니다.</p>

								<p class="callout">"많은 시간이 걸렸지만, 이 선생님은 저를 열정적으로 도와주셨습니다." 크리스티는 말합니다. "나는 그 분의 헌신에 정말 감사했습니다."</p>

								<p>크리스티는 가용한 자료들을 자세히 찾아 본 뒤,  한국 여성들을 인터뷰하고 자료를 수집하기위해 서울로 여행하기로 결정했습니다. 이 여행은 또한 그녀가 10년 넘게 보지 못했던 할머니와 친척 여자분들을 다시 볼 수 있는 기회도 줄 것입니다.</p>


							</div>                 
							<div class="col-md-5 col-md-offset-1 arrow-right">

								<img src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/libraries/hyokyoung-yi.jpg' ?>" alt="Hyokyoung Yi">
								<div class="caption">Hyokyoung Yi / Korean Studies Librarian, East Asia Library</div>

							</div> 
						</div>
					</div>
				</div> 
			</div>   
		</section>


		<!-- Giving Widget -->
		<section class="text-block giving-widget-promoted">
			<div class="row">
				<div class="first-col col-md-5 col-md-offset-4 col-sm-8 col-sm-offset-1 col-xs-offset-1 col-xs-10">
					<div>             
						<h2>학부 연구 진전</h2>
						<p>대학 도서관을 지원함으로써 Kristy Kwon과 같은 학생들이 영향력있는 연구를 수행하는 데 필요한 자료를 사용 할 수 있도록 도울 수 있습니다.</p>
					</div>
				</div>
				<div class="col-md-2 col-md-offset-1 col-sm-3 col-xs-offset-1 ">
					<div>                                 
						<div class="boundless-button sm dark give"><span><a id="immersive-give-promoted" data-fund="CPEDGE" href="#giving-widget-promoted">Give now</a></span></div>
						<button id="close-give">Close</button>
					</div>
				</div>
			</div>
			<div id="immersive-give-iframe-promoted"></div>
		</section>


		<!-- Returning to her roots Text + Breakout Quote + Putting her thesis to the test Text -->
		<section class="text-block transparent no-pad">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 copy">
						<h2>그녀 가족의 기원으로 돌아 가기</h2>
						<p>크리스티는 서울에서 자신의 시간을 최대한 활용하기 위해 한국어 구사력을 향상시키고 그녀의 연구방법이 한국 사회의 규범에 어긋나지 않도록 노력하고 싶었습니다.</p>

						<p>한국에 자주 가는 이효경 사서는 문화적인 면에 대해 크리스티가 준비하는 것을 기꺼이 도왔습니다. 그녀는 크리스티를 잭슨 학교 한국학 및 역사 학부의 남화숙, (제임스 B. 팔레이스 석좌교수 겸) 부교수에게도 소개했습니다. 권 교수는 크리스티를 이화 여자 대학교의 동료와 연결시켜 주어 대학 수업을 참관하고 인터뷰 참가자를 모집 할 수 있도록 했습니다.</p>

						<blockquote class="breakout-quote"><span class="left-quote">&ldquo;</span>2017 년 9 월 경 크리스티는 한국을 방문 할 준비를 마쳤습니다. 그녀는 2 주 동안 논문 연구를 위해 한국 여성들과 인터뷰하고 가족을 방문 했습니다. 남 교수와 이효경 사서로부터 받은 도움 덕분에 모든 대화가 순조롭게 진행되었습니다.<span class="right-quote">&rdquo;</span></blockquote>

						<h2>그녀의 학위 논문을 시험대에 올리다</h2>
						<p>그녀의 여행에 많은 것이 걸려 있었습니다:  몇 달 간 인터뷰를 분석하면서 크리스티는 자신이 수집한 데이터가 그녀의 가설을 완전히 반박한다는 것을 발견할 수도 있습니다.</p>

						<p>실망스러울 수도 있겠지만, 반면에 다른 기회를 만들 수 있다고 크리스티의 졸업 논문 교수는 믿습니다. "그런 일이 일어 날 때 나는 매우 좋아합니다.  우리가 뭔가를 하고 있다는 것을 의미하기 때문입니다" Porter교수는 말합니다. "Kristy는 데이터가 우리에게 무엇을 말하는 지 실제로 보고 있습니다."</p>

						<p>크리스티는 봄 학기에 논문을 방어 할 것이며, 대학 도서관을 통해 학부 학술 연구 상을 신청할 계획입니다. 졸업 후, 그녀는 이민법 또는 형법 전공 분야 J.D.학위를 얻고 소외된 사회공동체에 대한 미 정부 정책의 영향을 연구하기를 원합니다.</p>
						
						<p>크리스티는 동아시아 도서관이 그녀의 연구에 중요한 도움을 줄 뿐만 아니라 그녀에게 소중한 주제를 탐구 할 수 있는 연결점을 제공한다고 평가합니다.   "한국이 여성에 대한 긍정적 변화를 보장하는 많은 법을 만들었지만 충분하지 않다는 것을 보여주기 위해 이 연구를 사용하고 싶습니다" 크리스티는 말합니다. "우리는 이러한 대화를 계속 해야 합니다."</p>
						
						<p>크리스티와 같은 학생들은 대학 도서관을 통해 전 세계의 모든 형식의 지식을 접할 수 있습니다. 학부 연구로 시작하는 여정은 세상을 변화시킬 수 있습니다.</p>
					</div>
				</div> 
			</div>   
		</section>


		<!-- Donor Appeal Section w/ background + Video -->
		<section class="text-block grey no-pad donor-appeal arrow">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 copy">
						<h2>역사적 소장품 보존</h2>
						<p>크리스티 권 (Kristy Kwon)이 연구에 사용했던 광범위한 한국어 장서는 동아시아 도서관의 목록 작성자이기도 한 류혜자(Heija Ryoo)씨와 같은 기증자들 덕분에 유지되고 있습니다.</p>

						<p>류씨는 한국 장서에 적체 된 소장품들이 누적 된 것을 알게 되었을 때 기회가 있음을 보았습니다.  도서관 사서 이효경씨와 공동으로 한국 카탈로그 기금을 설립했습니다.  관대한 지역 기부자들이 지원 한 이 기금은 동아시아 도서관이 대학 도서관 온라인 데이터베이스와 국제 도서 목록 데이터베이스인 WorldCat에 적체된 항목을 입력 할 수 있게 해 줍니다. 이러한 자료는 수십 년 만에 처음으로 전세계 학생, 연구원, 교직원 및 기타 사용자가 사용할 수 있게 되었습니다.</p>

						<p>도서관의 노력은 이미 주목을 받고 있습니다. 한국의 국립 중앙 도서관에서 온 방문객들은 이 도서관 소장품속에 숨겨져 있는 보물이 있는지 보기 위해 도서관을 찾았습니다.</p>

						<p>류씨는 "이 소장품들이 차세대를 위해 보존 된다는 것을 사람들이 아는 것이 자산 입니다. "2 세대, 3 세대 한국계 미국인은 미국 내 어느 곳에서도 이용할 수 없는 이런 자료들을 찾을 수 있습니다."</p>

						<h3>Why I give to the East Asia Library</h3>
						Heija Ryoo, an East Asia Library cataloger and donor, helped resurface artifacts that had been hidden away for years.
						<div id="heija-video">

							<a data-lity href="https://www.youtube.com/watch?v=b7P3vganmHI?autoplay=1&rel=0&showinfo=0" class="center-block play"><img src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/libraries/heija-ryoo.jpg' ?>" class="img-responsive">
								<div class="playit">
									<svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" viewBox="0 0 150 150" class="opening-slash">
										<circle id="play-cir" fill="none" stroke="#fff" stroke-width="4.649" stroke-miterlimit="10" cx="75" cy="75" r="70"/>
										<path id="play-tri" fill="#fff" d="M57.767,46.187L110.382,75l-52.616,28.816"/>
									</svg>
									<span>Play Full Video _</span>
								</div>
							</a>
						</div>
					</div>
				</div> 
			</div>
			<div id="version-switch">
				<button id="korean" href="libraries" class="animsition-link" data-animsition-out-class="fade-out" data-animsition-out-duration="1000">View English version</button>
			</div>
		</section>

	</main>

</div>
<script type="text/javascript">
	$(document).ready(function() {
  $(".animsition").animsition({
    inClass: 'fade-in',
    outClass: 'fade-out',
    inDuration: 500,
    outDuration: 500,
    linkElement: '.animsition-link',
    // e.g. linkElement: 'a:not([target="_blank"]):not([href^="#"])'
    loading: true,
    loadingParentElement: 'body', //animsition wrapper element
    loadingClass: 'animsition-loading',
    loadingInner: '', // e.g '<img src="loading.svg" />'
    timeout: false,
    timeoutCountdown: 5000,
    onLoadEvent: true,
    browser: [ 'animation-duration', '-webkit-animation-duration'],
    // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
    // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
    overlay : false,
    overlayClass : 'animsition-overlay-slide',
    overlayParentElement : 'body',
    transition: function(url){ window.location.href = url; }
  });
});
</script>
<?php
	include(locate_template('include-giving.php'));
	get_template_part('footer','campaign-v2');
?>