<?php

$emailError = "";
$passwordError = "";
$loginError = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $email = $_POST["email"];
    $password = $_POST["password"];

   
    if (empty($email)) {
        $emailError = "Email is required.";
    }

    if (empty($password)) {
        $passwordError = "Password is required.";
    } elseif (!ctype_alnum($password)) {
        $passwordError = "Invalid Password";
    }

    
    if (empty($emailError) && empty($passwordError)) {
        
        $validEmail = "ravi@gmai.com";
        $validPassword = "ravi2003";

        if ($email == $validEmail && $password == $validPassword) {
           
        } else {
            $loginError = "Login Unsuccess.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>
    <form method="post" action="">
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            <span><?php echo $emailError; ?></span>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
            <span><?php echo $passwordError; ?></span>
        </div>
        <div>
            <button type="submit" name="login">Login</button>
        </div>
        <span><?php echo $loginError; ?></span>
    </form>
</body>
</html>



