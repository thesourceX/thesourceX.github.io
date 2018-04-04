<!DOCTYPE html>
  <head>
    <title>Teacher Registration | sourceX</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="registerit.css">

    <style>
    .left {
      background: url("resources/reg2.jpg");
      background-size: cover;
      background-repeat:  no-repeat;
    }
    #submit { background: linear-gradient(to right,#5ac2e8,#2550a8); }

    input:focus { box-shadow: 0 0 7px #2550a8 !important; }
    
    </style>
  </head>

  <body>

    <div class="left">
      <div class="logo"><img class="logo" src="resources/logo_white.gif"></div>
    </div>
    <div class="right">
      <p class="regtext">Registration</p>
      <p class="regdesc">Before you submit the form, please ensure that all the information that you have entered is correct and completed fully.</p><br>

      <form action="" method="post">

        <span class="floating-label"><span class="glyphicon glyphicon-tag"></span>First Name</span>
        <span class="floating-label" style="padding-left:8vw;">Last Name</span><br>
        <input type="text" name="fname" required>
        <span style="margin-left: 1vw">
          <input type="text" name="lname" required>
        </span><br><br>


        <div class="floating-label"><span class="glyphicon glyphicon-calendar"></span>Date Of Birth</div>
        <input type="date" name="dob" required><br><br>

        <div class="floating-label"><span class="glyphicon glyphicon-credit-card"></span>Department</div>
        <select type="text" name="dept" required>
          <option value="Default">Select</option>
          <option value="CSE">CSE</option>
          <option value="IT">IT</option>
          <option value="ECE">ECE</option>
          <option value="EEE">EEE</option>
          <option value="CIVIL">CIVIL</option>
        </select><br><br>

        <div class="floating-label"><span class="glyphicon glyphicon-user"></span>Teacher ID</div><input type="text" name="id" required style="min-width: 24vw;"><br><br>

        <div class="floating-label"><span class="glyphicon glyphicon-envelope"></span>Email ID</div><input type="text" name="email" required><br><br>

        <div class="floating-label"><span class="glyphicon glyphicon-earphone"></span>Mobile Number</div><input type="text" name="mobi" required><br><br>

        <div class="floating-label"><span class="glyphicon glyphicon-eye-open"></span>Create Password*</div><input type="password" name="password" id="pwd" required><p style="color: red" id="update">* Must contain atleast 1 uppercase letter and 1 number</p><br>

        <div class="floating-label"><span class="glyphicon glyphicon-eye-close"></span>Confirm Password*</div><input type="password" name="passwordagain" id="pwdagain" onclick="check()" required><br><br>

        <input id="radio" style="margin-top: 4px" type="radio" required><span style="padding-left:10px;">I agree to the <a href="#">Terms of Service and Privacy policy</a> including this browser's cookie usage.</span>

        <input style="margin-top: 40px;" type="submit" id="submit" name="submit">
      </form>
    </div>

    <?php
      if(isset($_POST['submit']) && ($_POST['password'] != $_POST['passwordagain'])) {
        echo '<script type="text/javascript"> alert("Passwords don\'t match! Please refill the form."); </script>';
      }
      if(isset($_POST['submit']) && ($_POST['password'] == $_POST['passwordagain'])){
        $givenfname = $_POST['fname'];
        $givenlname = $_POST['lname'];
        $givendob = $_POST['dob'];
        $givendept = $_POST['dept'];
        $givenid = $_POST['id'];
        $givenmobi = $_POST['mobi'];
        $givenemail = $_POST['email'];
        $givenpassword = $_POST['password'];
        $givenpasswordagain = $_POST['passwordagain'];

        $user = 'aruna';
        $pass = '2048';
        $db = new PDO( 'mysql:host=localhost;dbname=sourcex', $user, $pass );
        $form = $_POST;
        $sql = "INSERT INTO teachers (fname, lname, dob, dept, id, email, mobi, pswd) VALUES (:fname, :lname, :dob, :dept, :id, :email, :mobi, :pswd)";
        $query = $db->prepare( $sql );
        $query->execute( array( ':fname'=>$givenfname, ':lname'=>$givenlname, ':dob'=>$givendob, ':dept'=>$givendept, ':id'=>$givenid, ':email'=>$givenemail, ':mobi'=>$givenmobi, ':pswd'=>$givenpassword));
        echo '<script>window.location.href = "http://localhost/sourceX/login_t.php"; alert("REGISTRATION SUCCESSFUL! Login to your new account."); </script>';
      }
    ?>
  </body>
</html>
