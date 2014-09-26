<?php
$conn_stats = mysqli_get_connection_stats($database);
$sql_bytes_sent = $conn_stats['bytes_sent'];
$sql_bytes_received = $conn_stats['bytes_received'];
?>
	<footer id="blog-foot">
		<span class="blog-footer"><a class="top" href="#">Top</a></span>
		<span class="blog-footer"> · <strong>Sent:</strong> <?php echo $sql_bytes_sent; ?> <strong>Received:</strong> <?php echo $sql_bytes_received; ?></span>
		<script>
		$(".top").click(function(){
			$("html, body").animate({ scrollTop: 0 }, 600);
			return false;
		});
		</script>
	</footer>

</div>
</body>
</html>
<?php mysqli_close($database); ?>