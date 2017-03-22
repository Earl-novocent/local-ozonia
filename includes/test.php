<?php
echo "<h1>test</h1>";
//Set langugae cookie - default to english
if(!isset($_COOKIE['lang'])){
	setcookie('lang', 'en');
}

$language = array('en' => 'EN', 'zh' => "中文");
$languageLinks = "";
foreach($language as $key => $value){
	$active = ($_COOKIE['lang'] === $key) ? "active" : "";
	$languageLinks .= "<a href=\"$key\" class=\"changeLanguage $active\">$value</a>\n";
};

//Determine name of different language version
$currentLang = $_COOKIE['lang'];
$currentFile = $_SERVER["PHP_SELF"];
$parts = explode('/', $currentFile);
$filename = $parts[count($parts) - 1];
$newFilename = "";

//Check to see if changing to english version
if($currentLang == 'en'){
	$filePieces = explode('_', $filename);
	echo $filePieces[0] . "\n";
	echo $filePieces[1] . "\n";
	$newFilename = $filePieces[0] . '.php';
	echo $newFilename;
}else{
	//If changing to non english version
	$filePieces = explode('.', $filename);
	echo $filePieces[0] . "\n";
	echo $filePieces[1] . "\n";
	$newFilename = $filePieces[0] . '_' . $currentLang . '.' . $filePieces[1];
}

echo $newFilename;

if(file_exists($newFilename)){
	echo "Change the page";
	//header('Location: '. $newFilename);
}else{
	echo "Don't change page";
}

function isEnglish(){
	if(isset($_COOKIE['lang'])){
		if($_COOKIE['lang'] === 'en'){
			return true;
		}elseif ($_COOKIE['lang'] !== 'en') {
			return false;
		}
	}else{
		return true;
	}
}

?>