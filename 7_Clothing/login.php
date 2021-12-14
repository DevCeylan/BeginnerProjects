<?php
    session_start();
    echo isset($_SESSION['login']);
    if(isset($_SESSION['login'])) {
      header('LOCATION:index.php'); die();
    }
?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Add icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    /* Globals */
    * {
      box-sizing: border-box;
    }

    body {
      font-family: Arial, Helvetica, sans-serif;
      background-color : #232323;
    }

    a {
      color: #c82333;
      text-decoration: none;
    }

    /* Classes */
    .input-container {
      display: -ms-flexbox;
      /* IE10 */
      display: flex;
      width: 100%;
      margin-bottom: 15px;
    }

    .icon {
      padding: 10px;
      background: #f33f3f;
      color: white;
      min-width: 50px;
      text-align: center;
    }

    .input-field {
      width: 100%;
      padding: 10px;
      outline: none;
    }

    .input-field:focus {
      border: 2px solid #f33f3f;
    }

    /* Submit button */
    .btn {
      background-color: #f33f3f;
      color: white;
      padding: 15px 20px;
      border: none;
      cursor: pointer;
      width: 100%;
      opacity: 0.9;
    }

    .btn:hover {
      opacity: 1;
    }

    #register{
      padding: 10px 10px 0px 0px;
    }

  </style>
</head>

<body>

  <form action="login.php" method="post" style="max-width:500px;margin:auto">
    <h2 style="color: white;">Login Form</h2>

    <?php
      $con = mysqli_connect('localhost','root','');
      mysqli_select_db($con,'muazzamodev');

      if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['pw'];

        // query string:
        $sql = "select * from customers where email='$email' && password = '$password' ";

        // execute:
        $result = mysqli_query($con, $sql);
        $num = mysqli_num_rows($result);

        if($email === 'root' && $password === 'toor'){
          $_SESSION['login'] = true; header('LOCATION:manage.php'); die();
        } 
        else if ($num == 1) {
          $_SESSION['login'] = true; header('LOCATION:index.php'); die();
        }
        else{
          echo "<div style='color: #c82333;'>Username and Password do not match.</div>";
        }
      }
    ?>
    <div class="input-container">
      <i class="fa fa-envelope icon"></i>
      <input class="input-field" type="text" placeholder="Email" name="email">
    </div>

    <div class="input-container">
      <i class="fa fa-key icon"></i>
      <input class="input-field" type="password" placeholder="Password" name="pw">
    </div>

    <button type="submit" name="submit" class="btn">Log in</button>
    <div id="register">
    <a href="register.php">No account ? Register here !</a>
    </div>
  </form>

</body>

</html>
