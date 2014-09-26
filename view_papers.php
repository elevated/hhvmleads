<?php
include('assets/includes/database.php');
include('assets/includes/header.php');
include('assets/includes/sidebar.php');
?>
		<section id="left">
<div style="border-left: 4px solid #71D161; padding-left: 10px;"><strong>Select a newspaper below to begin pulling leads</strong></div>
<?php
	$query = "select * from states";
	$result = mysqli_query($database, $query);
	while ($state = mysqli_fetch_array($result)) {
?>
<article class="post">
<header><h1 class="post-title"><?php echo $state['long_spelling']; ?></h1></header>
<div class="post-content">
<?php
$state_query = "select * from newspapers where state=$state[id]";
$state_result = mysqli_query($database, $state_query);
$state_count = mysqli_num_rows($state_result);
if ($state_count == 0) { echo "<ul><li><span style=\"color:red;\">No newspapers yet.</span></li></ul></div></article>"; }
else {
	echo "<ul>"; 
	while ($paper = mysqli_fetch_array($state_result)) {
		$paper_result = mysqli_query($database, "select * from leads where newspaper=$paper[id]");
		$lead_count = mysqli_num_rows($paper_result);		
?>
<li><a href="pull_leads_paper.php?id=<?php echo $paper[id]; ?>"><?php echo $paper[name]; ?> <strong>(<?php echo $lead_count; ?> leads)</strong></a></li>
<?php 
	}
	echo "</ul></div></article>";
}
	}
?>
		</section>
	</section>
<?php include('assets/includes/footer.php'); ?>