<!-- component -->
<?php $error = session()->getFlashdata('error'); ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Loopple/loopple-public-assets@main/motion-tailwind/motion-tailwind.css" rel="stylesheet">
    </head>
    <body class="bg-white rounded-lg py-5">    
        <div class="container flex flex-col mx-auto bg-white rounded-lg pt-12 my-5">
           <div class="flex justify-center w-full h-full my-auto xl:gap-14 lg:justify-normal md:gap-5 draggable">
      <div class="flex items-center justify-center w-full lg:p-12">
        <div class="flex items-center xl:p-10">
          <form id="signin-form" class="flex flex-col w-full h-full pb-6 text-center bg-white rounded-3xl" method="post" action="signin">
            <h3 class="mb-3 text-4xl font-extrabold text-dark-grey-900">Sign In</h3>
            <p class="mb-4 text-grey-700">Enter your email and password</p>
            <a class="flex items-center justify-center w-full py-4 mb-6 text-sm font-medium transition duration-300 rounded-2xl text-grey-900 bg-grey-300 hover:bg-grey-400 focus:ring-4 focus:ring-grey-300">
              <img class="h-5 mr-2" src="https://raw.githubusercontent.com/Loopple/loopple-public-assets/main/motion-tailwind/img/logos/logo-google.png" alt="">
              Sign in with Google
            </a>
            <div class="flex items-center mb-3">
              <hr class="h-0 border-b border-solid border-grey-500 grow">
              <p class="mx-4 text-grey-600">or</p>
              <hr class="h-0 border-b border-solid border-grey-500 grow">
            </div>
            <div id="error" class="text-red-500 text-center font-semibold"></div>
            
            <label for="email" class="mb-2 text-sm text-start text-grey-900">Email*</label>
            <div><p><?= $error ?></p></div>
            <input id="email" type="email" placeholder="amit@codeseed.in" class="flex items-center w-full px-5 py-4 mr-2 text-sm font-medium outline-none focus:bg-grey-400 mb-7 placeholder:text-grey-700 bg-grey-200 text-dark-grey-900 rounded-2xl" name="email"/>
            <label for="password" class="mb-2 text-sm text-start text-grey-900">Password*</label>
            
            <input id="password" type="password" placeholder="Enter a password" class="flex items-center w-full px-5 py-4 mb-5 mr-2 text-sm font-medium outline-none focus:bg-grey-400 placeholder:text-grey-700 bg-grey-200 text-dark-grey-900 rounded-2xl" name="password"/>

            <button class="w-full px-6 py-5 mb-5 text-sm font-bold leading-none text-white transition duration-300 md:w-96 rounded-2xl hover:bg-purple-blue-600 focus:ring-4 focus:ring-purple-blue-100 bg-purple-blue-500">Sign In</button>
            <p class="text-sm leading-relaxed text-grey-900">Not registered yet? <a href="register" class="font-bold text-grey-700">Create an Account</a></p>
          </form>
        </div>
      </div>
    </div>
        </div>
        
        
    </body>
    <script src="<?php echo base_url('public/assets/js/jquery.js') ?>"></script>
    <script src="<?php echo base_url('public/assets/js/login.js') ?>"></script>
<html>