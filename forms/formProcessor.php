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
    //SQL UPDATE statement
    //modefy a record in deadline table
    //SET indicate the column
    //Where indicate the condition that the row should meet
    // $updateSql ="UPDATE deadline SET date = '$selectedDate' WHERE id=1";
    //the ? is a placeholder that will be filled later using parameter binding. when the prepared statement is executed the value of $selectedDate wihh replace ? this is what is called prepared statements. separation of the query structure from the data.
    $updateSql ="UPDATE deadline SET date = ? WHERE id=1";
    //$conn->prepare($updateSql) check if there is any error in the query. If the query is syntactically correct, it is optimized and parsed into a query execution plan. 
    if ($stmt = $conn->prepare($updateSql)) {
        //if the query has no errors bend (associate) and not replace ? with $selectedDte
        // "s" means string 
        $stmt->bind_param("s", $selectedDate);
        //the prepared statement object stores the query structure along with the association between the placeholder and the provided value.
        //When you call $stmt->execute(), the prepared statement sends the query to the database along with the bound parameter value, and the database engine combines the two to perform the update operation. The database engine combines the query template with the parameter values and executes the query. The query is already precompiled and optimized, which can lead to better performance.
        if ($stmt->execute()) {
            echo "Date updated successfully.<br>";// Update successful
        } else {
            echo "Error updating date: " . $stmt->error; // Handle execution error
        }

        $stmt->close();

    } else {
        echo "Error preparing statement: " . $conn->error; // Handle prepare error
    }

    // $updateResult = $conn->query($updateSql);
    // if ($updateResult) {
    //     // $deadline = $updateResult;
    //     echo "Date updated successfully.<br>";
    // } else {
    //     echo "Error updating date: " . $conn->error;
    // }   
    //There is no user input so there is no need to a prepare statement
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