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
                    <form class="form-horizontal" action="register" method="post">
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text"  id="username"class="form-control" name="username" placeholder="User Name">
                        </div>
                       
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" id="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        
                        
                    </form>
                    <button class="form-control btn" id="submit" name="button" value="Submit" onclick="return validateForm()">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>

    <script src="<?php echo base_url('public/assets/js/login.js') ?>"></script>
    <script src=<?php echo base_url('public/assets/bs/js/bootstrap.min.js') ?>></script>
    
</body>
</html>