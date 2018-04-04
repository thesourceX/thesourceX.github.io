<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />

		<title>Event Calendar</title>

		<link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
      body, html {
        width: 100%;
        height: 100%;
        background-color: #DDD;
        overflow-x: hidden;
        overflow-y: hidden;
				font-family: tahoma;
      }

      .frame {
        position: relative;
        height: 450px;
        width: 800px;
        left: 50%;
        top: 50px;
        margin-left: -400px;
        background: #EEE;
        box-shadow: 1px 1px 5px #777;
      }

      .left {
        position: absolute;
        height: 100%;
        width: 40%;
        background-color: #1abc9c;

      }
      .right {
        position: absolute;
        height: 100%;
        width: 60%;
        margin-left: 40%;
        padding: 20px 53px 50px 55px;
        transition: all 1s;
      }
      .month {
        font-size: 13.75px;
        padding-left: 1px;
        padding-right: 1px;
        padding-top: 4px;
        padding-bottom: 4px;
      }
      .years { font-size: 40px; }
      .m1, .m2, .m3, .m4, .m5, .m6, .m7, .m8, .m9, .m10, .m11, .m12 {
        opacity: 0.5;
        cursor: pointer;
      }

      .month:hover {
				opacity: 1;
      }

			.weekdays { position: absolute; width: 75%; height: 25px; margin-top: 20px; background-color: #ddd; margin-bottom: 20px;}
			.week1 { margin-top: 15px;}
			.week2, .week3, .week4, .week5, .week6 { margin-top: 12px;}
			.week6 { margin-top: 22px;}

      .week {
				position: absolute;
        font-size: 19px;
				width: 45px;
				margin-left: 3px;
				text-align: center;
      }
			.w1 {margin-left: 10px;}
			.w2 { margin-left: 60px;}
			.w3 { margin-left: 110px;}
			.w4 { margin-left: 160px;}
			.w5 { margin-left: 210px;}
			.w6 { margin-left: 260px;}
			.w7 { margin-left: 310px;}

      .week1, .week2, .week3, .week4, .week5, .week6 {
        cursor: pointer;
        font-size: 16px;
        padding: 3px 3px 3px 3px;
      }

			.d { position: absolute; width: 45px; text-align: center; margin-left: 10px; color: #444; }


			.d2, .d9, .d16, .d23, .d30, .d37 { margin-left: 60px; }
      .d3, .d10, .d17, .d24, .d31, .d38 { margin-left: 110px; }
      .d4, .d11, .d18, .d25, .d32, .d39 { margin-left: 160px; }
      .d5, .d12, .d19, .d26, .d33, .d40 { margin-left: 210px; }
      .d6, .d13, .d20, .d27, .d34, .d41 { margin-left: 260px; }
      .d7, .d14, .d21, .d28, .d35, .d42 { margin-left: 310px; }

      .d:hover { background-color:  #1abc9c; opacity: 0.5; color: white; }

			#date {
				position: absolute;
				width: 100%;
				color: white;
				font-size: 20px;
				top: 10px;
				text-align: center;
			}
			.addevent {
				position: absolute;
				top: 70px;
				width: 100%;
				text-align: center;
				font-size: 25px;
				color: white;
			}

			.mark {
				position: absolute;
				width: 4px;
				height: 4px;
				border-radius: 4px;
				margin-top: -10px;
				background-color: red;
			}

			input {
				position: absolute;
				top: 20vh;
				width: 80%;
				left: 10%;
				padding-top: -10px;
				padding-bottom: 10px;
				background: none;
				outline: none;
				border: none;
				border-bottom: 2px solid white;
				height: 40px;
			}

    </style>

  </head>

  <body>


		<?php
				@ob_start();
				session_start();
				$id = $_SESSION['id'];

				$user = 'aruna';
				$pass = '2048';
				$db = new PDO( 'mysql:host=localhost;dbname=sourcex', $user, $pass );
				$sql = "SELECT * FROM events";
				$result = $db->query( $sql );

				foreach( $result as $row ){
					if($id == $row['id'])
						echo "Event: " .$row[ 'description' ] . "<br>".$row[ 'date']."<br>";
				}

		?>

		<div class="calendar">
			<div class="frame">
				<div class="left">
					<div id="date"></div>
					<div class="addevent">ADD EVENT</div>
					<div class="ipevent">
						<input class="ip">
						<button class="btn btn-default"><span class="glyphicon glyphicon-plus"></span></button>
					</div>
					<div class="eventlist"></div>
				</div>
        <div class="right">
          <div class="years">2018</div><br>
          <div class="month">
            <span class="month m1" onclick="setmonth(1)">JAN</span>
            <span class="month m2" onclick="setmonth(2)">FEB</span>
            <span class="month m3" onclick="setmonth(3)">MAR</span>
            <span class="month m4" onclick="setmonth(4)">APR</span>
            <span class="month m5" onclick="setmonth(5)">MAY</span>
            <span class="month m6" onclick="setmonth(6)">JUN</span>
            <span class="month m7" onclick="setmonth(7)">JUL</span>
            <span class="month m8" onclick="setmonth(8)">AUG</span>
            <span class="month m9" onclick="setmonth(9)">SEP</span>
            <span class="month m10" onclick="setmonth(10)">OCT</span>
            <span class="month m11" onclick="setmonth(11)">NOV</span>
            <span class="month m12" onclick="setmonth(12)">DEC</span>
          </div><br>
          <div class="weekdays">
            <span class="week w1">MON</span>
            <span class="week w2">TUE</span>
            <span class="week w3">WED</span>
            <span class="week w4">THU</span>
            <span class="week w5">FRI</span>
            <span class="week w6">SAT</span>
            <span class="week w7">SUN</span>
          </div><br>
          <div class="week1">
            <span class="week1 d d1"></span>
            <span class="week1 d d2"></span>
            <span class="week1 d d3"></span>
            <span class="week1 d d4"></span>
            <span class="week1 d d5"></span>
            <span class="week1 d d6"></span>
            <span class="week1 d d7"></span>
          </div><br>
          <div class="week2">
            <span class="week2 d d8"></span>
            <span class="week2 d d9"></span>
            <span class="week2 d d10"></span>
            <span class="week2 d d11"></span>
            <span class="week2 d d12"></span>
            <span class="week2 d d13"></span>
            <span class="week2 d d14"></span>
          </div><br>
          <div class="week3">
            <span class="week3 d d15"></span>
            <span class="week3 d d16"></span>
            <span class="week3 d d17"></span>
            <span class="week3 d d18"></span>
            <span class="week3 d d19"></span>
            <span class="week3 d d20"></span>
            <span class="week3 d d21"></span>
          </div><br>
          <div class="week4">
            <span class="week4 d d22"></span>
            <span class="week4 d d23"></span>
            <span class="week4 d d24"></span>
            <span class="week4 d d25"></span>
            <span class="week4 d d26"></span>
            <span class="week4 d d27"></span>
            <span class="week4 d d28"></span>
          </div><br>
          <div class="week5">
            <span class="week5 d d29"></span>
            <span class="week5 d d30"></span>
            <span class="week5 d d31"></span>
            <span class="week5 d d32"></span>
            <span class="week5 d d33"></span>
            <span class="week5 d d34"></span>
            <span class="week5 d d35"></span>
          </div>
					<div class="week6">
            <span class="week6 d d36"></span>
            <span class="week6 d d37"></span>
            <span class="week6 d d38"></span>
            <span class="week6 d d39"></span>
            <span class="week6 d d40"></span>
            <span class="week6 d d41"></span>
            <span class="week6 d d42"></span>
          </div>
        </div>
      </div>
    </div>




    <script type="text/javascript">

			function setmonth(x) {
				for(var i = 0; i < 43; i++) {
					var str = ".d" + i;
					$(str).html("");
				}

				for(var i = 1; i < 13; i++) {
					var month = ".m"+i;
					$(month).css("color", "black");
					$(month).css("opacity", "0.6");
					$(month).css("background", "none");
				}

				var month = ".m"+x;
				$(month).css("opacity", "1");
				$(month).css("color", "white");
				$(month).css("background", "#1abc9c");
				document.getElementById("date").innerHTML = months[x-1] + " 1" + ", "+ days[d.getDay()];
				if(x == 1) {
					for(var i = 0; i < 32; i++) {
						var str = ".d" + i;
						$(str).html(i);
					}
				} else if(x == 2) {
					for(var i = 4; i < 32; i++) {
						var str = ".d" + i;
						$(str).html(i-3);
					}
				} else if(x == 3) {
					for(var i = 4; i < 35; i++) {
						var str = ".d" + i;
						$(str).html(i-3);
					}
				} else if(x == 4) {
					for(var i = 7; i < 37; i++) {
						var str = ".d" + i;
						$(str).html(i-6);
					}
				} else if(x == 5) {
					for(var i = 2; i < 33; i++) {
						var str = ".d" + i;
						$(str).html(i-1);
					}
				}  else if(x == 6) {
					for(var i = 5; i < 35; i++) {
						var str = ".d" + i;
						$(str).html(i-4);
					}
				}  else if(x == 7) {
					for(var i = 7; i < 38; i++) {
						var str = ".d" + i;
						$(str).html(i-6);
					}
				}  else if(x == 8) {
					for(var i = 3; i < 34; i++) {
						var str = ".d" + i;
						$(str).html(i-2);
					}
				} else if(x == 9) {
					for(var i = 6; i < 36; i++) {
						var str = ".d" + i;
						$(str).html(i-5);
					}
				}  else if(x == 10) {
					for(var i = 0; i < 32; i++) {
						var str = ".d" + i;
						$(str).html(i);
					}
				}  else if(x == 11) {
					for(var i = 4; i < 34; i++) {
						var str = ".d" + i;
						$(str).html(i-3);
					}
				}  else if(x == 12) {
					for(var i = 6; i < 37; i++) {
						var str = ".d" + i;
						$(str).html(i-5);
					}
				}
			}

			var mark = '<div class="mark"></div>';
			var currentDay = "";
			var currentMonth = "";
      var d = new Date();
      var days = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
			var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
			document.getElementById("date").innerHTML = months[d.getMonth()] + " " + d.getDate() + ", "+ days[d.getDay()];
			setmonth(d.getMonth() + 1);
    </script>

  </body>

</html>
