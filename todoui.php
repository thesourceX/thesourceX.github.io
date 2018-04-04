<!DOCTYPE html>
  <head>
    <title>To Do List | sourceX</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300i,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="todoo.css">


  </head>

  <body>
    <?php
      session_start();
      $id = $_SESSION['id'];
      $fname = $_SESSION['fname'];
      $lname = $_SESSION['lname'];
      $dept = $_SESSION['dept'];
      $date = date_default_timezone_set('Asia/Kolkata');

      echo '<div class="frame">';
      echo '<div class="hellotext align"><h1>Hello,<br><b>' .$fname. '</b></h1></div>';
      echo '<div class="date align"><b>' .date("l"). '</b>, ' .date("j F"). '</div>';
      echo '<div class="dividermain"></div><div class="list">';


      //accept data from the todo database
      $user = 'aruna';
      $pass = '2048';
      $db = new PDO( 'mysql:host=localhost;dbname=sourcex', $user, $pass );
      $sql = "SELECT * FROM todolist WHERE id='" .$id. "'";
      $result = $db->query( $sql );

      $number = 0;

      foreach( $result as $row ){
        echo '<div class="item">'.$row['title'].'<div class="description">'.$row['description'].'</div></div>
        <div class="divider"></div>';
        $number += 1;
      }
      echo '</div>';
      echo '<div class="alignr"><span style="font-size: 25px;"><b><i>' .$number. '</i></b></span> <div style="font-size: 10px; margin-top: -30px; margin-left: 20px;">PENDING<div>TASKS</div></div></div>';

      echo '</div>';
    ?>

    <button id="add">
      <div class="hori"></div>
      <div class="vert"></div>
    </button>

    <div class="frame2 frame">
      <input type="text"></input>
      <input type="text"></input>
    </div>

    <script type="text/javascript">
      $("#add").click(function(){
        alert("CREATE A NEW TO DO THINGY");
        $(".frame2").css("display", "block");
        $(".frame2").animate({opacity: "1"});
      });
    </script>

  </body>

</html>
