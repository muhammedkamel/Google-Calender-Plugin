<?php

require_once 'vendor/autoload.php';



$client = new Google_Client();
$client->setApplicationName("oauth2");
$client->setDeveloperKey("310431182375-ne4sk8i7odm50e8336k17jort60tkkqk.apps.googleusercontent.com");

$service = new Google_Service_Books($client);
$optParams = array('filter' => 'free-ebooks');
$results = $service->volumes->listVolumes('Henry David Thoreau', $optParams);

foreach ($results as $item) {
  echo $item['volumeInfo']['title'], "<br /> \n";
}