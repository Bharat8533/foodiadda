<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <title>Food Adda - Contact Page</title>
  
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
    <main class="px-4 sm:px-32 w-full h-full overflow-hidden sm:mt-32">
    
    <div class="px-2 sm:px-16 w-full sm:w-2/3 h-[450px] sm:h-[250px] mx-auto flex justify-center flex-col items-center gap-2 ">
      <h2 class="text-2xl sm:text-5xl">CONNECT <span class="text-red-600 font-bold">Food Adda</span></h2>
      <p class="text-justify sm:text-center">Connect with <strong>Food Adda</strong> in the heart of India. Our team is here to assist you with any inquiries or special requests. Experience comfort and personalized service that goes beyond the ordinary. Your satisfaction is our priority.</p>
    </div>

    <div class="px-2 py-4 sm:px-16 sm:py-8 mt-12 w-full h-full bg-white flex flex-col sm:flex-row justify-between rounded-md shadow-lg">
      <div class="flex flex-col gap-1 justify-center items-center">
        <h3 class="text-2xl text-red-600">HOURS OF OPERATION</h3>
        <p class="break-all">9:00 to 6:00, Mon-sat (Excluding Holidays)</p>
      </div>
      <div class="flex flex-col gap-1 justify-center items-center">
        <h3 class="text-2xl text-red-600">PHONE</h3>
        <p>+91 9990909990</p>
      </div>
      <div class="flex flex-col gap-1 justify-center items-center">
        <h3 class="text-2xl text-red-600">GENERAL INQUIRIES</h3>
        <p>example@gmail.com</p>
      </div>
    </div>

    <div class="py-6 sm:py-8 mt-12">
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
</body>
</html>