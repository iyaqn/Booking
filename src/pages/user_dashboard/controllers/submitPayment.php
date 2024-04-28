<?php
include '../../../includes/autoloader.php';
include '../../../includes/conn.php';

$connection = new conn();
$connection = $connection->conn;

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    try {
        // Get the data from the form
        $selectedDate = $_POST['selectedDate'];
        $selectedPackage = $_POST['selectedPackage'];
        $selectedAddons = $_POST['selectedAddons'];
        $referenceNumber = $_POST['referenceNumber'];
        $sender = $_POST['sender'];
        $dateSent = date('Y-m-d H:i:s');
        $guestEmail = $_POST['guestEmail'];

        // Check if proof of payment file is uploaded
        if (isset($_FILES['proofOfPayment']) && $_FILES['proofOfPayment']['error'] === UPLOAD_ERR_OK) {
            // Get the uploaded file details
            $proofOfPayment = $_FILES['proofOfPayment'];
            $amountPaid = 0;

            // Create a new instance of the Payment class
            $payment = new Payment($connection);

            $db = new Database();
            $user = new User($db);

            $amountPaid = $payment->calculateAmount($selectedPackage, $selectedAddons);
            $GuestId = $user->getUserId($guestEmail);

            // Submit the reservation
            $reservationID = $payment->submitReservation($selectedDate, $selectedPackage, $selectedAddons, $proofOfPayment, $referenceNumber, $dateSent, $GuestId);
            // Upload proof of payment
            $uploadProofOfPayment = $payment->uploadProofOfPayment($proofOfPayment);

            // Check if upload was successful
            if ($uploadProofOfPayment !== false) {
                $amountPaid = $amountPaid / 2;
                // Submit payment
                $submitPayment = $payment->submitPayment($reservationID, $amountPaid, $dateSent, $uploadProofOfPayment, $sender, $referenceNumber);

                // Check if payment submission was successful
                if ($submitPayment !== false) {
                    // echo json_encode(array("message" => "Payment submitted successfully", "success" => true, "reservationID" => $reservationID));
                    $vendor = '../../../../vendor/autoload.php';
                    $email = new Email($vendor);
                    $to = $guestEmail;
                 
                    $subject = 'Transcation Receipt';
                    $type = 'payment_confirmation';
                    $htmlContent = "
                    <div class='container'>
                        <h2>Transaction Receipt</h2>
                        <p>Dear Customer,</p>
                        <p>Thank you for your payment. Here are the details of your transaction:</p>
                        <table class='table'>
                            <tr>
                                <th>Sender</th>
                                <td>{$sender}</td>
                            </tr>
                            <tr>
                                <th>Guest Email</th>
                                <td>{$guestEmail}</td>
                            </tr>
                            <tr>
                                <th>Package Selected</th>
                                <td>{$selectedPackage}</td>
                            </tr>
                            <tr>
                                <th>Payment Date</th>
                                <td>{$dateSent}</td>
                            </tr>
                            <tr>
                                <th>Amount Paid</th>
                                <td>{$amountPaid}</td>
                            </tr>
                            <tr>
                                <th>Proof of Payment</th>
                                <td>{$uploadProofOfPayment}</td>
                            </tr>
                    
                            <tr>
                                <th>Reference Number</th>
                                <td>{$referenceNumber}</td>
                            </tr>
                        </table>
                        <p>If you have any questions, please contact us.</p>
                        
                        <p>Thank you,</p>
                        <p><a href='mailto:vdrrep@gmail.com'>Villa Delos Reyes Resort</a></p>
                    </div>";


$notification = new Notifications(1, $connection);
$notification->addNotification($GuestId);

                      // Existing code to send email to guest
                      $email->sendEmail($to, $subject, $type, $htmlContent);
                      
if ($email) {
    echo json_encode(array("message" => "Payment submitted successfully. Email sent to user", "success" => true, "reservationID" => $reservationID));

     // Prepare email content for admin
     $adminEmail = 'vdrrep@gmail.com';
     $adminSubject = "New Payment Submitted";
     // $adminMessage = "A new payment has been submitted.\n\nDetails:\nReservation ID: {$reservationID}\nPackage: {$selectedPackage}\nAmount Paid: {$amountPaid}\nPayment Date: {$dateSent}\nReference Number: {$referenceNumber}\nGuest Email: {$guestEmail}";
     $adminMessage = "
 <div class='container'>
     <h2>New Payment Notification</h2>
     <p>Dear Admin,</p>
   <p>A new payment has been submitted. Below are the details of the reservation and payment:</p>
    
    <h3>Reservation Details</h3>
    <table class='table'>
        <tr>
            <th>Reservation ID</th>
            <td>{$reservationID}</td>
        </tr>
        <tr>
            <th>Date Selected</th>
            <td>{$selectedDate}</td>
        </tr>
        <tr>
            <th>Package Selected</th>
            <td>{$selectedPackage}</td>
        </tr>
        
    </table>
    
    <h3>Payment Details</h3>
    <table class='table'>
        <tr>
            <th>Guest ID</th>
            <td>{$GuestId}</td>
        </tr>
        <tr>
            <th>Sender</th>
            <td>{$sender}</td>
        </tr>
        <tr>
            <th>Guest Email</th>
            <td>{$guestEmail}</td>
        </tr>
        <tr>
            <th>Payment Date</th>
            <td>{$dateSent}</td>
        </tr>
        <tr>
            <th>Payment ID</th>
            <td>{$submitPayment}</td>
        </tr>
       
        <tr>
            <th>Amount Paid</th>
            <td>{$amountPaid}</td>
        </tr>
        
        <tr>
            <th>Proof of Payment</th>
            <td>{$uploadProofOfPayment}</td>
        </tr>
       
        <tr>
            <th>Reference Number</th>
            <td>{$referenceNumber}</td>
        </tr>
    </table>
     
     <p>Kindly click the button below to check the reservation of the guest.</p>
     <p>Thank you,</p>
     <p><a href='mailto:vdrrep@gmail.com'>Villa Delos Reyes Resort</a></p>
     <a href='http://localhost/booking/src/pages/admin_dashboard/index.php' style='background-color: #4CAF50; color: white; padding: 10px 20px; text-align: center; display: inline-block; font-size: 16px; margin: 10px 0; text-decoration: none; border-radius: 5px;'>Go to Dashboard</a>
     </div>";
 
 
     // Send email to admin
     $email->sendEmail($adminEmail, $adminSubject, $type, $adminMessage);
 
     if ($email) {
         echo json_encode(array("message" => "Admin notified successfully", "success" => true));
     } else {
         echo json_encode(array("message" => "Failed to notify admin", "success" => false));
     }
 
 } else {
     echo json_encode(array("message" => "Payment submitted successfully. Failed to send email to user", "success" => true, "reservationID" => $reservationID));
 }

                    if ($email) {
                        echo json_encode(array("message" => "Payment submitted successfully. Email sent to user", "success" => true, "reservationID" => $reservationID));
                    } else {
                        echo json_encode(array("message" => "Payment submitted successfully. Failed to send email to user", "success" => true, "reservationID" => $reservationID));
                    }

                } else {
                    throw new Exception("Failed to submit payment");
                }
            } else {
                throw new Exception("Failed to upload proof of payment");
            }
        } else {
            throw new Exception("Proof of payment file is missing or invalid");
        }
    } catch (Exception $e) {
        echo json_encode(array("message" => $e->getMessage(), "success" => false));
    }
} else {
    echo json_encode(array("message" => "Failed to submit payment", "success" => false));
}
?>