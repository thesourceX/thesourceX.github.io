<!DOCTYPE html>
  <head>
    <title>Student Login | sourceX</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300i,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="login.css">

  </head>

  <body>
    <div class="basebox">
      <span class="leftbox">
        <div classs="logo">
          <img class="logo" src="resources/logo_white.gif">
        </div>
        <div class="leftboxtext">
          <p>Getting started is simply a few clicks away. Register for a free account today and
          immediately get access to the web's finest data pool.</p>
          <button class="reg"><a href="register_s.php">REGISTER HERE</a></button>
        </div>
      </span>
      <span class="rightbox">
        <p class="logintext">Or login to your account</p>
        <form action="" method="post">
          <input type="text" id="id" name="id" required >
          <span class="floating-label one">Student ID</span>
          <input type="password" id="password" name="password" required >
          <span class="floating-label two">Password</span>
          <button type="submit" id="submit" name="submit">login</button>
        </form>
        <p class="fp"><a href="#">Forgot password?</a></p>
      </span>
    </div>


    <?php
      if(isset($_POST['submit'])){
        $givenid = $_POST['id'];                      //entered id
        $fname = $lname = $dept = $year = $section = "";
        $givenpassword = $_POST['password'];          //entered password
        $status = 1;                              /*if status is 0 then login successful
                                                    if status is 1 then id not exist in db
                                                    if status is 2 then password incorrect
                                                  */
        $user = 'aruna';
        $pass = '2048';
        $db = new PDO( 'mysql:host=localhost;dbname=sourcex', $user, $pass );
        $sql = "SELECT * FROM students";
        $result = $db->query( $sql );

        foreach( $result as $row ){
          if($givenid == $row['id'] && $givenpassword == $row['pswd']) {
            $status = 0;
            session_start();
            $_SESSION['id']  = $givenid;
            $_SESSION['fname'] = $row['fname'];
            $_SESSION['lname'] = $row['lname'];
            $_SESSION['dept'] = $row['dept'];
            $_SESSION['year'] = $row['year'];
            $_SESSION['section'] = $row['section'];
            header("Location: studentif.php");
            exit;
          } else if($givenid == $row['id'] && $givenpassword != $row['pswd']) {
            $status = 2;
            break;
          }
        }

        if($status == 1){
          //if the id doesnt match in the database
          echo "<p style='color: red; position: absolute; top: 68%; left: 70%; '>Incorrect ID!</p>";
        } else if($status == 2){
          //or use this if id does exist and the password doesnt exist
          echo "<p style='color: red; position: absolute; top: 68%; left: 70%; '>Incorrect Password!</p>";
        }
      }
    ?>

  </body>
</html>
