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
<form id="form" action="pull_leads_post.php" method="POST">
<select name="timezone">
<option value="" disabled selected>Select timezone</option>
<option value="PST">PST (<?php $result = mysqli_query($database, "SELECT * FROM leads where timezone='PST'"); $row_cnt = mysqli_num_rows($result); echo $row_cnt; ?>)</option>
<option value="MST">MST (<?php $result = mysqli_query($database, "SELECT * FROM leads where timezone='MST'"); $row_cnt = mysqli_num_rows($result); echo $row_cnt; ?>)</option>
<option value="CST">CST (<?php $result = mysqli_query($database, "SELECT * FROM leads where timezone='CST'"); $row_cnt = mysqli_num_rows($result); echo $row_cnt; ?>)</option>
<option value="EST">EST (<?php $result = mysqli_query($database, "SELECT * FROM leads where timezone='EST'"); $row_cnt = mysqli_num_rows($result); echo $row_cnt; ?>)</option>
<option value="ANY">Any (<?php $result = mysqli_query($database, "SELECT * FROM leads"); $row_cnt = mysqli_num_rows($result); echo $row_cnt; ?>)</option>
</select>
<select name="industry">
<option value="" disabled selected>Select industry/category</option>
<?php
	$total_leads = 0;
	$query = "select * from industries ORDER by industry ASC";
	$result = mysqli_query($database, $query);
	while ($industry = mysqli_fetch_array($result)) {
		$query = "select * from leads WHERE industry=$industry[id]";
		$count = mysqli_query($database, $query);
		$lead_count = mysqli_num_rows($count);
		$total_leads = $total_leads + $lead_count;
		echo "<option value=\"" . $industry[id] . "\">$industry[industry] ($lead_count)</option>>";
	}
	echo "<option value=\"ANY\">Any ($total_leads)</option>>";
?>
</select>
			<input name="number_leads" value="" placeholder="Enter Number of Leads to Pull" type="text" class="required digits">
			<input value="Pull Leads" type="submit">
			</form>
				</p>
				</div>
			</article>
		</section>
	</section>
<script type="text/javascript" charset="utf-8">
$(function () 
{
	$("#form").validate();
});
</script>
<?php include('assets/includes/footer.php'); ?>