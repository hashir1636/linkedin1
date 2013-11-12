<html>
	
	<head>
		<link rel="stylesheet" type="text/css" href="../../assets/css/step1.css">
		<link rel="stylesheet" type="text/css" href="../../assets/css/grid.css">
		<script type="text/javascript" src="../../assets/js/jquery-1.10.1.min.js"></script>
			
	</head>

	<body>
		
		<div class="header">
			<div class="container_12">
				<div class="grid_2 logo">
					<img src="../../assets/img/linkedin-logo.png">
				</div>
			</div>
		</div>

		<div class="container_12">
			<div class="main">
				<div class="grid_10 sign_up_user_msg">
					<p class="sign_up_user"> <?php echo ucfirst($this->session->userdata('fname')).","; ?> </p> let's start creating your professional profile
				</div>

				<div class="horizobtal_line"></div>

				<div class="grid_6 left_div">
					<?php echo form_open('index.php/join_sign/sign_up_2'); ?>
						<table cellpadding="3">
							<tr>
								<td>
									<label for="firstname"> *Country </label>
								</td>
								<td>
									<select>
										<option class="country" value="Pakistan"> Pakistan </option>
										<option class="country" value="USA"> USA </option>
										<option class="country" value="UK"> UK </option>
										<option class="country" value="China"> China </option>
									</select>

								</td>
							</tr>

							<tr>
								<td>
									<label for="postal_code"> Postal Code </label>
								</td>
								<td>
									<input type="text" name="post_code" value="" id="post_code">
								</td>
							</tr>

							<tr>
								<td>
									<label for="current_job"> I am currently: </label>
								</td>
								<td>
									<input class="radio_box" type="radio" name="job_type" value="employed" id="job_type" checked> Employed
									<input class="radio_box" type="radio" name="job_type" value="job_seeker" id="job_type"> Job Seeker
									<input class="radio_box" type="radio" name="job_type" value="student" id="job_type"> Student
								</td>
								
							</tr>

							<tr>
								<td>
									<label for="job"> *Job Title </label>
								</td>
								<td>
									<input type="text" name="job_title" value="" id="job_title"> 
								</td>
							</tr>

							<tr>
								<td></td>
								<td>
									<input class="check_box" type="checkbox" name="self_employee" value="self_employee">I am self-employed
								</td>
							</tr>

							<tr>
								<td>
									<label for="company"> *Company </label>
								</td>
								<td>
									<input type="text" name="company_name" value="" id="company_name">
								</td>
							</tr>		
							
							<tr>
								<td></td>
								<td>
									<input type="submit" value="Create my profile" id="join_linkedin_button">
								</td>	
							</tr>

							<tr>
								<td></td>
								<td> <p id="agree"> *Indicates required fields </p> </td>
							</tr>

						</table>
					<?php echo form_close(); ?>
				</div><!--end of left_div-->
			
				

				<div align="center" class="grid_3 right_div">
					<img src="../../assets/img/linkedin_profile_help.png">
				</div>

				

			
			
			</div>
		</div>

		<div class="footer">
			<div class="container_12">
				
					<img class="grid_7 corporation-logo" src="../../assets/img/corporation-logo.png">  
			</div>
		</div>



	</body>
</html>