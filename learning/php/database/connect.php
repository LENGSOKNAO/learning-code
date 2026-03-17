<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'nike_storage';

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die('connentionn faild:' . $conn->connect_error);
}
echo 'Connected successfully';

// use pdo 

// try{
//     $conn = new PDO("mysql:host=$servername;$dbname=$dbname", $username, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo 'Connection Successfully';
// }catch(PDOException $e){
//     echo 'Connection failed:' . $e->getMessage();
// }

// CREATE DATABASE
// $sql = "CREATE DATABASE myDB";
// if($conn->query($sql)===true) {
//     echo 'Database is create succesfully';
// } else {
//     echo "Error creating database" . $conn->error;
// }

// CREATE TABLE
// $sql = "CREATE TABLE MyGuests (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(30) NOT NULL,
// lastname VARCHAR(30) NOT NULL,
// email VARCHAR(50),
// reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

// if ($conn->query($sql) === TRUE) {
//   echo "Table created successfully";
// } else {
//   echo "Error creating table: " . $conn->error;
// }

// INSERT DATA

// $sql = "INSERT INTO Myguests (firstname, lastname, email) VALUES ('John', 'Doe', 'example@gmail.com')";
// $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES
// ('John', 'Doe', 'john@example.com'),
// ('Mary', 'Moe', 'mary@example.com'),
// ('Julie', 'Dooley', 'julie@example.com')";

// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

// GET LAST ID

// if ($conn->query($sql) === TRUE) {
//   $last_id = $conn->insert_id;
//   echo "New record created successfully. Last inserted ID is: " . $last_id;
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

// USE PREPARED

// $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)";
// if($stmt = $conn->prepare($sql)) {
//   // Bind parameters
//   $stmt->bind_param("sss", $firstname, $lastname, $email);
//   $firstname = "John";
//   $lastname = "Doe";
//   $email = "john@example.com";
//   $stmt->execute();

//   $firstname = "Mary";
//   $lastname = "Moe";
//   $email = "mary@example.com";
//   $stmt->execute();

//   $firstname = "Julie";
//   $lastname = "Dooley";
//   $email = "julie@example.com";
//   $stmt->execute();
//   echo "New records created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }
// $stmt->close();

// SELECT DATA

// $sql = "SELECT id, firstname, lastname FROM MyGuests";
// $result = $conn->query($sql);

// if($result->num_rows > 0){
//     while($row = $result->fetch_assoc()){
//         echo "id:"."</br>". $row['id']. " ". "Name:". " ". $row['firstname']. " " .$row['lastname'];
//     }
// } else {
//     echo "0 results";
// }

// SELECT DATA WHERE

// $sql = "SELECT id, firstname, lastname FROM MyGuests WHERE lastname='Doe'";
// $result = $conn->query($sql);

// if($result->num_rows > 0){
//     while($row = $result->fetch_assoc()){
//         echo "id:"."</br>". $row['id']. " ". "Name:". " ". $row['firstname']. " " .$row['lastname'];
//     }
// } else {
//     echo "0 results";
// }

// SELECT DATA ORDER BY

// $sql = "SELECT id, firstname, lastname FROM MyGuests ORDER BY lastname";
// $result = $conn->query($sql);

// if($result->num_rows > 0){
//     while($row = $result->fetch_assoc()){
//         echo "id:"."</br>". $row['id']. " ". "Name:". " ". $row['firstname']. " " .$row['lastname'];
//     }
// } else {
//     echo "0 results";
// }

// DELETE DATA

// $sql = "DELETE FROM MyGuests WHERE ID=3";
// $result = $conn->query($sql);

// if ($conn->query($sql) === TRUE) {
//   echo "Record deleted successfully";
// } else {
//   echo "Error deleting record: " . $conn->error;
// }

// UPDATE DATA

// $sql = "UPDATE MyGuests SET lastname='men' WHERE ID=5";
// $result = $conn->query($sql);

// if ($conn->query($sql) === TRUE) {
//   echo "Record updated  successfully";
// } else {
//   echo "Error updated  record: " . $conn->error;
// }

// $conn->close();

?>