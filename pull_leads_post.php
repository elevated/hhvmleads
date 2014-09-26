<html>
<head>
<title>LEADS</title>
<style>
* {
font-family: Tahoma, Verdana, Arial;
}
#tr {
	height: 200px;
	overflow: hidden;
}
.left {
width: 50%;
height: 100px;
overflow: hidden;
text-overflow: ellipsis;
border-bottom: 1px dotted black;
border-right: 1px dotted black;
vertical-align: top;
}
.right {
width: 50%;
height: 100px;
overflow: hidden;
text-overflow: ellipsis;
border-bottom: 1px dotted black;
vertical-align: top;
}
.box {
	text-overflow:ellipsis;
	overflow:hidden;
	height: 100px;
	width: 100%;
	margin-left: 3px;
}
</style>
</head>
<body onload="javascript:window.print()">
<table>
<?php
//print_r($_POST); exit();
include('assets/includes/database.php');
$number_leads = (int)$_POST['number_leads']; /* Required for all */

/* Timezone query */
$timezone = $_POST['timezone'];
$industry = $_POST['industry'];
if ($timezone != "") {
	if ($timezone == "ANY") { $timezone_string = ""; }
	else { $timezone_string = "WHERE timezone='$timezone'"; }
	if ($industry == "ANY") { $industry_string = ""; }
	else if ($timezone == "ANY") { $industry_string = "WHERE industry='$industry'"; }
	else { $industry_string = "AND industry='$industry'"; }
	$query = "select * from leads $timezone_string $industry_string ORDER BY RAND() LIMIT $number_leads";
	$result = mysqli_query($database, $query);
}

/* Search query */
$search = $_POST['search'];
if ($search != "") {
	if ($industry == "ANY") { $industry_string = ""; }
	else { $industry_string = "AND industry='$industry'"; }
	$query = "select * from leads WHERE keyword LIKE '%%$search%%' $industry_string ORDER BY RAND() LIMIT $number_leads";
	$result = mysqli_query($database, $query);
}

/* Keyword $_GET query */
$keyword = $_GET['keyword'];
if ($keyword != "") {
	$keyword = stripslashes($keyword);
	$keyword = mysqli_real_escape_string($database, $keyword);
	$query = "select * from leads WHERE keyword='$keyword' ORDER BY RAND()";
	$result = mysqli_query($database, $query);
}


while ($lead = mysqli_fetch_assoc($result)) {
$timezone = $lead['timezone'];
$newspaper = $lead['newspaper'];
$state = $lead['state'];

$text = $lead['text'];
$text = strip_tags($text);
$text = preg_replace("/[^ \w]+/", " ", $text);
$text = preg_replace('/\\s+/', ' ', $text);

$phone_numbers = explode(",", $lead['phone_numbers']);
$numbers = array();
foreach ($phone_numbers as $number) {
	$numbers[] = format_phone($number);
}

$numbers = implode(", ", $numbers);

$industry_result = mysqli_query($database, "select * from industries where id=$lead[industry]");
$industrysql = mysqli_fetch_array($industry_result);
$industry_name = $industrysql['industry'];

echo "<tr>";
echo "<td class=\"left\"><div class=\"box\">";
echo "<strong>" . $lead['domain'] . "</strong> ($timezone)<br />";
echo "<strong>Page: </strong> $lead[current_page] <strong>Type:</strong> $industry_name <strong>PR:</strong> $lead[pagerank]<br />";
echo $numbers . "<br />";

echo "</div></td>";
echo "<td class=\"right\"><div class=\"box\">";
echo "<strong>Search term: </strong>" . $lead['keyword'] . "<br />";
echo "<strong>Title tag: </strong>" . $lead['title'];
echo "</div></td>";
echo "</tr>";

mysqli_query($database, "DELETE from leads where id=$lead[id]"); //Delete the lead, we pulled it!
}
?>
</table>
</html>