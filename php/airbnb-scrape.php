<?php

// Include the php dom parser    
include_once 'simple_html_dom.php';

// Create DOM from URL or file
$html = file_get_html('https://www.airbnb.com.au/s/San-Francisco--CA--United-States');

//workaround to deal with hyphens in attribute names
$datalat = 'data-lat';
$datalng = 'data-lng';
$dataname = 'data-name';
$dataurl = 'data-url';
$imgclass = '.img-responsive-height';
$airbnburl = 'http://www.airbnb.com';

$data_json = json_decode($json, true);

// grab all the details from the listing divs
foreach($html->find('.listing') as $element) {
       //echo $element . '<br>';
       echo $element->$datalat .'<br />';
       echo $element->$datalng .'<br />'; 
       echo $element->$dataname .'<br />'; 
       echo $airbnburl . $element->$dataurl .'<br />';

       //Check because there are often issues with scraping the images
	$imgelement = $html->find('div.listing-img-container img');
	echo $imgelement[$k]->src . '<br />'; 
	   
	$data_json[$i] = array('Lat' => $element->$datalat, 'Lng' => $element->$datalng, 'Name' => $element->$dataname, 'Url' => $element->$dataurl, 'Img' => $imgelement[$k]->src);
	   
}



//Output the scraped array to make sure it looks correct
print_r($data_json);

// Writing modified data:
file_put_contents('data.json', json_encode($data_json));

?> 