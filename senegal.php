<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php 
$h1='Senegal Project';
$h2='Join GRANDMUN in Supporting the Building of a Library in Senegal';
$title = ($h1 && $h2) ? "$h1. $h2" : ($h1 ? $h1 : ucfirst(basename($_SERVER['REQUEST_URI'])));
include 'includes/head.php'; ?><!-- End Head -->

<body>
<?php include 'includes/navbar.php'; ?><!-- End Header -->
    <div class="header-spacer"></div>
    <main id="senegal">
        <div class="banner" style="background-image: url(assets/img/boots_ski_large_sport_25.jpg);">
            <div class="container-xl">
                <h1><?php echo $h1?></h1>
            </div>
        </div>
        <section id='senegal-vid'>
            <div class='container-xl'>
                <h2><?php echo $h2?></h2>
                <p>We are proud to announce that GRANDMUN is partnering with the Senegal Lion's Club, a humanitarian
                    project. The funds raised through the attendance of all of you shall be donated to this charity in
                    hopes of building a library in Pikine, a suburb of Dakar Senegal. You are of course invited to
                    donate more if you wish to do so. Here is a short video presenting the project.</p>
                <div class="frame-container">
                    <iframe src="https://www.youtube.com/embed/_N8b-2VoXPg" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
        </section>
    </main><!-- End Main -->
    <?php include 'includes/footer.php'; ?><!-- End Footer -->
    <!-- Vendor js file -->
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Main js File -->
    <script src="assets/js/main.js"></script>
</body>

</html>