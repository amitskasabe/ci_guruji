<section id="read-articles" class="grid grid-cols-1 md:grid-cols-4">
    <!-- First Column (75%) -->
    <div class="col-span-full md:col-span-3 m-5 ">
        <img src="<?php echo base_url('public/assets/images/blog-featured-images') . '/' . $article[0]['featured_image']; ?>" alt="" class="w-full rounded-md h-96 md:w-full">
        <div class="content-contaienr mt-5">
        <h1 class="text-2xl font-semibold"><?= $article[0]['title'] ?></h1>
        <p class="text-xl mt-2"><?= $article[0]['content'] ?></p>
        </div>
        <!-- <?= print_r($article) ?> -->
        <div class="comment-section">
        <section class="bg-white py-8 lg:py-16 antialiased">
</section>

        </div>
    </div>

    <!-- Second Column (25%) -->
    <div class=" col-span-full md:col-start-4 md:col-span-1">
        <span> Ad Goes Here !</span>
    </div>
</section>
