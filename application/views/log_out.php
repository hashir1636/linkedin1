<html>
	<head></head>

	<body>
		<p> <?php echo $this->session->userdata('username'); ?> logged in </p>
		<a href="logout"> <input type="button" value="Log Out" id="logout" name="logout"> </a>
	</body>

</html>