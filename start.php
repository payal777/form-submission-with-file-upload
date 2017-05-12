<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
	<body>
            <p>Welcome:<?php echo $_POST['yourname'];?></p><br/>
            <form action="submit.php" method="post" enctype="multipart/form-data">
                <p>Please fill the following details:</p>
			<p>Email:<input type="email" name="email"/><span class="error">* <?php echo $emailErr;?></span></p>
            <p>Mobile No:<input type="number" name="mobileno"/><span class="error">* <?php echo $mobileErr;?></span></p>
			<p>Highest Qualification:<input type="text" name="qualification"/><span class="error">* <?php echo $qualificationErr;?></span></p>
			<p>Address:</p> <textarea name="address" rows="5" cols="40"></textarea>
			<p>Select image to upload:</p>
			<input type="file" name="image" id="image">
			<p><input type="submit" value="submit"></p>
            </form>
	</body>
</html>