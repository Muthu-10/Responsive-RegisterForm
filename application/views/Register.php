<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <!-- this line bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- this is font style latest links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- this line css path -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>"/>
</head>
<body>
    <div class="container register">
		<h2 class='text-center mt-3 h2'>Responsive Registration Form</h2>
        <form class='row form '>
            <div class='form'>
                <div class='row  mt-4  d-flex justify-content-center form '>
                    <div class= "col-sm-6"> 
                        <div class= "input-group">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            <input type='email' class="form-control" name='email' placeholder='Email' required/>
                        </div>
                    </div>
                </div>
                <br>
                <div class='row  mt-4  d-flex justify-content-center form '>
                    <div class= "col-sm-6"> 
                        <div class= "input-group">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            <input type='password' class='form-control' name='Password' placeholder='Password' required/>
                        </div>
                    </div>
                </div>
                <br>
                <div class='row  mt-4  d-flex justify-content-center form '>
                    <div class= "col-sm-6"> 
                        <div class= "input-group">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            <input type='password' class='form-control' name='re-type password' placeholder='Re-Type-password' required/>
                        </div>
                    </div>
                </div>
                <br>
                <div class='row   d-flex justify-content-center form '>
                    <div class= "col-sm-3 mt-4 "> 
                        <div class= "input-group">
                            <span class="input-group-text"> <i class="fas fa-user"></i> </span>							
                            <input type='text' class='form-control' name='first-name' placeholder='First-Name' required/>
                        </div>  
                    </div>
                    <div class= "col-sm-3 mt-4 "> 
                        <div class= "input-group">
                            <span class="input-group-text"> <i class="fas fa-user"></i> </span>
                            <input type='text' class='form-control' name='last-name' placeholder='Last-Name' required/>
                        </div>
                    </div>
                </div>
                <br>
                <div>
                    <div class='row  mt-4  d-flex justify-content-center form '>
                        <div class='col-sm-3 '>
                            <input type='radio'  name='gender'/> Male
                        </div>
                        <div class='col-sm-3 '> 
                            <input type='radio' name='gender'/> Female
                        </div>
                    </div>
                </div>
                <br>
                <div>
                    <div class='row  mt-4  d-flex justify-content-center form '>
                        <div class= "col-sm-6">
                            <div class= "input-group">
                                <select class='form-select'> <span class="input-group-text"></span>
                                    <option>Select a country</option>
                                    <option >India</option>
                                    <option>Australia</option>
                                    <option>America</option>
                                    <option>pakistan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div>
                        <div class='row  mt-4  d-flex justify-content-center form '>
                            <div class= "col-sm-6">  
                                <input type='checkbox' /> I agree terms and conditions<br><br>
                                <input type='checkbox' /> I want to receive the newsletter
                            </div>
                        </div> 
                    <div>
                    <div class='row  mt-4  d-flex justify-content-center form '>
                        <button class='col-sm-6 btn btn-warning button'type='submit'>Register</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>