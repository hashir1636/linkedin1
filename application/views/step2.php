<html>
	
	<head>
		
		<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../../assets/css/grid.css">		
		<link rel="stylesheet" type="text/css" href="../../assets/css/style4.css">
		<link rel="stylesheet" type="text/css" href="../../assets/css/step2.css">
		
		
		<script type="text/javascript" src="../../assets/js/jquery-1.10.1.min.js"></script>
		<script type="text/javascript">
			$(document).click(function(e) {
                $("#fisrtname").addClass("border_color");
            });

            

			$(document).click(function(e) {
				 $("#fisrtname").removeClass("border_color");
                $("#lastname").addClass("border_color");
            });                
		
			
                
		
                
           
		  
		</script>		
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
				<div class="grid_6 sign_up_user_msg">
					 Grow your network on Linkedin
				</div>

				<div class="grid_2 step_no">
					Step 2 of 8 <img src="../../assets/img/step.png">
				</div>

				<div class="horizobtal_line"></div>

				<div class="grid_8">
					<div class="sub_main_div">
						<p> Get started by adding your address. </p>
						<form class="form-horizontal">
							<div class="control-group">
						    	<label class="control-label" for="inputEmail"> Your email: </label>
						    	 <div class="controls">
						     		 <input class="input-xlarge" type="email" id="email" name="email" value="<?php echo $this->session->userdata('username'); ?>">
						    	</div>
						  	</div>
						 
						  	<div class="control-group">
						   		<div class="controls">
						     		<input type="submit" class="btn btn-primary" value="Continue">
						     	</div>
						     	<div class="controls without_permission">
						     		We will not store your password or email anyone without your permission. 
						     	</div>
						    		
						  	</div>
						</form>
					</div>

					<div class="grid_2 skip_process">
						<p> 
							<a href=""> Skip this step </a> >>
						</p>
					</div>

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