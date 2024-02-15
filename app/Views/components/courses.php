<section id="course">
  <h1 class="text-center text-2xl font-semibold mt-5 mb-5 text-blue-600 uppercase"> Our Courses </h1>
  <script src="<?= base_url("public/assets/js/courses.js") ?>"></script>
  <div class="grid grid-cols-1 md:grid-cols-2 gap-1 p-2">
    <!-- Column 1 -->
    
  
    <div class="p-4">
    <div class="w-full">
          <a href="" class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
          <div class="relative pb-48 overflow-hidden">
            <img class="absolute inset-0 h-full w-full object-cover" src="<?= base_url("public/assets/images/courses/mathematics.jpg") ?>" alt="">
          </div>
          <div class="p-4">
            <span class="inline-block px-2 py-1 leading-none bg-green-200 text-green-800 rounded-full font-semibold uppercase tracking-wide text-xs">Highlight</span>
            <h2 class="mt-2 mb-2  font-bold">Mathematics For SSC</h2>
            <p class="text-sm">Learn Mathematics fundamentals such as geometry and algebra with us shine on ssc board with above 90%.</p>
            <div class="mt-3 flex items-center">
              <span class="text-sm font-semibold">only</span>&nbsp;<span class="font-bold text-xl">19,999</span>&nbsp;<span class="text-sm font-semibold">Rs</span>
            </div>
            <div class="mt-3 flex items-center">
              <span class="text-sm font-semibold">
                  <h1> Mentor : Manjushri Nalge M.A.MEd.English </h1>
              </span>
            </div>
          </div>
          <div class="p-4 border-t border-b text-xs text-gray-700">
           
            <span class="flex items-center">
              <!-- <i class="far fa-address-card fa-fw text-gray-900 mr-2"></i> 6 Months -->
              <button id="math-button" class="p-3 w-full mr-2  text-white rounded-lg font-semibold mt-2 bg-blue-500"> Enroll Now </button>
            </span>  
                  
          </div>
         
        </a>
        </div>
    </div>
  
  <div>
  <div class="p-4">
    <div class="w-full">
          <a href="" class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
          <div class="relative pb-48 overflow-hidden">
            <img class="absolute inset-0 h-full w-full object-cover" src="<?= base_url("public/assets/images/courses/english.jpg") ?>" alt="">
          </div>
          <div class="p-4">
            <span class="inline-block px-2 py-1 leading-none bg-green-200 text-green-800 rounded-full font-semibold uppercase tracking-wide text-xs">Highlight</span>
            <h2 class="mt-2 mb-2  font-bold">English For Begineers</h2>
            <p class="text-sm">Learn English fundamentals such as geometry and algebra with us shine on ssc board with above 90%.</p>
            <div class="mt-3 flex items-center">
              <span class="text-sm font-semibold">only</span>&nbsp;<span class="font-bold text-xl">19,999</span>&nbsp;<span class="text-sm font-semibold">Rs</span>
            </div>
            <div class="mt-3 flex items-center">
              <span class="text-sm font-semibold">
                  <h1> Mentor : Manjushri Nalge M.A.MEd.English </h1>
              </span>
            </div>
          </div>
          <div class="p-4 border-t border-b text-xs text-gray-700">
           
            <span class="flex items-center">
              <!-- <i class="far fa-address-card fa-fw text-gray-900 mr-2"></i> 6 Months -->
              <button id="english-course" class="p-3 w-full mr-2  text-white rounded-lg font-semibold mt-2 bg-blue-500"> Enroll Now </button>
            </span>  
                  
          </div>
         
        </a>
        </div>
    </div>
  </div>
  </div>
  <div class="grid grid-cols-1 md:grid-cols-1 gap-1 p-2">
    <!-- Column 1 -->
  
  <div class="p-4">
    <div class="w-full">
          <a href="" class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
          <div class="relative pb-48 overflow-hidden">
            <img class="absolute inset-0 h-full w-full object-cover" src="<?= base_url("public/assets/images/courses/science.jpg") ?>" alt="">
          </div>
          <div class="p-4">
            <span class="inline-block px-2 py-1 leading-none bg-green-200 text-green-800 rounded-full font-semibold uppercase tracking-wide text-xs">New Course</span>
            <h2 class="mt-2 mb-2  font-bold">Science For SSC</h2>
            <p class="text-sm">Learn Science fundamentals such as geometry and algebra with us shine on ssc board with above 90%.</p>
            <div class="mt-3 flex items-center">
              <span class="text-sm font-semibold">only</span>&nbsp;<span class="font-bold text-xl">19,999</span>&nbsp;<span class="text-sm font-semibold">Rs</span>
            </div>
            <div class="mt-3 flex items-center">
              <span class="text-sm font-semibold">
                  <h1> Mentor : Manjushri Nalge M.A.MEd.English </h1>
              </span>
            </div>
          </div>
          <div class="p-4 border-t border-b text-xs text-gray-700">
           
            <span class="flex items-center">
              <!-- <i class="far fa-address-card fa-fw text-gray-900 mr-2"></i> 6 Months -->
              <button id="science-button" class="p-3 w-full mr-2  text-white rounded-lg font-semibold mt-2 bg-blue-500"> Enroll Now </button>
            </span>  
                  
          </div>
         
        </a>
        </div>
    </div>
  </div>
  </div>
</section>

<script>
  let science = document.getElementById("science-button");
  let math    =document.getElementById("math-button");
  let english    =document.getElementById("english-course");
  science.addEventListener("click", function(e){
    window.location.href = `https://api.whatsapp.com/send/?phone=+919112203013&text=i%20am%20interested%20in%20this%20science%20course&type=phone_number&app_absent=0`;
    e.preventDefault();
  })
  math.addEventListener("click", function(e){
    window.location.href = `https://api.whatsapp.com/send/?phone=+919112203013&text=i%20am%20interested%20in%20this%20math%20course&type=phone_number&app_absent=0`;
    e.preventDefault();
  })
  english.addEventListener("click", function(e){
    window.location.href = `https://api.whatsapp.com/send/?phone=+919112203013&text=i%20am%20interested%20in%20this%20english%20course&type=phone_number&app_absent=0`;
    e.preventDefault();
  })

</script>