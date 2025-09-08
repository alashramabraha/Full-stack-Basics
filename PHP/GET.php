<style>

p {
    color: green;
    background-color: #CCC;
}


</style>



<?php

print_r($_GET);

echo "<br><br>";

if (isset($_GET['submit'])) {
 
$username = $_GET['name'];

$email = $_GET['email'];

$password = $_GET['password'];

echo $username."<br>".$email."<br>".$password;

}

?>

<form>

Username: <input type = "text" name = "name"> <br><br>

Email:  <input type = "text" name = "email"> <br><br>

Password: <input type = "password" name = "password"> <br><br>

<input type = "submit" name = "submit" value = "GO!">


</form>