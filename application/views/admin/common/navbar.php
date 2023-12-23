<body>
  <style>
    .hide{
      display: none;
    }
  </style>


  <div class="relative w-full h-[55px] flex justify-end items-center px-4 border-b cursor-pointer">
    <img id="profile" src="https://pbs.twimg.com/media/Eh9ftpuXkAI31jn.png" class="object-center rounded-full w-10 h-10" alt="">
  
    <div id="profileDiv" class="absolute hide overflow-hidden top-10 right-6 w-28 flex flex-col justify-start items-start h-20 bg-white  shadow-lg rounded-lg text-gray-800">
      <button type="button" onclick="openProfile()" class="hover:bg-[#efefef] w-full py-2 border-b-2"><i class="fas fa-user text-gray-800"></i>  Profile</button>
      <button type="button" class="bg-white hover:bg-[#efefef] w-full py-2"><i class="fa-solid fa-right-from-bracket"></i> Log Out</button>
    </div>
  </div>
  <script>
  $(document).ready(function(){
    $("#profile").on("click", function(e) {
      e.preventDefault();
      e.stopPropagation();

      let profileDiv = $("#profileDiv");
      if(profileDiv.hasClass('hide')){
        profileDiv.removeClass('hide');
      } else {
        profileDiv.addClass('hide');
      }
    });

    $("body").on("click", function(e) {
      let profileDiv = $("#profileDiv");
      if (!profileDiv.is(e.target) && profileDiv.has(e.target).length === 0 && !$("#profile").is(e.target)) {
        profileDiv.addClass('hide');
      }
    });
  });
</script>


  <script>
    function openProfile(){
      window.location.href = "<?php echo base_url("Admin/profile"); ?>";
    }
  </script>
</body>
</html>