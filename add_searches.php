<?php
include('assets/includes/database.php');
include('assets/includes/header.php');
include('assets/includes/sidebar.php');
?>
		<section id="left">
		<article class="post">
<header><h1 class="post-title">Submit Searches: Select Category</h1></header>
<div class="post-content">
<div style="border-left: 4px solid #71D161; padding-left: 10px;"><strong>Select a category below to begin submitting searches</strong></div>
<ul>
<?php
	$query = "select * from industries ORDER by industry ASC";
	$result = mysqli_query($database, $query);
	while ($industry = mysqli_fetch_array($result)) {
		echo "<li><a href=\"add_searches_category.php?category=" . $industry[id] . "\">$industry[industry]</a></li>";
?>

<?php } ?>
</ul>
		</section>
	</section>
<?php include('assets/includes/footer.php'); ?>