<?php
//creating variables form user input data from dataString in .js
$fullName = $_POST['theName'];
$email = $_POST['theEmail'];
$studentPassword = $_POST['thePassword'];
$confirmPassword = $_POST['theConfirmPassword'];
$admNumber= $_POST['theAdmNumber'];
$estate =$_POST['theEstate'];
$gender =$_POST['theGender'];
$progLang =$_POST['theProgLanguage'];

//creating variables of connection details
$serverName="localhost";
$dbUserName= "root";
$dbPassword= "";
$dbName= "school_records";


//Creating connections to server
$conn = new mysqli($serverName, $dbUserName, $dbPassword, $dbName);

if(!$conn) {
    die("Not Connected!". mysqli_error($conn));
}

/*
else {
echo"Connected successfully(`-`)";
}
*/



//Creating database query
$sql = "INSERT INTO students(fullName, email, studentPassword, confirmPassword, admNumber, estate, gender, progLang) VALUES ('$fullName','$email', '$studentPassword', '$confirmPassword', '$admNumber','$estate', '$gender', '$progLang')";


//setting conditins to validate connections aand registration
if(mysqli_query($conn, $sql)) {
    echo "Thank you for providing your details" ;
    
}
else {
    echo "Uurg, we may have encountered a problem ". $sql. "<br>". mysqli_error( $conn);
}

//Ending the connection

mysqli_close($conn);








?>