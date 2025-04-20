<?php
// Example PHP code for sending OTP (you can use Twilio or other services to send the SMS)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $enrollment_number = $_POST['enrollment_number'];

    // Generate OTP
    $otp = rand(100000, 999999);

    // For the purpose of this example, we will just print the OTP.
    // In real case, use an SMS API like Twilio to send the OTP to the enrollment number
    echo json_encode(['success' => true]);

    // Optionally, store the OTP in a session or database for verification later
    session_start();
    $_SESSION['otp'] = $otp;

    // Log or save the OTP to send it to the user's phone or email
}
?>
