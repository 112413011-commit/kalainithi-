<!DOCTYPE html>
<html>
<head>
<title>Registration Result</title>

<style>

body{
    font-family:Arial;
    background:#f2f2f2;
}

.container{
    width:500px;
    margin:60px auto;
    background:white;
    padding:20px;
    border-radius:10px;
    text-align:center;
    box-shadow:0 0 10px gray;
}

.success{
    color:green;
    font-size:22px;
}

.fail{
    color:red;
    font-size:22px;
}

table{
    margin:auto;
}

td{
    padding:8px;
}

</style>

</head>

<body>

<div class="container">

<?php

$name=$_POST['name'];
$age=$_POST['age'];
$department=$_POST['department'];
$email=$_POST['email'];

echo "<h2>Submitted Details</h2>";

echo "<table border='1'>";

echo "<tr><td>Name</td><td>$name</td></tr>";
echo "<tr><td>Age</td><td>$age</td></tr>";
echo "<tr><td>Department</td><td>$department</td></tr>";
echo "<tr><td>Email</td><td>$email</td></tr>";

echo "</table><br>";

if($age>=18)
{
    echo "<div class='success'>";
    echo "Registration Successful!<br>";
    echo "Positive Response: You are eligible.";
    echo "</div>";
}
else
{
    echo "<div class='fail'>";
    echo "Registration Failed!<br>";
    echo "Negative Response: Age must be 18 or above.";
    echo "</div>";
}

?>

<br><br>

<a href="index.html">Go Back</a>

</div>

</body>
</html>