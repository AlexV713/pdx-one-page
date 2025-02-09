<?php
// captcha.php

// Flag to check if the phone number should be displayed
$phoneVisible = false;
$error = '';

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $secret = '6LdpS9EqAAAAAAAFXJALRmpAqdE3M5P1acXzbJ9u'; // Secret Key
    $response = $_POST['g-recaptcha-response'] ?? '';

    // Verify the reCAPTCHA response with Google's API
    $verifyUrl = 'https://www.google.com/recaptcha/api/siteverify';
    $data = [
        'secret'   => $secret,
        'response' => $response,
        'remoteip' => $_SERVER['REMOTE_ADDR']
    ];

    // Set up the HTTP POST request
    $options = [
        'http' => [
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data),
        ],
    ];
    $context  = stream_context_create($options);
    $result = file_get_contents($verifyUrl, false, $context);

    // Decode the response
    $resultJson = json_decode($result, true);
    if ($resultJson && isset($resultJson['success']) && $resultJson['success'] === true) {
        $phoneVisible = true;
    } else {
        $error = "Captcha verification failed. Please try again.";
    }
}
?>

<div class="center-captcha">
    <?php if ($phoneVisible): ?>
        <!-- Revealed Phone Number -->
        <p>(503) 351-0987</p>
    <?php else: ?>
        <!-- Display any error message -->
        <?php if ($error): ?>
            <p style="color:red;"><?php echo htmlspecialchars($error); ?></p>
        <?php endif; ?>
        <!-- reCAPTCHA Form -->
        <form action="" method="POST">
            <div class="g-recaptcha" data-sitekey="6LdpS9EqAAAAAGn6GaOp6ItXrxTUM1wdOvKJK3Zx"></div>
            <br>
            <input type="submit" value="Reveal">
        </form>
    <?php endif; ?>
</div>

<!-- Include the reCAPTCHA API JavaScript -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
