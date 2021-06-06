<?php
	include_once "header.php";
?>
	
	<section class="uploadpage_section">
		<div class="upload_border">

			<form method="post" action="include/upload.inc.php" enctype="multipart/form-data">
				<div class="post_upload">
					<input type="file" name="real_file_button" id="real_file_upload_button" hidden="hidden"><br/>
					<div class="file_upload_section">
						<button type="button" class="custom_button" id="custom_file_button" name="file_button">Choose File</button>
						<span class="custom_text" id="custom_file_text">No file choosen.</span><br/>
					</div>
					<input  class="post_title_upload" type="text" name="post_title" placeholder="Title" >
				</div>
				<button type="submit" name="upload_button" class="real_submit_button">Submit</button>
				<p>.jpg, .jpeg, .png file formats are allowed</p>

			</form>
			<?php
				if (isset($_GET["status"])) {
					if ($_GET["status"] == "uploadsuccess") {
						echo "Uploaded the file succesfuly";
					}
				}
			?>

			<script type="text/javascript">
				const realFileButton = document.getElementById("real_file_upload_button");
				const custButton = document.getElementById("custom_file_button");
				const custText = document.getElementById("custom_file_text");

				custButton.addEventListener("click" , function(){
					realFileButton.click();
				});

				realFileButton.addEventListener("change" , function(){
					if(realFileButton.value){
						custText.innerHTML = realFileButton.value;
					}else{
						custText.innerHTML = "No file choosen. yet";
					}
				});
			</script>
		</div>
	</section>

<?php
	include_once "footer.php";
?>