<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php 
$h1='Special Conference 2';
$h2='Confirming the sovereignty of former Soviet states';
$title = ($h1 && $h2) ? "$h1. $h2" : ($h1 ? $h1 : ucfirst(basename($_SERVER['REQUEST_URI'])));
include '../includes/head.php'; ?><!-- End Head -->

<body>
<?php include '../includes/navbar.php'; ?><!-- End Header -->
    <div class="header-spacer"></div>
    <main id="spc2">
        <div class="banner"
            style="background-image: url(../assets/img/fountain-of-friendship-of-peoples-1630446_1920.webp)">
            <div class="container-xl">
                <h1><?php echo $h1?></h1>
            </div>
        </div>
        <section id='militarization'>
            <div class='container-xl'>
                <h2><?php echo $h2?></h2>
                <p>The Soviet Union was dissolved more than 30 years ago. In its wake, the Union of Soviet Socialist
                    Republics (USSR), produced 15 sovereign states. These states included: Armenia, Azerbaijan, Belarus,
                    Estonia, Georgia, Kazakhstan, Kyrgyzstan, Latvia, Lithuania, Moldova, Russia, Tajikistan,
                    Turkmenistan, Ukraine, and Uzbekistan. Each of these countries is now self-governed and is
                    internationally recognized as a sovereign nation. However, recently events have transpired that
                    potentially threaten peace in the region, and the right to autonomy of former Soviet republics. Is a
                    peaceful solution between conflicting former Soviet States conceivable?...</p>
                <p><strong>For more, download our research paper.</strong></p>
                <div class="download-container gap-3"><a href="../assets/documents/SPC2%20research%20report.pdf"
                        class="face-button" download>
                        <div class="face-primary"><i class="bi bi-cloud-download-fill"></i> Download</div>
                        <div class="face-secondary">SPC2 Research</div>
                    </a></div>
            </div>
    </main><!-- End Main -->
    <?php include '../includes/footer.php'; ?><!-- End Footer -->
    <!-- Vendor js file -->
    <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Main js File -->
    <script src="../assets/js/main.js"></script>
</body>

</html>