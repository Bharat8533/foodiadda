<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <title>Food Adda</title>
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <style>
    .modal {
      transition: opacity 0.25s ease;
    }
    body.modal-active {
      overflow-x: hidden;
      overflow-y: visible !important;
    }
  </style>
</head>
<body>
    <?php include_once ("common/sidebar.php"); ?>
    <?php include_once ("common/navbar.php"); ?>
    <main class="p-4">
      <h1 class="text-2xl">My Profile</h1>
      <div class="w-full h-full flex flex-col justify-center items-center">
        <div class="w-80 h-80 flex flex-col items-center py-12">
          <img src="https://i.pinimg.com/564x/7e/c9/c7/7ec9c7f4ac40e570ce7b3e17d33acec0.jpg" loading="lazy" class="w-28 h-28 text-center rounded-full object-center" alt="">
        
          <form id="userProfileId" class="w-full flex flex-col gap-3 mt-2">
            <div class="form-group">
              <label for="firstName">Name</label>
              <input type="text" name="name" id="name" class="w-full border border-gray-400 bg-none py-1 px-2  rounded-md focus:outline-none" autocomplete="none" required>
            </div>
            <div class="form-group flex flex-col gap-1">
              <label for="email">Email-Id</label>
              <input type="email" name="email_id" id="email" placeholder="example@gmail.com"
              class="border border-gray-400 bg-none py-1 px-2 rounded-md focus:outline-none" autocomplete="none" required>
            </div>
            <div class="form-group flex flex-col gap-1">
              <label for="number">Moblie No.</label>
              <input type="text" name="mobile" id="number" pattern="[0-9]{10}"
              class="border border-gray-400 bg-none py-1 px-2 rounded-md focus:outline-none" autocomplete="none" required>
            </div>
            <div class="flex justify-between">
              <button type="button" class="modal-open text-blue-600 hover:underline">Change Password</button>
              <button type="button" class="bg-blue-600 hover:bg-blue-700 rounded-md text-white py-1 px-2">Update</button>
            </div>
          </form>
        </div>
      </div>

      <!-- <button class="modal-open bg-transparent border border-gray-500 hover:border-indigo-500 text-gray-500 hover:text-indigo-500 font-bold py-2 px-4 rounded-full">Open Modal</button> -->
  
  <!--Modal-->
    <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center ">
      <div class="modal-overlay absolute w-full h-full bg-gray-900/20 backdrop-blur-sm"></div>
      
      <div class="modal-container bg-white w-80 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
        <!-- Add margin if you want to see some of the overlay behind the modal-->
        <div class="modal-content py-4 text-left px-6">
          <!--Title-->
          <div class="flex justify-between items-center pb-3">
            <p class="text-2xl font-bold">Update Password!</p>
            <div class="modal-close cursor-pointer z-50">
              <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
              </svg>
            </div>
          </div>
          <p class="text-sm text-center text-gray-700">Don't worry! Your password completely safe here.</p>
          <form id="changePasswordId" class="w-full flex flex-col gap-3 mt-4">
            <div class="form-group w-full">
              <div class="w-full flex justify-between">
                <label for="pre_pass" class="text-sm">Old Password <sup class="text-red-500">*</sup></label>
                <button class="text-sm text-blue-600 hover:underline">Forget Password</button>
              </div>
              <input type="password" id="pre_pass" name="old_pass" class="w-full border border-gray-400 bg-none py-1 px-2 rounded-md focus:outline-none" autocomplete="none" required>
            </div>
            <div class="form-group w-full">
              <label for="new_pass" class="text-sm">New Password <sup class="text-red-500">*</sup></label>
              <input type="text" id="new_pass" name="new_pass" class="w-full border border-gray-400 bg-none py-1 px-2 rounded-md focus:outline-none" autocomplete="none" required>
            </div>
            <div class="form-group w-full">
              <label for="confirm_pass" class="text-sm">Confirm  <sup class="text-red-500">*</sup></label>
              <input type="password" id="confirm_pass" name="confirm_pass" class="w-full border border-gray-400 bg-none py-1 px-2 rounded-md focus:outline-none" autocomplete="none" required>
            </div>
            <button type="submit" class="w-20 bg-blue-600 hover:bg-blue-700 rounded-md text-white py-1.5 justify-self-right px-2 ml-auto">Change</button>
          </form>
        </div>
      </div>
    </div>
    </main>

    <script>
      let openmodal = document.querySelector('.modal-open')
      openmodal.addEventListener("click", (e) => {
        e.preventDefault();

        toggleModal();
      })
      
      const overlay = document.querySelector('.modal-overlay')
      overlay.addEventListener('click', toggleModal)
      
      var closemodal = document.querySelectorAll('.modal-close')
      for (var i = 0; i < closemodal.length; i++) {
        closemodal[i].addEventListener('click', toggleModal)
      }
      
      function toggleModal () {
        const body = document.querySelector('body')
        const modal = document.querySelector('.modal')
        modal.classList.toggle('opacity-0')
        modal.classList.toggle('pointer-events-none')
        body.classList.toggle('modal-active')
      }
    </script>
</body>
</html>