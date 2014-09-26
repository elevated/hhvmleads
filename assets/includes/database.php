<?php
$sql_server = "localhost";
$sql_database = "ibizloca_googlescrape";
$sql_user = "ibizloca_ibizdb";
$sql_password = "gh0st1ng";
$database = mysqli_connect($sql_server, $sql_user, $sql_password);
/* check connection, exit if fucky */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
mysqli_select_db($database, $sql_database);

function return_time_zone($area_code) {
$timezone = "";
if ($area_code=="201") { $timezone = "EST"; }
if ($area_code=="202") { $timezone = "EST"; }
if ($area_code=="203") { $timezone = "EST"; }
if ($area_code=="205") { $timezone = "CST"; }
if ($area_code=="206") { $timezone = "PST"; }
if ($area_code=="207") { $timezone = "EST"; }
if ($area_code=="208") { $timezone = "MST"; }
if ($area_code=="209") { $timezone = "PST"; }
if ($area_code=="210") { $timezone = "CST"; }
if ($area_code=="212") { $timezone = "EST"; }
if ($area_code=="213") { $timezone = "PST"; }
if ($area_code=="214") { $timezone = "CST"; }
if ($area_code=="215") { $timezone = "EST"; }
if ($area_code=="216") { $timezone = "EST"; }
if ($area_code=="217") { $timezone = "CST"; }
if ($area_code=="218") { $timezone = "CST"; }
if ($area_code=="219") { $timezone = "EST"; }
if ($area_code=="224") { $timezone = "CST"; }
if ($area_code=="225") { $timezone = "CST"; }
if ($area_code=="228") { $timezone = "CST"; }
if ($area_code=="229") { $timezone = "EST"; }
if ($area_code=="231") { $timezone = "EST"; }
if ($area_code=="234") { $timezone = "EST"; }
if ($area_code=="236") { $timezone = "EST"; }
if ($area_code=="239") { $timezone = "EST"; }
if ($area_code=="240") { $timezone = "EST"; }
if ($area_code=="248") { $timezone = "EST"; }
if ($area_code=="249") { $timezone = "EST"; }
if ($area_code=="251") { $timezone = "CST"; }
if ($area_code=="252") { $timezone = "EST"; }
if ($area_code=="253") { $timezone = "PST"; }
if ($area_code=="254") { $timezone = "CST"; }
if ($area_code=="256") { $timezone = "CST"; }
if ($area_code=="260") { $timezone = "EST"; }
if ($area_code=="262") { $timezone = "CST"; }
if ($area_code=="267") { $timezone = "EST"; }
if ($area_code=="269") { $timezone = "EST"; }
if ($area_code=="270") { $timezone = "EST"; }
if ($area_code=="276") { $timezone = "EST"; }
if ($area_code=="278") { $timezone = "EST"; }
if ($area_code=="280") { $timezone = "EST"; }
if ($area_code=="281") { $timezone = "CST"; }
if ($area_code=="282") { $timezone = "CST"; }
if ($area_code=="283") { $timezone = "EST"; }
if ($area_code=="297") { $timezone = "EST"; }
if ($area_code=="301") { $timezone = "EST"; }
if ($area_code=="302") { $timezone = "EST"; }
if ($area_code=="303") { $timezone = "MST"; }
if ($area_code=="304") { $timezone = "EST"; }
if ($area_code=="305") { $timezone = "EST"; }
if ($area_code=="307") { $timezone = "MST"; }
if ($area_code=="308") { $timezone = "CST"; }
if ($area_code=="309") { $timezone = "CST"; }
if ($area_code=="310") { $timezone = "PST"; }
if ($area_code=="312") { $timezone = "CST"; }
if ($area_code=="313") { $timezone = "EST"; }
if ($area_code=="314") { $timezone = "CST"; }
if ($area_code=="315") { $timezone = "EST"; }
if ($area_code=="316") { $timezone = "CST"; }
if ($area_code=="317") { $timezone = "EST"; }
if ($area_code=="318") { $timezone = "CST"; }
if ($area_code=="319") { $timezone = "CST"; }
if ($area_code=="320") { $timezone = "CST"; }
if ($area_code=="321") { $timezone = "EST"; }
if ($area_code=="323") { $timezone = "PST"; }
if ($area_code=="325") { $timezone = "CST"; }
if ($area_code=="327") { $timezone = "EST"; }
if ($area_code=="330") { $timezone = "EST"; }
if ($area_code=="331") { $timezone = "CST"; }
if ($area_code=="334") { $timezone = "CST"; }
if ($area_code=="336") { $timezone = "EST"; }
if ($area_code=="337") { $timezone = "CST"; }
if ($area_code=="339") { $timezone = "EST"; }
if ($area_code=="341") { $timezone = "PST"; }
if ($area_code=="347") { $timezone = "EST"; }
if ($area_code=="351") { $timezone = "EST"; }
if ($area_code=="352") { $timezone = "EST"; }
if ($area_code=="353") { $timezone = "CST"; }
if ($area_code=="356") { $timezone = "EST"; }
if ($area_code=="358") { $timezone = "EST"; }
if ($area_code=="360") { $timezone = "PST"; }
if ($area_code=="361") { $timezone = "CST"; }
if ($area_code=="369") { $timezone = "PST"; }
if ($area_code=="380") { $timezone = "EST"; }
if ($area_code=="381") { $timezone = "EST"; }
if ($area_code=="383") { $timezone = "EST"; }
if ($area_code=="385") { $timezone = "MST"; }
if ($area_code=="386") { $timezone = "EST"; }
if ($area_code=="401") { $timezone = "EST"; }
if ($area_code=="402") { $timezone = "CST"; }
if ($area_code=="404") { $timezone = "EST"; }
if ($area_code=="405") { $timezone = "CST"; }
if ($area_code=="406") { $timezone = "MST"; }
if ($area_code=="407") { $timezone = "EST"; }
if ($area_code=="408") { $timezone = "PST"; }
if ($area_code=="409") { $timezone = "CST"; }
if ($area_code=="410") { $timezone = "EST"; }
if ($area_code=="412") { $timezone = "EST"; }
if ($area_code=="413") { $timezone = "EST"; }
if ($area_code=="414") { $timezone = "CST"; }
if ($area_code=="415") { $timezone = "PST"; }
if ($area_code=="417") { $timezone = "CST"; }
if ($area_code=="419") { $timezone = "EST"; }
if ($area_code=="420") { $timezone = "CST"; }
if ($area_code=="423") { $timezone = "CST"; }
if ($area_code=="424") { $timezone = "PST"; }
if ($area_code=="425") { $timezone = "PST"; }
if ($area_code=="430") { $timezone = "CST"; }
if ($area_code=="432") { $timezone = "CST"; }
if ($area_code=="434") { $timezone = "EST"; }
if ($area_code=="435") { $timezone = "MST"; }
if ($area_code=="440") { $timezone = "EST"; }
if ($area_code=="442") { $timezone = "PST"; }
if ($area_code=="443") { $timezone = "EST"; }
if ($area_code=="445") { $timezone = "EST"; }
if ($area_code=="464") { $timezone = "CST"; }
if ($area_code=="469") { $timezone = "CST"; }
if ($area_code=="470") { $timezone = "EST"; }
if ($area_code=="475") { $timezone = "EST"; }
if ($area_code=="478") { $timezone = "EST"; }
if ($area_code=="479") { $timezone = "CST"; }
if ($area_code=="480") { $timezone = "MST"; }
if ($area_code=="484") { $timezone = "EST"; }
if ($area_code=="501") { $timezone = "CST"; }
if ($area_code=="502") { $timezone = "EST"; }
if ($area_code=="503") { $timezone = "PST"; }
if ($area_code=="504") { $timezone = "CST"; }
if ($area_code=="505") { $timezone = "MST"; }
if ($area_code=="507") { $timezone = "CST"; }
if ($area_code=="508") { $timezone = "EST"; }
if ($area_code=="509") { $timezone = "PST"; }
if ($area_code=="510") { $timezone = "PST"; }
if ($area_code=="512") { $timezone = "CST"; }
if ($area_code=="513") { $timezone = "EST"; }
if ($area_code=="515") { $timezone = "CST"; }
if ($area_code=="516") { $timezone = "EST"; }
if ($area_code=="517") { $timezone = "EST"; }
if ($area_code=="518") { $timezone = "EST"; }
if ($area_code=="520") { $timezone = "MST"; }
if ($area_code=="530") { $timezone = "PST"; }
if ($area_code=="540") { $timezone = "EST"; }
if ($area_code=="541") { $timezone = "PST"; }
if ($area_code=="546") { $timezone = "EST"; }
if ($area_code=="551") { $timezone = "EST"; }
if ($area_code=="557") { $timezone = "CST"; }
if ($area_code=="559") { $timezone = "PST"; }
if ($area_code=="561") { $timezone = "EST"; }
if ($area_code=="562") { $timezone = "PST"; }
if ($area_code=="563") { $timezone = "CST"; }
if ($area_code=="564") { $timezone = "PST"; }
if ($area_code=="567") { $timezone = "EST"; }
if ($area_code=="570") { $timezone = "EST"; }
if ($area_code=="571") { $timezone = "EST"; }
if ($area_code=="573") { $timezone = "CST"; }
if ($area_code=="574") { $timezone = "EST"; }
if ($area_code=="580") { $timezone = "CST"; }
if ($area_code=="585") { $timezone = "EST"; }
if ($area_code=="586") { $timezone = "EST"; }
if ($area_code=="601") { $timezone = "CST"; }
if ($area_code=="602") { $timezone = "MST"; }
if ($area_code=="603") { $timezone = "EST"; }
if ($area_code=="605") { $timezone = "EST"; }
if ($area_code=="606") { $timezone = "EST"; }
if ($area_code=="607") { $timezone = "EST"; }
if ($area_code=="608") { $timezone = "CST"; }
if ($area_code=="609") { $timezone = "EST"; }
if ($area_code=="610") { $timezone = "EST"; }
if ($area_code=="612") { $timezone = "CST"; }
if ($area_code=="614") { $timezone = "EST"; }
if ($area_code=="615") { $timezone = "CST"; }
if ($area_code=="616") { $timezone = "EST"; }
if ($area_code=="617") { $timezone = "EST"; }
if ($area_code=="618") { $timezone = "CST"; }
if ($area_code=="619") { $timezone = "PST"; }
if ($area_code=="620") { $timezone = "CST"; }
if ($area_code=="623") { $timezone = "MST"; }
if ($area_code=="626") { $timezone = "PST"; }
if ($area_code=="627") { $timezone = "PST"; }
if ($area_code=="628") { $timezone = "PST"; }
if ($area_code=="630") { $timezone = "CST"; }
if ($area_code=="631") { $timezone = "EST"; }
if ($area_code=="636") { $timezone = "CST"; }
if ($area_code=="641") { $timezone = "CST"; }
if ($area_code=="646") { $timezone = "EST"; }
if ($area_code=="650") { $timezone = "PST"; }
if ($area_code=="651") { $timezone = "CST"; }
if ($area_code=="657") { $timezone = "PST"; }
if ($area_code=="660") { $timezone = "CST"; }
if ($area_code=="661") { $timezone = "PST"; }
if ($area_code=="662") { $timezone = "CST"; }
if ($area_code=="669") { $timezone = "PST"; }
if ($area_code=="678") { $timezone = "EST"; }
if ($area_code=="679") { $timezone = "EST"; }
if ($area_code=="682") { $timezone = "CST"; }
if ($area_code=="689") { $timezone = "EST"; }
if ($area_code=="701") { $timezone = "CST"; }
if ($area_code=="702") { $timezone = "PST"; }
if ($area_code=="703") { $timezone = "EST"; }
if ($area_code=="704") { $timezone = "EST"; }
if ($area_code=="706") { $timezone = "EST"; }
if ($area_code=="707") { $timezone = "PST"; }
if ($area_code=="708") { $timezone = "CST"; }
if ($area_code=="712") { $timezone = "CST"; }
if ($area_code=="713") { $timezone = "CST"; }
if ($area_code=="714") { $timezone = "PST"; }
if ($area_code=="715") { $timezone = "CST"; }
if ($area_code=="716") { $timezone = "EST"; }
if ($area_code=="717") { $timezone = "EST"; }
if ($area_code=="718") { $timezone = "EST"; }
if ($area_code=="719") { $timezone = "MST"; }
if ($area_code=="720") { $timezone = "MST"; }
if ($area_code=="724") { $timezone = "EST"; }
if ($area_code=="727") { $timezone = "EST"; }
if ($area_code=="731") { $timezone = "CST"; }
if ($area_code=="732") { $timezone = "EST"; }
if ($area_code=="734") { $timezone = "EST"; }
if ($area_code=="737") { $timezone = "CST"; }
if ($area_code=="740") { $timezone = "EST"; }
if ($area_code=="747") { $timezone = "PST"; }
if ($area_code=="752") { $timezone = "PST"; }
if ($area_code=="754") { $timezone = "EST"; }
if ($area_code=="757") { $timezone = "EST"; }
if ($area_code=="760") { $timezone = "PST"; }
if ($area_code=="763") { $timezone = "CST"; }
if ($area_code=="764") { $timezone = "PST"; }
if ($area_code=="765") { $timezone = "EST"; }
if ($area_code=="770") { $timezone = "EST"; }
if ($area_code=="772") { $timezone = "EST"; }
if ($area_code=="773") { $timezone = "CST"; }
if ($area_code=="774") { $timezone = "EST"; }
if ($area_code=="775") { $timezone = "PST"; }
if ($area_code=="781") { $timezone = "EST"; }
if ($area_code=="785") { $timezone = "CST"; }
if ($area_code=="786") { $timezone = "EST"; }
if ($area_code=="801") { $timezone = "MST"; }
if ($area_code=="802") { $timezone = "EST"; }
if ($area_code=="803") { $timezone = "EST"; }
if ($area_code=="804") { $timezone = "EST"; }
if ($area_code=="805") { $timezone = "PST"; }
if ($area_code=="806") { $timezone = "CST"; }
if ($area_code=="808") { $timezone = "HST"; }
if ($area_code=="810") { $timezone = "EST"; }
if ($area_code=="812") { $timezone = "EST"; }
if ($area_code=="813") { $timezone = "EST"; }
if ($area_code=="814") { $timezone = "EST"; }
if ($area_code=="815") { $timezone = "CST"; }
if ($area_code=="816") { $timezone = "CST"; }
if ($area_code=="817") { $timezone = "CST"; }
if ($area_code=="818") { $timezone = "PST"; }
if ($area_code=="828") { $timezone = "EST"; }
if ($area_code=="830") { $timezone = "CST"; }
if ($area_code=="831") { $timezone = "PST"; }
if ($area_code=="832") { $timezone = "CST"; }
if ($area_code=="835") { $timezone = "EST"; }
if ($area_code=="836") { $timezone = "EST"; }
if ($area_code=="843") { $timezone = "EST"; }
if ($area_code=="845") { $timezone = "EST"; }
if ($area_code=="847") { $timezone = "CST"; }
if ($area_code=="848") { $timezone = "EST"; }
if ($area_code=="850") { $timezone = "EST"; }
if ($area_code=="856") { $timezone = "EST"; }
if ($area_code=="857") { $timezone = "EST"; }
if ($area_code=="858") { $timezone = "PST"; }
if ($area_code=="859") { $timezone = "EST"; }
if ($area_code=="860") { $timezone = "EST"; }
if ($area_code=="861") { $timezone = "EST"; }
if ($area_code=="862") { $timezone = "EST"; }
if ($area_code=="863") { $timezone = "EST"; }
if ($area_code=="864") { $timezone = "EST"; }
if ($area_code=="865") { $timezone = "CST"; }
if ($area_code=="870") { $timezone = "CST"; }
if ($area_code=="872") { $timezone = "CST"; }
if ($area_code=="878") { $timezone = "EST"; }
if ($area_code=="901") { $timezone = "CST"; }
if ($area_code=="903") { $timezone = "CST"; }
if ($area_code=="904") { $timezone = "EST"; }
if ($area_code=="906") { $timezone = "EST"; }
if ($area_code=="907") { $timezone = "AST"; }
if ($area_code=="908") { $timezone = "EST"; }
if ($area_code=="909") { $timezone = "PST"; }
if ($area_code=="910") { $timezone = "EST"; }
if ($area_code=="912") { $timezone = "EST"; }
if ($area_code=="913") { $timezone = "CST"; }
if ($area_code=="914") { $timezone = "EST"; }
if ($area_code=="915") { $timezone = "CST"; }
if ($area_code=="916") { $timezone = "PST"; }
if ($area_code=="917") { $timezone = "EST"; }
if ($area_code=="918") { $timezone = "CST"; }
if ($area_code=="919") { $timezone = "EST"; }
if ($area_code=="920") { $timezone = "CST"; }
if ($area_code=="925") { $timezone = "PST"; }
if ($area_code=="928") { $timezone = "MST"; }
if ($area_code=="931") { $timezone = "CST"; }
if ($area_code=="935") { $timezone = "PST"; }
if ($area_code=="936") { $timezone = "CST"; }
if ($area_code=="937") { $timezone = "EST"; }
if ($area_code=="940") { $timezone = "CST"; }
if ($area_code=="941") { $timezone = "EST"; }
if ($area_code=="947") { $timezone = "EST"; }
if ($area_code=="949") { $timezone = "PST"; }
if ($area_code=="951") { $timezone = "PST"; }
if ($area_code=="952") { $timezone = "CST"; }
if ($area_code=="954") { $timezone = "EST"; }
if ($area_code=="956") { $timezone = "CST"; }
if ($area_code=="957") { $timezone = "MST"; }
if ($area_code=="959") { $timezone = "EST"; }
if ($area_code=="969") { $timezone = "EST"; }
if ($area_code=="970") { $timezone = "MST"; }
if ($area_code=="971") { $timezone = "PST"; }
if ($area_code=="972") { $timezone = "CST"; }
if ($area_code=="973") { $timezone = "EST"; }
if ($area_code=="975") { $timezone = "CST"; }
if ($area_code=="978") { $timezone = "EST"; }
if ($area_code=="979") { $timezone = "CST"; }
if ($area_code=="980") { $timezone = "EST"; }
if ($area_code=="984") { $timezone = "EST"; }
if ($area_code=="985") { $timezone = "CST"; }
if ($area_code=="989") { $timezone = "EST"; }
if ($area_code=="800") { $timezone = "MST"; }
if ($area_code=="866") { $timezone = "MST"; }
if ($area_code=="888") { $timezone = "MST"; }
if ($area_code=="877") { $timezone = "MST"; }
if ($area_code=="855") { $timezone = "MST"; }
if ($area_code=="844") { $timezone = "MST"; }
	return $timezone;
}

function format_phone($phone = '', $convert = false, $trim = true)
{
	// If we have not entered a phone number just return empty
	if (empty($phone)) {
		return '';
	}
	
	// Strip out any extra characters that we do not need only keep letters and numbers
	$phone = preg_replace("/[^0-9A-Za-z]/", "", $phone);
	
	// Do we want to convert phone numbers with letters to their number equivalent?
	// Samples are: 1-800-TERMINIX, 1-800-FLOWERS, 1-800-Petmeds
	if ($convert == true) {
		$replace = array('2'=>array('a','b','c'),
				 '3'=>array('d','e','f'),
			         '4'=>array('g','h','i'),
				 '5'=>array('j','k','l'),
                                 '6'=>array('m','n','o'),
				 '7'=>array('p','q','r','s'),
				 '8'=>array('t','u','v'),								 '9'=>array('w','x','y','z'));
		
		// Replace each letter with a number
		// Notice this is case insensitive with the str_ireplace instead of str_replace 
		foreach($replace as $digit=>$letters) {
			$phone = str_ireplace($letters, $digit, $phone);
		}
	}
	
	// If we have a number longer than 11 digits cut the string down to only 11
	// This is also only ran if we want to limit only to 11 characters
	if ($trim == true && strlen($phone)>11) {
		$phone = substr($phone, 0, 11);
	}						 
	
	// Perform phone number formatting here
	if (strlen($phone) == 7) {
		return preg_replace("/([0-9a-zA-Z]{3})([0-9a-zA-Z]{4})/", "$1-$2", $phone);
	} elseif (strlen($phone) == 10) {
		return preg_replace("/([0-9a-zA-Z]{3})([0-9a-zA-Z]{3})([0-9a-zA-Z]{4})/", "($1) $2-$3", $phone);
	} elseif (strlen($phone) == 11) {
		return preg_replace("/([0-9a-zA-Z]{1})([0-9a-zA-Z]{3})([0-9a-zA-Z]{3})([0-9a-zA-Z]{4})/", "$1($2) $3-$4", $phone);
	}
	
	// Return original phone if not 7, 10 or 11 digits long
	return $phone;
}
?>