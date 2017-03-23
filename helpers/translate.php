<?php
$source = 'xml/uv.xml';

$xmlstr = file_get_contents($source);

libxml_use_internal_errors(true); 
try{ 
    $xmlToObject = new SimpleXMLElement($xmlstr); 
} catch (Exception $e){ 
    echo 'Not well-formed XML ...'; 
    exit(); 
} 
//echo $xmlToObject->asXML();

$file_to_search = '../uv.php';
$file_to_write  = '../uv_zh.php';

$file_contents = file_get_contents($file_to_search);

$count = 0;
foreach($xmlToObject as $section) {
	foreach($section as $translations) {
		foreach($translations as $translation) {
	   		$count++;
	   		/*
	   		® <sup>&reg;</sup>
	   		™ &trade;
	   		“ &ldquo;
	   		’ &rsquo;
	   		” &rdquo;
	   		° &deg;
	   		gO3/h gO<sub>3</sub>/h 
	   		m3/h m<sup>3</sup>/h
	   		H2O H<sub>2</sub>O
	   		é &eacute;
	   		*/
	   		
	   		$search  = array('®', '™', '“', '”', 'gO3/h','°', 'H2O','’', 'm3/h', 'é');
	   		$replace = array('<sup>&reg;</sup>', '&trade;', '&ldquo;', '&rdquo;', 'gO<sub>3</sub>/h','&deg;', 'H<sub>2</sub>O', '&rsquo;', 'm<sup>3</sup>/h', '&eacute;');
	   		$eng = str_replace($search, $replace, $translation->english);
	   		$chn = str_replace($search, $replace, $translation->chinese);
	   		
	   		echo "<p>String: $count<br/>"; 
	   		echo "English: $eng<br/>";
	   		echo "Chinese: $chn</p>";
	   		//echo "{$translation->english} - {$translation->chinese}\r\n";
	   		$file_contents = str_replace($eng,$chn,$file_contents);
	   	}
	}

}

file_put_contents($file_to_write,$file_contents);
echo "Done!";

/*
			<translation>
				<english>Ozone</english>
				<chinese>臭氧</chinese>
			</translation>
			
Membrel Out of Date:
Originally developed in the early 1980's MEMBREL<sup>®</sup> MKIV is ozonia<sup>&reg;</sup>'s latest generation of electrolytic ozone generators which uses solid polymer electrolyte and state-of-the-art electronics for ozone production.

Originally developed in the early 1980's MEMBREL<sup>®</sup> MkIV is ozonia<sup>&reg;</sup>'s latest generation of electrolytic ozone generators which uses solid polymer electrolyte with a brand new GFRP cell body, and state-of-the-art electronics for ozone production.

Embeded Hyper-Links: resolved by a push content strategy

The OZFIL™ &amp; OZSKID™ water treatment systems incorporates all of the components required to produce and apply ozone to the process water. Each skid mounted system includes an air dryer for the feed gas preparation; OZAT<sup>®</sup> ozone generator; motive water pump and injector system; stainless steel contact chamber; automatic degassing valve with vent ozone destruct unit; residual ozone analyzer; flow meter; circulation bypass; control system and all skid interconnections.

*/
?>

