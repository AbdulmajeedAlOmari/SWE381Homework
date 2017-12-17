<?php
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["pass"];
    $passConf = $_POST["pass-conf"];
    $about = $_POST["about"];

    echo "<h1> Hello, $username! </h1>";
    echo "<div> <p>your email is $email </p>";

    if($password == $passConf)
        echo "<p> YOUR PASSWORD WILL NOT BE PRINTED . </p>";
    else
        echo "Passwords do not match";

    echo "<p>";

    if($about == 'I am...')
        echo "You haven't told us about your self.";
    else
        echo "You wrote about your self : $about";

    echo "</p></div>";
?>

<html>
    <head><title>Registration Feedback</title></head>
    <body><a href="index.html">Home</a></body>
</html>
