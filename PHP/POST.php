<?php

if (isset($_POST['submit'])) {

    $username = $_POST['username'];

    $email = $_POST['email'];

    $password = $_POST['password'];

    echo $username."<br>".$email."<br>".$password;

}

?>

<form>

Username: <input type = "text" name = "name" > <br><br>

Email:  <input type = "text" name = "email" > <br><br>

Password: <input type = "password" name = "password"> <br><br>

<input type = "submit" name = "submit" value = "Send">


</form>