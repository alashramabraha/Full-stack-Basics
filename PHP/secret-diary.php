<?php
session_start();

// Handle form submission
if (array_key_exists("submit", $_POST)) {

    // Collect values from form
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $stayLoggedIn = isset($_POST['stayLoggedIn']) ? "Yes" : "No";

    // Store in session (like a simple "login")
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;

    echo "<h3>Form Submitted Successfully ✅</h3>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Password: " . htmlspecialchars($password) . "<br>";
    echo "Stay Logged In: " . $stayLoggedIn . "<br><br>";

    echo "<a href='diary.php'>Go Back</a>";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Secret Diary</title>
</head>
<body>

<h2>Sign Up / Login</h2>

<form method="post">
    <input type="text" name="email" placeholder="Email" required><br><br>
    
    <input type="password" name="password" placeholder="Password" required><br><br>
    
    <label>
        <input type="checkbox" name="stayLoggedIn" value="1"> Stay logged in
    </label>
    <br><br>
    
    <input type="submit" name="submit" value="Sign Up">
</form>

</body>
</html>
