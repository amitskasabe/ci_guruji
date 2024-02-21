<!DOCTYPE html>
<html lang="en">
<head>
    <?php $session = session();
    $username = $session->get('username'); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url("public/assets/css/output.css") ?>">
    <!-- google fonts -->
    <link rel="shortcut icon" href="<?= base_url('public/assets/favicon.png') ?>" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/ead722a690.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="<?= base_url("public/assets/css/common.css") ?>">
    <style>
        .hs-dropdown {
            position: relative;
            display: inline-flex;
        }

        .hs-dropdown-toggle {
            /* Add your styles here */
        }

        .hs-dropdown-menu {
            /* Add your styles here */
            position: absolute;
            top: 100%;
            left: 0;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease-in-out, margin 0.3s ease-in-out;
            margin-top: 8px;
            min-width: 15rem;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border: 1px solid #e5e7eb;
            border-radius: 0.375rem;
            z-index: 10;
        }

        .hs-dropdown-open .hs-dropdown-menu {
            opacity: 1;
            visibility: visible;
            margin-top: 0;
        }
    </style>
    <link rel="stylesheet" href="<?= base_url('public/assets/css/profile.css') ?>">
    <title>
        <?= $page; ?>
    </title>
</head>
<body>
    <?php



    ?>
<nav class="bg-transparent text-dark py-4 px-4 md:px-8 lg:px-16 xl:px-32">
    <div class="flex items-center justify-between">
        <!-- Logo -->
        <div class="text-xl font-semibold"><a href="<?php echo base_url('/') ?>">Guruji Classes</a></div>

        <!-- Mobile Menu Button -->
        <div class="md:hidden">
            <button id="mobile-menu-button" class="text-dark p-2 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>

        <div class="hidden md:flex items-center space-x-5">
    <a href="<?= base_url('/') ?>" class="">Home</a>
    <a href="about" class="">About Us</a>
    <a href="blogs" class="">Blogs</a>
    <a href="courses" class="">Courses</a>
    <a href="contact" class="">Contact Us</a>
    <a href="gallery">Gallery</a>
   
    <?php
    if ($username) {
        ?>
                <div class="hs-dropdown" id="hs-dropdown-custom-trigger">
            <button type="button" class="hs-dropdown-toggle py-1 ps-1 pe-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50">
                <img class="w-8 h-auto rounded-full" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" alt="Maria">
                <span class="text-gray-600 font-medium truncate max-w-[7.5rem]"><?= $username ?></span>
                <svg class="hs-dropdown-open:rotate-180 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m6 9 6 6 6-6"/>
                </svg>
            </button>

            <div class="hs-dropdown-menu" aria-labelledby="hs-dropdown-custom-trigger">
    
                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100" href="profile">
                    Profile
                </a>
                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100" href="profile">
                    Notes
                </a>
                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100" href="logout">
                    Logout
                </a>
            </div>
        </div>

      
            <?php
    } else {
        ?>
                <a href="login" class="">login</a>
            <?php
    }
    ?>
    
</div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden mt-4">
    <ul class="flex flex-col space-y-2">
        <li><a href="/" class="font-semibold">Home</a></li>
        <li><a href="about" class="font-semibold">About</a></li>
        <li><a href="courses" class="font-semibold">Courses</a></li>
        <li><a href="careers" class="font-semibold">Careers</a></li>
    </ul>
</div>

</nav>


<script>
    // JavaScript to toggle the mobile menu visibility
     document.getElementById('mobile-menu-button').addEventListener('click', function() {
        var mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');

        // Close the mobile menu if a link is clicked
        mobileMenu.querySelectorAll('a').forEach(function(link) {
            link.addEventListener('click', function() {
                mobileMenu.classList.add('hidden');
            });
        });
    });
  
    
</script>
<script>
    // Vanilla JavaScript for dropdown toggle
    const dropdown = document.getElementById('hs-dropdown-custom-trigger');

    dropdown.addEventListener('click', function () {
        this.classList.toggle('hs-dropdown-open');
    });
</script>



