<?php 

$content = [
    [
        "heading" => " Take a Trial Class",
        "svg" => '<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
        <linearGradient id="0AZ_d1EE5gBFh74~l7qeoa_82ewLsKHYlLc_gr1" x1="24" x2="24" y1="4" y2="44" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#33bef0"></stop><stop offset="1" stop-color="#0a85d9"></stop></linearGradient><circle cx="24" cy="24" r="20" fill="url(#0AZ_d1EE5gBFh74~l7qeoa_82ewLsKHYlLc_gr1)"></circle><path fill="#fff" d="M25,17H13c-0.552,0-1,0.448-1,1v10c0,2.209,1.791,3,4,3h12c0.552,0,1-0.448,1-1v-9 C29,18.791,27.209,17,25,17z"></path><path d="M25,16.5H13c-0.827,0-1.5,0.673-1.5,1.5v10c0,2.481,2.019,3.5,4.5,3.5h12c0.827,0,1.5-0.673,1.5-1.5 v-9C29.5,18.519,27.481,16.5,25,16.5z M29,30c0,0.552-0.448,1-1,1H16c-2.209,0-4-0.791-4-3V18c0-0.552,0.448-1,1-1h12 c2.209,0,4,1.791,4,4V30z" opacity=".07"></path><path fill="#fefefe" d="M31,21.481v5.039c0,0.304,0.138,0.591,0.375,0.781l3.812,3.05C35.515,30.612,36,30.379,36,29.96	V18.04c0-0.419-0.485-0.652-0.812-0.39l-3.812,3.05C31.138,20.89,31,21.177,31,21.481z"></path><path d="M35.498,17.539c0.259,0,0.502,0.204,0.502,0.501V29.96c0,0.297-0.244,0.501-0.502,0.501c-0.106,0-0.215-0.034-0.31-0.111 l-3.812-3.05C31.138,27.11,31,26.823,31,26.519v-5.039c0-0.304,0.138-0.591,0.375-0.781l3.812-3.05 C35.283,17.574,35.391,17.539,35.498,17.539 M35.498,17.039c-0.227,0-0.442,0.076-0.622,0.22l-3.812,3.05 c-0.358,0.286-0.563,0.713-0.563,1.171v5.039c0,0.458,0.205,0.885,0.563,1.171l3.812,3.05c0.18,0.144,0.395,0.22,0.622,0.22 c0.553,0,1.002-0.449,1.002-1.001V18.04C36.5,17.488,36.05,17.039,35.498,17.039L35.498,17.039z" opacity=".07"></path><path d="M35.498,16.539c-0.342,0-0.665,0.114-0.935,0.33l-3.812,3.05C30.274,20.3,30,20.87,30,21.481V21	c0-2.757-2.243-5-5-5H13c-1.103,0-2,0.897-2,2v10c0,2.757,2.243,4,5,4h12c1.103,0,2-0.897,2-2v-3.481	c0,0.611,0.274,1.18,0.751,1.562l3.812,3.05c0.27,0.216,0.593,0.33,0.935,0.33c0.828,0,1.502-0.673,1.502-1.501V18.04	C37,17.213,36.326,16.539,35.498,16.539z M29.5,30c0,0.827-0.673,1.5-1.5,1.5H16c-2.481,0-4.5-1.019-4.5-3.5V18	c0-0.827,0.673-1.5,1.5-1.5h12c2.481,0,4.5,2.019,4.5,4.5V30z M36.5,29.96c0,0.552-0.45,1.001-1.002,1.001	c-0.227,0-0.442-0.076-0.622-0.22l-3.812-3.05c-0.358-0.286-0.563-0.713-0.563-1.171v-5.039c0-0.458,0.205-0.885,0.563-1.171	l3.812-3.05c0.18-0.144,0.395-0.22,0.622-0.22c0.553,0,1.002,0.449,1.002,1.001V29.96z" opacity=".05"></path>
        </svg>',
        "subheading" => "This is a free class that we give to our students to make sure that this course suits best on them"
    ],
    [
        "heading" => ""
    ]
]


?>
<section id="review" class="">
  <h1 class="text-center text-2xl uppercase font-semibold mt-5 text-blue-600">How it works </h1>
  <div class="grid grid-cols-1 md:grid-cols-3 place-items-center mt-5 mb-5">
    <div>
      <div class="max-w-sm rounded overflow-hidden shadow-lg border border-slate-300">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2 text-center"><?php echo $content[0]['heading'] ?> </div>
          <p class="text-gray-700 text-base text-center">
           <?php echo $content[0]['subheading'] ?>
          </p>
        </div>
        <div class="px-6 py-4">
          <div class="flex justify-center items-center">
          <?php echo $content[0]['svg'] ?>
          </div>
        </div>
      </div>
    </div>
    <div>
    <div>
      <div class="max-w-sm rounded overflow-hidden shadow-lg border  border-slate-300">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2 text-center"><?php echo $content[0]['heading'] ?> </div>
          <p class="text-gray-700 text-base text-center">
           <?php echo $content[0]['subheading'] ?>
          </p>
        </div>
        <div class="px-6 py-4">
          <div class="flex justify-center items-center">
          <?php echo $content[0]['svg'] ?>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div>
    <div>
      <div class="max-w-sm rounded overflow-hidden shadow-lg border border-slate-300">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2 text-center"><?php echo $content[0]['heading'] ?> </div>
          <p class="text-gray-700 text-base text-center">
           <?php echo $content[0]['subheading'] ?>
          </p>
        </div>
        <div class="px-6 py-4">
          <div class="flex justify-center items-center">
          <?php echo $content[0]['svg'] ?>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</section>
