<?php
include 'includes/autoloader.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $cont_no = $_POST['cont_no'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // $recaptcha_response = $_POST['recaptcha_response'];
    // $secretKey = "your_secret_key";  // Replace this with your actual secret key
    // $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$recaptcha_response}");
    // $responseKeys = json_decode($response, true);
    // if ($responseKeys["success"] && $responseKeys["score"] >= 0.5) {
    //     // Consider the user as legitimate
    //     // Proceed with form processing, e.g., saving data, sending email, etc.
    // } else {
    //     // Handle the case where reCAPTCHA v3 considers this interaction suspicious
    //     echo "<p>Sorry, we could not verify that you are not a robot. Please try again or contact support.</p>";
    // }

    // gcaptcha

    $recaptcha_response = $_POST['g-recaptcha-response'];
    if (empty($recaptcha_response)) {
        // reCAPTCHA response is empty
        echo "<p>Please complete the reCAPTCHA.</p>";
    } else {
        $secretKey = "sitekey";
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$recaptcha_response}");
        $responseKeys = json_decode($response, true);
        if ($responseKeys["success"]) {
            // Proceed with form processing
            // Insert the user into the database or perform other actions
        } else {
            // Handle the error, reCAPTCHA was not successful
            echo "<p>The reCAPTCHA was not verified. Please try again.</p>";
        }
    }

    if ($password === $confirm_password) {
        $db = new Database();
        $user = new User($db);
        $auth = new Authentication($user);

        $checkPhone = $user->checkPhone($cont_no);

        if ($checkPhone) {
            header('Location: index.php?error=Phone number already exists');
            exit();
        }

        $registering = $auth->register($firstname, $lastname, $address, $email, $cont_no, $password);

        if ($registering) {
            header('Location: index.php?success=You have successfully registered!');
        } else {
            header('Location: index.php?error=Email already exists');
        }
    } else {
        header('Location: index.php?error=Passwords do not match');
        exit();
    }
} else {
    header('Location: index.php');
}