<?php
include('assets/includes/database.php');
include('assets/includes/header.php');
include('assets/includes/sidebar.php');
?>
		<section id="left">
			<article class="post">
				<header><h1 class="post-title">Add Category</h1></header>
				<div class="post-content">
				<p>
<form id="form" action="add_industries_post.php" method="POST">
<!--<select name="state">
<option value="" disabled selected>Select newspaper state</option>
<?php
/*	$query = "select * from states";
	$result = mysqli_query($database, $query);
	while ($state = mysqli_fetch_array($result)) {
		echo "<option value=\"$state[id]\">$state[long_spelling]</option>\n";
	} */
?>
</select> 	-->
			<input name="name" value="" placeholder="Enter Industry/Category" type="text" class="required">
			<input value="Add Category" type="submit">
			</form>
				</p>
				</div>
				<footer><div class="post-tags"><ul><li><span class="tag" href="#"><strong>Warning:</strong> Categories are not checked for duplicates. Please check the categories first to make sure you're not adding a duplicate.</span></li></ul></div></footer>
				<header><h1 class="post-title">Existing Categories</h1></header>
<ul>
<?php
	$query = "select * from industries ORDER by industry ASC";
	$result = mysqli_query($database, $query);
	while ($industry = mysqli_fetch_array($result)) {
		echo "<li>$industry[industry]</li>\n";
	}
?>
</ul>
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