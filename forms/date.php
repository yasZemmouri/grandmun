<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php
$h1='Update deadline date';
$h2=''; 
$title = ($h1 && $h2) ? "$h1. $h2" : ($h1 ? $h1 : ucfirst(basename($_SERVER['REQUEST_URI'])));
include '../includes/head.php'; ?><!-- End Head -->
<body>
    <?php include '../includes/navbar.php'; ?><!-- End Header -->
    <div class="header-spacer"></div>
    <main id="date">
        <!-- ======= updateDate ======= -->
        <section id='update-date'>
            <div class='container'>
                <h2><?php echo $h2 ?></h2>
                <!-- if I'm processing the form data in the same file as the form I don't need action attribute -->
                <form action='formProcessor.php' method='post'>
                    <label for="dateInput">Enter a future date:</label>
                    <input type="date" id='dateInput' name='dateInput'>
                    <input type="submit" value='Submit'>
                </form>
                
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