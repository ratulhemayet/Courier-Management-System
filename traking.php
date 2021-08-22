<!doctype html>
<html lang="en">
<head>

<script>
$.get("https://api.ipdata.co?api-key=test", function (response) {
    $("#ip").html("IP: " + response.ip);
    $("#city").html(response.city + ", " + response.region);
    $("#response").html(JSON.stringify(response, null, 4));
}, "jsonp");


</script>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<h1><a href="https://ipdata.co">ipdata.co</a> - IP geolocation API</h1>

<div id="ip"></div>
<div id="city"></div>
<pre id="response"></pre>

<?php
$data = json_decode(file_get_contents('https://ip-api.io/api/json?api_key=YOUR_API_KEY'));
echo '<pre>';
print_r($data);
?>