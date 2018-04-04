<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />

		<title>Student Interface</title>

		<link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


		<link rel="stylesheet" href="INTERFACE/studentif2.css" />

		<link rel="stylesheet" href="INTERFACE/studentif.css" />


		<style>
		* {	 font-family: "Arvo";
			font-size:17px;
			}

			@media (min-width: 992px) {
				.header a {
					display: none;
					/*background-color: red;*/
				}
			}

			.mm-navbar_tabs span {
				display: inline-block;

				margin-left: 8px;
			}
			@media (max-width: 450px) {
				.mm-navbar_tabs span {
					display: none;

				}
			}
			iframe .feed {
				margin-top: -100px;
				background: #FAFAFA;
			}

			.feed-title { margin-bottom: 50px;}

			#close {
				background-color: #83779B !important;
				color: white;
				margin-left: 10px;
				display: none;
				outline: none;
				border: none;
			}
		</style>

		<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="INTERFACE/trial2.js"></script>
		<script>
			$(function()
			{
				$('nav#menu').mmenu({
					extensions	: [ 'theme-dark' ],
					setSelected	: true,
					counters	: true,
					searchfield : {
						placeholder		: 'Search menu items'
					},
					iconbar		: {
						add 		: true,
						size		: 40,
						top 		: [ '<i class="fa fa-home"></i></a>'
						],
					},
					sidebar		: {
						collapsed		: {
							use 			: '(min-width: 450px)',
							size			: 40,
							hideNavbar		: false
						},
						expanded		: {
							use 			: '(min-width: 992px)',
							size			: 35
						}
					},
					navbars		: [
						{
							content		: [ 'searchfield' ]
						}, {
							type		: 'tabs',
							content		: [ '<a href="#panel-menu"><i class="fa fa-bars"></i> <span>Menu</span></a>',
								'<a href="#panel-account"><i class="fa fa-user"></i> <span>Account</span></a>',
							]
						}, {
							content		: [ 'prev', 'breadcrumbs', 'close' ]
						}
					]
				}, {
					searchfield : {
						clear 		: true
					},
					navbars		: {
						breadcrumbs	: {
							removeFirst	: true
						}
					}
				});


			});
		</script>
	</head>
	<body>
		<?php
      session_start();
      $id = $_SESSION['id'];
      $fname = $_SESSION['fname'];
      $lname = $_SESSION['lname'];
      $dept = $_SESSION['dept'];
      $year = $_SESSION['year'];
      $section = $_SESSION['section'];
    ?>

		<div id="page">
			<div class="header">
				<a href="#menu"><span></span></a>
				Student Interface
			</div>
			<div class="content">
				  <a class="twitter-timeline" data-dnt="true" data-theme="light" data-link-color="#8f79c8" href="https://twitter.com/sourceXweb?ref_src=twsrc%5Etfw">Tweets by sourceXweb</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
			</div>
			<div class="schedule"><iframe name="Framename" src="class 2a schedule.html" width="96%" height="600px" frameborder="0" class="frame-area">
			</iframe></div>
			<nav id="menu">
				<div id="panel-menu">
					<ul>
						<li><a href="#/">Home</a></li>
						<li><span>Academia</span>
							<ul>
								<li><span>Subject List</span>
									<ul>
										<li><span>Japanese - II</span>
										<ul><iframe src="https://drive.google.com/embeddedfolderview?id=1OwGBqPefIjhZv61FSz1JTMH_uDFxsJm1#list" width="100%" height="600" frameborder="0">Loading...</iframe></ul></li>

										<li><span>French - II</span>
										<ul><iframe src="https://drive.google.com/embeddedfolderview?id=1je1hAymq9pDA0IBgZcGl0gv8yDJrrwR4#list" width="100%" height="600" frameborder="0">Loading...</iframe></ul></li>

										<li><span>German - II</span>
										<ul>
										<iframe src="https://drive.google.com/embeddedfolderview?id=1T3wXfOdyvQKOR0mUwhmNxYlBYjRkktm_#list" width="100%" height="600" frameborder="0">Loading...</iframe></ul></li>

										<li><span>Probability and Queueing Theory</span>
										<ul><iframe src="https://drive.google.com/embeddedfolderview?id=17C3P8p9gGEfRGyvQkFC4z06tf2l_Pqml#list" width="100%" height="600" frameborder="0">Loading...</iframe></ul></li>

										<li><span>Electrical Engineering and Control Systems</span>
										<ul><iframe src="https://drive.google.com/embeddedfolderview?id=1qNfeIbQBnS3jKIquSJtmcxM47H40FFzJ#list" width="100%" height="600" frameborder="0">Loading...</iframe></ul></li>

										<li><span>Algorithm Design and Analysis</span><ul><iframe src="https://drive.google.com/embeddedfolderview?id=13s776AutGJ7daghJ0j5Ws22Jjsg9KMG_#list" width="100%" height="600" frameborder="0">Loading...</iframe></ul></li>

										<li><span>Microprocessors and Microcontrollers</span>
										<ul><iframe src="https://drive.google.com/embeddedfolderview?id=1NDdL9eNML2kM4gSpJJ0ssPzk1jJLns8Y#list" width="100%" height="600" frameborder="0">Loading...</iframe></ul></li>

										<li><span>Basic Aptitude - I</span>
										<ul><iframe src="https://drive.google.com/embeddedfolderview?id=1Qk1hYPJ9I5mVnsRsBZe2UXjgxBzRqzve#list" width="100%" height="600" frameborder="0">Loading...</iframe></ul></li>

										<li><span>Programming in PHP</span>
										<ul><iframe src="https://drive.google.com/embeddedfolderview?id=1wVFZSHIUk8iIhYut9avGN2pXfVz9IVG5#list" width="100%" height="600" frameborder="0">Loading...</iframe></ul></li>

										<li><span>Programming in Java</span>
										<ul><iframe src="https://drive.google.com/embeddedfolderview?id=19sNRMJ6bMhf0XoABn4l241imWpLlYybw#list" width="100%" height="600" frameborder="0">Loading...</iframe></ul></li>

									</ul>
								</li>
								<!--div id="includedContent"></div-->
								<li><a href="#/"><span id="cs">Class Schedule</span><span><button id="close">x</button></span></a></li>
							</ul>
						</li>

						<li class="Divider"></li>
						<li><a href="calendar.php">Calendar</a></li>
						<li><a href="todoui.php">To-do</a></li>
					</ul>
				</div>

				<div id="panel-account">
					<ul>
						<li><a href="#/">Contact</a></li>
						<li><a href="logout.php">Sign out</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<script type="text/javascript">
			$("#cs").click(function(){
				$(".content").css("display", "none");
				$(".schedule").css("display", "block");
				$("#close").css("display", "inline-block");
			});
			$("#close").click(function(){
					$(".content").css("display", "block");
					$(".schedule").css("display", "none");
					$("#close").css("display", "none");
			});
		</script>
	</body>
</html>
