<?php

$ch= curl_init();
curl_setopt ($ch1, CURLOPT_URL, 'https://www.propertyfinder.ae/en/search?c=1&l=0.1&q=&t=&pf=&pt=&bf=&bt=&ft=' );
curl_setopt($ch1, CURLOPT_HEADER, 0);
curl_setopt($ch1,CURLOPT_VERBOSE,1);
curl_setopt($ch1, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.0.3705; .NET CLR 1.1.4322; Media Center PC 4.0)');
//curl_setopt ($ch1, CURLOPT_REFERER,'http://www.google.com');  //just a fake referer
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch1,CURLOPT_POST,0);
curl_setopt($ch1, CURLOPT_FOLLOWLOCATION, 20);

$html= curl_exec($ch1);
// parse the html into a DOMDocument
$dom = new DOMDocument();
@$dom->loadHTML($html);

// grab all on the page
$xpath = new DOMXPath($dom);

$options = $document->getElementsByTagName('option');

foreach ($options as $option) {
  echo "Abu Dhabi,". $option->getAttribute('value').", ". $option->nodeValue;
?>