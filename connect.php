<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$mysqli = new mysqli($dbhost, $dbuser, $dbpass);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

echo "Connected successfully<br>";

if($mysqli->query("CREATE DATABASE IF NOT EXISTS PmPertemuan11") === TRUE){
   echo "Database created successfully<br>";
}else{
   echo "Error creating database: " . $mysqli->error . "<br>";
}

// Select db
$mysqli->select_db("PmPertemuan11");


// Create Table db
$query = "CREATE TABLE IF NOT EXISTS Mahasiswa (
   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   nama VARCHAR(30) NOT NULL,
   nim VARCHAR(30) NOT NULL,
   class VARCHAR(50) NOT NULL,
   reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($mysqli->query($query) === TRUE) {
   echo "Table created successfully<br>";
} else {
   echo "Error creating table: " . $mysqli->error . "<br>";
}


// Insert data in db
$insertDataQuery = "INSERT INTO Mahasiswa (nama, nim, class) VALUES ('Tom', '2209057', '3C')";

if ($mysqli->query($insertDataQuery) === TRUE) {
    echo "Data inserted successfully<br>";
} else {
    echo "Error inserting data: " . $mysqli->error . "<br>";
}


// Update Data in db
$sql = "UPDATE Mahasiswa SET nama='zoro' WHERE id=3";

if ($mysqli->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
?>
