<?php
if (isset($_GET['error'])) {
    $response = $_GET['error'];
    echo "<script>alert('$response')</script>";
}
if (isset($_GET['success'])) {
    $response = $_GET['success'];
    echo "<script>alert('$response')</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<link rel="icon" type="image/x-icon" href="../../../vdrlogo.ico">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Join Villa Delos Reyes!</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all. css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhnd0JK28anvf" crossorigin="anonymous">
    <link href="../loginpage.css" rel="stylesheet" />
    <style>
    .container {
        position: relative;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
        overflow: hidden;
        width: 1000px;
        max-width: 100%;
        min-height: 600px;
    }

    .form-container {
        position: absolute;
        top: 0;
        height: 100%;
        transition: all 0.6s ease-in-out;
    }

    .sign-in-container {
        left: 0;
        width: 50%;
        z-index: 2;
    }

    .sign-up-container {
        left: 0;
        width: 50%;
        opacity: 0;
        z-index: 1;
    }

    .container.right-panel-active .sign-in-container {
        transform: translateX(100%);
    }

    .container.right-panel-active .sign-up-container {
        transform: translateX(100%);
        opacity: 1;
        z-index: 5;
        animation: show 0.6s;
    }

    @keyframes show {

        0%,
        49.99% {
            opacity: 0;
            z-index: 1;
        }

        50%,
        100% {
            opacity: 1;
            z-index: 5;
        }
    }

    .overlay-container {
        position: absolute;
        top: 0;
        left: 50%;
        width: 50%;
        height: 100%;
        overflow: hidden;
        transition: transform 0.6s ease-in-out;
        z-index: 100;
    }

    .container.right-panel-active .overlay-container {
        transform: translateX(-100%);
    }

    .overlay {
        position: relative;
        left: -100%;
        height: 100%;
        width: 200%;
        transform: translateX(0);
        transition: transform 0.6s ease-in-out;
    }

    .overlay-panel {
        position: absolute;
        top: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        padding: 0 40px;
        height: 100%;
        width: 50%;
        text-align: center;
        transform: translateX(0);
        transition: transform 0.6s ease-in-out;
    }

    #message {
        color: red;
        font-size: 10px;
    }

       /* Modal */
.modal {
  display: none;
  position: fixed;
  z-index: 1000;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0,0,0,0.4);
}

.modal-content {
    text-align: justify;
  background-color: #fefefe;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 90%;
  max-width: 600px;
  max-height: 50vh; /* Set maximum height */
  overflow-y: auto; /* Enable vertical scrolling */
}

.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}


    </style>
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <!-- sign up -->
            <form id="signup" method="POST" action="signup-process.php">
                <h1>Create Account</h1>
                <input type="text" id="first_name" name="first_name" required="required" placeholder="First Name" />
                <input type="text" id="last_name" name="last_name" required="required" placeholder="Last Name" />
                <input type="text" id="address" name="address" required placeholder="Address" />
                <input type="email" id="email" name="email" required="required" placeholder="Email" />
                <input type="tel" id="cont_no" name="cont_no" required="required" placeholder="Contact Number" />
                <input type="password" id="password" name="password" required="required" placeholder="Password" />
                <span id="message"></span>
                <input type="password" id="confirm_password" name="confirm_password" required="required"
                    placeholder="Confirm Password" />
                <button type="submit">Sign Up</button>
                <a href="#" id="termsLink">Terms and Conditions</a>
                <a href="#" id="privacyPolicyLink">Privacy Policy</a>

                <!-- Modal for Privacy Policy -->
<div id="privacyPolicyModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2>Privacy Policy</h2>
    <p>Villa Delos Reyes Private Resort and Events Place is committed to protecting the privacy and security of your personal information. This Privacy Policy describes how we collect, use, and disclose personal information when you visit our website or use our services. By signing up, we assume you have read and understand these policies and agree to them.</p>
    <ol>
       
          
      
        <li>
            <h3>Information We Collect</h3>
            <p>
                <strong>Personal Information:</strong> When you visit our website or make a reservation, we may collect personal information such as your name, email address, phone number, and payment information.<br>
                <strong>Usage Information:</strong> We may collect information about your interactions with our website, such as your IP address, browser type, pages visited, and the time and date of your visit.<br>
                <strong>Cookies:</strong> We may use cookies and similar tracking technologies to improve your experience on our website and for analytics purposes. You can control cookies through your browser settings.
            </p>
        </li>
        <li>
            <h3>How We Use Your Information</h3>
            <p>We may use the information we collect for the following purposes:</p>
            <ul>
                <li>To process reservations and bookings</li>
                <li>To communicate with you about your reservation or inquiries</li>
                <li>To improve our services and website</li>
                <li>To send promotional emails and marketing communications, which you can opt out of at any time</li>
                <li>To comply with legal obligations</li>
            </ul>
        </li>
        <li>
            <h3>Information Sharing</h3>
            <p>We may share your personal information with third parties in the following circumstances:</p>
            <ul>
                <li>With service providers who help us operate our website and provide services to you (e.g., payment processors, email service providers)</li>
                <li>With law enforcement or government agencies in response to a legal request or investigation</li>
                <li>In connection with a merger, acquisition, or sale of assets</li>
            </ul>
        </li>
        <li>
            <h3>Data Security</h3>
            <p>We take the security of your personal information seriously and implement reasonable measures to protect it from unauthorized access, disclosure, alteration, or destruction.</p>
        </li>
        <li>
            <h3>Data Retention</h3>
            <p>We will retain your personal information for as long as necessary to fulfill the purposes outlined in this Privacy Policy, unless a longer retention period is required or permitted by law.</p>
        </li>
        <li>
            <h3>Your Rights</h3>
            <p>You have the right to:</p>
            <ul>
                <li>Access, correct, or delete your personal information</li>
                <li>Object to the processing of your personal information</li>
                <li>Withdraw your consent at any time, if we are processing your personal information based on consent</li>
            </ul>
        </li>
        <li>
            <h3>Children's Privacy</h3>
            <p>Our website and services are not directed at children under the age of 13, and we do not knowingly collect personal information from children.</p>
        </li>
        <li>
            <h3>Changes to This Privacy Policy</h3>
            <p>We may update this Privacy Policy from time to time. It is your responsibility to check this page periodically for changes.</p>
        </li>
        <li>
            <h3>Contact Us</h3>
            <p>If you have any questions or concerns about this Privacy Policy or our practices, please contact us at <a href="tel:09165903708">0916 590 3708</a> or <a href="mailto:villadelosreyes@yahoo.com">villadelosreyes@yahoo.com</a>.</p>
        </li>
    </ol>
  </div>
</div>



<!-- Modal for Terms and Conditions -->
<div id="termsModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2>Terms and Conditions</h2>

    <p>By signing up, we assume you accept these terms and conditions. Do not continue to register if you do not agree to all of the terms and conditions stated on this page.</p>
    <ol>
        <li>
            <strong>Booking and Reservation</strong>
            <ol>
                <li>
                    <strong>Reservation Policy:</strong> All bookings and reservations are subject to availability and confirmation. We reserve the right to refuse service, terminate accounts, remove or edit content, or cancel bookings at our sole discretion.
                </li>
                <li>
                    <strong>Reservation Deposits:</strong> A 50% deposit of your chosen package is required to secure your booking. 24 hours will be given to make a deposit and confirm the booking. This deposit is non-refundable in case of cancellation.
                </li>
                <li>
                    <strong>Cancellation Policy:</strong> No-shows will be considered as cancellations. Please contact the resort for further information.
                </li>
            </ol>
        </li>
        <li>
            <strong>Rescheduling</strong>
            <ol>
                <li>
                    <strong>Rescheduling of reservations:</strong> Rescheduling of reservations is permitted once and is subject to availability.
                </li>
                <li>
                    <strong>Guests must notify the management:</strong> Guests must notify the management at least 2 weeks prior to the scheduled reservation for rescheduling requests.
                </li>
            </ol>
        </li>
        <li>
            <strong>Accommodation and Facilities</strong>
            <ol>
                <li>
                    <strong>Check-in and Check-out:</strong> Check-in time and check-out time depends on the package booked. Early check-in and late check-out may be available upon request and subject to availability.
                </li>
                <li>
                    <strong>Security Deposit:</strong> A security deposit of Php 2000 is required upon entry into the resort. This deposit will be refunded upon check-out pending no loss or damage to resort property.
                </li>
                <li>
                    <strong>Accommodation Conditions:</strong> Guests are responsible for maintaining the cleanliness and condition of their accommodations. Any damage or loss caused by guests will be charged accordingly.
                </li>
                <li>
                    <strong>Facilities Usage:</strong> The use of resort facilities, including swimming pools, rooms, and recreational areas, is subject to posted rules and regulations. Children must be supervised at all times.
                </li>
            </ol>
        </li>
        <li>
            <strong>Event Bookings</strong>
            <ol>
                <li>
                    <strong>Event Reservations:</strong> Event bookings are subject to availability and must be made in advance. A deposit and/or additional fees are required to secure an event reservation.
                </li>
                <li>
                    <strong>Event Guidelines:</strong> Guests hosting events at Villa Delos Reyes Private Resort and Events Place must comply with our event guidelines, including noise restrictions, guest limits, and cleanup requirements.
                </li>
                <li>
                    <strong>Liability:</strong> Villa Delos Reyes Private Resort and Events Place is not liable for any damages, losses, or injuries occurring during events hosted on our premises. However, the resort will help and provide first aid.
                </li>
            </ol>
        </li>
        <li>
            <strong>Additional Services Fees</strong>
            <ol>
                <li>
                    <strong>Catering fee:</strong> Catering fee of Php 1500 will be charged for the use of outside catering services.
                </li>
                <li>
                    <strong>Lights and Sounds fee:</strong> Lights and Sounds fee ranges from Php 1500 to Php 2000 and applies when utilizing Lights and Sounds service.
                </li>
                <li>
                    <strong>Photobooth fee:</strong> A Photobooth fee of Php 500 will be charged for Photobooth service.
                </li>
            </ol>
        </li>
        <li>
            <strong>Corkage Fees</strong>
            <ol>
                <li>
                    <strong>Corkage fee per inflatable item:</strong> A corkage fee of Php 500 will be charged per inflatable item.
                </li>
                <li>
                    <strong>Corkage fees for LED Wall:</strong> Corkage fees range from Php 1000 to Php 1500 for the use of LED Wall.
                </li>
            </ol>
        </li>
        <li>
            <strong>Privacy Policy</strong>
            <ol>
                <li>
                    <strong>Data Collection:</strong> We collect personal information for the purpose of processing reservations and providing personalized services. By using our website, you consent to the collection and use of your information in accordance with our Privacy Policy.
                </li>
                <li>
                    <strong>Data Security:</strong> We employ industry-standard security measures to protect your personal information from unauthorized access, disclosure, alteration, or destruction.
                </li>
            </ol>
        </li>
        <li>
            <strong>General</strong>
            <ol>
                <li>
                    <strong>Changes to Terms and Conditions:</strong> Villa Delos Reyes Private Resort and Events Place reserves the right to update, change, or replace any part of these terms and conditions without prior notice. It is your responsibility to check this page periodically for changes.
                </li>
            </ol>
        </li>
    </ol>
    <p>By using our website and services, you agree to abide by these terms and conditions. If you have any questions or concerns, please contact us at <a href="tel:09165903708">0916 590 3708</a> or 
    <a href="mailto:villadelosreyes@yahoo.com">villadelosreyes@yahoo.com</a>.</p>
  </div>
</div>
            </form>
        </div>
        <!-- Sign in -->
        <div class="form-container sign-in-container">
            <form id="login-form" method="post" action="login-process.php">
                <h1>Sign in</h1>
                <input type="email" id="signin_email" name="email" placeholder="Email" />
                <input type="password" id="signin_password" name="password" placeholder="Password" />
                <a href="forgot-password.php">Forgot your password?</a>
                <button type="submit">Sign In</button>
                <!-- Admin login -->
                <a href="pages/admin_dashboard/index.php">Admin Login</a>
                <a href="pages/user_dashboard/index.php">Back to site</a>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>Please login with your personal info</p>
                    <button class="ghost" id="signInButton">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, User!</h1>
                    <p>Enter your personal details and join us in Villa Delos Reyes!</p>
                    <button class="ghost" id="signUpButton">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script>
// Get the privacy policy modal
var privacyPolicyModal = document.getElementById("privacyPolicyModal");

// Get the link that opens the privacy policy modal
var privacyPolicyLink = document.getElementById("privacyPolicyLink");

// When the user clicks the privacy policy link, open the modal
privacyPolicyLink.onclick = function() {
  privacyPolicyModal.style.display = "block";
}

// Get the <span> element that closes the privacy policy modal
var closePrivacyPolicyBtn = document.querySelector("#privacyPolicyModal .close");

// When the user clicks on <span> (x), close the privacy policy modal
closePrivacyPolicyBtn.onclick = function() {
  privacyPolicyModal.style.display = "none";
}



// When the user clicks anywhere outside of the privacy policy modal, close it
window.onclick = function(event) {
  if (event.target == privacyPolicyModal) {
    privacyPolicyModal.style.display = "none";
  }
}


    </script>
    <script>
        // Get the modal
var modal = document.getElementById("termsModal");

// Get the button that opens the modal
var termsLink = document.getElementById("termsLink");

// Get the <span> element that closes the modal
var closeBtn = document.querySelector("#termsModal .close");

// When the user clicks the link, open the modal
termsLink.onclick = function() {
  modal.style.display = "block";
}



// When the user clicks on <span> (x), close the terms modal
closeBtn.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

    </script>
    <script src="../script.js"></script>
    <script>
    $(document).ready(function() {
        // password validation on sign up
        $('#password').keyup(function() {
            var password = $('#password').val();
            var passwordLength = password.length;
            var hasUppercase = /[A-Z]/.test(password);
            var hasNumber = /\d/.test(password);
            if (passwordLength >= 8 && hasUppercase && hasNumber) {
                $('#message').text('');
            } else {
                $('#message').text(
                        'Password needs atleast 8 characters with 1 number and atleast 1 uppercase')
                    .css('color',
                        'red');
            }
            $('#password').focusout(function() {
                $('#message').text('');
            });
        });

        $.validator.addMethod("passwordMatch", function(value, element) {
        return $('#password').val() === $('#confirm_password').val();
    }, "Your passwords do not match. Please try again.");

        // validation for first and last names
        $.validator.addMethod("lettersWithSpaceOnly", function(value, element) {
    return this.optional(element) || /^[a-zA-Z\s]+$/.test(value);
}, "Please enter letters and spaces only.");


        $('#signup').validate({
            rules: {
                first_name: {
                    required: true,
                    lettersWithSpaceOnly: true
                },
                last_name: {
                    required: true,
                    lettersWithSpaceOnly: true
                },
                cont_no: {
                    required: true,
                    minlength: 11,
                    maxlength: 11,
                    digits: true
                },
            password: {
                required: true,
                minlength: 8
            },
            confirm_password: {
                required: true,
                minlength: 8,
                passwordMatch: true
            }
            },
            messages: {
                first_name: {
                    required: "Please enter your first name."
                },
                last_name: {
                    required: "Please enter your last name."
                },
                cont_no: {
                    required: "Please enter your contact number.",
                    minlength: "Contact number should be at least 11 characters long.",
                    digits: "Please enter only digits."
                },
                password: {
                required: "Please enter a password.",
                minlength: "Your password must be at least 8 characters long."
            },
            confirm_password: {
                required: "Please confirm your password.",
                minlength: "Your confirm password must also be at least 8 characters long.",
                passwordMatch: "The passwords do not match. Please try again."
            }
            }
        });

        // Automatically add +63 to contact number
        $('#cont_no').on('input', function() {
            var inputVal = $(this).val();
            var sanitized = inputVal.replace(/[^0-9]/g, '').substring(0, 11);
    $(this).val(sanitized);
            if (inputVal.substring(0, 2) !== "09") {
                $(this).val("09" + inputVal);
            }
        });
    });
    </script>
</body>

</html>