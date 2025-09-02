<!doctype html>
<html lang="en">
<head>
<style>
/* Fullscreen background image */
body {
background-image: url('re.jpg'); /* URL to your background image
*/
background-size: cover; /* Ensures the image covers the full
screen */
background-position: center; /* Centers the background image */
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
background-color: rgba(0, 0, 0, 0.5); /* Black overlay with some
transparency */
z-index: -1; /* Ensure the overlay is below the content */
}
.container {
max-width: 800px;
margin-top: 50px;
}
.form-card {
background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent
background for the form */
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
text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); /* Subtle shadow */
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
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap CSS (used here for responsive layout and styling) -->
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.
css" rel="stylesheet"
integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65Vohhpuu
COmLASjC" crossorigin="anonymous">

<!-- Custom CSS -->
<style>
/* Custom Styles */
body {
background-color: #f0f4f8;
font-family: 'Arial', sans-serif;
}

.navbar {
background-color: #4e73df; /* Bootstrap navbar class */
}
.navbar-brand, .nav-link {
color: white !important; /* Using Bootstrap navbar link
styling */
}
.navbar-nav .nav-item .nav-link:hover {
color: #f0ad4e !important; /* Bootstrap hover effect on navbar
links */
}
.image-container img {
transition: transform 0.3s ease-in-out;
}
.image-container img:hover {
transform: scale(1.1);
}
.image-container button {
transition: background-color 0.3s ease-in-out;
}
.image-container button:hover {
background-color: #d9534f;
}

.container.image-row {
padding: 40px 0; /* Using Bootstrap's container class for
responsive layout */
}
.modal-content {
border-radius: 15px; /* Bootstrap modal content styling */
}
.modal-header {
background-color: #4e73df; /* Bootstrap modal header */
color: white;
border-top-left-radius: 15px;
border-top-right-radius: 15px;
}
.modal-footer {
border-bottom-left-radius: 15px;
border-bottom-right-radius: 15px;
}
.modal-body img {
border-radius: 10px;
}
.image-row:nth-child(odd) {
background-color: #fff;
}
.image-row:nth-child(even) {
background-color: #f8f9fc;
}
</style>
<!-- Custom Styles for Buttons -->
<style>
.image-container button {
background-color: #f44336; /* Unique red color */
color: white; /* Text color for contrast */
border: none; /* Remove border */
font-size: 16px; /* Set a font size */

font-weight: bold; /* Make the font bold */
text-transform: uppercase; /* Transform text to uppercase */
letter-spacing: 1px; /* Add letter spacing */
transition: all 0.3s ease; /* Smooth transition for hover effect
*/
}
.image-container button:hover {
background-color: #ff5722; /* Change color on hover to a slightly
different shade */
transform: scale(1.1); /* Slightly scale the button on hover */
box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Add a shadow effect
*/
}
</style>

<title>Max Rental Service</title>
</head>
<style>
/* Gradient and radio-style background for the navbar */
.navbar {
background: linear-gradient(90deg, #4e73df, #1c7ed6); /* A smooth
gradient from blue to teal */
transition: background-color 0.3s ease-in-out; /* Smooth
transition for background color */
}
/* Add a hover effect to the navbar items */
.navbar-nav .nav-link {
color: white !important; /* Ensure the text is white */
transition: color 0.3s ease, transform 0.3s ease; /* Smooth
transition for color and scaling */
}
/* Change the color of nav-link on hover */
.navbar-nav .nav-item:hover .nav-link {
color: #ff5722 !important; /* Change text color on hover */
transform: scale(1.1); /* Slightly scale the link for a dynamic
effect */

}
/* Optional: Adding a radio-wave-like hover effect when hovering the
entire navbar */
.navbar:hover {
background: linear-gradient(90deg, #ff5722, #ff7043); /* Switch to
another gradient when hovering */
}
</style>
<body>
<!-- Navigation Bar (using Bootstrap's navbar component) -->
<nav class="navbar navbar-expand-lg navbar-dark">
<div class="container-fluid">
<a class="navbar-brand" href="#">Max Rental Service</a>
<button class="navbar-toggler" type="button"
data-bs-toggle="collapse" data-bs-target="#navbarNav"
aria-controls="navbarNav" aria-expanded="false"
aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span> <!-- Bootstrap
navbar toggler for responsive menu -->
</button>
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav ms-auto">
<li class="nav-item"><a class="nav-link"
href="file:///C:/Users/STUDENT.LAB3NODE09/Desktop/2305019/max.html">Home</
a></li>
<li class="nav-item"><a class="nav-link" href=""
target="_blank">Services</a></li>
<li class="nav-item"><a class="nav-link"
href="http://localhost/form.php" target="_blank">Registration</a></li>
<li class="nav-item"><a class="nav-link"
href="http://localhost/reg.php" target="_blank"> Members</a></li>
</div>
</div>
</nav>
<!-- Image Rows with 3 images in a row (using Bootstrap grid system) -->
<div class="container image-row">

<div class="row text-center"> <!-- Bootstrap row for a responsive grid
layout -->
<div class="col-4 mb-4"> <!-- Bootstrap column with 4/12 width for
responsive images -->
<div class="image-container">
<img src="4.jpg" class="img-fluid rounded shadow border-0"
alt="Image 1"> <!-- Removed white background and border -->
<button class="btn btn-primary mt-3 w-100"
data-bs-toggle="modal" data-bs-target="#buyModal"
onclick="setModalContent('House 1', '1.jpg')">Buy</button> <!-- Bootstrap
button with styling -->
</div>
</div>
<div class="col-4 mb-4">
<div class="image-container">
<img src="2.jpg" class="img-fluid rounded shadow border-0"
alt="Image 2"> <!-- Removed white background and border -->
<button class="btn btn-primary mt-3 w-100"
data-bs-toggle="modal" data-bs-target="#buyModal"
onclick="setModalContent('House 2', '2.jpg')">Buy</button>
</div>
</div>
<div class="col-4 mb-4">
<div class="image-container">
<img src="3.jpg" class="img-fluid rounded shadow border-0"
alt="Image 3"> <!-- Removed white background and border -->
<button class="btn btn-primary mt-3 w-100"
data-bs-toggle="modal" data-bs-target="#buyModal"
onclick="setModalContent('House 3', '3.jpg')">Buy</button>
</div>
</div>
</div>
</div>
<!-- Second Image Row (similar usage of Bootstrap grid and button) -->
<!-- Second Image Row with 3 images in a row -->
<div class="container image-row" style="padding: 20px 0;
background-color: #f9f9f9;">
<div class="row text-center">
<div class="col-4 mb-4">

<div class="image-container">
<img src="1.jpg" class="img-fluid rounded shadow-lg
transform-hover" alt="Image 4">
<button class="btn btn-primary mt-3 w-100"
data-bs-toggle="modal" data-bs-target="#buyModal"
onclick="setModalContent('House 4', '4.jpg')">Buy</button>
</div>
</div>
<div class="col-4 mb-4">
<div class="image-container">
<img src="5.jpg" class="img-fluid rounded shadow-lg
transform-hover" alt="Image 5">
<button class="btn btn-primary mt-3 w-100"
data-bs-toggle="modal" data-bs-target="#buyModal"
onclick="setModalContent('House 5', '5.jpg')">Buy</button>
</div>
</div>
<div class="col-4 mb-4">
<div class="image-container">
<img src="6.jpg" class="img-fluid rounded shadow-lg
transform-hover" alt="Image 6">
<button class="btn btn-primary mt-3 w-100"
data-bs-toggle="modal" data-bs-target="#buyModal"
onclick="setModalContent('House 6', '6.jpg')">Buy</button>
</div>
</div>
</div>
</div>
<!-- Third Image Row with 3 images in a row -->
<div class="container image-row" style="padding: 20px 0;">
<div class="row text-center">
<div class="col-4 mb-4">
<div class="image-container">
<img src="7.jpg" class="img-fluid rounded shadow-lg
transform-hover" alt="Image 7">
<button class="btn btn-primary mt-3 w-100"
data-bs-toggle="modal" data-bs-target="#buyModal"
onclick="setModalContent('House 7', '7.jpg')">Buy</button>
</div>

</div>
<div class="col-4 mb-4">
<div class="image-container">
<img src="8.jpg" class="img-fluid rounded shadow-lg
transform-hover" alt="Image 8">
<button class="btn btn-primary mt-3 w-100"
data-bs-toggle="modal" data-bs-target="#buyModal"
onclick="setModalContent('House 8', '8.jpg')">Buy</button>
</div>
</div>
<div class="col-4 mb-4">
<div class="image-container">
<img src="9.jpg" class="img-fluid rounded shadow-lg
transform-hover" alt="Image 9">
<button class="btn btn-primary mt-3 w-100"
data-bs-toggle="modal" data-bs-target="#buyModal"
onclick="setModalContent('House 9', '9.jpg')">Buy</button>
</div>
</div>
</div>
</div>
<!-- Fourth Image Row with 3 images in a row -->
<div class="container image-row" style="padding: 20px 0;">
<div class="row text-center">
<div class="col-4 mb-4">
<div class="image-container">
<img src="10.jpg" class="img-fluid rounded shadow-lg
transform-hover" alt="Image 10">
<button class="btn btn-primary mt-3 w-100"
data-bs-toggle="modal" data-bs-target="#buyModal"
onclick="setModalContent('House 10', '10.jpg')">Buy</button>
</div>
</div>
<div class="col-4 mb-4">
<div class="image-container">
<img src="11.jpg" class="img-fluid rounded shadow-lg
transform-hover" alt="Image 11">

<button class="btn btn-primary mt-3 w-100"
data-bs-toggle="modal" data-bs-target="#buyModal"
onclick="setModalContent('House 11', '11.jpg')">Buy</button>
</div>
</div>
<div class="col-4 mb-4">
<div class="image-container">
<img src="12.jpg" class="img-fluid rounded shadow-lg
transform-hover" alt="Image 12">
<button class="btn btn-primary mt-3 w-100"
data-bs-toggle="modal" data-bs-target="#buyModal"
onclick="setModalContent('House 12', '12.jpg')">Buy</button>
</div>
</div>
</div>
</div>
<!-- Modal Structure (uses Bootstrap modal component) -->
<div class="modal fade" id="buyModal" tabindex="-1"
aria-labelledby="buyModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="buyModalLabel">Buy
House</h5>
<button type="button" class="btn-close"
data-bs-dismiss="modal" aria-label="Close"></button> <!-- Bootstrap modal
close button -->
</div>
<div class="modal-body">
<h4 id="houseName"></h4>
<img id="houseImage" src="" class="img-fluid"
alt="House Image"> <!-- Bootstrap img-fluid -->
<p>Are you sure you want to buy this house?</p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary"
data-bs-dismiss="modal">Close</button> <!-- Close Button -->

<button type="button" class="btn btn-primary"
onclick="confirmPurchase()">Confirm Purchase</button> <!-- Confirm
Purchase Button -->
</div>
</div>
</div>
</div>
<!-- Optional JavaScript (includes Bootstrap JS for modal and other
interactions) -->
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle
.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/t
WtIaxVXM" crossorigin="anonymous"></script>
<!-- Custom Script to change modal content -->
<script>
function setModalContent(houseName, houseImage) {
document.getElementById('houseName').innerText = houseName;
document.getElementById('houseImage').src = houseImage;
}
</script>
<!-- JavaScript to handle confirmation -->
<script>
function confirmPurchase() {
// Displaying a simple confirmation alert
if (confirm("successfuly comfused")) {
// If user clicks "OK"
alert("Thank you for purchasing from Max Rental Service!!");
} else {
// If user clicks "Cancel"
alert("Purchase Canceled.");
}
}
</script>
</body>
</html>