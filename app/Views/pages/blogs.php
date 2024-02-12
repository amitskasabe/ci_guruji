<div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-5 p-4">
  <?php foreach ($data as $key) : ?>
    <div class=" rounded overflow-hidden shadow-lg">
      <img
        class="w-full"
        src="https://placehold.co/600x400/EEE/31343C"
        alt="Sunset in the mountains"
      />
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2"><?= $key['title'] ?></div>
        <p class="text-gray-700 text-base">
          <?= $key['content'] ?>
        </p>
      </div>
      <div class="px-6 pt-4 pb-2">
        <span
          class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"
          >#photography</span
        >
        <span
          class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"
          >#travel</span
        >
        <span
          class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"
          >#winter</span
        >
        <span><?= $key['publish_date'] ?></span>
      </div>
    </div>
  <?php endforeach; ?>
</div>


