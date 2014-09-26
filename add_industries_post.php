<?php
include('assets/includes/database.php');
include('assets/includes/header.php');
include('assets/includes/sidebar.php');

$post_name = $_POST['name'];
$post_name = stripslashes($post_name);
$post_name = mysqli_real_escape_string($database, $post_name);
?>
		<section id="left">
			<article class="post">
				<header><h1 class="post-title">Add Category</h1></header>
				<div class="post-content">
				<p>
					<?php 
						if ($post_name == "") { echo "<span style=\"color:red;\"><strong>Error</strong>: Please enter a category name.</span>"; exit(); }
						else {
							//State selected, do stuff!
							$query = "INSERT into industries (industry) VALUES('$post_name')";
							//echo $query;
							$result = mysqli_query($database, $query);
							mysqli_free_result($result);
							echo "Category <strong>$post_name</strong> added successfully!";					
						}
					?>
				</p>
				</div>
			</article>
		</section>
	</section>

<?php include('assets/includes/footer.php'); ?>