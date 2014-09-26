<?php
// Require the Authority Labs library
require_once("assets/includes/authlabs.php");
$authlabs = new Authoritylabspartner();
$auth_token = "91Sk3rs68dXmWOmMtdAn";
$industry = (int)$_GET['industry'];
$keyword = urldecode($_GET['keyword']);

$url = $_POST['json_callback'];
$result = $authlabs->parseRanks($url, $auth_token, $industry, $keyword);
foreach ($result as $lead) {
	file_put_contents('leads.log', $lead . "\n", FILE_APPEND);
}
?>