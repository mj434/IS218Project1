<?php
$fname = filter_input(INPUT_POST, 'fname');
$lname = filter_input(INPUT_POST, 'lname');
$email = filter_input(INPUT_POST, 'email');
$pswd = filter_input(INPUT_POST, 'pswd');
$data = [
	
	[$fname, $lname, $email, $pswd]
];

$filename = 'info.csv';


$f = fopen($filename, 'a');

if ($f === false) {
	die('Error opening the file ' . $filename);
}

// write each row at a time to a file
foreach ($data as $row) {
	fputcsv($f, $row);
}

// close the file
fclose($f);
?>
<head>
    <title>
        Success | Techcenter
    </title>
    
    <link rel="shortcut icon" type="image/png" href="fav.png"/>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class = "container">
    <div class="left">
        
        <img src="logo1.png" alt="tech center logo">
    </div>
    <div class="main">
        <h1>Welcome <?php echo $fname?></h1>
        <h2>Thak you for signing up.</h2>
            <h4><a href = "login.html"><button class = "button">Log In</button></a></h4>
    </div>
</div>
<div class="footer">
    <h6>&copy; Copyright, Mohit Joshi Homework 1, February 2021</h6>
</div>
</body>

