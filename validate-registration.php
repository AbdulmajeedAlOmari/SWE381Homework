<?php
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["pass"];
    $passConf = $_POST["pass-conf"];
    $about = $_POST["about"];

    echo "<h1> Hello, $username! </h1>";
    echo "<div> <p>your email is $email </p>";

    if($password == $passConf) {
        echo "<p> YOUR PASSWORD WILL NOT BE PRINTED . </p>";
        if(sizeof($password) < 8)
            echo "<p style='color:red;'> your password is less than 8 characters, it is not safe!</p>";
    }
    else
        echo "Passwords do not match";

    echo "<p>";

    if($about == 'I am...')
        echo "You haven't told us about your self.";
    else
        echo "You wrote about your self : " . htmlspecialchars($about); //To prevent Injection

    echo "</p></div>";
?>

<html>
    <head><title>Registration Feedback</title></head>
    <body><a href="index.html">Home</a></body>
</html>
