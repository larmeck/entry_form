<?php

$fullName = $_POST['fullName'];
$email = $_POST['email'];
$studentPassword = $_POST['studentPassword'];
$confirm_password = $_POST['confirm_password']; // need to stick to one convention for variable naming, camelCase or snake_case.
$admNumber= $_POST['admNumber'];
$gender =$_POST['gender'];
$progLang =$_POST['progLang'];



$servername="localhost";
$dbUsername= "root";
$dbPassword= "";
$dbname= "school_records"; //snake case variable

$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);

if(!$conn) {
    die("Not Connected!". mysqli_error($conn));
}
else {
echo"Connected successfully(`-`)";
}

$sql = "INSERT INTO students(fullName,email, studentPassword,confirm_password, admNumber, gender, progLang)
VALUES ('$fullName','$email', '$studentPassword', '$confirm_password', '$admNumber', '$gender', '$progLang')";


if(mysqli_query($conn, $sql)) {
    echo "Thank you for providing your details";
     header("location: http://localhost/StudentsProject/"); // you shouldnt use full url i.e "http://localhost/StudentsProject/" just use the relative paths
    //you can read more about relative paths here <https://www.codingrooms.com/blog/file-paths>
}
else {
    echo "Uurg, we may have encountered a problem ". $sql. "<br>". mysqli_error( $conn);
}











?>
