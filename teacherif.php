<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />

		<title>Teacher Interface</title>

		<link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


		<link rel="stylesheet" href="INTERFACE/teacherif.css" />
		<link rel="stylesheet" href="INTERFACE/teacherif2.css" />

		<style>

			* {	 font-family: "Arvo";
			font-size:17px;

			}
			@media (min-width: 992px) {
				.header a {
					display: none;
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
			.schedule { display: none; }
			#content { display: block; }
			#close {
				background-color: #7D8CC4 !important;
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
			$(function() {
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
						top 		: [
							'<a href="#/"><span class="fa fa-home"></span></a>'
						]
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
							content		: [
								'<a href="#panel-menu"><i class="fa fa-bars"></i> <span>Menu</span></a>',
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
		?>
		<div id="page">
			<div class="header">
				<a href="#menu"><span></span></a>
				Teacher Interface
			</div>
		<iframe id="content" src="https://drive.google.com/embeddedfolderview?id=1DnpMjIKrmp1sU0kCnN8CqdW8r7IUdzhl#grid" style="width:95%; height: 575px; border:0; margin-left:5%; overflow-x: hidden;"></iframe>
			<div class="schedule">
				<iframe name="Framename" src="teacherschedule.html" width="98%" height="750px" frameborder="0" class="frame-area">
				</iframe>
			</div>
			<!--div class="content">
				<p><strong>Teacher Interface</strong><br /></p>
			</div-->
			<nav id="menu">
				<div id="panel-menu">
					<ul>
						<li><a href="#/">Home</a></li>
						<li><span>Academia</span>
							<ul>
								<li><span>Class List</span>
									<ul>
										<li><span>Class - A</span>
										<ul><iframe src="https://drive.google.com/embeddedfolderview?id=1r8AO-JU5BhZCqv4hnOqZg2YYL2C57INI#list" width="100%" height="600" frameborder="0">Loading...</iframe></ul></li>

										<li><a href="#/">Class - B</a></li>
										<li><a href="#/">Class - C</a></li>
									</ul>
								</li>
								<li><a href="#/"><span id="cs">Class Schedule</span><span><button id="close">x</button></span></a></li>
								<li><a href="#/">Assignments</a></li>
							</ul>
						</li>

						<li class="Divider"></li>
						<li><a href="#/">Tutorial</a>
						<div class="content">
							<p>Work In Progress</p></div>
						<li><a href="calendar.php">Calendar</a></li>
						<li><a href="todoui.php">To-do</a></li>
						<li><a href="https://www.google.com/drive/" rel="noopener noreferrer" target="_blank">Google Drive</a></li>
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
				$("#content").css("display", "none");
				$(".schedule").css("display", "block");
				$("#close").css("display", "inline-block");
			});
			$("#close").click(function(){
					$("#content").css("display", "block");
					$(".schedule").css("display", "none");
					$("#close").css("display", "none");
			});
		</script>
		</script>
	</body>
</html>
