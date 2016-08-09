<?php
include("/phpfunctions/indexl.php");
require '/phpfunctions/db.php';

$sql = "SELECT id, username, email, b_no, trn_date FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " - Name: " . $row["username"]. " " . $row["b_no"]. "email: " . $row["email"].  "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>