<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php
$h1 = 'Delegate Guides';
$h2 = '';
$title = ($h1 && $h2) ? "$h1. $h2" : ($h1 ? $h1 : ucfirst(basename($_SERVER['REQUEST_URI'])));
include '../includes/head.php'; ?><!-- End Head -->

<body>
<?php include '../includes/navbar.php'; ?><!-- End Header -->
    </div>
    </div>
    <div class="header-spacer"></div>
    <main id="guide">
        <div class="banner" style="background-image: url(../assets/img/Untitled2.webp);">
            <div class="container-xl">
                <h1><?php echo $h1;?></h1>
            </div>
        </div>
        <section id='delegate-guide'>
            <div class='container-xl'>
                <h2>MUN Made Easy: Resources for First-Time Delegates</h2>
                <p>We understand that for some of you, this might be your first conference. So, here are some very
                    helpful resources to help those who are struggling.</p>
                <p>Our Delegate Guides cover a broad range of topics, such as public speaking, resolution writing, and
                    negotiation skills, among others. These guides have been specifically tailored for first-time
                    delegates attending GRANDMUN and were created by experienced MUN participants. We highly encourage
                    all new delegates to take advantage of these resources and use them to their fullest potential. With
                    the right tools and mindset, we believe that you can make a significant impact.</p>
                <div class="download-container gap-3">
                    <a href="../assets/documents/delegate%20guide.pdf" class="face-button" download>
                        <div class="face-primary"><i class="bi bi-cloud-download-fill"></i> Download</div>
                        <div class="face-secondary">Delegate Guide</div>
                    </a>
                    <a href="../assets/documents/resolution%20guide.pdf" class="face-button" download>
                        <div class="face-primary"><i class="bi bi-cloud-download-fill"></i> Download</div>
                        <div class="face-secondary">Resolution Guide</div>
                    </a>
                    <a href="../assets/documents/MUN%20Country%20Research.pdf" class="face-button" download>
                        <div class="face-primary"><i class="bi bi-cloud-download-fill"></i> Download</div>
                        <div class="face-secondary">MUN Country Research</div>
                    </a>
                </div>
            </div>
        </section>
    </main><!-- End Main -->
    <?php include '../includes/footer.php'; ?><!-- End Footer -->
    <!-- Vendor js file -->
    <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Main js File -->
    <script src="../assets/js/main.js"></script>
</body>

</html>