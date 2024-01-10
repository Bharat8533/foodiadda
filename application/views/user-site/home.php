<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <title>Food Adda</title>
  
  <link rel="preload" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css">
  <link rel="preload" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="preload" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css">
  <link rel="preload" as="style" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <link rel="preload" as="shortcut icon" href="./assets/images/horeca_logo/G_page-0003.jpg">
  <link rel="preload" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <link rel="preload" as="style" href="https://unpkg.com/aos@2.3.1/dist/aos.css">

  <link rel="preload" as="script" href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js">
  <link rel="preload" as="script" href="https://cdn.tailwindcss.com">
  <link rel="preload" as="script" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js">
  <link rel="preload" as="script" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="shortcut icon" href="./assets/images/horeca_logo/G_page-0003.jpg" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>
<body>
  <div class="relative wrapper bg-gray-100 w-full h-full flex flex-col">
    <div class="absolute top-0 w-full">
      <?php include_once ("common/header.php"); ?>
    </div>
    <main class="w-full h-full overflow-hidden sm:mt-32">
      <div class="overflow-hidden h-[950px] sm:h-[550px] w-full flex flex-col justify-center items-center md:gap-24 md:flex-row py-4 sm:py-8 px-4 sm:px-16 bg-white shadow-lg">
        <div class="flex flex-col gap-4 sm:py-24 sm:px-8 justify-start items-start sm:order-1 order-2">
          <h1 class="capitalize text-lg md:text-5xl  font-bold">Most tasty food for you.</h1>

          <p class="text-justify leading-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet aspernatur dicta aut iusto sed temporibus, ipsam placeat atque possimus distinctio, odit adipisci! Ad neque earum eius architecto dolores? Amet blanditiis, impedit repudiandae vitae dolores mollitia aliquam vero?.</p>

          <form id="searchLocation">
          <div class="form-group flex">
            <input type="text" placeholder="Search your city..." class="text-red-500 border-2 rounded-tl-lg rounded-bl-lg border-red-500 placeholder:text-red-500 focus:ring-0 focus:ring-red-500 ring-red-500 focus:outline-0 focus:border-2 focus:border-red-500">
            <button class="p-2 px-4 border-2 border-red-500 bg-red-500 hover:bg-red-600 rounded-tr-lg rounded-br-lg hover:border-red-600 text-white text-center">Search <i class="fa-solid fa-arrow-right-long text-center"></i></button>

          </div>
        </form>
        <button class="text-red-600 hover:underline" onclick="storeCurrentLocation(this)"><i class="fa-solid fa-location-dot"></i>&nbsp; Use Current Location</button>
        </div>
        <div class="w-full sm:order-2 order-1">
          <img src="<?php echo base_url('assets/images/home-page/food-image.png'); ?>" alt="home-image">
        </div>
      </div>

      <div>
        <h2 class="text-2xl sm:text-5xl text-center font-light mb-2 mt-16">Our best services for you</h2>

        <div class="w-24 sm:w-72 mx-auto h-1 bg-red-600 mb-4 mt-4 rounded-tr-full rounded-bl-full"></div>

        <div class="px-2 sm:px-32 my-8 py-4 grid grid-cols-1 sm:grid-cols-3 gap-12">
        <div class="bg-white rounded-lg h-64 flex flex-col gap-2 justify-center items-center px-6 shadow-lg">
          <i class="fa-regular fa-clock text-7xl font-light text-red-600"></i>
          <h2 class="text-2xl font-bold">No More Wait</h2>
          <p class="text-center text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, ea.</p>
        </div>
        <div class="bg-white rounded-lg h-64 flex flex-col gap-2 justify-center items-center px-6 shadow-lg">
          <i class="fa-solid fa-motorcycle text-7xl text-red-600"></i>
          <h2 class="text-2xl font-bold">Fast Delivery</h2>
          <p class="text-center text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, ea.</p>
        </div>
        <div class="bg-white rounded-lg h-64 flex flex-col gap-2 justify-center items-center px-6 shadow-lg">
          <i class="fa-solid fa-mug-hot text-7xl text-red-600"></i>
          <h2 class="text-2xl font-bold">Fresh Food</h2>
          <p class="text-center text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, ea.</p>
        </div>
       </div>
      </div>

      <div>
        <h2 class="text-2xl sm:text-5xl text-center font-light mb-2">Inspiration for your first order</h2>
        <div class="w-24 sm:w-80 mx-auto h-1 bg-red-600 mb-4 mt-4 rounded-tr-full rounded-bl-full"></div>
        <div class="px-2 sm:px-32 my-16 py-4 bg-white flex justify-around flex-wrap gap-12  shadow-lg">
          
          <div class="h-full flex flex-col justify-start items-center gap-4 p-2 rounded-xl">
            <img src="<?php echo base_url('assets/images/category/dessert.jpeg'); ?>" class="w-32 h-32 rounded-full" alt="category-image">
            <h1 class="text-gray-600">Caetgory</h1>
          </div>

          <div class="h-full flex flex-col justify-start items-center gap-4 p-2 rounded-xl">
            <img src="<?php echo base_url('assets/images/category/dessert.jpeg'); ?>" class="w-32 h-32 rounded-full" alt="category-image">
            <h1 class="text-gray-600">Caetgory</h1>
          </div>
          <div class="h-full flex flex-col justify-start items-center gap-4 p-2 rounded-xl">
            <img src="<?php echo base_url('assets/images/category/dessert.jpeg'); ?>" class="w-32 h-32 rounded-full" alt="category-image">
            <h1 class="text-gray-600">Caetgory</h1>
          </div>
          <div class="h-full flex flex-col justify-start items-center gap-4 p-2 rounded-xl">
            <img src="<?php echo base_url('assets/images/category/dessert.jpeg'); ?>" class="w-32 h-32 rounded-full" alt="category-image">
            <h1 class="text-gray-600">Caetgory</h1>
          </div>
          <div class="h-full flex flex-col justify-start items-center gap-4 p-2 rounded-xl">
            <img src="<?php echo base_url('assets/images/category/dessert.jpeg'); ?>" class="w-32 h-32 rounded-full" alt="category-image">
            <h1 class="text-gray-600">Caetgory</h1>
          </div>
          
        </div>

      </div>

      <div>
          <h2 class="text-2xl sm:text-5xl text-center font-light mb-2">Our Food</h2>
          <div class="w-24 mx-auto h-1 bg-red-600 mb-8 rounded-tr-full rounded-bl-full"></div>
          <div class="w-full h-full px-2 sm:px-32 pb-16 grid grid-cols-1 md:grid-cols-3 gap-4">
          <div class="p-2 shadow-lg bg-white flex flex-col gap-2 basis-1/3 rounded-lg">
            <div class="relative">
              <img src="https://upload.wikimedia.org/wikipedia/commons/6/6d/Good_Food_Display_-_NCI_Visuals_Online.jpg" class="w-full h-48 rounded-lg object-cover" alt="">
              <span class="absolute top-1 left-1 rounded-lg bg-red-300 hover:bg-red-400 cursor-pointer py-1 px-4"><i class="fa-solid fa-utensils mr-2"></i> Food</span>
            </div>
            <div class="flex flex-col gap-2">
              <div class="flex gap-2 items-center">
                <h1 class="font-bold text-2xl">299.00</h1>
                <del class="text-gray-600">399.00</del>
              </div>
              <p class="break-all">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, nisi!</p>
              <button class="btn py-2 px-4 bg-red-600 hover:bg-red-700 text-white text-center rounded-lg">Order Now</button>
            </div>
          </div>
          <div class="p-2 shadow-lg bg-white flex flex-col gap-2 basis-1/3 rounded-lg">
            <div class="relative">
              <img src="https://upload.wikimedia.org/wikipedia/commons/6/6d/Good_Food_Display_-_NCI_Visuals_Online.jpg" class="h-48 w-full rounded-lg object-cover" alt="">
              <span class="absolute top-1 left-1 rounded-lg bg-red-300 hover:bg-red-400 cursor-pointer py-1 px-4"><i class="fa-solid fa-utensils mr-2"></i> Food</span>
            </div>
            <div class="flex flex-col gap-2">
              <div class="flex gap-2 items-center">
                <h1 class="font-bold text-2xl">299.00</h1>
                <del class="text-gray-600">399.00</del>
              </div>
              <p class="break-all">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, nisi!</p>
              <button class="btn py-2 px-4 bg-red-600 hover:bg-red-700 text-white text-center rounded-lg">Order Now</button>
            </div>
          </div>

          <div class="p-2 shadow-lg bg-white flex flex-col gap-2 basis-1/3 rounded-lg">
            <div class="relative">
              <img src="https://upload.wikimedia.org/wikipedia/commons/6/6d/Good_Food_Display_-_NCI_Visuals_Online.jpg" class="h-48 w-full rounded-lg object-cover" alt="">
              <span class="absolute top-1 left-1 rounded-lg bg-red-300 hover:bg-red-400 cursor-pointer py-1 px-4"><i class="fa-solid fa-utensils mr-2"></i> Food</span>
            </div>
            <div class="flex flex-col gap-2">
              <div class="flex gap-2 items-center">
                <h1 class="font-bold text-2xl">299.00</h1>
                <del class="text-gray-600">399.00</del>
              </div>
              <p class="break-all">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, nisi!</p>
              <button class="btn py-2 px-4 bg-red-600 hover:bg-red-700 text-white text-center rounded-lg">Order Now</button>
            </div>
          </div>
          <div class="p-2 shadow-lg bg-white flex flex-col gap-2 basis-1/3 rounded-lg">
            <div class="relative">
              <img src="https://upload.wikimedia.org/wikipedia/commons/6/6d/Good_Food_Display_-_NCI_Visuals_Online.jpg" class="h-48 w-full rounded-lg object-cover" alt="">
              <span class="absolute top-1 left-1 rounded-lg bg-red-300 hover:bg-red-400 cursor-pointer py-1 px-4"><i class="fa-solid fa-utensils mr-2"></i> Food</span>
            </div>
            <div class="flex flex-col gap-2">
              <div class="flex gap-2 items-center">
                <h1 class="font-bold text-2xl">299.00</h1>
                <del class="text-gray-600">399.00</del>
              </div>
              <p class="break-all">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, nisi!</p>
              <button class="btn py-2 px-4 bg-red-600 hover:bg-red-700 text-white text-center rounded-lg">Order Now</button>
            </div>
          </div>
          <div class="p-2 shadow-lg bg-white flex flex-col gap-2 basis-1/3 rounded-lg">
            <div class="relative">
              <img src="https://upload.wikimedia.org/wikipedia/commons/6/6d/Good_Food_Display_-_NCI_Visuals_Online.jpg" class="h-48 w-full rounded-lg object-cover" alt="">
              <span class="absolute top-1 left-1 rounded-lg bg-red-300 hover:bg-red-400 cursor-pointer py-1 px-4"><i class="fa-solid fa-utensils mr-2"></i> Food</span>
            </div>
            <div class="flex flex-col gap-2">
              <div class="flex gap-2 items-center">
                <h1 class="font-bold text-2xl">299.00</h1>
                <del class="text-gray-600">399.00</del>
              </div>
              <p class="break-all">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, nisi!</p>
              <button class="btn py-2 px-4 bg-red-600 hover:bg-red-700 text-white text-center rounded-lg">Order Now</button>
            </div>
          </div>
        </div>
      </div>

      <div>
        <h2 class="text-2xl sm:text-5xl text-center font-light mb-2">Contact us</h2>
        <div class="w-24 mx-auto h-1 bg-red-600 mb-8 rounded-tr-full rounded-bl-full"></div>

        <div class="w-full md:w-[800px] mx-auto flex justify-center gap-4 px-2">
          <form id="contactForm" class="flex gap-4 flex-col w-full">
            <div class="flex md:flex-row flex-col gap-4 w-full">
              <div class="form-group basis-1/2">
                <input type="text" placeholder="Name" name="name" class="w-full border-none outline-none rign-none focus:outline-0 focus:ring-0 focus:border-0 shadow-lg rounded-lg" required>
              </div>
              <div class="form-group basis-1/2">
                <input type="email" placeholder="Email" name="email" class="w-full border-none outline-none rign-none focus:outline-0 focus:ring-0 focus:border-0 shadow-lg rounded-lg" required>
              </div>
            </div>
            <div class="flex md:flex-row flex-col gap-4">
              <div class="form-group basis-1/2">
                <input type="text" pattern="[0-9]{10}" placeholder="Number" name="number" class="w-full border-none outline-none rign-none focus:outline-0 focus:ring-0 focus:border-0 shadow-lg rounded-lg">
              </div>
              <div class="form-group basis-1/2">
                <input type="text" placeholder="Subject" name="subject" class="w-full border-none outline-none rign-none focus:outline-0 focus:ring-0 focus:border-0 shadow-lg rounded-lg" required>
              </div>
            </div>
            <textarea name="message" id="message" rows="4" placeholder="Your Message" class="block w-full p-3 border-none outline-none rign-none focus:outline-0 focus:ring-0 focus:border-0 shadow-lg rounded-lg" style="resize: none;"  ></textarea>
            <button type="submit" class="bg-red-600 text-white hover:bg-red-700 py-2 px-2 rounded-lg">Submit</button>
          </form>
        </div>
      </div>

    </main>

    <div class="mt-16">
      <?php  include_once "common/footer.php"; ?>
    </div>


    <script>
        function storeCurrentLocation(e){

          if (navigator.geolocation) {

            navigator.geolocation.getCurrentPosition(function(position) {

                const latitude = position.coords.latitude;
                const longitude = position.coords.longitude;

                const locationData = {
                    latitude: latitude,
                    longitude: longitude
                };

                const locationString = JSON.stringify(locationData);

                localStorage.setItem('userLocation', locationString);
                console.log(locationString);
                alert('Location stored successfully!');
            }, function(error) {

                console.error('Error getting location:', error.message);
                alert('Error getting location. Please try again.');
            });

          } else {
              // Geolocation is not supported by the browser
              alert('Geolocation is not supported by your browser.');
          }
       }
    </script>

    </body>
</html>