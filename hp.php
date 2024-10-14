<?php
// data connection parameters
$servername = "localhost";// change this to your database hostname
$username = "your_username";
$password = "your_password";
$dbname = "1vgb";
// create connection
$conn = new mysqli($servername,$username,$password,$dbname);
// check connection
if ($conn->connect_error){
    die("connection failed:". $conn->connect_error);
}
// perform SQL query to fetch data for homepage
$sql = "SELECT* FROM homepage_content"; // change
"homepage_content";
$result = $conn->query($sql);
// check if any rows were returned
if($result->num_rows > 0) {
    // output data
    while($row = $result-> fetch_assoc()){
        // output content dynamically
        echo "<h2>" . $row["About Us"] . "</h2>";
        echo "<p>" .
        $row["content"] . "</p>"
    }
} else{
    echo "No Content Available";
}
// close connection
$conn->close();
?>