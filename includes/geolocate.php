<?php

//error_reporting(E_ALL);
//ini_set('display_errors', '1');

function connect(){

	$hostname = "ozonia.db.9008378.hostedresource.com";
	$username = "ozonia";
	$dbname = "ozonia";
	$password = "Ozonia1!";

	$mysqli = new Mysqli($hostname, $username, $password, $dbname);
	return $mysqli;
}

if($_GET){
	switch ($_GET['getCountry']) {
		case 'true':
			echo getCountry();
			break;
		default:
			break;
	}
}

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

function getCountry_old() {
	$theIP = getRealIpAddr();
	//$theIP = '68.197.171.25';   //USA
	//$theIP = '221.192.33.30';   //China
	//$theIP = '190.82.86.158';   //Chile
	//$theIP = '80.13.0.162';     //France
	//$theIP = '92.106.201.117';  //Switzerland

	$theURL = 'http://api.ipinfodb.com/v3/ip-country/?key=9d7e17b98ac1cf9ca58a85c8ba8a6ee71fbb7efeb9d2119e838b72bb76f36ac8&ip='.$theIP;
	$handle = fopen($theURL, "r");
	if ($handle) {
		while (!feof($handle)) {
		    $buffer = fgets($handle, 4096);
		    $data = explode(';',$buffer);
		    return $data[3];
		}
		fclose($handle);
	} else {
		return "NA";
	}

// $data[0] = Status (OK)
// $data[1] =
// $data[2] = IP
// $data[3] = Country Abbrev (US)
// $data[4] = Country (UNITED STATES)

}

function getCountry() {
	//$theIP = '68.197.171.25';   //USA
	//$theIP = '221.192.33.30';   //China
	//$theIP = '190.82.86.158';   //Chile
	//$theIP = '80.13.0.162';     //France
	//$theIP = '92.106.201.117';  //Switzerland
	$theIP = getRealIpAddr();
	$country = "NA";
	$mysqli = connect();
	$sql = "SELECT countryShort FROM iprange WHERE (INET_ATON('$theIP') BETWEEN ipFromConv AND ipToConv)";

	if(!$result = $mysqli->query($sql)){
		die(__FUNCTION__ . "() mysqli error: $mysqli->error");
	}
	while ($row = $result->fetch_object()) {
		$country = $row->countryShort;
	}

	return $country;

}


function isAmericas($location) {
	$southAmericaCC = array(
	"AR",//"Argentina",
	"AW",//"Aruba",
	"BZ",//Belize",
	"BO",//"Bolivia",
	//"",//"Bonaire",
	"BR",//"Brazil",
	"CL",//"Chile",
	"CO",//"Colombia",
	"CR",//"Costa Rica",
	"CU",//"Cuba",
	//"",//"Curaçao",
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
	//"",//"Saba",
	//"",//"Sint Eustatius",
	//"",//"Sint Maarten",
	"GS",//"South Georgia and The South Sandwich Islands",
	"SR",//"Suriname",
	"TT",//"Trinidad and Tobago",
	"UY",//"Uruguay",
	"VE",//"Venezuela"
	);

	//Add USA for testing
	array_push($southAmericaCC, "US", "CA");

	// If there is something, read and return
	if(in_array($location, $southAmericaCC)) {
		return true;
	} else {
		return false;
	}
}
?>