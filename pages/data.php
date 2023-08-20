<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php 
$h1='Senegal Project';
$h2='Join GRANDMUN in Supporting the Building of a Library in Senegal';
//Title
include "../includes/functions.php";
$title = generateTitle($h1, $h2);
//<HEAD>
include '../includes/head.php';
?> <!-- End Head -->

<body>
    <?php include '../includes/navbar.php'; ?><!-- End Header -->
    <div class="header-spacer">
        
    </div>
    <main id="data">
        <?php include '../includes/dbconfig.php'; ?>
    
    <?php
        // Perform database operations here
        $sql = "SELECT login FROM users";
        //this is the method that run quieries directly in the database. It return an object.
        //it returns an array objects where every row is a row from the table and every property a column.
        // Now if we get something we have to fetch through it.
        //This returned array of data is a property of a class called mysqli_results
        //"fetching" data involves getting the requested information from a source so that your program can work with and process each piece of data individually, or display it to the user.
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "Login: " . $row["login"] . "<br>";
            }
        } else {
            echo "No users found in the database.";
        }
        // Close the connection when done
        $conn->close();
    ?>

        <div class="container-xl">
            <h1>Data</h1>
        </div>
    </main><!-- End Main -->
    <?php include '../includes/footer.php'; ?><!-- End Footer -->
    <!-- Vendor js file -->
    <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Main js File -->
    <script src="../assets/js/main.js"></script>
</body>

</html>