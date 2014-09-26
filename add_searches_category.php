<?php
include('assets/includes/database.php');
include('assets/includes/header.php');
include('assets/includes/sidebar.php');
$category = (int)$_GET['category'];
$query = "select * from industries where id=$category";
$result = mysqli_query($database, $query);
$industry = mysqli_fetch_array($result);
?>
		<section id="left">
			<article class="post">
				<header><h1 class="post-title">Submit Searches: <?php echo $industry[industry]; ?></h1></header>
				<div class="post-content">
				<p>
				<form id="form" action="add_leads_post.php" method="POST">
				<input type="hidden" name="id" value="<?php echo $category; ?>">
				<div id="p_scents">
					<label for="cities"><textarea id="cities" name="cities" value="" style="height: 120px;" placeholder="Enter cities here"></textarea></label>
				</div>
				<div id="p_scents">
					<label for="keywords"><textarea id="keywords" name="keywords" value="" style="height: 120px;" placeholder="Enter keywords here"></textarea></label>
				</div>				
				<input value="Submit Leads" type="submit">
				</form>
				</p>
				</div>
			</article>
		</section>
	</section>
<?php include('assets/includes/footer.php'); ?>