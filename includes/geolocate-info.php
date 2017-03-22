<?php
function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}


function isUS() {
	$theIP = getRealIpAddr();
	// Website url to open
	$theURL = 'http://api.ipinfodb.com/v3/ip-country/?key=9d7e17b98ac1cf9ca58a85c8ba8a6ee71fbb7efeb9d2119e838b72bb76f36ac8&ip='.$theIP;
	
	// Get that website's content
	$handle = fopen($theURL, "r");
	
	// If there is something, read and return

	if ($handle) {
		while (!feof($handle)) {
		    $buffer = fgets($handle, 4096);
		    $data = explode(';',$buffer);
		    //$data[3];    	  
			if($data[3] == "US") {
				return true;
			}else{ 
				return false;
			}		      	    
		}
		fclose($handle);
	}
	
}
// $data[0] = Status (OK)
// $data[1] = 
// $data[2] = IP
// $data[3] = Country Abbrev (US)
// $data[4] = Country (UNITED STATES)

$southAmerica = array(
"Argentina",
"Aruba",
"Belize",
"Bolivia",
"Bonaire",
"Brazil",
"Chile",
"Colombia",
"Costa Rica",
"Cuba",
"Curaçao",
"Dominican Republic",
"Ecuador",
"El Salvador",
"Falkland Islands",
"French Guiana",
"Guatemala",
"Guyana",
"Haití",
"Honduras",
"Mexico",
"Nicaragua",
"Panama",
"Paraguay",
"Peru",
"Saba",
"Sint Eustatius",
"Sint Maarten",
"South Georgia and The South Sandwich Islands", 
"Suriname",
"Trinidad and Tobago",
"Uruguay",
"Venezuela"
);
$southAmericaCC = array(
"AR",//"Argentina",
"AW",//"Aruba",
"BZ",//Belize",
"BO",//"Bolivia",
"",//"Bonaire",
"BR",//"Brazil",
"CL",//"Chile",
"CO",//"Colombia",
"CR",//"Costa Rica",
"CU",//"Cuba",
"",//"Curaçao",
"DO",//"Dominican Republic",
"EC",//"Ecuador",
"SV",//"El Salvador",
"FK",//"Falkland Islands",
"GF",//"French Guiana",
"GT",//"Guatemala",
"GY",//"Guyana",
"HT",//"Haití",
"HN",//"Honduras",
"MX",//"Mexico",
"NA",//"Nicaragua",
"PA",//"Panama",
"PY",//"Paraguay",
"PE",//"Peru",
"",//"Saba",
"",//"Sint Eustatius",
"",//"Sint Maarten",
"GS",//"South Georgia and The South Sandwich Islands", 
"SR",//"Suriname",
"TT",//"Trinidad and Tobago",
"UY",//"Uruguay",
"VE",//"Venezuela"
);

foreach($southAmerica as $key => $item){
	$southAmerica[$key] = strtoupper($item);
}

$theIP = getRealIpAddr();
// Website url to open
$theURL = 'http://api.ipinfodb.com/v3/ip-country/?key=9d7e17b98ac1cf9ca58a85c8ba8a6ee71fbb7efeb9d2119e838b72bb76f36ac8&ip='.$theIP;
$handle = fopen($theURL, "r");
// Get that website's content
global $data;
if ($handle) {
	while (!feof($handle)) {
	    $buffer = fgets($handle, 4096);
	    $data = explode(';',$buffer);  	  
		if(in_array($data[3], $southAmericaCC)) {
			echo "Its here: " . $data[4];
		}else{ 
			echo "No dice";
		}				      	    
	}
	fclose($handle);
}
print_r($data);

