
<?php
include '../../includes/autoloader.php';

include '../../includes/conn.php';

$conn = new conn();
$session = new session();
include 'includes/header.php';
include 'includes/navbar.php';
?>
 <title>FAQs</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
            body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url("../../../vdrbg2.jpg");
            background-size: fixed;
        }
    </style>
<body>
    <div style="margin-top: 250px;">
<section class="bg-light py-3 py-md-5">
  <div class="container">
    <div class="row gy-5 gy-lg-0 align-items-lg-center">
      <div class="col-12 col-lg-6">
      <h2 class="h1 mb-3">How can we help you?</h2>
            <p class="lead fs-4 text-secondary mb-5">We hope you have found an answer to your question. If you need any help, please contact us via email or via our facebook page.</p>
      </div>
      <div class="col-12 col-lg-6">
        <div class="row justify-content-xl-end">
          <div class="col-12 col-xl-11">

            <div class="accordion accordion-flush" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Rules and Regulations
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
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
                                of the guests. Any loss or damage of the resort's property during the stay will be charged to the guests accordingly. <br />
                                <strong>13. </strong> Guests must immediately report any problem or inconvenience that they may experience. <br />
                                <strong>14. </strong> Guests are advised to observe safety measures while staying in the resort. <br />
                                <strong>15. </strong> ILLEGAL ACTIVITIES ARE STRICTLY PROHIBITED. <br />
                                <strong>16. </strong> NO FIREARMS OR DEADLY WEAPONS ARE ALLOWED. <br />
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Terms and Conditions
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
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
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Privacy Policy
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
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
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
    <script src="https://unpkg.com/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
</script>
</body>
<?php 
include 'includes/footer.php';
?>
</html>