<?php
// GAZELLA FIELDS 
//?name={name}&phone={phone}&email={email}


$gets = $_GET;
file_put_contents('data.log', $gets);  
 
  

if(isset($_GET['email']) || isset($_GET['phone']) || isset($_GET['name'])) {
//name=""
//firstname
//lastname
//email
//mobile1
//mobile2
//mobile3 
//name="user_guid" type="hidden" value="" />
///name="keyword" type="hidden"  value="" />
//name="shortcode" type="hidden" value="" />    



$name = strip_tags($_GET['name']);
isset($name) || $name = ' ';

$email = strip_tags($_GET['email']); 
isset($phone) || $phone = ' ';


$phone = strip_tags($_GET['phone']); 
isset($phone) || $phone = ' ';

 
 
$number = strip_tags($phone);
$mobile = str_split($number,3); // Splits the number into a new element every 3 characters
 
// POST IT ALL
 
//create array of data to be posted
$post_data['firstname'] = strip_tags($_GET['name']);
$post_data['lastname'] = '';
$post_data['email'] = strip_tags($_GET['email']); 
$post_data['mobile1'] = $mobile[0]; 
$post_data['mobile2'] = $mobile[1]; 
$post_data['mobile3'] = substr($number,6);   

// needed
$post_data['user_guid'] = strip_tags('{0C33DB5F-5B80-4D88-B4F7-1781981A6718}');
$post_data['keyword'] = strip_tags('Gazella');
$post_data['shortcode'] = strip_tags('55678');
  

//exit(); 
 
//traverse array and prepare data for posting (key1=value1)
foreach ( $post_data as $key => $value) {
    $post_items[] = $key . '=' . $value;
}

//create the final string to be posted using implode()
$post_string = implode ('&', $post_items);

//create cURL connection
$curl_connection = 
 curl_init('http://yourwebsite.com/form.php');

//set options

curl_setopt($curl_connection, CURLOPT_CONNECTTIMEOUT, 30);
curl_setopt($curl_connection, CURLOPT_USERAGENT, 
  "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)");
curl_setopt($curl_connection, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl_connection, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl_connection, CURLOPT_FOLLOWLOCATION, 1);

//set data to be posted
curl_setopt($curl_connection, CURLOPT_POSTFIELDS, $post_string);

//perform our request
$result = curl_exec($curl_connection);

//show information regarding the request
//print_r(curl_getinfo($curl_connection));
//echo curl_errno($curl_connection) . '-' . 
                curl_error($curl_connection);
				
				echo $result;

//close the connection
curl_close($curl_connection);

} else {
echo 'Not Data input';
}


?>