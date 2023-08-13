<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php
$h1 = 'economic and social council';
$h2 = 'Countering Unemployment Caused by Automation';
$title = ($h1 && $h2) ? "$h1. $h2" : ($h1 ? $h1 : ucfirst(basename($_SERVER['REQUEST_URI'])));
include 'includes/head.php'; ?><!-- End Head -->

<body>
<?php include 'includes/navbar.php'; ?><!-- End Header -->
    <div class="header-spacer"></div>
    <main id="ecosoc">
        <!-- ======= Introduction ======= -->
        <!-- <div class="banner"
            style="background-image: url(assets/img/190213155423-20190213-artificial-intelligence-machine-learning-gfx.jpg);">
        </div>
        <div class="banner" style="background-image: url(assets/img/0x0.jpg);">
        </div> -->
        <div class="banner" style="background-image: url(assets/img/image_1365534802.webp); background-position: left;">
            <div class="container-xl">
                <h1><?php echo $h1;?></h1>
            </div>
        </div>
        <section id="intro">
            <div class='container-xl'>
                <h2><?php echo $h2;?></h2>
                <p>1965, philosophy professor Hubert Dreyfus, a staunch critic of artificial intelligence, boldly
                    claimed that a machine would never beat a human at the game of chess. It would only be two years
                    before the sceptical scholar was himself checkmated by an MIT-developed computer. </p>
                <p>By 1997 machines were advanced enough to defeat one of the greatest chess minds of his time - Garry
                    Kasparov. In 2015, our species' finest player of the very intuitive and "human" game of Go
                    repeatedly conceded to Google's computer. </p>
                <p> With the rapid technological advancement of recent years, computers are increasingly encroaching on
                    domains that were previously considered exclusively human. The astonishing progress in such areas as
                    artificial intelligence (AI), robotics, 3D printing and genetics has enabled computers to perform
                    the tasks of architects, medical doctors, music composers and even a 16th century Dutch master of
                    painting. </p>
                <p>It is easy to see why new technologies are increasingly viewed as a major threat to labour markets.
                    Some estimates even claim that a staggering 80 per cent of jobs run the risk of being automated in
                    the coming decades...</p>
                <p><strong>For more, download our research paper.</strong></p>
                <div class="download-container gap-3"><a href="assets/documents/Ecosoc%20research%20report%20final.pdf"
                        class="face-button" download>
                        <div class="face-primary"><i class="bi bi-cloud-download-fill"></i> Download</div>
                        <div class="face-secondary">ECOSOC Research</div>
                    </a></div>
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