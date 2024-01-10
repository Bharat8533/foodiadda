<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.5">
  <title>Food Adda - Hotel Details</title>
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

  <main class="min-h-screen duration-300 ease-in-out bg-gray-50 rounded-tl-lg  flex justify-center items-center">
    <section class="lg:px-16 py-8 px-4">
      <div class="w-full sm:w-2/3 mx-auto flex justify-center flex-col items-center gap-4">
        <h1 class="text-2xl sm:text-4xl">Page not found</h1>
        <p class="text-center">
          Uh oh, we can't seem to find the page you are looking for. Try going back to the previous page or see our <a href="<?php echo base_url('') ?>" class="text-indigo-600">Help Center</a> for more information
        </p>
        <div>
          <a href="<?php echo base_url('user/'); ?>" class="btn-1 flex w-full justify-center items-center gap-2 rounded-md border border-indigo-600 px-3 py-2 text-sm font-semibold leading-6 text-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            <!-- <i class="fa-solid fa-spinner fa-spin text-base" ></i> -->
            <span>Go to home</span>
          </a>
        </div>
      </div>
    </section>
  </main>
</body>
</html>