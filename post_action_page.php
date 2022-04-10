<?php
$fname = filter_input(INPUT_POST, 'fname');
$lname = filter_input(INPUT_POST, 'lname');
$email = filter_input(INPUT_POST, 'email');
$pswd = filter_input(INPUT_POST, 'pswd');
$college = filter_input(INPUT_POST, 'college');
$major = filter_input(INPUT_POST, 'major[]');


echo "<br>";
	echo "These are the form inputs: <br>";
	echo $fname."<br>";
	echo $lname."<br>";
    echo $email."<br>";
    echo $pswd."<br>";
    echo $college."<br>";
    echo print_r($major)."<br>";

?>