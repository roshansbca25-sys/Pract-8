<?php

include "db.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $roll_no = $_POST["Roll_No"];

    $name = $_POST["Name"];

    $gender = $_POST["Gender"];

    $contact = $_POST["Contact"];

    $marks = $_POST["Marks"];


    $sql = "INSERT INTO studentdata1
    (Roll_No, Name, Gender, Contact, Marks)
    VALUES
    ('$roll_no', '$name', '$gender', '$contact', '$marks')";


    if (mysqli_query($conn, $sql)) {


        echo "

<!DOCTYPE html>

<html>

<head>

<title>Success</title>

<link rel='stylesheet' href='style.css'>

</head>


<body>


<nav class='navbar'>

<div class='logo'>

Student Portal

</div>


<div class='nav-links'>

<a href='index.html'>Home</a>

<a href='index.html'>Students</a>

<a href='#'>About</a>

<a href='#'>Contact</a>

</div>

</nav>


<div class='success-container'>


<div class='success-box'>


<div class='success-icon'>

✓

</div>


<h1>

Student Data Saved Successfully!

</h1>


<p class='success-text'>

The student information has been successfully
stored in the database.

</p>


<div class='student-details'>


<p>

<strong>Roll Number:</strong>

$roll_no

</p>


<p>

<strong>Name:</strong>

$name

</p>


<p>

<strong>Gender:</strong>

$gender

</p>


<p>

<strong>Contact Number:</strong>

$contact

</p>


<p>

<strong>Marks:</strong>

$marks

</p>


</div>


<a href='index.html'
class='back-button'>

Add Another Student

</a>


</div>

</div>


</body>

</html>

";


    }

    else {


        echo "

<div class='error-box'>

Database Error:

"
        . mysqli_error($conn)
        . "

</div>

";


    }


}

else {

    echo "Invalid Request";

}


mysqli_close($conn);

?>