<?php
require('config/config.php');
require('config/db.php');

// Check if the employee ID is provided in the query string
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Create the SQL DELETE statement
    $query = "DELETE FROM employee WHERE id = $id";

    // Execute the DELETE statement
    if (mysqli_query($conn, $query)) {
        // Redirect back to the employee list page after successful deletion
        header("Location: employee.php");
        exit();
    } else {
        // Handle any errors that occurred during the deletion process
        echo "Error deleting employee: " . mysqli_error($conn);
    }
} else {
    // Handle the case when the employee ID is not provided
    echo "Employee ID not provided";
}

// Close the database connection
mysqli_close($conn);
?>
