<!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <link rel= "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
 <link rel="stylesheet" href="<?php echo base_url('css/style1.css');?>"/> 
</head>
<body>
 
	<div class="wrapper">

		
		<div class="form_container">
		  <form name="form">
        <div class="heading">
        <h2>Responsive Registration Form</h2>
      </div><br>

      <div class="form_wrap fullname">
				<div class="form_item">
				<i class="fas fa-envelope"></i>
					<label>Email</label>
					<input type="text">
					<div class="error" id="Email"></div>  
				</div><br>
                <div class="form_wrap fullname">
				<div class="form_item">
				<i class="fas fa-lock"></i>
					<label>Password</label>
					<input type="text">
					<div class="error" id="password"></div>  
				</div><br>
                <div class="form_wrap fullname">
				<div class="form_item">
				<i class="fas fa-lock"></i>
					<label>Re-Type Password</label>
					<input type="text">
					<div class="error" id="password"></div>  
				</div><br>
			<div class="form_wrap fullname">
				<div class="form_item">
				<i class="fas fa-user"></i>
					<label>First Name</label>
					<input type="text">
					<div class="error" id="fname"></div>  
				</div><br>
                <div class="form_wrap fullname">
				<div class="form_item">
				<i class="fas fa-user"></i>
					<label>Last Name</label>
					<input type="text">
					<div class="error" id="lname"></div>  
				</div>
			</div><br>
            
            <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                      value="option2" />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div><br>

            <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                      value="option1" />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div><br>
            			
			
				<div class="Select a country">
					<label>Country</label>
					<select name="country">
						<option>India</option>
						<option>Canada</option>
						<option>Germany</option>
						<option>Australia</option>
					</select>
					<div class="error" id="country"></div>  
				</div>
			</div><br>

            <div class="form-check d-flex justify-content-start mb-4 pb-3">
                    <input class="form-check-input me-3" type="checkbox" value="" id="form2Example3c" />
                    <label class="form-check-label text-white" for="form2Example3">
                      I agree with terms and condition
                    </label>
                  </div><br>

                  <div class="form-check d-flex justify-content-start mb-4 pb-3">
                    <input class="form-check-input me-3" type="checkbox" value="" id="form2Example3c" />
                    <label class="form-check-label text-white" for="form2Example3">
                      I want to receive the newsletter 
                    </label>
                  </div><br>



			<div class="btn">
			  <input type="submit" value="Register">
			</div>
		  </form>
		</div>
	  </div>
  
</body>
</html>
