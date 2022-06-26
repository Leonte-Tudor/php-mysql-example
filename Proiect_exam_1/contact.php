<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="./styles.css">
    <meta charset="UTF-8">
    <title> Your page</title>
    <!--- <link rel="stylesheet" type="text/css" href="./assets/css/styles.css"> -->
</head>
<body>
<div class="main-container">

    <div class="nav-container">

        <ul>

            <li><a href="index.php">~$Home</a></li>
            <li><a href="about.php">~$About</a></li>
            <li><a href="contact.php">~$Contact</a></li>
            <li> <a href="user_gallery.php">~$Gallery</a> </li>
            <li><button class="log-in-button"><a href="login.php" class="log-in-text">~$Login</a></button></li>

        </ul>

    </div>

    <hr><hr><hr>


    <div class="center-stuff">

        <h1>Contact</h1>

        <svg width="100" height="100">
            <circle cx="50" cy="50" r="40" stroke="green" stroke-width="4" fill="green" />
        </svg>

        <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d43394.69513439994!2d27.537278879613083!3d47.174138479158366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40cafb61af5ef507%3A0x95f1e37c73c23e74!2sAlexandru%20Ioan%20Cuza%20University%20of%20Ia%C8%99i!5e0!3m2!1sen!2sro!4v1654093829155!5m2!1sen!2sro"
                width="600"
                height="450"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
        </iframe>

        <canvas id="myCanvas" width="200" height="100" style="border:1px solid #000000;">
        </canvas>

    </div>




</div><!-- main container -->

</body>

</html>
