<?php
include('assets/includes/authlabs.php');
include('assets/includes/database.php');
include('assets/includes/header.php');
include('assets/includes/sidebar.php');
$industry = (int)$_POST['id'];
$query = "select * from industries where id=$industry";
$result = mysqli_query($database, $query);
$industry = mysqli_fetch_array($result);

/* Authority labs setup */
$authlabs = new Authoritylabspartner();
$auth_token = "91Sk3rs68dXmWOmMtdAn";
$callback_file = "http://ibizlocal.net/google.leads/callback.php";
$cities = trim($_POST['cities']);
$cities = explode("\n", $cities);
$keywords = trim($_POST['keywords']);
$keywords = explode("\n", $keywords);
?>
		<section id="left">
			<article class="post">
				<header><h1 class="post-title">Add leads: <?php echo $industry[industry]; ?></h1></header>
				<div class="post-content">
					<p><?php
		foreach ($cities as $city) {
			foreach ($keywords as $keyword) {
		$keyword = "$city $keyword";
		$value = $keyword;
		$url_keyword = urlencode($value);
		$callback_url = $callback_file . "?industry=$industry[id]&keyword=$url_keyword";
		$result = $authlabs->priorityPartnerKeyword($keyword, $auth_token, "google", "en-US", "false", $callback_url);
		$authlabs_response = $result->{'response_code'};
		if ($authlabs_response == '200') {
			echo "<div style=\"border-left: 4px solid #71D161; padding-left: 10px;\"><strong>Queued:</strong> Scraping Google for <strong>$keyword</strong></div><br /><br />";
		}
		else {
			echo "<div style=\"border-left: 4px solid #FF0000; padding-left: 10px;\"><strong>Error:</strong> Unable to submit $keyword to scraper</strong></div><br /><br />";
		}
	}
}
?>
<h2 style="color: #71D161;">Leads will be automatically processed in 5-10 minutes</h2>
</p>
				</div>
			</article>
		</section>
	</section>
<?php include('assets/includes/footer.php'); ?>