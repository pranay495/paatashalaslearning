<?php

    $to = "paatashalaslearning@gmail.com";
    $fullname = $_REQUEST['full-name'];
    $parentname = $_REQUEST['parent-name'];
    $from = $_REQUEST['email'];
    $number = $_REQUEST['number'];
    $schoolname = $_REQUEST['school-name'];
    $schoolboard = $_REQUEST['school-board'];
    $class = $_REQUEST['class'];
    $state = $_REQUEST['state'];
    $city = $_REQUEST['city'];
    $pincode = $_REQUEST['pincode'];

    $headers = "From: $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $subject = "A Student has registered from PaatashalasLearning.";

    $logo = 'images/logo.png';
    $link = 'paatashalaslearning.com';

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<thead style='text-align: center;'><tr><td style='border:1px;' colspan='2'>";
	$body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
	$body .= "</td></tr></thead><tbody>";
	$body .= "<tr>";
	$body .= "<td style='border:1px;'><strong>Student Name:</strong> {$fullname}</td>";
	$body .= "<td style='border:1px;'><strong>Email:</strong> {$from}</td>";
	$body .= "</tr>";
	$body .= "<tr>";
	$body .= "<td style='border:1px;'><strong>Parent Name:</strong> {$parentname}</td>";
	$body .= "<td style='border:1px;'><strong>Phone Number:</strong> {$number}</td>";
	$body .= "</tr>";
	$body .= "<tr>";
	$body .= "<td style='border:1px;'><strong>School Name:</strong> {$schoolname}</td>";
	$body .= "<td style='border:1px;'><strong>School Board:</strong> {$schoolboard}</td>";
	$body .= "</tr>";
	$body .= "<tr>";
	$body .= "<td style='border:1px;'><strong>Class:</strong> {$class}</td>";
	$body .= "<td style='border:1px;'><strong>State:</strong> {$state}</td>";
	$body .= "</tr>";
	$body .= "<tr>";
	$body .= "<td style='border:1px;'><strong>City:</strong> {$city}</td>";
	$body .= "<td style='border:1px;'><strong>Pincode:</strong> {$pincode}</td>";
	$body .= "</tr>";	
	$body .= "</tbody></table>";
	$body .= "</body></html>";

    $send = mail($to, $subject, $body, $headers);
    header("Location:/");
?>
