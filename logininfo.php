<?php
$email = filter_input(INPUT_POST, 'email');
$pswd = filter_input(INPUT_POST, 'pswd');
$filename = 'info.csv';


// open the file
$f = fopen($filename, 'r');

if ($f === false) {
	die('Cannot open the file ' . $filename);
}
$isValid = false;
// read each line in CSV file at a time

while (($row = fgetcsv($f)) !== false) {
	
    
    
    if ($row[2] == $email && $row[3] == $pswd){
        $isValid = true;
       
        
    }
    
    
}
fclose($f);

if ($isValid === true){
    header("Location:welcome.html");
}
else{
    header("Location:login.html?error=Invalid Request");
}
?>