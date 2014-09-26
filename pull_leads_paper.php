<?php
include('assets/includes/database.php');
include('assets/includes/header.php');
include('assets/includes/sidebar.php');
$paper_id = (int)$_GET['id'];
$query = "select * from newspapers where id=$paper_id";
$result = mysqli_query($database, $query);
$paper = mysqli_fetch_array($result);

$paper_result = mysqli_query($database, "select * from leads where newspaper=$paper_id");
$lead_count = mysqli_num_rows($paper_result);	
?>
		<section id="left">
			<article class="post">
				<header><h1 class="post-title">Pull leads: <?php echo $paper[name]; ?></h1>
				<div class="post-published"><strong><?php echo $lead_count; ?></strong> leads remaining</div>
				</header>
				<div class="post-content">
				<p>
<form id="form" action="pull_leads_post.php" method="POST">
			<input type="hidden" name="paper_id" value="<?php echo $paper_id; ?>">
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