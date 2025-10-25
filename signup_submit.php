<?php
require('config/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $gradeID  = $_POST['gradeID'];
    $contact = $_POST['contact'];
    $User_name = $_POST['User_name'];
    $password = $_POST['password'];
   // $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // hash password

    $tutor_id = 1;  
   
$sql = "INSERT INTO students (full_name, address, dob, gradeID, contact,User_name, password, tutor_id)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if($stmt === false)
{
    die("SQL Error: ".$conn ->error);
}

   $stmt->bind_param("sssisssi", $full_name, $address, $dob, $gradeID, $contact, $User_name, $password, $tutor_id);

    if ($stmt->execute()) {
       // echo " Student registered successfully!";
       header("Location: student_login.php?signup=success");
        exit();
    } else {
        echo " Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

