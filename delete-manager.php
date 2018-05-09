<?php
$id = $_GET['id'];
//Connect DB
//Create query based on the ID passed from you table
//query : delete where Staff_id = $id
// on success delete : redirect the page to original page using header() method
$dbname = "courier_db";
$conn = mysqli_connect("localhost", "root", "", $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM tbl_courier_officers WHERE cid = $id"; 

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: manager-list.php'); //If it is your main page where you list your all records
    exit;
} else {
    echo "Error deleting record";
}
?>