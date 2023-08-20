<?php
//CHECK if the form was submitted with a post method.
//$_SERVER["REQUEST_METHOD"] is an associative array we access an element value by its key and not by its index. Associative arrays don't use indexes
// $deadline = '2003-10-25';

//Extract value from the database and assign it to deadline
include '../includes/dbconfig.php';
$sql = "SELECT date FROM deadline";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    //we also can use fetch_row() with $row[0])
    $row=$result->fetch_assoc();
    $deadline = $row['date'];
    // echo 'Deadline: ' . $deadline;
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    //isset check if a variable has some value that is not null.
    if(isset($_POST['dateInput'])){
        $selectedDate = $_POST['dateInput'];
        echo "You entered the date: " . $selectedDate . "<br>";
    }
    //Processing the form
       
    $updateSql ="UPDATE deadline SET date = '$selectedDate' WHERE id=1";
    $updateResult = $conn->query($updateSql);
    if ($updateResult) {
        // $deadline = $updateResult;
        echo "Date updated successfully.<br>";
    } else {
        echo "Error updating date: " . $conn->error;
    }   
    $sql = "SELECT date FROM deadline";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
            //we also can use fetch_row() with $row[0])
            $row=$result->fetch_assoc();
            $deadline = $row['date'];
            echo 'The new Deadline is: ' . $deadline;
            echo '<br> The new number is: ' . strtotime($deadline);
        }
    }
?>