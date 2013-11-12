<html>
	
	<head>
		<!--link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.css"-->
		<link rel="stylesheet" type="text/css" href="../../assets/css/style4.css">
		<link rel="stylesheet" type="text/css" href="../../assets/css/grid.css">
		<script type="text/javascript" src="../../assets/js/jquery-1.10.1.min.js"></script>
		
	</head>

	<body>
		
		<div class="header">
			<div class="container_12">
				<div class="grid_2 logo">
					<img src="../../assets/img/linkedin-logo.png">
				</div>
				<div grid_4>
					<p> Already on LinkedIn? <a href="load_sign_in_page"> Sign in </a> </p>
				</div>
			</div>
		</div>

		<div class="container_12">
			<div class="main">
				<div class="grid_10 sign_up_logo">
					<img src="../../assets/img/join-in-logo.png">
				</div>

				<div class="grid_6 left_div">
					<?php echo form_open('index.php/join_sign/sign_up'); ?>
						<table>
							<tr>
								<td>
									<label for="firstname"> First Name: </label>
								</td>
								<td>
									<div class="empty_fname"> 
										Please enter first name
									</div>
									<input type="text" name="firstname" value="" id="fisrtname" onclick="change_border_color();">
								</td>
							</tr>

							<tr>
								<td>
									<label for="lastname"> Last Name: </label>
								</td>
								<td>
									<div class="empty_lname">
										Please enter last name
								    </div>
									<input type="text" name="lastname" value="" id="lastname">
								</td>
							</tr>

							<tr>
								<td>
									<label for="email"> Email: </label>
								</td>
								<td>
									<div class="empty_email">
										Please enter email address	
								    </div>
								    <div class="invalid_email">
								    	Invalid Email Address
								    </div>
									<input type="email" name="email value="" id="email">
								</td>
							</tr>

							<tr>
								<td>
									<label for="password"> New Password: </label>
								</td>
								<td>
									<div class="empty_pwd">
										Please enter password
									</div>
									<div class="invalid_pwd">
										Password length not right
									</div>
									<input type="text" name="password" value="" id="password">
								</td>
							</tr>	
							<tr>
								<td></td>
								<td>
									<p>6 or more characters</p>
								</td>	
							</tr>

							<tr>
								<td></td>
								<td>
									<input type="submit" value="Join LinkedIn" id="join_linkedin_button">
									<p class="star"> * </p>
								</td>	
							</tr>

							<tr>
								<td></td>
								<td> <p class="already"> Already on LinkedIn? <a href="screen5.html" class="sign_in"> Sign in </a> </p> </td>
							</tr>

						</table>
					<?php echo form_close(); ?>

				</div><!--end of left_div-->
			
				<div class="grid_1 line"></div>

				<div align="center" class="grid_3 right_div">
					<img src="../../assets/img/text1.png">
					<a href=""> <img src="../../assets/img/fb-link.png"> </a>
				</div>

				<div class="horizobtal_line"></div>

				<div class="grid_8 policy">
					 <p id="agree"> * By joining linkedin, you agree to LinkedIn's
					 	<a href=""> User Agreement </a> ,
					 	<a href=""> Privacy Policy </a> and
					 	<a href=""> Cookie Policy </a>
					 </p>	
				</div>
			
			</div>
		</div>

		<div class="footer">
			<div class="container_12">
				
					<img class="grid_7 corporation-logo" src="../../assets/img/corporation-logo.png">  
			</div>
		</div>



	</body>

	<script type="text/javascript">

	$(document).ready(function(){

		//$(".incorrect_info").hide();
		$(".empty_fname").hide();
		$(".empty_lname").hide();
		$(".empty_email").hide();
		$(".empty_pwd").hide();
		$(".invalid_email").hide();
		$(".invalid_pwd").hide();

		$("#join_linkedin_button").click(function(){

			//$(".incorrect_info").hide();
			$(".empty_fname").hide();
			$(".empty_lname").hide();
			$(".empty_email").hide();
			$(".empty_pwd").hide();
			$(".invalid_email").hide();
			$(".invalid_pwd").hide();

			var fname = $("#firstname").val();
			var lname = $("#lastname").val();
			var email_id = $("#email").val();
			var pwd = $("#password").val();

					
			if (fname == "") 
			{
				validate(1);
				/*$(".right_div").addClass('new_form');
				$(".incorrect_info").show();
				$(".empty_fname").show();*/
				
			}

			if (lname == "") 
			{
				validate(2);
				/*$(".incorrect_info").show();
				$(".empty_lname").show();*/
			}

			if (email_id == "") 
			{
				validate(3);
				/*$(".incorrect_info").show();
				$(".empty_email").show();*/
			}

			var pattern=new RegExp(/^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i);
			
			if(email_id.length != 0 && !pattern.test(email_id))
			{
				validate(4);
				/*$(".incorrect_info").show();
				$(".invalid_email").show();*/
			}

			if (pwd == "") 
			{
				validate(5);
				/*$(".incorrect_info").show();
				$(".empty_pwd").show();*/

			}

			if( pwd.length > 0 && pwd.length < 6 )
			{
				validate(6);
				/*$(".incorrect_info").show();
				$(".invalid_pwd").show();*/
			}


			 });

			function validate(var1)
			{

				if(var1 == 1)
				{
					
					$(".incorrect_info").show();
					$(".empty_fname").show();

				}

				else if(var1 == 2)
				{
					$(".incorrect_info").show();
					$(".empty_lname").show();
				}

				else if(var1 == 3)
				{
					$(".incorrect_info").show();
					$(".empty_email").show();		
				}

				else if(var1 == 4)
				{
					$(".incorrect_info").show();
					$(".invalid_email").show();
				}

				else if (var1 == 5) 
				{
					$(".incorrect_info").show();
					$(".empty_pwd").show();
				}

				else if(var1 == 6)
				{
					$(".incorrect_info").show();
					$(".invalid_pwd").show();
				}

				event.preventDefault();
			}

	});
	
	</script>
</html>