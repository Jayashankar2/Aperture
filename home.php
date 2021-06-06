<?php
	session_start();
	include_once "header.php";
?>
	
	<section class="homefeed_section">
		<div class="post_container">
			<div class="post_header">
				<img src="image/useridimg.jpg">
				<?php
					echo "<p>" . $usersUid . "</p>";
				?>
			</div>
			<div class="post_body">
				<p>Post Title/description</p>
				<img src="image/background.jpg">
			</div>
			<div class="post_footer">
				<p>Like</p>
				<p>Dislike</p>
				<p>Comment</p>
			</div>
		</div>
	</section>
	<section class="homefeed_section">
		<div class="post_container">
			<div class="post_header">
				<img src="image/useridimg.jpg">
				<?php
					echo "<p>" . $usersUid . "</p>";
				?>
			</div>
			<div class="post_body">
				<p>Post Title/description</p>
				<img src="image/img2.jpg">
			</div>
			<div class="post_footer">
				<p>Like</p>
				<p>Dislike</p>
				<p>Comment</p>
			</div>
		</div>
	</section>

<?php
	include_once "footer.php";
?>