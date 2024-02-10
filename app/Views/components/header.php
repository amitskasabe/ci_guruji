<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url("public/assets/css/output.css") ?>">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url("public/assets/css/common.css") ?>">

    <title>
        <?= $page; ?>
    </title>
</head>
<body>
<nav class="bg-transparent text-dark py-4 px-4 md:px-8 lg:px-16 xl:px-32">
    <div class="flex items-center justify-between">
        <!-- Logo -->
        <div class="text-xl font-semibold">Guruji Classes</div>

        <!-- Mobile Menu Button -->
        <div class="md:hidden">
            <button id="mobile-menu-button" class="text-dark p-2 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>

        <div class="hidden md:flex items-center space-x-5">
    <a href="home" class="font-semibold">Home</a>
    <a href="about" class="font-semibold">About</a>
    <a href="blogs" class="font-semibold">Blogs</a>
    <a href="courses" class="font-semibold">Courses</a>
    <a href="careers" class="font-semibold">Careers</a>
</div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden mt-4">
    <ul class="flex flex-col space-y-2">
        <li><a href="/home" class="font-semibold">Home</a></li>
        <li><a href="/about" class="font-semibold">About</a></li>
        <li><a href="/courses" class="font-semibold">Courses</a></li>
        <li><a href="/careers" class="font-semibold">Careers</a></li>
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



