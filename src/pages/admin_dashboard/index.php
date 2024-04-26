<?php
include '../../includes/autoloader.php';

// check the session if the user is logged in
$session = new Session();
if ($session->get('email') != null) {
    header('Location: dashboard.php');
}

// check the error or success message
$error = isset($_GET['error']) ? $_GET['error'] : '';
$success = isset($_GET['success']) ? $_GET['success'] : '';

// display the error or success message
if ($error) {
    echo "
    <script>
        alert('{$error}');
    </script>";
} else {
    echo "
    <script>
    </script>
    ";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Join Villa Delos Reyes!</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all. css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhnd0JK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="../../../loginpage.css" rel="stylesheet" />
</head>

<style>
    .password-container {
    position: relative;
    width: 100%;
    max-width: 500px; /* or any other suitable width */
}

.password-container input[type="password"] {
    width: 100%;
    padding-right: 30px; /* space for the icon */
}

.password-toggle {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
}
</style>

<body>
    <div class="container" id="container">
        <!-- Sign up -->
        <div class="form-container sign-up-container">
            <form id="register-form" method="post" action="admin-register.php">
                <h1>Create Account</h1>
                <input type="text" id="name" name="name" placeholder="Name" />
                <input type="text" id="email" name="email" placeholder="Email" />
                <!-- <input type="password" id="password" name="password" placeholder="Password" /> -->
                <!-- <div class="password-container">
                    <input type="password" id="password" name="password" placeholder="Password" required="required">
                    <i class="fas fa-eye password-toggle" onclick="togglePasswordVisibility('password', this)"></i>
                </div> -->
                <button type="submit" value="Register">Sign Up</button>
            </form>
        </div>
        <!-- Sign in -->
        <div class="form-container sign-in-container">
            <form id="login-form" method="post" action="admin-login.php">
                <h1>Admin Login</h1>
                <input type="text" id="email" name="email" placeholder="Username" />
                <div class="password-container">
                    <input type="password" id="password" name="password" placeholder="Password" required="required">
                    <i class="fas fa-eye password-toggle" onclick="togglePasswordVisibility('password', this)"></i>
                </div>
                <!-- <input type="password" id="password" name="password" placeholder="Password" /> -->
                <!-- <a href="#">Forgot your password?</a> -->
                <button type="submit" value="Login">Sign In</button>
                <a href="..\..\index.php">Back to User Login</a>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                <h1>Hello and welcome, Admin!</h1>
                    <p>Welcome back to Villa Delos Reyes Private Resort and Events Place </p>
                </div>
            </div>
        </div>
    </div>

    <script src="../script.js"></script>
    <script>
function togglePasswordVisibility(passwordFieldId, icon) {
    var input = document.getElementById(passwordFieldId);
    if (input.type === "password") {
        input.type = "text";
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
    } else {
        input.type = "password";
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
    }
}
</script>
</body>

</html>