<?php
require 'vendor/autoload.php';
use AfricasTalking\SDK\AfricasTalking;

// Set your app credentials
$username = "username";
$apiKey = "apikey";


// Initialize the SDK
$AT       = new AfricasTalking($username, $apiKey);

// Get the voice service
$voice    = $AT->voice();

// Set your Africa's Talking phone number in international format
$phoneNumber = "+254711082943";

try {
    // Fetch the queue $herbie->model
    $results = $voice->fetchQueuedCalls([
        "phoneNumber" => $phoneNumber
    ]);
    $queueNumber = $results["data"]->entries["0"]->numCalls;
    if ($queueNumber==null){
        echo "There is nobody in the queue";
    }
    if(is_int($queueNumber)){
        echo "Calling the queued client\n";
        $from     = "+254711082314";
        $to       = "+254759329394";
        $calledStatus=$voice->call([
            'from' => $from,
            'to'   => $to
        ]);
        print_r($calledStatus);
    }
    
} catch (Exception $e) {
    echo "Error: ".$e->getMessage();
}