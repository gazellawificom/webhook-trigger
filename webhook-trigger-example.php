<?php
// Trigger Parameters
//?name={name}&time={time}&phone={phone}&birthday={birthday}&type={type}&os={os}&browser={browser}&gender={gender}&email={email}&device_id={id}&custom1={custom1}&custom2={custom2}&custom3={custom3}&check_type={check_type}


$gets = $_GET;

$name = strip_tags($_GET['name']);
isset($name) || $name = ' ';

$email = strip_tags($_GET['email']); 
isset($phone) || $phone = ' ';

$time = strip_tags($_GET['time']);
isset($time) || $time = ' ';

$phone = strip_tags($_GET['phone']);
isset($phone) || $phone = ' ';

$birthday = strip_tags($_GET['birthday']);
isset($birthday) || $birthday = ' ';

$type = strip_tags($_GET['type']);
isset($type) || $type = ' ';

$os = strip_tags($_GET['os']);
isset($os) || $os = ' ';

$browser = strip_tags($_GET['browser']);
isset($browser) || $browser = ' ';

$gender = strip_tags($_GET['gender']);
isset($gender) || $gender = ' ';

$device_id = strip_tags($_GET['device_id']);
isset($device_id) || $device_id = ' ';

$custom1 = strip_tags($_GET['custom1']);
isset($custom1) || $custom1 = ' ';

$custom2 = strip_tags($_GET['custom2']);
isset($custom2) || $custom2 = ' ';

$custom3 = strip_tags($_GET['custom3']);
isset($custom3) || $custom3 = ' ';

$check_type = strip_tags($_GET['check_type']);
isset($check_type) || $check_type = ' ';


 
// Example to email queries to yourself
$to      = 'youremail@domain.com';  /// YOUR EMAIL HERE

$subject = 'Trigger Test';
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

$message = "
Name: $name <br>
Email: $email <br>
Time: $time <br>
Phone: $phone <br>
Birthday: $birthday <br>
Type: $type <br>
OS: $os <br>
Browser: $browser <br>
Gender: $gender <br>
Device ID: $device_id <br>
Custom Field 1: $custom1 <br>
Custom Field 2: $custom2 <br>
Custom Field 3: $custom3 <br>
Check Type: $check_type <br>
";
mail($to, $subject, $message, $headers);


// Example to save queries on disk
file_put_contents('data.log', $gets);  

?>