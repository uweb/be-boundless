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
	// $scripts .= "<script src='" . get_stylesheet_directory_uri() . "/immersive-stories/js/libraries/animsition.min.js' type='text/javascript'></script>";
	$storyCodes = 'KORCAT,LIBDIS';
	$storyAppeal = 'Support undergraduate research and the future of invaluable library collections by contributing to the University Libraries.';
	get_header( "campaign-v2" );


?>

<div id="immersive-body">
	<section class="intro" id="intro-vid">
		<button id="pause">Pause</button>
		<video  autoplay loop muted playsinline class="media" data-object-fit poster="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/libraries/header-kristy-kwon.jpg' ?>" class="fullscreen-bg__video">
			<source src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/video/libraries/2.mp4' ?>" type="video/mp4">
		</video>

		<div class="intro-body">
			<div class="row">
				<div class="col-md-7 col-lg-5 col-md-offset-1 col-xs-11 col-lg-offset-2 col-xs-offset-1" id='intro-text'>
					<h1>연구의 <br />핵심</h1>
					<span class="udub-slant"><span></span></span>
					<p>한국 드라마를 주제로 한 졸업 논문을 쓰기 위하여 크리스티는 워싱턴 대학에 위치한 동아시아 도서관에 도움을 구했다. 그곳은 그녀에게 새로운 세상을 열어 주었다.</p>
				</div>
			</div>
		</div>
		<section class="scrollit read-more">
			<p>아래로 스크롤</p>
			<div class="mouse">
				<div class="scroll"></div>
			</div>
		</section>
	</section>
	<div class="version-switch">
		<a href="../research-korean-dramas"><button id="korean" href="../research-korean-dramas" class="animsition-link" data-animsition-out-class="fade-out" data-animsition-out-duration="1000">영어 보기</button></a>
	</div>

	<main id="main_content">

		<!-- Kristy Intro + Slideshow -->
		<section class="text-block transparent no-pad">
			<div class="container copy">
				<div class="row">
					<div class="col-md-5 col-md-offset-1">

						<p>크리스티는 6살이었을 때, 가족과 함께 한국에서 워싱턴주 켄트로 이민왔다. 작년까지만 해도, 그녀는 한국으로 돌아갈 기회가 없었다. 학위 논문을 써야 할 시기가 왔을 때, 경제학과 국제학을 복수 전공한 그녀는 항상 들어만 왔던 고국에 대해 연구를 하고 싶었다.</p>

						<p>나라 전체를 논문의 주제로 삼을 수는 없었다. 어떻게 범위를 좁힐 수 있을까? 크리스티는 워싱턴대학교 도서관 중 하나인 동아시아 도서관에서 답을 찾을 수 있었다.</p>

						<p>워싱턴대학교의 학부연구는 허스키(워싱턴 주립대의 마스코트) 경험의 특징 중 하나이다: 다섯 명 중 네 명이 연구, 창작 또는 학문 활동에 참여하고 있다. 타코마에서 프라이데이 하버까지 총 16곳에 있는 대학도서관은 다양한 연구를 가능케 하는 수백만 권의 인쇄물과 디지털 자료들을 제공하고 있다.</p>

						<p>도서관은 자료뿐 아니라 중요한 인적 자원도 제공한다: 각 주제에 박식한 주제 전문 사서, 기록 보관 담당자, 큐레이터분들이 학생들이 올바른 연구 과정을 밟을 수 있게 인도한다. </p>


					</div>                 
					<div class="col-md-6">
						<div class="arrow-right"><img src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/libraries/kristy-kwon-stacks.jpg' ?>" alt="크리스티 권"></div>
						<div class="caption">크리스티 권 / 경제학 국제학 복수 전공 졸업반</div>
					</div> 
				</div>
			</div>   
		</section>

		<!-- Libraries Stats -->
		<section id="libraries-stats">

			<div class="container">
				<div class="row">
					<div class="col-md-6 statistic stat-one">
						<div class="stat-text kr">
							University Libraries <br />관련 통계자료<br />
							<span class="large">9백만<span class="plus"><!--+--></span></span><br />
							권 이상 (전자책 포함)<br />의 장서 보유
						</div>
					</div>
					<div class="col-md-6 statistic stat-two">
						<div class="stat-text kr">
							동아시아 도서관은<br />
							<span class="large">77만<span class="plus"><!--+--></span></span><br />
							<span class="snap-right">권 이상의 장서를 <br />보유 – 미국에서 두 <br />번째로 큰 한국어 장서</span>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 source">
							출처: University Libraries, 2017
						</div>
					</div>
				</div>
			</div>

		</section>

		<section id="video" class="text-block white arrow-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<!-- INSERT SLASH BEFORE PLAY BUTTON -->
						<a data-lity href="https://www.youtube.com/embed/-zYESWG9HxE?autoplay=1&rel=0&showinfo=0" class="center-block play">
							<div><h3>연구를 한단계 격상</h3>
							UW 졸업반 권 크리스티와 한국학 사서 이효경씨는 크리스티의 한국 드라마에 대한 연구에 대해 이야기 합니다.</div>
							<svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" viewBox="0 0 150 150" class="opening-slash">
								<circle id="play-cir" fill="none" stroke="#fff" stroke-width="4.649" stroke-miterlimit="10" cx="75" cy="75" r="70"/>
								<path id="play-tri" fill="#fff" d="M57.767,46.187L110.382,75l-52.616,28.816"/>
							</svg>
							<span>전체 비디오 재생 _</span>
						</a>
					</div>
				</div>
			</div>
		</section>



		<!-- Turning TV into a cultural lens + Pull quote + Slideshow -->
		<section class="text-block transparent no-pad">
			<div class="container copy">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 ">



						<div class="row">
							<div class="col-md-12"><h2>한국문화를 TV를 <br />통해 보다</h2></div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<p>“저는 모국에 대해 자부심을 가지고 있기에 항상 한국에 대해서 연구를 해보고 싶었지만, 이때까지 학술적으로 연구할 기회가 없었습니다,” 크리스티는 말한다. 그래서인지 쉽게 학위 논문의 방향성을 결정할 수 있었다고 한다: “한국을 연구 주제로 선택한 것은 매우 당연했습니다.”</p>

								<p>연구의 다음 단계는 그렇게 간단하지 않았다. 크리스티는 연구 주제 범위를 좁히는 데 애를 먹었는데 잭슨 국제대학 부교수이자 논문 지도교수인 데보라 포터 교수님이 한국 드라마를 통하여 한국사회 안의 여성의 역할을 연구해 보는 것을 제안했다. </p> 

								<p>한국 드라마도 미국 드라마와 비슷하게 진정한 사랑을 추구하는 이상적인 인물들이 주로 등장한다. 90년 후반대의 드라마 “그대 그리고 나” 같은 경우에는 마지막 회가 국내 67%의 시청률을 자랑했고, 스페인부터 짐바브웨까지의 시청자들도 이와 같은 인기 있는 드라마에 매료되었다. 고아가 최초의 여성 어의가 되는 이야기를 다룬 “대장금”은 91개의 나라에 배포되기도 하였다.</p> 

								<p class="callout">“드라마는 한국의 문화 중 큰 부분을 차지합니다,” 크리스티는 말한다. “저는 드라마를 보면서 자랐습니다. 그곳에서 태어났기에, 한국 드라마를 볼 때마다 소속감을 느끼곤 합니다.” 그러나 그녀는 드라마에서 남녀 차별과 세대 간 갈등이 묘사되고 있음을 인지했다고 덧붙였다. </p>

								<p>한국 여성은 특히 직장 환경에서 남녀평등을 향한 큰 발전을 이루어왔다. 그런데도, 많은 전문직 젊은 여성들은 아직도 보수적인 성 역할을 묘사하는 드라마를 즐겨 본다. 크리스티는 학위 논문으로 이 명백한 모순뿐 아니라 이런 문제의 경제적, 사회적 영향도 탐구하기로 마음먹었다. </p>

								<p>그녀가 정한 논문의 가설은 현대 한국 여성들이 드라마의 보수적인 세계를 그들이 성장하고 교육받은 진보적인 현실과 차별화시킬 수 있기 때문에 드라마를 보고 즐길 수 있다는 주장이었다.</p>


							</div>                 
							<div class="col-md-5 col-md-offset-1">
								<blockquote class="quote">저는 조국에 대해 자부심을 가지고 있기에 항상 한국에 대해서 연구를 해보고 싶었지만, 학술적으로 연구할 기회가 없었습니다</blockquote>
								<!-- <span class="rq">&rdquo;</span> --><div class="attribute">-	크리스티 권, 4학년 재학생</div>

								<div class="arrow-right" style="clear: both;"><img src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/libraries/deborah-porter-stacks.jpg' ?>" alt="Deborah Porter"></div>
								<div class="caption">Deborah Porter / 잭슨 국제 대학 부교수</div>

							</div> 
						</div>



					</div>
				</div>
			</div>   
		</section>


		<!-- Korean Women Stats -->
		<section id="korea-stats">

			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="statistic stat-one">
							<div class="stat-text kr">
								<div class="large third">67</div>
								<div class="two-thirds"><span class="plus">%</span>의 한국 시청자들이 90년대 <br />후반 드라마 “그대 그리고 <br />나”의 마지막 회를 시청했다.</div>
							</div>
						</div>
						<div class="source">
							출처: <a href="http://www.imbc.com/drama/youandi/concept/fram4.html">IMBC</a>
						</div>
					</div>
					<div class="col-md-6">
						<div class="statistic stat-two">
							<div class="stat-text kr">
								<span class="left">고아가 최초의 <br />여성 어의가 되는 <br />이야기를 다룬 <br />드라마 “대장금”은 </span>
								<span class="large">91<span class="snap-right"> 개의 나라에 배포되었다</span></span>
							</div>
						</div>
						<div class="source">
							출처: Korean Embassy
						</div>
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
							<div class="col-md-12"><h2>자료의 출처로 <br />바로 접근하다</h2></div>
						</div>
						<div class="row">
							<div class="col-md-6">
								
								<p>위 가설을 세운 후, 크리스티는 한국 드라마와 관련한 기존 연구 자료들을 우선적으로 참고했다. 많은 연구자료가 한국어로 된 데이터베이스를 통해서만 이용할 수 있었는데, 그녀는 이 자료들을 어떻게 검색하고 이용할 수 있는지 잘 몰랐다. 그래서 크리스티는 동아시아 도서관에 도움을 구했다.</p>

								<p>시애틀의 워싱턴대학교 안에 위치한 동아시아 도서관은 77만 권 이상의 책들을 보유하고 있으며 전국에서 두 번째로 큰 한국어 장서를 자랑한다.</p>

								<p>한국학 사서 이효경 씨가 크리스티를 긴밀히 도와주기 시작했다. “처음 만났을 때부터 크리스티가 논문을 대하는 엄청난 호기심과 열정을 느낄 수 있었습니다,” 이 사서는 말한다. 둘은 함께 필요한 자료들을 찾기 위해 KISS 한국어 학술지 데이터베이스를 포함한 온라인 자료들을 탐색해 나갔다.</p>

								<p class="callout">“많은 시간이 걸렸음에도 불구하고, 이 사서님은 저를 돕는 데 매우 열정적이셨어요,” 라고 크리스티는 말한다. “저는 그 헌신을 정말 고맙게 생각합니다.” </p>

								<p>크리스티는 모든 자료를 자세히 살펴본 후, 서울로 가서 한국 여성들을 직접 인터뷰하며 자료를 수집해 보기로 했다. 이 여행은 그녀가 10년 이상 만나지 못했던 할머니와 이모들과 재회할 기회이기도 했다.</p>


							</div>                 
							<div class="col-md-5 col-md-offset-1">

								<div class="arrow-right"><img src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/libraries/hyokyoung-yi-stacks.jpg' ?>" alt="Hyokyoung Yi"></div>
								<div class="caption">Hyokyoung Yi / 동아시아 도서관 한국학 사서</div>
							</div> 
						</div>
					</div>
				</div> 
			</div>   
		</section>


		<!-- Giving Widget -->
		<section class="text-block giving-widget-promoted">
			<div class="row">
				<div class="first-col col-md-5 col-md-offset-2 col-sm-8 col-sm-offset-1 col-xs-offset-1 col-xs-10">
					<div>             
						<h2>학부 연구의 진보</h2>
						<p>대학교 도서관을 지원함으로써, 크리스티 권 같은 학생들이 의미 있는 연구를 하는데 필요한 자료들을 열람할 수 있게 도울 수 있습니다.</p>
					</div>
				</div>
				<div class="col-md-2 col-md-offset-2 col-sm-3 col-xs-offset-1 ">
					<div>                                 
						<div class="boundless-button sm dark give"><span><a id="immersive-give-promoted" data-fund="KORCAT,LIBDIS" href="#giving-widget-promoted">지금 기부</a></span></div>
						<button id="close-give">Close</button>
					</div>
				</div>
			</div>
			<div id="immersive-give-iframe-promoted"></div>
		</section>


		<!-- Returning to her roots Text + Breakout Quote + Putting her thesis to the test Text -->
		<section class="text-block transparent no-pad">
			<div class="container copy">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 ">
						<div class="row">
							<div class="col-md-12"><h2>자신의 <br />뿌리로 돌아가다</h2></div>
						</div>
						<div class="row">
							<div class="col-md-6">
								
								<p>서울에서의 시간을 최대한 활용하기 위해, 크리스티는 한국어 말하기와 쓰기 능력을 향상하는 동시에 자신의 연구 방법이 한국 사회의 규범에 어긋나지 않고자 노력했다. </p>

								<p>한국을 자주 방문하는 이 사서는 크리스티가 문화적으로도 준비될 수 있게 도와주었다. 그녀는 또한 잭슨 국제대학의 한국학 및 역사학과 부교수인 남화숙 씨를 크리스티에게 소개해 주었다. 크리스티는 남 교수님을 통해 이화여자대학교에 있는 다른 교수님을 소개받아 수업에 참관하고 인터뷰 참가자를 모집할 기회를 얻었다.</p>

								<p class="callout">2017년 9월경 크리스티는 한국을 방문할 채비를 마쳤다. 그 후 2주 동안 여성들을 인터뷰하고 가족들을 방문했으며, 남 교수님과 이 사서의 도움 덕분에 모든 일은 순조롭게 진행되었다.</p>


							</div>                 
							<div class="col-md-5 col-md-offset-1">

								<div class="arrow-right"><img src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/libraries/kristy-seoul.jpg' ?>" alt="서울을 방문한 크리스티 권"></div>
								<div class="caption">서울을 방문한 크리스티 권</div>
							</div> 
						</div>
						<div class="row">

							<div class="col-md-12">
								<h2>논문을 시험대로 올리다</h2>
								<p>크리스티에게는 한국 여행에 연구의 많은 것이 달려있었는데, 다음 몇 달 동안 인터뷰를 분석하면서 수집한 데이터가 자신이 세웠던 가설을 뒷받침하지 못하게 됨을 알게 되었다.</p>

								<p>낙담이 되기도 했지만, 크리스티의 논문 지도교수는 오히려 새로운 기회를 제공하는 계기가 될 수 있다고 말한다. “저는 학생들에게 이런 일들이 일어날 때 오히려 기쁩니다. 왜냐하면, 이는 학생의 연구가 맞는 방향으로 가고 있다는 것을 의미하기 때문이에요,” 포터 교수는 말한다. “크리스티는 데이터가 연구에 어떻게 시사하는지를 목격하고 있는 것입니다.”</p>

								<p>크리스티는 올봄 자신의 논문을 발표할 예정이며 대학도서관에서 제공하는 학부생 학술 연구상에도 지원할 계획이다. 졸업 후에 그녀는 법학 박사과정을 거쳐 이민법이나 형법을 공부해 미국 정부의 정책들이 소외된 지역 사회의 삶에 미치는 영향을 연구하고 싶어 한다.</p>
								
								<p>그녀는 동아시아 도서관이 자신의 논문에 지대한 도움을 준 것은 물론 개인적으로 소중한 연구 주제를 찾아 주었다고 한다. “저는 이 연구를 통해 비록 한국이 여성들을 돕는 많은 법을 만들었지만, 이것이 충분하지 않다는 것을 보여주고 싶습니다,” 크리스티는 말한다. “우리는 이러한 대화를 지속해 나가야 합니다.”</p>
								
								<p>대학도서관을 통해 크리스티 같은 학생들은 전 세계 어느 곳에 있는 어떤 형태의 지식에도 쉽게 접근할 수 있으며, 학부 연구로 시작된 여정이 결국 세상을 바꾸어 놓을 만한 결과를 낳을 수도 있다.</p>
							</div>
						</div>
					</div>
				</div> 
			</div>   
		</section>


		<!-- Donor Appeal Section w/ background + Video -->
		<section class="text-block grey no-pad donor-appeal arrow">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 copy">
						<h2>역사적 컬렉션 보존하기</h2>
						<p>크리스티가 연구를 위해 사용했던 광범위한 한국어 컬렉션은 동아시아 도서관에서 목록 사서로 근무하고 있는 유혜자 씨 같은 기증자들 덕분에 유지되고 있다.</p>

						<p>한국어 컬렉션에 아직 정리되지 못하고 있던 자료들을 보며 유 사서는 이를 하나의 기금 마련의 기회로 보았다. 이효경 한국학 사서와 목록 계획을 상의한 후 그녀는 한국 책 목록 기금을 설립했다. 커뮤니티 기부자들도 함께 지원한 이 기금은 동아시아 도서관이 아직 정리하지 못했던 자료들을 대학 도서관 목록과 국제도서목록 데이터베이스인 WorldCat에 입력하는 것을 가능케 해 주었다. 이 자료들은 수십 년 만에 처음으로 전 세계의 학생, 연구원, 교수 및 기타 사용자들이 처음으로 이용할 수 있게 되었다.</p>

						<p>도서관의 이러한 노력은 이미 상당한 주목을 받고 있다: 한국의 국립중앙도서관에서도 한국에서조차 발견되지 못한 귀중 도서가 있는지 확인하기 위해 사람들을 파견했다.</p>

						<p>“이 컬렉션은 다음 세대를 위한 자산입니다,” 유 사서는 말한다. “제2세대, 제3세대 재미교포들은 이 컬렉션을 통해 미국 다른 곳 어디에서도 찾을 수 없는 자료들을 열람할 수 있을 것입니다”</p>

						<div id="heija-video">

							<a data-lity href="https://www.youtube.com/watch?v=Re83dft9EI0?autoplay=1&rel=0&showinfo=0" class="center-block play"><img src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/libraries/heija-ryoo.jpg' ?>" class="img-responsive" alt="유혜자">
								<div class="playit">
									<div class="video-caption">내가 동아시아 도서관에 기부하는 이유</div>
									<svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" viewBox="0 0 150 150" class="opening-slash" aria-role="">
										<circle id="play-cir" fill="none" stroke="#fff" stroke-width="4.649" stroke-miterlimit="10" cx="75" cy="75" r="70"/>
										<path id="play-tri" fill="#fff" d="M57.767,46.187L110.382,75l-52.616,28.816"/>
									</svg>
									<span>전체 비디오 재생 _</span>
								</div>
							</a>
						</div>

						<div class="version-switch">
							<a href="../research-korean-dramas"><button id="korean" href="../research-korean-dramas" class="animsition-link" data-animsition-out-class="fade-out" data-animsition-out-duration="1000">영어 보기</button></a>
						</div>
					</div>
				</div> 
			</div>
		</section>
		<div class="text-block transparent no-pad">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p style="margin-top: 15px;">처음배경화면이미지: 한국드라마“응답하라 1997” 시작장면</p>
					</div>
				</div>
			</div>
		</div>

	</main>

</div>

<?php
	include(locate_template('include-giving.php'));
	get_template_part('footer','campaign-v2');
?>