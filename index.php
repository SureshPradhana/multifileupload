//This is the minimal code for an image upload for first time learners
//html portion
<!DOCTYPE html>
<html>
<head>
	<title>ImageUpload</title>
</head>
<body>
	<form action="server.php" method="post" enctype="multipart/form-data">
		<label>Username</label>
		<input type="text" name="username">
		<br>
		<label>UploadImage</label>
		<input type="file" name='myfile[]' multiple>
		<br/>
		<input type="submit" value="upload">
	</form>
</body>
</html>
  