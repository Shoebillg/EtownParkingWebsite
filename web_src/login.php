<?php
require_once "./includes/config.php";

session_start(); // Start the session
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check the submitted credentials
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Replace this with your actual validation logic (e.g., database validation)
    if ($username === $user && $password === $pass) {
        $_SESSION['username'] = $username; // Set the username in the session
        header("Location: editDatabase.php"); // Redirect to the editDatabase.php page
        exit();
    } else {
        echo "<script>alert('Login failed!');</script>";
    }
}
require_once "./includes/header.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/crypto-js.js"></script>
    <script>
        function validate() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;

            // Check if username and password are not empty
            if (username.trim() === '' || password.trim() === '') {
                alert("Username and password are required");
                return false;
            }

            //var hash = CryptoJS.MD5(password).toString(); // Convert the hash to string

            // Other validation checks can be added as needed
            if (username === $user && password === $pass) {
                alert("Login successful!");
                return true;
            } else {
                alert("Login fail!");
                return false;
            }
        }
    </script>
</head>

<body>
    <h2>Login to Edit Database</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" onsubmit="return validate()" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
