<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// go to root project folder 
require $_SERVER['DOCUMENT_ROOT'] . '/booking/vendor/autoload.php';

class Email
{
    public $vendor;
    private $email;
    private $subject;
    private $message;
    private $headers;

    public function __construct($vendor)
    {
        $this->vendor = $vendor;
    }

    public function sendEmail($to, $subject, $type, $message)
    {
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'tls';
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 587;
            $mail->Username = 'iyuhqn@gmail.com';
            $mail->Password = 'ceyp juah avwz vuun            ';
            $mail->isHTML(true);

            // Recipients
            $mail->setFrom('villadelosreyesresort@gmail.com', 'Villa Delos Reyes Private Resort and Events Place');
            $mail->addAddress($to);
            $mail->addReplyTo('iyuhqn@gmail.com', 'Villa Delos Reyes Private Resort and Events Place');

            // Generate notification message using template
            $mail->Subject = $subject;

            // send email notification to user add template notification using html css
            $mail->Body = '
            <!DOCTYPE html>
            <html>
            <head>
                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                <title>Villa Delos Reyes Private Resort and Events Place Notification</title>
                <!-- Bootstrap CSS -->
                <style>
                .container {
                    max-width: 800px;
                    margin: 0 auto;
                }
                .card {
                    border: 1px solid #ccc;
                    border-radius: 5px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    margin: 20px;
                    padding: 20px;
                }
                .btn {
                    background-color: #007bff;
                    border: none;
                    color: white;
                    padding: 10px 20px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 16px;
                    margin: 4px 2px;
                    cursor: pointer;
                    border-radius: 5px;
                }
                .btn-primary {
                    background-color: #007bff;
                    border: none;
                    color: white;
                    padding: 10px 20px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 16px;
                    margin: 4px 2px;
                    cursor: pointer;
                    border-radius: 5px;
                }
                .btn-primary:hover {
                    background-color: #0056b3;
                }
                .mt-3 {
                    margin-top: 1rem !important;
                }
                .mt-5 {
                    margin-top: 3rem !important;
                }
                .text-center {
                    text-align: center;
                }
                .text-left {
                    text-align: left;
                }
                
                </style>
            </head>
            <body>
                <div class="container mt-5">
                <div class="card">
                    <div class="card-body">
                    <div class="text-center">
                        <h1 class="mt-3">Villa Delos Reyes Private Resort and Events Place</h1>
                    </div>
                    <hr />
                    <h2 class="text-center">' . $subject . '</h2>
                    <p class="text-center">
                        ' . $message . '
                    </p>
                    <div class="text-center">
                        <a
                        href="https://villadelosreyesresort.com/offers"
                        class="btn btn-primary btn-lg"
                        >View Offers</a
                        >
                    </div>
                    <hr />
                    <div class="text-center">
                        <p class="mb-0">
                        Thank you for choosing Villa Delos Reyes Private Resort and Events Place.
                        </p>
                        <p class="mb-0">We look forward to welcoming you soon!</p>
                    </div>
                    <h5 class="text-center">Rules and Regulations</h5>
                            <p class="rules">
                                <strong>1. </strong> Guests must be in proper swimming attire when in the pool.<br />
                                <strong>2. </strong> Guests are NOT ALLOWED to dive into the pool.<br />
                                <strong>3. </strong> Guests are NOT ALLOWED to run and play around the pool.<br />
                                <strong>4. </strong> Guests are NOT ALLOWED to eat and drink in the pool area.<br />
                                <strong>5. </strong> Guests must keep the resort clean at all times.<br />
                                <strong>6. </strong> Guests are not allowed to smoke inside the rooms.<br />
                                <strong>7. </strong> Pets are allowed but should always wear diaper when inside the resort premises.<br />
                                <strong>8. </strong> Guests are only allowed to use the videoke from 8 AM to 10 PM only.<br />
                                <strong>9. </strong> Guests must be responsible to look after their personal belongings,  
                                 Villa <br/> Delos Reyes Private Resort will not be held accountable for any loss or damage.<br />
                                <strong>10. </strong> Guests must always take care of their children, elderly, and persons with disabilities.<br />
                                <strong>11. </strong> Villa Delos Reyes Private Resort will not be liable for any accidents or injuries obtained by 
                                the guests <br> during their stay. However, the resort will help and provide first aid.<br />
                                <strong>12. </strong> There will be an inspection by the caretakers 30 minutes before the check-out 
                                of the guests. Any loss or damage of property during the stay will be charged to the guests accordingly. <br />
                                <strong>13. </strong> Guests must immediately report any problem or inconvenience that they may experience. <br />
                                <strong>14. </strong> Guests are advised to observe safety measures while staying in the resort. <br />
                                <strong>15. </strong> ILLEGAL ACTIVITIES ARE STRICTLY PROHIBITED. <br />
                                <strong>16. </strong> NO FIREARMS OR DEADLY WEAPONS ARE ALLOWED. <br />
                            </p>
                    </div>
                </div>
                </div>
            </body>
            </html>
            ';

            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();

            return true;

        } catch (Exception $error) {
            return false;
        }
    }
}