<?php
session_start();
// Check if the user is already signed in
if (isset($_SESSION['username'])) {
    echo "Welcome, " . $_SESSION['username'] . "!<br>";
    echo "You are already signed in.<br>";
    echo '<a href="logout.php">Sign Out</a>';
    exit;
}

// Check if the form is submitted for sign-in
if (isset($_POST['signin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Perform basic authentication (replace with your own logic)
    if ($username === 'admin' && $password === 'password') {
        $_SESSION['username'] = $username;
        echo "Welcome, " . $_SESSION['username'] . "!<br>";
        echo "Sign-in successful.<br>";
        echo '<a href="logout.php">Sign Out</a>';
        exit;
    } else {
        echo "Invalid username or password.<br>";
    }
}

// Display the sign-in form
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign-In</title>
</head>
<body>
    <h2>Sign-In</h2>
    <form method="POST" action="">
        <label>Username:</label>
        <input type="text" name="username" required><br>
        <label>Password:</label>
        <input type="password" name="password" required><br>
        <input type="submit" name="signin" value="Sign In">
    </form>
</body>
</html>






<?php
session_start();

// Unset all of the session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the sign-in page
header("Location: signin.php");
exit;
?>

