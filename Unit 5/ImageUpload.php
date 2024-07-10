<form action="<?php $_PHP_SELF ?>" method="POST" enctype="multipart/form-data">
	<input type="file" name="image">
	<input type="submit" name="submit">
</form>

<?php
	$file_name="";
	if(isset($_POST['submit'])){
		if(isset($_FILES['image'])){
			$file_name = $_FILES['image']['name'];
			$file_size = $_FILES['image']['size'];
			$file_tmp = $_FILES['image']['tmp_name'];
			$file_type = $_FILES['image']['type'];
			$path = "/Images" . $file_name;
			move_uploaded_file($file_tmp, $path);
			echo "<br>file = " . $file_name;
		}
	}
?>
