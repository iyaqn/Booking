<?php
include '../../includes/autoloader.php';
include '../../includes/conn.php';

$conn = new conn();
$session = new session();
include 'includes/header.php';
?>

<!-- Include Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- Include FullCalendar CSS -->
<link href='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/main.min.css' rel='stylesheet'>

<!-- Bootstrap styles and custom styles -->
<style>
.schedule-card {
    width: 100%;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-top: 10vh;
}

.rules {
    text-align: left;
    font-size: 14px;
    line-height: 1.5;
    margin-top: 10px;
}
</style>

<body>
    <div class="container">
        <?php include 'includes/navbar.php'; ?>
        <div class="mt-5">
            <div class="row mt-5">
                <div class="card schedule-card">
                    <div class="card-header">
                        <h5 class="card-title">Select your booking below: </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <!-- Form for adding date manually -->
                                    <div class="card-header">
                                        <h5 class="card-title">
                                            Add a date manually
                                        </h5>
                                    </div>
                                    <div class="card-body">
                                        <form id="add_date">
                                            <div class="form-group">
                                                <label for="date">Start Date:</label>
                                                <input type="date" class="form-control" id="start" name="date" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="time">End Date:</label>
                                                <input type="date" class="form-control" id="end" name="date" required>
                                            </div>
                                            <p class="text-info" id="error"><i>Please select vacant date</i></p>
                                            <button type="submit" class="btn btn-primary">Add Date</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div id='calendar'></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="selectpackage" tabindex="-1" role="dialog" aria-labelledby="selectpackageLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="selectpackageLabel">Select your package for <span
                            id="selectedDate"></span>: </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row text-center" id="package">
                        <div class="text-start">
                            <h5>Standard package:
                            </h5>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <input type="hidden" id="package>
                                    <h5 class=" card-title">Package 1</h5>
                                </div>
                                <div class="card-body">
                                    <img src="../../../p1.png" alt="Package 1" class="img-fluid">
                                    <p class="card-text text-bold">Day Stay</p>
                                    <a href="#" class="btn btn-outline btn-success" id="p1">Book Now</a>
                                    <!-- For starting price -->
                                    <p class="text-muted mt-2">Starting form: <br />
                                        <strong>₱15,000.00</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title
                                    ">Package 2</h5>
                                </div>
                                <div class="card-body">
                                    <img src="../../../p2.png" alt="Package 2" class="img-fluid">
                                    <p class="card-text">Night Stay</p>
                                    <a href="#" class="btn btn-outline btn-success" id="p2">Book Now</a>
                                    <p class="text-muted">Starting form: <br />
                                        <strong>₱18,000.00</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title
                                    ">Package 3</h5>
                                </div>
                                <div class="card-body">
                                    <img src="../../../p3.png" alt="Package 3" class="img-fluid">
                                    <p class="card-text">Overnight Stay</p>
                                    <a href="#" class="btn btn-outline btn-success" id="p3">Book Now</a>
                                    <p class="text-muted mt-2">Starting form: <br />
                                        <strong>₱25,000.00</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="text-start">
                            <h5>Custom packages:
                            </h5>
                        </div>
                        <div id="custom-package"></div>
                    </div>
                    <div class="row" id="policies">
                        <div class="col-md-4">
                            <!-- Rules and Policies add design dont use card-->
                            <h5 class="text-center">Rules and Policies</h5>
                            <p class="rules">
                                <strong>1. </strong> No smoking inside the premises.<br />
                                <strong>2. </strong> No pets allowed.<br />
                                <strong>3. </strong> No loud music after 10pm.<br />
                                <strong>4. </strong> No littering.<br />
                                <strong>5. </strong> No vandalism.<br />
                                <strong>6. </strong> No illegal activities.<br />
                                <strong>7. </strong> No outside food and drinks.<br />
                                <strong>8. </strong> No refund policy.<br />
                                <strong>9. </strong> No cancellation policy.<br />
                                <strong>10. </strong> No rescheduling policy.<br />
                            </p>
                        </div>
                        <div class="col-md-8">
                            <!-- Includsion -->
                            <h5 class="text-center">Inclusions</h5>
                            <div class="row">
                                <p class="flex gap-2">
                                    <strong>Adult Pool</strong>
                                    <br />
                                    <strong>Kiddie Pool</strong>
                                    <br />
                                    <strong>Billiards</strong>
                                    <br />
                                    <strong>Basketball</strong>
                                    <br />
                                    <strong>Dart</strong>
                                    <br />
                                    <strong>Playground</strong>
                                    <br />
                                    <strong>Smart TV | Netflix & Cable</strong>
                                    <br />
                                    <strong>Wi-Fi</strong>
                                    <br />
                                    <strong>Videoke</strong>
                                    <br />
                                    <strong>Barbeque Grill</strong>
                                    <br />
                                    <strong>Refrigerator</strong>
                                    <br />
                                    <strong>Rice Cooker</strong>
                                    <br />
                                    <strong>Gas Stove</strong>
                                    <br />
                                    <strong>Water Dispenser</strong>
                                    <br />
                                    <strong>4 Fully Airconditioned Rooms</strong>
                                    <br />
                                </p>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <h5>Addons:</h5>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="addon1">
                                        <label class="form-check-label" for="addon1">
                                            Jacuzzi | Additional - 300PHP/hour
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="addon2">
                                        <label class="form-check-label" for="addon2">
                                            Gas Stove | Additional - 250PHP/day
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="addon3">
                                        <label class="form-check-label" for="addon3">
                                            Dryer Machine | 50PHP/Hour
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="addon4">
                                        <label class="form-check-label" for="addon4">
                                            Himalayan Charcoal | 100PHP/Hour
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="addon5">
                                        <label class="form-check" for="addon5">
                                            Air Fryer | 150PHP/Hour
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success" id="payment">Proceed Payment</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Payment Modal -->
    <div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="paymentModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="paymentModalLabel">Payment Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="selectedDate">
                    <input type="hidden" id="selectedPackage">
                    <input type="hidden" id="selectedAddons">

                    <div class="row">
                        <div class="col-md-6">
                            <p>Send your payment here:</p>
                            <img src="../../../samplepayment.jpg" alt="Bank Information" class="img-fluid"
                                id="bankInfoImage" style="width:350px; height:400px;">
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="proofOfPayment">Proof of Payment:</label>
                                <input type="file" class="form-control" id="proofOfPayment">
                            </div>
                            <div class="form-group">
                                <label for="referenceNumber">Reference Number:</label>
                                <input type="text" class="form-control" id="referenceNumber">
                            </div>
                            <div class="form-group">
                                <label for="dateSent">Date Sent:</label>
                                <input type="date" class="form-control" id="dateSent">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success" id="submitPayment">Submit Payment</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Reciept modal -->
    <div class="modal fade" id="recieptModal" tabindex="-1" role="dialog" aria-labelledby="recieptModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="recieptModalLabel">Payment Reciept</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h5>Thank you for booking with us! Here is your reciept:</h5>
                            <p>Please wait for the confirmation of your booking. We will send you an email once your
                                booking is confirmed.</p>

                        </div>
                    </div>
                    <!-- Add total payment here -->
                    <p>Booking Date: <span id="bookingDate"></span></p>
                    <p>Booking Package: <span id="bookingPackage"></span></p>
                    <div class="row" id="addons"></div>
                    <p>Reference Number: <span id="bookingReferenceNumber"></span></p>
                    <p>Date Sent: <span id="bookingDateSent"></span></p>
                    <hr>
                    <p>Total Cost: <span id="bookingCost"></span></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Include FullCalendar JS -->
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js'></script>

    <script>
    $(document).ready(function() {
        $.ajax({
            url: 'controllers/getReservations.php',
            type: 'GET',
            success: function(res) {
                var data = JSON.parse(res);
                var events = [];
                data.forEach(function(d) {
                    events.push({
                        title: 'Reserved',
                        start: d.CheckInDate,
                        end: d.CheckOutDate,
                        color: 'red'
                    });
                });
                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    headerToolbar: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'dayGridMonth,timeGridWeek,timeGridDay'
                    },
                    events: events,
                    dateClick: function(info) {
                        var selectedDate = new Date(info.dateStr);
                        var currentDate = new Date();
                        currentDate.setHours(0, 0, 0, 0);

                        if (selectedDate <= currentDate) {
                            alert('You cannot reserve on a past or today\'s date.');
                        } else {
                            // Check if the selected date has a reservation
                            var hasReservation = events.some(function(event) {
                                return event.start === info.dateStr;
                            });

                            if (hasReservation) {
                                alert('There is already a reservation on this date.');
                            } else {
                                $('#selectedDate').text(info.dateStr);
                                $('#selectpackage').modal('show');
                            }
                        }
                    },
                    eventClick: function(info) {
                        alert('Event: ' + info.event.title);
                    }
                });
                calendar.render();
            }
        });

        $('#policies').hide();
        $('#payment').hide();

        // check what package is selected
        $('#package').on('click', 'a', function(e) {
            e.preventDefault();
            $('#package').hide();
            var package = $(this).attr('id');
            $('#selectedPackage').val(package);
            $('#policies').show();
            $('#payment').show();
            alert('Package ' + package + ' selected');
        });

        // when payment button is clicked, get package and date and addons
        $('#payment').on('click', function() {
            $('#selectpackage').modal('toggle');
            var selectedDate = $('#selectedDate').text();
            var selectedPackage = $('#selectedPackage').val();
            var selectedAddons = [];
            if ($('#addon1').is(':checked')) {
                selectedAddons.push('Jacuzzi');
            }
            if ($('#addon2').is(':checked')) {
                selectedAddons.push('Gas Stove');
            }
            if ($('#addon3').is(':checked')) {
                selectedAddons.push('Dryer Machine');
            }
            if ($('#addon4').is(':checked')) {
                selectedAddons.push('Himalayan Charcoal');
            }
            if ($('#addon5').is(':checked')) {
                selectedAddons.push('Air Fryer');
            }
            $('#selectedAddons').val(selectedAddons);
            $('#selectedDate').val(selectedDate);
            $('#selectedPackage').val(selectedPackage);
            $('#selectedAddons').val(selectedAddons);
            $('#selectmodal').modal('hide');
            $('#paymentModal').modal('show');
        });

        $('#paymentModal').on('click', '#submitPayment', function() {
            var selectedDate = $('#selectedDate').val();
            var selectedPackage = $('#selectedPackage').val();
            var selectedAddons = $('#selectedAddons').val();
            var proofOfPayment = $('#proofOfPayment').prop('files')[0];
            var referenceNumber = $('#referenceNumber').val();
            var dateSent = $('#dateSent').val();
            var formData = new FormData();

            formData.append('selectedDate', selectedDate);
            formData.append('selectedPackage', selectedPackage);
            formData.append('selectedAddons', selectedAddons);
            formData.append('proofOfPayment', proofOfPayment);
            formData.append('referenceNumber', referenceNumber);
            formData.append('dateSent', dateSent);
            formData.append('guestEmail', '<?php echo $session->get('email'); ?>');

            $.ajax({
                url: 'controllers/submitPayment.php',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(res) {
                    console.log(res);
                }
            });

            // open reciept modal
            $('#paymentModal').modal('toggle');
            $('#recieptModal').modal('show');

            // add data to modal for reciept
            // calculate the cost
            var cost = 0;
            if (selectedPackage == 'p1') {
                cost = 15000;
            } else if (selectedPackage == 'p2') {
                cost = 18000;
            } else if (selectedPackage == 'p3') {
                cost = 25000;
            }

            // add addons cost
            if (selectedAddons.includes('Jacuzzi')) {
                cost += 300;
            } else if (selectedAddons.includes('Gas Stove')) {
                cost += 250;
            } else if (selectedAddons.includes('Dryer Machine')) {
                cost += 50;
            } else if (selectedAddons.includes('Himalayan Charcoal')) {
                cost += 100;
            } else if (selectedAddons.includes('Air Fryer')) {
                cost += 150;
            }

            // change the selected package to the actual package name
            if (selectedPackage == 'p1') {
                selectedPackage = 'Day Stay';
            } else if (selectedPackage == 'p2') {
                selectedPackage = 'Night Stay';
            } else if (selectedPackage == 'p3') {
                selectedPackage = 'Overnight Stay';
            }

            // make the date readable
            var date = new Date(selectedDate);
            var options = {
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            };
            date = date.toLocaleDateString('en-US', options);

            // add the data to the reciept modal
            $('#bookingDate').text(date);
            $('#bookingPackage').text(selectedPackage);
            $('#bookingReferenceNumber').text(referenceNumber);
            $('#bookingDateSent').text(dateSent);
            $('#bookingCost').text('₱' + cost);

            // add the addons to the reciept modal
            var addons = '';
            selectedAddons.forEach(function(addon) {
                addons += '<span>' + addon + '</span><br>';
            });
            $('#addons').html(addons);

            // if modal closed, refresh the page
            $('#recieptModal').on('hidden.bs.modal', function() {
                location.reload();
            });
        });
    });
    </script>

    <!-- Include Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>