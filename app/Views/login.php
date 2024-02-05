<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href=<?php echo base_url('public/assets/css/login.css') ?>>
    <link rel="stylesheet" href=<?php echo base_url('public/assets/bs/css/bootstrap.min.css') ?>>
    <link rel="stylesheet" href="<?php echo base_url('public/assets/css/common.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('public/assets/common.php') ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>
    
    <div id="login-container">
    <div class="form-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <div class="form-container">
                    <h3 class="title">Register</h3>
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" class="form-control" name="username" placeholder="User Name">
                        </div>
                        <div class="form-group">
                            <label>Email ID</label>
                            <input type="email" class="form-control" name="email" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password">
                        </div>
                        <h4 class="sub-title">Personal Information</h4>
                        <div class="form-group">
                            <label>Phone No.</label>
                            <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            <label>first Name</label>
                            <input type="text" class="form-control" name="firstname" placeholder="Firstname">
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control" name="lastname" placeholder="Firstname">
                        </div>
                        <div class="form-group">
                            <label>City</label>
                            <select class="form-control" name="city">
                                <option value="paris">Paris</option>
                                <option value="new york">New York</option>
                            </select>
                        </div>
                        <div class="check-terms">
                            <input type="checkbox" class="checkbox">
                            <span class="check-label">I agree to the terms</span>
                        </div>
                        <span class="signin-link">Already have an account? Click here to <a href="">Login</a></span>
                        <button class="btn signup">Create Account</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>

    <script src=<?php echo base_url('public/assets/bs/js/bootstrap.min.js') ?>></script>
</body>
</html>