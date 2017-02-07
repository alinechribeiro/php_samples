<?php
###################################################
#Create a data list on a Zebra style and using MYSQL
###################################################
include "css/mystyle.css";

##connecting db
$servername = "localhost";
$username = "root";
$password = "master";
$dbname = "job_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

##selecting before inserting on db
$sql = "SELECT idjobs, job_position FROM jobs";
$result = $conn->query($sql);

##declaring variable for loop
$color=true;

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	if($color) {
    		echo "<p class='colorful'>";
    	}
    	else{
    		echo "<p>";
    	}
   		$color=!$color;

        echo "id: " . $row["idjobs"]. " - Name: " . $row["job_position"]. "</p>";
    }
} else {
    echo "0 results";
}


?>