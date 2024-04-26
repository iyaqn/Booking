<?php
include 'includes/autoloader.php';

if (isset($_GET['token'])) {
    $token = $_GET['token'];
} else {
    header('Location: forgot-password.php?error=Token not provided.');
    exit();
}

// check the session if the user is logged in
$session = new Session();
if ($session->get('email') != null) {
    header('Location: pages/user_dashboard/index.php');
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
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Forgot Password - Villa Delos Reyes</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all. css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhnd0JK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="../loginpage.css" rel="stylesheet" />
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
        <div class="form-container sign-in-container">
            <!-- Forgot Password -->
            <form id="forgot-password-form" method="POST" action="reset-password-process.php">
                <h1>Reset your Password</h1>
                <p>Enter your new password</p>
                <div class="password-container">
                    <input type="password" id="password" name="password" placeholder="Password" required="required">
                    <i class="fas fa-eye password-toggle" onclick="togglePasswordVisibility('password', this)"></i>
                </div>
                <span id="message"></span>
                <div class="password-container">
                    <input type="password" id="confirm_password" name="confirm_password" required="required" 
                    placeholder="Confirm Password" />
                    <i class="fas fa-eye password-toggle" onclick="togglePasswordVisibility('confirm_password', this)"></i>
                </div>
                <input type="hidden" name="token" value="<?php echo $token; ?>" />
                <button type="submit">Reset Password</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <!-- Overlay panels -->
                <div class="overlay-panel overlay-right">
                    <h1>Hello, User!</h1>
                    <p>Enter your email address to reset your password.</p>
                    <button class="ghost" id="signInButton">Sign In</button>
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