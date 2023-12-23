<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FoodiAdda - sign up page</title>
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body style="font-family: 'Outfit', sans-serif;">
  <div class="flex justify-center items-center h-[100vh]">
    <div class="p-4 w-80">
      <h1 class="text-xl">Welcome to foodiAdda</h1>
      <p class="text-gray-700 font-light">Sign up to your account</p>
      <form id="sign_form_id" class="flex flex-col gap-4 mt-4">
        <!-- <div class="form-group flex flex-col gap-1">
          <label for="email">Email-Id</label>
          <input type="email" name="email_id" id="email" placeholder="example@gmail.com"
           class="border border-gray-400 bg-none py-1 px-2 rounded-md focus:outline-none" autocomplete="none">
        </div>
        <div class="form-group flex flex-col gap-1">
          <div class="flex justify-between">
            <label for="password">Password</label>
            <a href="#" class="text-blue-600 hover:text-blue-700 hover:underline">Forget password?</a>
          </div>
          <div class="flex w-full h-full  rounded-md overflow-hidden items-center border border-gray-400">
            <input type="password" name="password" id="password" class="w-[88%] bg-none py-1 px-2 focus:outline-none">
            <i class="fa-solid fa-eye text-center w-[12%] bg-gray-400 hover:bg-gray-500 cursor-pointer text-gray-800 hover:text-black ease-in duration-100 h-[100%] py-1.5 text-sm"></i>
          </div>
        </div>
        <button type="button" class="text-white bg-blue-600 hover:bg-blue-700 font-medium rounded-md text-sm px-5 py-2 me-2 mb-2">Sign in</button>
        <span class="text-center text-gray-700 font-light">Not have an account? <a href="#" class="text-blue-600 hover:text-blue-700 hover:underline ease-in duration-100">Sign Up</a></span> -->
        <div class="flex justify-between overflow-hidden w-[100%]">
          <div class="w-[49%]">
            <label for="firstName">First Name</label>
            <input type="text" name="first_name" id="firstName" class=" w-full border border-gray-400 bg-none py-1 px-2  rounded-md focus:outline-none" autocomplete="none" required>
          </div>
          <div class="w-[49%] overflow-hidden">
            <label for="lastName">Last Name</label>
            <input type="text" id="lastName" name="last_name" class=" w-full border border-gray-400 bg-none py-1 px-2 rounded-md focus:outline-none" autocomplete="none" required>
          </div>
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
        <div class="flex w-full h-full  rounded-md overflow-hidden items-center border border-gray-400">
          <input type="password" name="password" id="password" class="w-[88%] bg-none py-1 px-2 focus:outline-none" required>
          <i class="fa-solid fa-eye text-center w-[12%] bg-gray-400 hover:bg-gray-500 cursor-pointer text-gray-800 hover:text-black ease-in duration-100 h-[100%] py-1.5 text-sm"></i>
        </div>
        <button type="submit" class="text-white bg-blue-600 hover:bg-blue-700 font-medium rounded-md text-sm px-5 py-2 me-2 mb-2">Sign in</button>
        <span class="text-center text-gray-700 font-light">Already have an account? <a href="<?php echo base_url('user/login'); ?>" class="text-blue-600 hover:text-blue-700 hover:underline ease-in duration-100">Login here</a></span>
      </form>
    </div>
  </div>

  <script>
    $("document").ready(function () {
      $("#sign_form_id").on("submit", (e) => {
        e.preventDefault();

        fetch("<?php echo base_url('User/registerUser'); ?>", {
          method : "post",
          body : new FormData(e.target)
        })
        .then(res => res.json())
        .then(data => {
          if(data.status){
            alert(data.message);
            setTimeout(()=>{
              window.location.href = '<?php echo base_url("User/login");?>';
            },1000);
          }else{
            alert(data.message);
          }
        })
        .catch(err => console.error(err));
        
      })
    })
  </script>
</body>
</html>