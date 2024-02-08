<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href=<?php echo base_url('public/assets/css/home.css') ?>>
    <link rel="stylesheet" href=<?php echo base_url('public/assets/bs/css/bootstrap.min.css') ?>>
    <link rel="stylesheet" href="<?php echo base_url('public/assets/css/common.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('public/assets/common.php') ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
</head>
<body>
    <section id="slider">
        <img class="image1" id="slide1"src=<?php echo base_url('public/images/image-1.jpg') ?>/>
        <img class="image2" id="slide2"src=<?php echo base_url('public/images/image-2.jpg') ?>/>
        <!-- <img src="public/images/image-2" id="slide2" alt="logo"> -->
    </section>
    <div class="button-container">
        <button class="btn-single" id="prev"> Prev </button>
        <button class="btn-single" id="next"> Next </button>
    </div>
    <link rel="javascript" href="<?php echo base_url('public/assets/js/home.js') ?>">
</body>
</html>