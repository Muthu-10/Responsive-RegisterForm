<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
     <!-- this line bootstrap  -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
     <!-- this is font style latest links -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
     <!-- this line css path -->
     <link rel="stylesheet" href="<?php echo base_url('assets/css/Login.css');?>"/>
</head>
<body>
    <div class="Form my-4 mx-5">
        <div class="container">
        <h2 class='text-center mt-3 h2'>Login Form</h2>
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <img src="https://cdn3.vectorstock.com/i/1000x1000/24/47/head-of-nordic-odin-god-logo-on-dark-background-vector-40262447.jpg" class="img-fluid" alt=" ">
                </div>
                <div class="col-lg-7 px-5 pt-5">
                    <h1 class="font-weight-bold py-3">SignUp Page</h1>
                    
                <form>
                    <div class='row d-flex justify-content-center form '>
                        <div class= "col-sm-6 mt-4 "> 
                            <div class= "input-group">
                            <span class="input-group-text"> <i class="fas fa-user"></i> </span>							
                            <input type='text' class='form-control' name='first-name' placeholder='First-Name' required/>
                        </div>  
                    </div>
                    <div class= "col-sm-6 mt-4 "> 
                        <div class= "input-group">
                            <span class="input-group-text"> <i class="fas fa-user"></i> </span>
                            <input type='text' class='form-control' name='last-name' placeholder='Last-Name' required/>
                        </div>
                    </div>
                    </div>
                    <div class='row d-flex justify-content-center form '>
                        <div class= "col-sm-6 mt-4 "> 
                            <div class= "input-group">
                            <span class="input-group-text"> <i class="fas fa-envelope"></i> </span>							
                            <input type='text' class='form-control' name='email' placeholder='Email' required/>
                        </div>  
                    </div>
                    <div class= "col-sm-6 mt-4 "> 
                        <div class= "input-group">
                            <span class="input-group-text"> <i class="fa-solid fa-phone"></i> </span>
                            <input type='text' class='form-control' name='phone' placeholder='Phone-Number' required/>
                        </div>
                    </div>
                    </div>
                    <div class='row d-flex justify-content-center form '>
                        <div class= "col-sm-6 mt-4 "> 
                            <div class= "input-group">
                            <span class="input-group-text"> <i class="fas fa-lock"></i> </span>							
                            <input type='text' class='form-control' name='password' placeholder='Password' required/>
                        </div>  
                    </div>
                        <div class= "col-sm-6 mt-4 "> 
                            <div class= "input-group">
                            <span class="input-group-text"> <i class="fas fa-lock"></i> </span>
                            <input type='text' class='form-control' name='password' placeholder='Confirm-password' required/>
                        </div>
                    </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-6 mt-4">
                            <button type="Submit">  <a href="<?php echo base_url('Registercontroller');?>"  class="btn btn-primary btn-lg mt-3 mb-5">Login</button></a>
                        </div>
                    </div>
                    <!-- <a href="#">Forget Password</a>
                    <p>Already have an account? <a href="#">Register here</a></p> -->
                </form>

</div>
</body>
</html>