<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FoodiAdda - forget password page</title>
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet"> 

  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body style="font-family: 'Outfit', sans-serif;">
  <div class="flex justify-center items-center h-[100vh]">
    <div class="p-4 w-80">
      <h1 class="text-xl mb-4">Reset Your Password</h1>
      <!-- <p class="text-gray-700 font-light mb-2">Don't worry, just chill</p> -->
      <form id="changePasswordForm" class="flex flex-col justify-start gap-2">
          <div class="form_group w-full">
            <label for="newPassword">New Password <sup class="text-red-600 font-bold">*</sup></label>
            <input type="password" name="new_password" class="border border-gray-400 bg-none py-1 px-2 rounded-md focus:outline-none w-[100%]">
          </div>
          <div class="form_group w-full">
            <label for="newPassword">Confirm Password <sup class="text-red-600 font-bold">*</sup></label>
            <input type="password" name="confirm_password" class="border border-gray-400 bg-none py-1 px-2 rounded-md focus:outline-none w-[100%]">
          </div>

          <button type="submit" class="w-full text-white bg-blue-600 hover:bg-blue-700 font-medium rounded-md text-sm px-5 py-2 ml-auto">Update</button>
          <span class="text-center text-gray-700 font-light">If you remember your password? Just <a href="<?php echo base_url('user/login'); ?>" class="text-blue-600 hover:text-blue-700 hover:underline ease-in duration-100">Login here</a></span>
        </form>
    </div>
  </div>
  <script>
    $("document").ready(function(){
      
    })
  </script>

</body>
</html>