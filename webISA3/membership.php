<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Members Details</title>
<!-- Link to external CSS (you can save the styles into a separate
'style.css' if needed) -->
<style>
/* General Body Styles */
body {
font-family: 'Arial', sans-serif;
background-color: #f8f9fa;
margin: 0;
padding: 20px;
color: #333;
}
/* Navigation Bar Styles */
nav {
background-color: #007bff;
padding: 15px 0;
box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}
.navbar-brand {

color: white !important;
font-size: 24px;
font-weight: bold;
}
.nav-item a {
color: white !important;
font-size: 18px;
padding: 8px 15px;
text-transform: uppercase;
}
.nav-item a:hover {
background-color: #0056b3;
border-radius: 5px;
}
/* Heading Styles */
h1 {
text-align: center;
color: #007bff;
margin-bottom: 30px;
font-size: 36px;
}
/* Table Styles */
table {
width: 100%;
border-collapse: collapse;
margin: 0 auto;
background-color: #fff;
box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}
th, td {
padding: 12px 15px;
text-align: center;
}
th {

background-color: #007bff;
color: white;
font-size: 18px;
}
td {
background-color: #f8f9fa;
font-size: 16px;
}
tr:nth-child(even) td {
background-color: #e9ecef;
}
tr:hover {
background-color: #d1e7fd;
}
/* Create a responsive table */
@media screen and (max-width: 600px) {
table {
width: 100%;
}
th, td {
display: block;
width: 100%;
text-align: left;
}
td {
border-bottom: 1px solid #ddd;
}
}
/* Footer Styles */
footer {
text-align: center;
padding: 20px;
background-color: #007bff;
color: white;
margin-top: 50px;

}
footer p {
margin: 0;
}
body {
font-family: Arial, sans-serif;
background-color: #f4f4f9;
margin: 0;
padding: 0;
}
.container {
width: 50%;
margin: 50px auto;
padding: 30px;
background-color: #fff;
box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
border-radius: 8px;
}
h1 {
color: #333;
text-align: center;
margin-bottom: 20px;
}
form {
display: flex;
flex-direction: column;
}
input[type="text"] {
padding: 10px;
margin: 10px 0;
border: 1px solid #ddd;
border-radius: 4px;
font-size: 14px;
}

button {
padding: 10px;
background-color: #4CAF50;
color: white;
border: none;
border-radius: 4px;
font-size: 16px;
cursor: pointer;
transition: background-color 0.3s;
}
button:hover {
background-color: #45a049;
}
.message {
padding: 10px;
margin-top: 20px;
text-align: center;
font-size: 16px;
color: white;
border-radius: 4px;
}
.success {
background-color: #4CAF50;
}
.error {
background-color: #f44336;
}
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

<!-- Bootstrap (for Navigation Bar and other UI enhancements) -->
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstr
ap.min.css" rel="stylesheet">
</head>
<body>
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
<li class="nav-item"><a class="nav-link"
href="http://localhost/form.php" target="_blank">Registration</a></li>
<li class="nav-item"><a class="nav-link" href=""
target="_blank"> Members</a></li>
</ul>
</div>
</div>
</nav>

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
die("Connection failed: " . $conn->connect_error);
}
// Fetch student details from the database
$sql = "SELECT fname, lname, phone, age, gender, country, state,
m_status, email FROM form";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
echo "<table><tr><th>First Name</th><th>Last
Name</th><th>Phone</th><th>Age</th><th>Gender</th><th>Country</th><th>Stat
e</th><th>Status</th><th>Email</th><th>Password</th></tr>";
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["fname"] . "</td><td>" . $row["lname"]
. "</td><td>" . $row["phone"] . "</td><td>" . $row["age"] . "</td><td>" .
$row["gender"] .
"</td><td>" . $row["country"] . "</td><td>" .
$row["state"] . "</td><td>" . $row["m_status"] . "</td><td>" .
$row["email"] . "</td><td>" . "</td></tr>";
}
echo "</table>";
} else {
echo "<p class='text-center'>No results found.</p>";
}
$conn->close();
?>

<!-- Bootstrap JavaScript (for navbar toggle) -->

<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap
.bundle.min.js"></script>
<br><br>

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
die("Connection failed: " . $conn->connect_error);
}
$message = ''; // Initialize message variable
// Handle deleting data
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) &&
$_POST['action'] == 'delete') {
$phone = $_POST['phone']; // ID of the student to delete
// Prepare and bind the query
$stmt = $conn->prepare("DELETE FROM form WHERE phone=?");
$stmt->bind_param("i", $phone); // "i" for integer
// Execute the query
if ($stmt->execute()) {
$message = '<div class="message success">Record deleted
successfully</div>';
} else {

$message = '<div class="message error">Error: ' . $stmt->error .
'</div>';
}
$stmt->close();
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Delete Record</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
<h1> Membership cancellation</h1>
<?php echo $message; // Display success or error message ?>
<form method="POST" action="">
<input type="text" name="phone" placeholder="Enter Phone Number"
required>
<input type="hidden" name="action" value="delete">
<button type="submit">Delete Record</button>
</form>
</div>
<!-- Footer -->
<footer>
<p>&copy; 2025 Max Rental Service. All rights reserved.</p>
</footer>
</body>
</html>

</body>
</html>