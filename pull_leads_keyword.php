<?php
include('assets/includes/database.php');
include('assets/includes/header.php');
include('assets/includes/sidebar.php');
?>
		<section id="left">
			<article class="post">
				<header><h1 class="post-title">Pull Leads</h1></header>
				<div class="post-content">
				<p>
<div style="border-left: 4px solid #71D161; padding-left: 10px;"><strong>Note:</strong> This option will pull <u>all</u> leads for the search term you select.</div><br /><br />
<?php
	$query = "SELECT DISTINCT keyword FROM leads ORDER BY keyword ASC";
	$result = mysqli_query($database, $query);
	while ($keyword = mysqli_fetch_array($result)) {
		$query = "select * from leads WHERE keyword='$keyword[keyword]'";
		$count = mysqli_query($database, $query);
		$lead_count = mysqli_num_rows($count);
		$urlkeyword = urlencode($keyword[keyword]);
		echo "<a href=\"pull_leads_post.php?keyword=$urlkeyword\">$keyword[keyword] ($lead_count)</a><br />";
	}
?>
				</p>
				</div>
			</article>
		</section>
	</section>
<?php include('assets/includes/footer.php'); ?>