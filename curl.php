<?php
// API access key from Google API's Console
define( 'API_ACCESS_KEY', 'AAAAWiUF5kU:APA91bE4X0UTlOH6qCal7qsUDjm7HgKOWQI1zxD_Zhne5obB1K1fMcsIAxZKcPmlorZLvkXTFdqg4KGYetGBQQjeFw_KtKgpo4bYudyvvLo7oOQe80jULP-TH8qzg-BF4yJW5D0Hlpyo' );

echo $id = 'eJYGfU8OuDA:APA91bFMvTiicPeu-TdMoMEN2t9P5ipo0AqMdtDfAx_BFHa0zJEvn5jD2U3XqM7m-0n-3utD0FgcS2c1zOOJarc-E9mGEsSMsO9SREPfLZChI37RxpqNPZhgoUkE7RLcj1ExC0Ceozdt';
echo "<br>";

$registrationIds = array( $id );
//$registrationIds = array( $_GET['id'] );

// prep the bundle
$msg = array
(
    'message'   => 'here is a message. message',
    'title'     => 'This is a title. title',
    'subtitle'  => 'This is a subtitle. subtitle',
    'tickerText'    => 'Ticker text here...Ticker text here...Ticker text here',
    'vibrate'   => 1,
    'sound'     => 1,
    'largeIcon' => 'large_icon',
    'smallIcon' => 'small_icon'
);
$fields = array
(
    'registration_ids'  => $registrationIds,
    'data'          => $msg
);
 
$headers = array
(
    'Authorization: key=' . API_ACCESS_KEY,
    'Content-Type: application/json'    
);

// header("Access-Control-Allow-Origin: *");
// header("Access-Control-Allow-Credentials: true ");
// header("Access-Control-Allow-Methods: OPTIONS, GET, POST"); 
 
$ch = curl_init();

curl_setopt( $ch,CURLOPT_URL, 'https://android.googleapis.com/gcm/send' );
curl_setopt( $ch,CURLOPT_POST, true );
curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
$result = curl_exec($ch );

curl_close( $ch );
echo $result;