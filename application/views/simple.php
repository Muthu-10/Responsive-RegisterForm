<!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
</head>
<body>
 
	<div class="wrapper">

		
		<div class="form_container">
		  <form name="form">
        <div class="heading">
        <h2>Responsive Registration Form</h2>
      </div>
			<div class="form_wrap fullname">
				<div class="form_item">
					<label>First Name</label>
					<input type="text">
					<div class="error" id="fname"></div>  
				</div>
				<div class="form_item">
					<label>Last Name</label>
					<input type="text">
					<div class="error" id="lname"></div>  
				</div>
			</div>
			<div class="form_wrap">
				<div class="form_item">
					<label>Email Address</label>
					<input type="text">
					<div class="error" id="email"></div>  
				</div>
			</div>
			<div class="form_wrap">
				<div class="form_item">
					<label>Phone</label>
					<input type="text">
					<div class="error" id="phone"></div>  
				</div>
			</div>
			<div class="form_wrap select_box">
				<div class="form_item">
					<label>City</label>
					<select name="country">
						<option>London</option>
						<option>Paris</option>
						<option>Moscow</option>
						<option>Tokyo</option>
					</select>
					<div class="error" id="city"></div>  
				</div>
				<div class="form_item">
					<label>Country</label>
					<select name="country">
						<option>India</option>
						<option>Canada</option>
						<option>Germany</option>
						<option>Australia</option>
					</select>
					<div class="error" id="country"></div>  
				</div>
			</div>

			<div class="btn">
			  <input type="submit" value="Get Started">
			</div>
		  </form>
		</div>
	  </div>
  
</body>
</html>
