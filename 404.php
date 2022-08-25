<?php require('includes/utilities.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description"
        content="PDX Handyman Services LLC is a local handyman, renovator, landscaper, and painter in Oregon.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="styles.css" rel="stylesheet" type="text/css">

    <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png">
    <link rel="manifest" href="images/favicons/site.webmanifest">

    <style>

        body,
        html {
            background-image: none;
            background-color: white;
            background-size: cover;
        }            
        
        #error-page {
            display: grid;
            place-content: center;
            text-align: center;
            margin-top: 50%;
            font-size: 30px;
        }

        #error-page img {
            display: block;
            margin: 0 auto 0;
            width: 350px;
            height: auto;
        }

        #error-page h3 {
            margin-top: -0.2em;
        }

        #error-page button {
            border-radius: 15px;
            border: solid 4px #264e94;
            padding: 1em 3em;
            background-color: #466ab6;
        }

        #error-page button a {
            color: white;
            text-decoration: none;
            font-size: 22px;
        }


        @media only screen and (min-width: 480px) {
            #error-page {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                margin-top: 25%;
            }

            #error-page img {
                width: 600px;
            }

            #error-page h3 {
                margin-top: -0.5em;
            }

        }

        @media only screen and (min-width: 1025px) {

            #error-page {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                margin-top: 5%;
            }

            #error-page img {
                width: 600px;
            }

            #error-page h2,
            h3 {
                margin-top: -0.2em;
            }
        }
    </style>

    <script src="https://kit.fontawesome.com/cf72e27b3d.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Page Not Found</title>
</head>

<body>

    <main>

        <div id="error-page">
            <img src="images/banner.jpg" alt="PDX Handyman Services LLC">
            <h2>404 Error</h2>
            <h3>Page Not Found</h3>
            <button><a href="https://pdxhandymanservicesllc.com/">Return</a></button>
        </div>

    </main>

    <script src="scripts.js" type="text/javascript"></script>
</body>

</html>