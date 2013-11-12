<html>
	<head>
		<title> My Linked in</title>
		
		<link rel="stylesheet" type="text/css" href="../../assets/css/style1.css">
		<link rel="stylesheet" type="text/css" href="../../assets/css/grid.css">
		<link rel="stylesheet" type="text/css" href="../../assets/css/header.css">
		<link rel="icon" type="image/png" href="../../assets/img/logo.png" />
		<script type="text/javascript" src="../../assets/js/jquery-1.10.1.min.js"> </script>
				
	</head>
	
	<body>
	
		<div class="header">
			<div class="container_12">
            	<div class="grid_2 logo">
                	<img src="../../assets/img/logo3.png">
            	</div>
                <div class="grid_6 header_navigation">
                	<a href="screen3.html"> What is LinkedIn?</a>
                    <a href="load_sign_up_page"> Join Today </a>
                    <a href="load_sign_in_page"> Sign In </a>
            	</div>
            </div>		
		</div>

		<div class="main">
			<div class="container_12">

				<div class="grid_12 incorrect_info"> 
					<img src="../../assets/img/wrong.png"> Please correct the marked field(s) below

				</div>

				
				<?php if( $error_msg != "")
					{
										 	
						echo "<div class='user_already_exists'>";
						echo $error_msg; 
						echo "</div>";
					}


				 ?>

				
				<div class="grid_6 left_div">
					<h1> Over 225 million professionals use LinkedIn to exchange information, ideas and opportunities </h1>
						
						<div class="grid_1">
							<img src="../../assets/img/stay-informed.png">
						</div>

						<div class="grid_4">
							<p> Stay informed about your contacts and industry </p>
						</div>
						
						<div class="grid_1">
							<img src="../../assets/img/find-the-people.png">
						</div>
						<div class="grid_4">
							<p> Find the people & knowledge you need to achieve your goals </p>
						</div>
						<div class="grid_1">
							<img src="../../assets/img/control-your.png">
						</div>
						<div class="grid_4">
							<p> Control your professional identity online </p>
						</div>
				</div>
			

				<div class="grid_5 right_div">
					<?php echo form_open('index.php/join_sign/sign_up'); ?>
					<?php echo validation_errors(); ?>
					<!--form action="join/sign_up" method="post" onSubmit="validate()"-->
						<table>
							<tr>
								<td>
									<label for="firstname"> First Name: </label> 
								</td>
								
								<td>
									<div class="empty_fname"> 
										Please enter first name
									</div>
									
									<input type="text" value="" name="firstname" id="firstname" class="text_box">
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
									<input type="text" value="" name="lastname" id="lastname" class="text_box">
								</td>
							</tr>

							<tr>
								<td>
									<label for="email"> Email-Id: </label>
								</td>
								<td>
									<div class="empty_email">
										Please enter email address	
								    </div>
								    <div class="invalid_email">
								    	Invalid Email Address
								    </div>
									<input type="email" value="" name="email" id="email" class="text_box">
								</td>
							</tr>
							
							<tr>
								<td>
									<label for="password"> Password: </label>
								</td>
								<td>
									<div class="empty_pwd">
										Please enter password
									</div>
									<div class="invalid_pwd">
										Password length should be greater than 5
									</div>
									<input type="password" value="" name="password" id="password" class="text_box">
								</td>
							</tr>

							<tr>
								<td></td>
								<td>
									<p> 6 or more characters </p>
								</td>
							</tr>



							<tr>
								<td></td>
								<td>
									<input type="submit" value="Join Now" id="join_now_button">
									<p style="display:inline;"> * </p>
								</td>
							</tr>

							<tr>
								<td></td>
								<td>
									<p style="margin-top:5px;"> Already on LinkedIn? <a href="load_sign_in_page" style="display:inline;"> Sign in </a> </p>

								</td>
							</tr>
						</table>
					<!/form-->
					<?php echo form_close(); ?>	
				</div>

				<img src="../../assets/img/line.png" class="line line1">

				<div class="search_box">
					
					<div class="search_form grid_12">
						<h3> Search for someone by name: </h3>
						<form>
							<input type="text" value="First Name" name="firstname" id="firstname" class="search_name">
							<input type="text" value="Last Name" name="lastname" id="lastname" class="search_name">
							<input type="submit" value="Go" class="search_button">
						</form>
					</div>


					<p class="member_directory"> LinkedIn member directory: </p>
					<a href="" class="alphabetical_list"> a </a> <a href="" class="alphabetical_list"> b </a> <a href="" class="alphabetical_list"> c </a>
					<a href="" class="alphabetical_list"> d </a> <a href="" class="alphabetical_list"> e </a> <a href="" class="alphabetical_list"> f </a>
					<a href="" class="alphabetical_list"> g </a> <a href="" class="alphabetical_list"> h </a> <a href="" class="alphabetical_list"> i </a>
					<a href="" class="alphabetical_list"> j </a> <a href="" class="alphabetical_list"> k </a> <a href="" class="alphabetical_list"> l </a>
					<a href="" class="alphabetical_list"> m </a> <a href="" class="alphabetical_list"> n </a> <a href="" class="alphabetical_list"> o </a>
					<a href="" class="alphabetical_list"> p </a> <a href="" class="alphabetical_list"> q </a> <a href="" class="alphabetical_list"> r </a>
					<a href="" class="alphabetical_list"> s </a> <a href="" class="alphabetical_list"> t </a> <a href="" class="alphabetical_list"> u </a>
					<a href="" class="alphabetical_list"> v </a> <a href="" class="alphabetical_list"> w </a> <a href="" class="alphabetical_list"> x </a>
					<a href="" class="alphabetical_list"> y </a> <a href="" class="alphabetical_list"> z </a> <a href="" class="alphabetical_list"> more </a>

					<p align="center" class="browse_members"> Browse Members </p>
					<a href="" class="country_list"> by country </a>

					<img src="../../assets/img/line.png" class="line line2">

					<p class="user_agreement_link"> * By joining linkedin, you agree to LinkedIn's <a class="policy" href="screen9.html"> User Agreement </a> <p class="cooma">,</p> <a class="policy privacy_policy" href=""> Privacy Policy </a> <p class="and"> and </p> <a class="policy cookie_policy" href=""> Cookie Policy </a></p>
				</div>

				<img src="../../assets/img/line.png" class="line line3">

			</div>
		</div>

		<div class="footer">
			<div class="container_12">
				
				<div class="grid_12">
					<a href=""> <strong> Help Center </strong> </a> | <a href=""> About </a> | <a href=""> Press </a> | <a href=""> Blog </a> | <a href=""> Careers </a> | <a href=""> Advertising </a> | <a href=""> Talent Solutions </a> | <a href=""> Tools </a> | <a href=""> Mobiles </a> | <a href=""> Developers </a> | <a href=""> Publishers </a> | <a href=""> Language </a> | <a href=""> SlideShare </a>
				</div>

				<div class="grid_12">
					<a href="">  LinkedIn Updates </a> | <a href=""> LinkedIn Influencers </a> | <a href=""> LinkedIn Jobs </a> | <a href=""> Job Directory </a> | <a href=""> Company Directory </a> | <a href=""> Groups Directory </a> | <a href=""> Title Directory </a> 
				</div>

				<div class="grid_12">
					<div class="grid_2">
						<img src="../../assets/img/footer_logo.png" class="footer_logo">
					</div>
					<div class="grid_10 last_links"> 
						|<a href="">  User Policy </a> | <a href=""> LinkedIn Influencers </a> | <a href="">  Community Guidlines </a> | <a href=""> Cookie Policy </a> | <a href=""> Copyright Policy </a>
					</div>
				</div>
				

			</div>
		</div>
	</body>

	<script type="text/javascript">

	$(document).ready(function(){

		$(".incorrect_info").hide();
		$(".empty_fname").hide();
		$(".empty_lname").hide();
		$(".empty_email").hide();
		$(".empty_pwd").hide();
		$(".invalid_email").hide();
		$(".invalid_pwd").hide();

		$("#join_now_button").click(function(){

			$(".incorrect_info").hide();
			$(".empty_fname").hide();
			$(".empty_lname").hide();
			$(".empty_email").hide();
			$(".empty_pwd").hide();
			$(".invalid_email").hide();
			$(".invalid_pwd").hide();

			var fname = $('#firstname').val();
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
					$(".right_div").addClass('new_form');
					$(".incorrect_info").show();
					$(".empty_fname").show();

				}

				else if(var1 == 2)
				{
					$(".right_div").addClass('new_form');
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
					$(".right_div").addClass('new_form');
					$(".incorrect_info").show();
					$(".invalid_email").show();
				}

				else if (var1 == 5) 
				{
					$(".right_div").addClass('new_form');
					$(".incorrect_info").show();
					$(".empty_pwd").show();
				}

				else if(var1 == 6)
				{
					$(".right_div").addClass('new_form');
					$(".incorrect_info").show();
					$(".invalid_pwd").show();
				}

				event.preventDefault();
			}

	});
	
		
	


		/*function validate()
		{

			var fname = $("#firstname").val();
			var lname = $("#lastname").val();
			var email_id = $("#email").val();
			var pwd = $("#password").val();

			$(".right_div").addClass('new_form');
			//$(".text_box").addClass('text_box_border');

			if( fname == "" )
			{
				$(".validation").addClass("incorrect_info");
				$(".validation").html("<img src='../../assets/img/wrong.png'> Please correct the marked field(s) below ");
				
				//$(".hello").removeClass("validation");
				//$(".validation").html("<div class='incorrect_info'> <img src='assets/img/wrong.png'> <p> Please correct the marked field(s) below </p> </div>");
				//$(".wth").addClass("error");
				$(".empty_fname").html("<div class='empty'> Please enter a first name </div>");
				//alert("First Name field can not be left empty!");
				//$("#lastname").val(lname);
				//$("#email").val(email_id);
				//$("#password").val(pwd);
				event.preventDefault();
				//event.ImmediatePropagation();
				
				
			}



			if( lname == "")
			{
				
				$(".validation").addClass("incorrect_info");
				$(".validation").html("<div class='incorrect_info'> Please correct the marked field(s) below </div>");
				$(".empty_lname").html("<div class='empty'> Please enter a last name </div>");
				//alert("Last Name field can not be left empty!");
				$("#firstname").val(fname);
				//$("#email").val(email_id);
				//$("#password").val(pwd);
				event.preventDefault();
				//event.ImmediatePropagation();

				
			}

			if( email_id == "")
			{
				$(".validation").html("<div class='incorrect_info'> Please correct the marked field(s) below </div>");
				$(".empty_email").html("<div class='empty'> Please enter email-id </div>");
				//alert("Email-Id field  can not be left empty!");
				//$("#firstname").val(fname);
				//$("#lastname").val(lname);
				//$("#password").val(pwd);
				event.preventDefault();
				//event.ImmediatePropagation();
			}

			if( pwd == "")
			{
				$(".validation").html("<div class='incorrect_info'>  Please correct the marked field(s) below </div>");
				$(".empty_pwd").html("<div class='empty'> * Please enter password </div>");
				//alert("Password field can not be left empty!");
				//$("#firstname").val(fname);
				//$("#lastname").val(lname);
				//$("#email").val(email_id);
				event.preventDefault();
				//event.ImmediatePropagation();
			}

			

			return true;
		

		}*/


		
		</script>

</html>