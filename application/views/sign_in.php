<html>

	<head>
		<link rel="stylesheet" type="text/css" href="../../assets/css/style3.css">
		<link rel="stylesheet" type="text/css" href="../../assets/css/style5.css">
		<link rel="stylesheet" type="text/css" href="../../assets/css/grid.css">
		<link rel="stylesheet" type="text/css" href="../../assets/css/header.css">
	</head>

	<body>

		<div class="header">
			<div class="container_12">
            	<div class="grid_2 logo">
                	<img src="../../assets/img/logo3.png">
            	</div>
                <div class="grid_6 header_navigation">
                	<a href="screen3.html"> What is LinkedIn?</a>
                    <a href="screen4.html"> Join Today </a>
                    <a href=""> Sign In </a>
            	</div>
            </div>		
		</div>

		<div class="container_12">
			
			<div class="heading">
				<h2> Sign in to LinkedIn </h2>
			</div>
			
			<div class="main"> 
				<?php echo form_open('index.php/join_sign/login_validation'); ?>
				<?php echo validation_errors(); ?>
				<?php echo $this->session->userdata('username'); ?>

					<table>
						<tr>
							<td> <label for="email"> Email address: </label> </td>
							<td> <input type="email" value="" name="email_id" id="email_id"> </td>
						</tr>

						<tr>
							<td> <label for="password"> Password: </label> </td>
							<td> <input type="password" value="" name="password" id="password"> </td>
							<td> <a class="forgot_password" href=""> Forget password? </a> </td>
						</tr>

						<tr>
							<td></td>
							<td> <input type="submit" value="Sign In" id="sign_in_button"> or <a href=""> Join LinkedIn </a> </td>

						</tr>

					</table>
				<?php echo form_close(); ?>
				
			</div>	<!--end of main div-->
		</div>	<!--end of container_12 main-->
	
		<div class="footer">
			<div class="container_12">
				<img src="../../assets/img/line.png">
			<div class="footer_nav grid_10">
				<img src="../../assets/img/gray_footer_logo.png">
				|<a href="">  User Agreement </a> | <a href=""> Privacy Policy </a> | <a href="">  Community Guidlines </a> | <a href=""> Cookie Policy </a> | <a href=""> Copyright Policy </a>
			</div>
				
			</div>
		</div>

	</body>

</html>