<h1 class="text-2xl text-center font-semibold mt-5 text-red-500"> Read Articles </h1>
<div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-5 p-4">
  <?php
  if (!$data) {
    ?>
        <h1 class="text-center text-red-400 font-semibold"> NO BLOGS AVAILABLE </h1>
      <?php
  }
  foreach ($data as $key): ?>
        <div class=" rounded overflow-hidden shadow-lg">
          <img
            class="w-full"
            src="<?= base_url('/public/assets/images/blog-featured-images/').$key['featured_image'] ?>"
            alt="Sunset in the mountains"
          />
          <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2"><?= $key['title'] ?></div>
          </div>
          
          <div class="mx-5 mb-5"> <?= substr($key['content'], 0, 130).'...' ?> </div>
          <div>
            <a href="" class="bg-blue-600 p-2 mx-5 text-white"> Read Article </a>
          </div>
          <div class="px-6 pt-4 pb-2">
            
            <span>
            <?php $dateString = $key['publish_date'];
            $dateTime = new DateTime($dateString);
            $formattedDate = $dateTime->format('d M Y');
            echo $formattedDate;
            ?></span>
          </div>
        </div>
  <?php endforeach; ?>
</div>


