<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php
$h1= 'Special Conference 1';
$h2= 'The militarization of artificial intelligence';
//Title
include "../includes/functions.php";
$title = generateTitle($h1, $h2);
//<HEAD>
include '../includes/head.php';
?> <!-- End Head -->

<body>
<?php include '../includes/navbar.php'; ?><!-- End Header -->
    <div class="header-spacer"></div>
    <main id="spc1">
        <div class="banner" style="background-image: url(../assets/img/pexels-kindel-media-9028921.webp);">
            <div class="container-xl">
                <h1><?php echo $h1?></h1>
            </div>
        </div>
        <section id='militarization'>
            <div class='container-xl'>
                <h2><?php echo $h2?></h2>
                <p>The rapid pace at which technology advances today is, in many ways, a double-edged sword. The 21st
                    century has seen many controversial technological and scientific debates draw worldwide attention -
                    none of which are more relevant than artificial intelligence.</p>
                <p>Perhaps the most potentially limitless tool in mankind's arsenal, AI's existence poses both a threat
                    and opportunity to humanity, and it's critical that its usage is approached with the utmost caution
                    and open-mindedness. Although we seem to be a step away from seeing androids capable of true
                    independent thought, artificial intelligence is no longer a far-off concept, and it's critical to
                    erase the belief that it is.</p>
                <p>Today, AI in many forms is used to perform tasks more efficiently and fervently than any human could.
                    Social media uses AI algorithms to personalize advertisements based on the user's online activity.
                    In the healthcare sector, machines capable of diagnosing patients see a large degree of success.
                    Tech giants such as Google and Microsoft own functioning facial recognition tools. Furthermore,
                    innovations such as autonomous cars and capable digital assistants are on the front page every other
                    day.</p>
                <p>However, AI can be equally deadly as it is productive - if not more - when used in the wrong ways.
                    The questionable and unregulated application of AI into the battlefield is a topic which concerns
                    the very near future of warfare. In 2017, Harvard's Belfer Center predicted that Artificial
                    Intelligence may be as transformative to common warfare as nuclear weaponry and even weaponized
                    aircraft. Internationally, there is huge interest and funding in R&D regarding the militarization of
                    AI. Fiscal reports for 2022 have shown $874 million in funding allocated to 'artificial intelligence
                    projects' by the US Department of Defense. Furthermore, a recent study by the Georgetown University
                    Center for Security and Emerging Technology reported that the People's Liberation Army (PLA) of
                    China spends an average of $1.6 billion on AI-related projects...</p>
                <p><strong>For more, download our research paper.</strong></p>
                <div class="download-container gap-3"><a href="../pages/assets/documents/SPC%201%20research%20report%20final.pdf"
                        class="face-button" download>
                        <div class="face-primary"><i class="bi bi-cloud-download-fill"></i> Download</div>
                        <div class="face-secondary">SPC1 Research</div>
                    </a></div>
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