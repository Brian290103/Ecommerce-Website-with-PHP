<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "groupdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if (mysqli_connect_errno()) {
  echo "Failed to connect with database" . mysqli_connect_errno();
}


if (isset($_POST["send"])) {
  if (isset($_POST["fname"]) || isset($_POST["lname"]) || isset($_POST["email"]) || isset($_POST[" message"])) {


    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // var_dump($fname . $lname . $email . $message);
    // $sql = "INSERT INTO messages  VALUES (DEFAULT,'Anto', 'Doe', 'john@example.com','dvsdjvsd',Default)";
    $sql = "INSERT INTO messages  VALUES (DEFAULT,?,?,?,?,DEFAULT)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $fname, $lname, $email, $message);

    if ($stmt->execute()) {
      echo "Message Sent Successfully";
      $_SESSION["message"] = "Message Sent Successfully";
    } else {
      echo "Failed";
      $_SESSION["message"] = "Failed";

    }

    header("Location: ../index.php");
    exit;

  } else {
    echo "Empty Fields";
  }

}

// $sql = "INSERT INTO messages  VALUES (DEFAULT,'Anto', 'Doe', 'john@example.com','dvsdjvsd',Default)";
// $stmt = $conn->prepare($sql);
// if ($stmt->execute()) {
//   echo "New record created successfully";
// } else {
//   echo "Failed";
// }

// if($conn->connect_error){
//   echo "Connection Successful";
// }else{
//     echo "Connection Failed";

// }
// INSERT INTO `messages` (`id`, `fname`, `lname`, `email`, `message`, `date`) VALUES (NULL, 'Silas', 'Namkoa', 'sil@gmail.com', 'Lorem', CURRENT_TIMESTAMP);
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

//  die("Connection failed: " . $conn->connect_error);