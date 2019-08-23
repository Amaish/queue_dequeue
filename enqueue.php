<?php
$response = '<?xml version="1.0" encoding="UTF-8"?><Response>\n';
$response .= '<Enqueue name="test" holdMusic="http://amaina.eu.ngrok.io/holdMusic.mp3" />';
$response .= '</Response>';
echo $response;
?>