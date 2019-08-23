<?php

$sessionId = $_POST['sessionId'];
$direction = $_POST['direction'];
$callerNumber = $_POST['callerNumber'];
$callerCountryCode = $_POST['callerCountryCode'];
$destinationNumber = $_POST['destinationNumber'];
$callSessionState = $_POST['callSessionState']; // this will be "Dialing" during ringing and when answered it will be "Bridge"
$isActive = $_POST['isActive']; // 0 before answer and 1 when answered
$callStartTime = $_POST['callStartTime'];
$dialDestinationNumbers = $_POST['dialDestinationNumbers'];
$hangupCause = $_POST['hangupCause']; // the responses you expect are "USER_BUSY" "NO_ANSWER" "NO_USER_RESPONSE" "SUBSCRIBER_ABSENT" "SERVICE_UNAVAILABLE" "USER_NOT_REGISTERED" "UNALLOCATED_NUMBER"
$clientRequestId = $_POST['clientRequestId'];


$receivedData = $_POST;
$csvFileName = "/home/maina/Desktop/eventslog/$sessionId.csv";
$fp = fopen($csvFileName, 'w+') or die('Unable to open file!');
$heading = array('Index', 'Value');
fputcsv($fp, $heading);
foreach ($receivedData as $key => $value) {
    $csvarray = array();
    echo $value;
    array_push($csvarray, $key, $value);
    fputcsv($fp, $csvarray);
}
fclose($fp);