<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/register.css">
    <title>Sanabi - Kayıt ol</title>
</head>

<body>
    <h1>Registration form</h1>
    <div class="form-container">
        <form name="registerForm" method="post" action="register.php">
            <label for="firstName">First Name *</label>
            <input type="text" id="firstName" name="firstName" placeholder="John" required />
            <p class="error-message"></p>
            <label for="lastName">Last Name *</label>
            <input type="text" id="lastName" name="lastName" placeholder="Doe" required />
            <p class="error-message"></p>
            <label for="e-mail">E-mail address *</label>
            <input type="text" id="e-mail" name="email" placeholder="john-doe@net.com" required />
            <p class="error-message"></p>
            <label for="phoneNumber">Phone Number</label>
            <input type="text" id="phoneNumber" name="phoneNumber" maxlength="9" pattern=".{9,}" required
                title="9 characters length" placeholder="223587972" />
            <p class="error-message"></p>
            <label for="password">Password *</label>
            <input type="password" id="password" name="password" pattern=".{8,}" required
                title="8 characters minimum" />
            <p class="error-message"></p>
            <p class="password-rules">Your password should contain at least 8 characters and 1 number.</p>

            <input class="button" type="submit" value="submit" name="submit" />
        </form>
    </div>
</body>

</html>

<?php
// db connection:
include("dbService.php");

if (isset($_POST["firstName"],$_POST["lastName"],$_POST["email"],$_POST["phoneNumber"],$_POST["password"],)) {
    
    $name=$_POST["firstName"];
    $surname=$_POST["lastName"];
    $mail=$_POST["email"];
    $tel=$_POST["phoneNumber"];
    $pw=$_POST["password"];    

    $qAdd = "INSERT INTO `customers` (`name`, `surname`, `email`, `phone`, `password`) 
        VALUES ('".$name."','".$surname."','".$mail."','".$tel."','".$pw."')";

    if ($connection->query($qAdd)!==TRUE) {
        echo "<script>alert('Kullanıcı ekleme işleminde sıkıntı çıktı...')</script>";
    }
    else{
        header('LOCATION:login.php'); die();
    }
}

?>