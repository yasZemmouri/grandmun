<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php
$h1 = 'Human Rights Council';
$h2 = 'Resolving Issues of Statelessness by Addressing Discriminatory Practices';
$title = ($h1 && $h2) ? "$h1. $h2" : ($h1 ? $h1 : ucfirst(basename($_SERVER['REQUEST_URI'])));
include 'includes/head.php'; ?><!-- End Head -->

<body>
<?php include 'includes/navbar.php'; ?><!-- End Header -->
    <div class="header-spacer"></div>
    <main id="hrc">
        <div class="banner" style="background-image: url(assets/img/pexels-ahmed-akacha-6691665.webp)">
            <div class="container-xl">
                <h1>Human Rights Council</h1>
            </div>
        </div>
        <section id='militarization'>
            <div class='container-xl'>
                <h2>Resolving Issues of Statelessness by Addressing Discriminatory Practices</h2>
                <blockquote>
                    <p>To be stripped of citizenship is to be stripped of worldliness. It is like returning to a
                        wilderness as cavemen or savages where people could live and die without leaving any trace.</p>
                    <cite>- Hannah Arendt</cite>
                </blockquote>
                <p>The right to a nationality is a human right as declared in Article 15 of the 1948 Universal
                    Declaration of Human Rights: "Everyone has the right to a nationality. No one shall be arbitrarily
                    deprived of his nationality nor denied the right to change his nationality." Yet some 4.3 million
                    people in the world lack proof of legal identity. This <strong>identification gap"</strong>" is a
                    serious obstacle to participation in political, economic and social life. Without a secure and
                    trustworthy way to prove their identity, a person may be unable to exercise the range of human
                    rights set out in international laws and conventions. </p>
                <p><strong>Stateless people</strong> are found in all parts of the globe - Asia, Africa, the Middle
                    East, Europe and the Americas-entire communities, new-born babies, children, couples and older
                    people. Their one common curse, the lack of any nationality, deprives them of rights that the
                    majority of the global population takes for granted. Often, they are excluded from cradle to
                    grave-being denied a legal identity when they are born, access to education, health care, marriage
                    and job opportunities during their lifetime and even the dignity of an official burial and a death
                    certificate when they die. </p>
                <p><strong>For more, download our research paper.</strong></p>
                <div class="download-container gap-3">
                    <a href="assets/documents/HRC%20research%20report%20final.pdf" class="face-button" download>
                        <div class="face-primary"><i class="bi bi-cloud-download-fill"></i> Download</div>
                        <div class="face-secondary">HRC Research</div>
                    </a>
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