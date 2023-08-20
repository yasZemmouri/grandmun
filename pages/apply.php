<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php
$h1 = '';
$h2 = '';
$title = ($h1 && $h2) ? "$h1. $h2" : ($h1 ? $h1 : ucfirst(basename($_SERVER['REQUEST_URI'])));
include '../includes/head.php'; ?><!-- End Head -->
<body>
    <?php include '../includes/navbar.php'; ?><!-- End Header -->
    <div class="header-spacer"></div>
    <main id="apply">
        <!-- <iframe
            src="https://docs.google.com/forms/d/e/1FAIpQLSdXsg6xR0PKcUVQwNJWrOZzOC9UpYInXpqdsTFr0EeQEbV_-A/viewform?embedded=true"
            frameborder="0" marginheight="0" marginwidth="0" scrolling="no">Loading...</iframe> -->
        <iframe
            src="https://forms.office.com/Pages/ResponsePage.aspx?id=fFLfhq3EDE24eAUFm8k2JvSQnW85XWdHmkPCquPEqJpUREtJMjU5QVNWTEpZR1VXVzZDVjU3NlNKUS4u&embed=true"
            frameborder="0" marginwidth="0" marginheight="0"
            style="border: none; max-width:100%; height: 2200px; overflow: hidden" allowfullscreen webkitallowfullscreen
            mozallowfullscreen msallowfullscreen>
        </iframe>
    </main><!-- End Main -->
    <?php include '../includes/footer.php'; ?><!-- End Footer -->
    <!-- Vendor js file -->
    <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Main js File -->
    <script src="../assets/js/main.js"></script>
</body>

</html>