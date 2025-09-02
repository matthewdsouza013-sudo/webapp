<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap CSS -->

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.
css" rel="stylesheet"
integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65Vohhpuu
COmLASjC" crossorigin="anonymous">
<title>Registration</title>
<style>
/* Fullscreen background image */
body {
background-image: url('re.jpg'); /* URL to your background
image */
background-size: cover; /* Ensures the image covers the full
screen */
background-position: center; /* Centers the background image
*/
background-attachment: fixed; /* Makes the background fixed
during scroll */
color: black; /* Change the font color to black */
font-family: Arial, sans-serif;
}
/* Semi-transparent overlay for readability */
.overlay {
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-color: rgba(0, 0, 0, 0.5); /* Black overlay with
some transparency */
z-index: -1; /* Ensure the overlay is below the content */
}
.container {
max-width: 800px;
margin-top: 50px;
}
.form-card {

background-color: rgba(255, 255, 255, 0.8); /*
Semi-transparent background for the form */
padding: 20px;
border-radius: 8px;
box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}
/* Creative and innovative "Register Now" heading */
h1 {
text-align: center;
font-family: 'Poppins', sans-serif; /* More modern font */
font-size: 3rem; /* Larger font size */
font-weight: 700;
background: linear-gradient(45deg, #ff6a00, #ff3f00); /*
Gradient effect */
-webkit-background-clip : text; /* Clip background to the text
*/
color: transparent; /* Hide default text color */
text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); /* Subtle shadow
*/
animation: slideIn 2s ease-out; /* Animation effect */
margin-bottom: 20px;
}
/* Animation for heading */
@keyframes slideIn {
from {
transform: translateY(-50px);
opacity: 0;
}
to {
transform: translateY(0);
opacity: 1;
}
}
.form-label {
font-weight: bold;
}

.btn-submit {
background-color: #007bff;
color: white;
}
.btn-submit:hover {
background-color: #0056b3;
}
.form-check-input:checked {
background-color: #007bff;
}
</style>
<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark">
<div class="container-fluid">
<a class="navbar-brand" href="#">Max Rental Service</a>
<button class="navbar-toggler" type="button"
data-bs-toggle="collapse" data-bs-target="#navbarNav"
aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle
navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav ms-auto">
<li class="nav-item"><a class="nav-link"
href="file:///C:/Users/STUDENT.LAB3NODE09/Desktop/2305019/max.html"
target="_blank">Home</a></li>
<li class="nav-item"><a class="nav-link"
href="file:///C:/Users/STUDENT.LAB3NODE09/Desktop/2305019/servise.html"
target="_blank">Services</a></li>
<li class="nav-item"><a class="nav-link" href=""
target="_blank">Registration</a></li>
<li class="nav-item"><a class="nav-link"
href="http://localhost/reg.php" target="_blank"> Members</a></li>
</ul>
</div>
</div>
</nav>

</head>
<body>
<!-- Overlay for darkening the background -->
<div class="overlay"></div>
<div class="container">
<div class="form-card">
<h1>Register Now</h1>
<form method="POST">
<div class="row mb-3">
<div class="col">
<label for="fname" class="form-label">First
Name:</label>
<input type="text" class="form-control" id="fname"
placeholder="Enter your first name" name="fname" required>
</div>
<div class="col">
<label for="lname" class="form-label">Last
Name:</label>
<input type="text" class="form-control" id="lname"
placeholder="Enter your last name" name="lname" required>
</div>
</div>
<div class="row mb-3">
<div class="col">
<label for="phone"
class="form-label">Phone:</label>
<input type="number" class="form-control"
id="phone" placeholder="Enter your phone number" name="phone" required>
</div>
<div class="col">
<label for="age" class="form-label">Age:</label>
<input type="number" class="form-control" id="age"
placeholder="Enter your age" name="age" required>
</div>
</div>
<div class="mb-3">

<label for="gender" class="form-label">Gender:</label>
<input type="text" class="form-control" id="gender"
name="gender" placeholder="Enter gender" required>
</div>
<div class="mb-3">
<label for="country"
class="form-label">Country:</label>
<input type="text" class="form-control" id="country"
name="country" placeholder="Enter your country" required>
</div>
<div class="mb-3">
<label for="state" class="form-label">State:</label>
<input type="text" class="form-control" id="state"
name="state" placeholder="Enter your state" required>
</div>
<div class="mb-3">
<label for="m_status" class="form-label">Marital
Status:</label>
<input type="text" class="form-control" id="m_status"
name="m_status" placeholder="Enter marital status" required>
</div>
<div class="mb-3">
<label for="email" class="form-label">Email:</label>
<input type="email" class="form-control" id="email"
placeholder="Enter your email" name="email" required>
</div>
<div class="mb-3">
<label for="pass" class="form-label">Password:</label>
<input type="password" class="form-control" id="pass"
placeholder="Enter your password" name="pass" required>
</div>
<button type="submit" class="btn btn-submit
btn-block">Submit</button>
</form>

</div>
</div>
<!-- Optional JavaScript; Bootstrap Bundle with Popper -->
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle
.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/t
WtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
<?php
// Database connection details
$servername = "localhost";
$username = "root"; // Default MySQL username is 'root'
$password = ""; // Default password is empty
$dbname = "form"; // Your database name, make sure 'form' exists
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
// If connection fails, die with an error message
die("Connection failed: " . $conn->connect_error);
} else {
// If connection is successful, display success message
echo "Connected successfully to the database.";
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$country = $_POST['country'];
$state = $_POST['state'];
$m_status = $_POST['m_status'];

$email = $_POST['email'];
$pass = $_POST['pass'];
// Prepare and bind
$stmt = $conn->prepare("INSERT INTO form (fname, lname, phone, age,
gender, country, state, m_status, email, pass) VALUES (?, ?, ?, ?, ?, ?,
?, ?, ?, ?)");
$stmt->bind_param("ssiissssss", $fname, $lname, $phone, $age, $gender,
$country, $state, $m_status, $email, $pass);
// Execute the query
if ($stmt->execute()) {
echo "New record created successfully";
} else {
echo "Error: " . $stmt->error;
}
$stmt->close();
}
// Close the connection
$conn->close();
?>