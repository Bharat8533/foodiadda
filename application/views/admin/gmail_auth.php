<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FoodiAdda - gmail authentication</title>
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet"> 

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
<body style="font-family: 'Outfit', sans-serif;">
  <div class="flex justify-center items-center h-[100vh]">
    <div class="p-4 w-80 border-2 rounded-lg flex flex-col gap-2 justify-center items-center">
      <img src="https://cdn-icons-png.flaticon.com/512/6117/6117000.png" width="70px" loading="lazy" alt="">
      <h1 class="text-xl">Trouble Logging In?</h1>
      <p class="text-gray-700 text-center leading-5 text-sm">Enter your email and we'll send you a link to get back into your account.</p>
      <form id="send_redet_link_id" class="flex flex-col gap-4 mt-4 w-full">
        <div class="form-group flex flex-col gap-1">
          <input type="email" name="email_id" id="email" placeholder="example@gmail.com"
           class="w-full border border-gray-400 bg-none py-1 px-2 rounded-md focus:outline-none" autocomplete="none">
        </div>
        <button type="submit" class="w-full text-white bg-blue-600 hover:bg-blue-700 font-medium rounded-md text-sm px-5 py-2 me-2 mb-2">Send login link</button>
        <span class="text-center text-gray-700 font-light">If you remember your password? Just <a href="<?php echo base_url('user/login'); ?>" class="text-blue-600 hover:text-blue-700 hover:underline ease-in duration-100">Login here</a></span>

      </form>
    </div>
  </div>

  <script>
    $(document).ready(function(){
      $("#send_redet_link_id").on("submit", (e) => {
        e.preventDefault();

        fetch("<?php echo base_url("User/send_reset_pass_link"); ?>", {
          method : "post",
          body : new FormData(e.target)
        })
        .then(res => res.json())
        .then(data => {
          if(data.status){
            alert(data.status)
          }else{
            alert(data.status)
          }
        })
        .catch(err => console.error(err));
      })

    })
  </script>
</body>
</html>