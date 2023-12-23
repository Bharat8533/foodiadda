<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <title>Food Adda</title>
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
  	<!--Regular Datatables CSS-->
	<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
	<!--Responsive Extension Datatables CSS-->
	<!-- <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet"> -->

  
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <!--Datatables -->
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<!-- <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script> -->
  <style>
    <?php include_once "assets/css/responsive.css"; ?>
    .modal {
      transition: opacity 0.25s ease;
    }
    body.modal-active {
      overflow-x: hidden;
      overflow-y: visible !important;
    }

    .file_img::-webkit-file-upload-button{
      background: none;
      appearance: none;
      border: none;
      outline: none;
      background-color: #fcbf09;
      color: #fff;
      padding: 6px 10px;
      cursor: pointer;
      transition: 0.3s ease-out;
    }

    .file_img::-webkit-file-upload-button:hover{
      background-color: #cf9c02;
    }
  </style>
</head>
<body>
  <?php include_once ("common/sidebar.php"); ?>
  <?php include_once ("common/navbar.php"); ?>
  <main class="py-8 px-16">
    <h1 class="text-2xl font-medium">Food Menu</h1>
    <div><a href="<?php echo base_url("Admin/home"); ?>" class="text-blue-600">Dashboard</a> / Food Menu</div>
    <div class="my-8 flex gap-4">
      <button type="button" id="cat_model" onclick="openCatModal(this)" class="bg-blue-500 hover:bg-blue-600 rounded-sm text-white py-2 px-3 ml-auto">Add Category</button>
      <button type="button" onclick="openItemModal(this)" class="bg-yellow-400 hover:bg-yellow-500  rounded-sm text-white  py-2 px-3">Add Food Item's</button>
    </div>


    <!--Container-->
    <div class="overflow-x-auto">
        <table id="example" class="table-auto !border-collapse text-sm w-full">
          <thead class="border bg-white">
            <tr>
              <th class="p-2 border border-gray-300 text-start font-medium">#</th>
              <th class="p-2 border border-gray-300 text-start font-medium">Food Name</th>
              <th class="p-2 border border-gray-300 text-start font-medium">Category</th>
              <th class="p-2 border border-gray-300 text-start font-medium">Price</th>
              <th class="p-2 border border-gray-300 text-start font-medium">Detail</th>
              <th class="p-2 border border-gray-300 text-start font-medium">Status</th>
              <th class="p-2 border border-gray-300 text-start font-medium">Action</th>
            </tr>
          </thead>
          <tbody>
            
          <?php $index = 0; foreach($food_menu_table_data as $food_info){ ?>
            <tr>
              <td class="p-2 border border-gray-300"><?php echo $index += 1; ?></td>
              <td class="p-2 border border-gray-300"><?php echo $food_info['item_name']; ?></td>
              <td class="p-2 border border-gray-300"><?php echo $food_info['category']; ?></td>
              <td class="p-2 border border-gray-300"><?php echo $food_info['price']; ?></td>
              <td class="p-2 border border-gray-300 max-w-[200px]"><?php echo $food_info['item_details']; ?></td>
              <td class="p-2 border border-gray-300"><?php echo ($food_info['food_status'] == 1) ? 'yes' : 'no';  ?></td>
              <td class="p-2 border border-gray-300 flex gap-2">
                <button type="button" data-id="<?php echo $food_info['id']; ?>" onclick="view_detail_model(this)" class="w-10 h-10 bg-yellow-400 hover:bg-yellow-500 cursor-pointer text-white flex justify-center items-center rounded-lg" title="Item Info">
                  <i class="fa-solid fa-circle-info"></i>
                </button>
                <button type="button" data-id="<?php echo $food_info['id']; ?>" onclick="edit_item_details(this)" class="w-10 h-10 bg-blue-500 hover:bg-blue-600 cursor-pointer text-white flex justify-center items-center rounded-lg"  title="Edit Item">
                  <i class="fa-regular fa-pen-to-square"></i>
                </button>
                <button type="submit" data-id="<?php echo $food_info['id']; ?>" onclick="delete_item(this)" class="w-10 h-10 bg-red-500 hover:bg-red-600 cursor-pointer text-white flex justify-center items-center rounded-lg" title="Delete Item">
                  <i class="fa-solid fa-trash" ></i>
                </button>
              </td>
            </tr>
            <?php } ?>
            <!-- Rest of your data (refer to https://datatables.net/examples/server_side/ for server side processing)-->

          </tbody>

        </table>


      </div>
      <!--/Card-->


    </div>
    <!--/container-->


    <!-- Add category model start-->
    
    <div class="cat-modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center ">
      <div class="cat-modal-overlay absolute w-full h-full bg-gray-900/20 backdrop-blur-sm"></div>
      
      <div class="modal-container bg-white w-80 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
        <!-- Add margin if you want to see some of the overlay behind the modal-->
        <div class="modal-content py-4 text-left px-6">
          <!--Title-->
          <div class="flex justify-between items-center pb-3">
            <p class="text-2xl font-bold">Add Category!</p>
            <div class="cat-modal-close cursor-pointer z-50">
              <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
              </svg>
            </div>
          </div>
          <p class="text-sm text-center text-gray-700">Add your favorite category without hesitation.</p>
          <p id="cat_insert_status" class="text-sm text-center mt-2  ease-in-out duration-400"></p>
          <form id="addCategoryId" class="w-full flex flex-col gap-3 mt-4" enctype="multipart/form-data">
            <div class="form-group w-full flex flex-col gap-2">
              <label for="cat_name" class="text-sm">Category Name <sup class="text-red-500">*</sup></label>
              <input type="text" id="cat_name" name="cat_name" class="w-full border border-gray-400 bg-none py-1 px-2 rounded-md focus:outline-none" autocomplete="none" required>
            </div>
            <div class="form-group w-full flex flex-col gap-2">
              <label for="cat_img" class="text-sm">Category Image <sup class="text-red-500">*</sup></label>
              <input type="file" id="cat_img" name="cat_img" class="file_img w-full border border-gray-400 bg-none cursor-pointer rounded-md focus:outline-none" autocomplete="none"  accept=".jpg, .jpeg, .png, .bmp, .webp, .svg, ,pdf" required>
            </div>
            <button type="submit" class="w-20 bg-blue-600 hover:bg-blue-700 rounded-md text-white py-1.5 justify-self-right px-2 ml-auto">Add</button>
          </form>
        </div>
      </div>
    </div>

    <!-- Add category model end -->


    <!-- Add food item model start-->
    
    <div class="item-modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center ">
      <div class="item-modal-overlay absolute w-full h-full bg-gray-900/20 backdrop-blur-sm"></div>
      
      <div class="modal-container bg-white w-[500px] md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
        <!-- Add margin if you want to see some of the overlay behind the modal-->
        <div class="modal-content py-4 text-left px-6">
          <!--Title-->
          <div class="flex justify-between items-center pb-3">
            <p class="text-2xl font-bold">Add Food Item!</p>
            <div class="item-modal-close cursor-pointer z-50">
              <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
              </svg>
            </div>
          </div>
          <p class="text-sm text-center text-gray-700">Add your favorite category without hesitation.</p>
          <p id="item_insert_status" class="text-sm text-center mt-2  ease-in-out duration-400"></p>
          <form id="addItemId" class="w-full flex flex-col gap-3 mt-4" enctype="multipart/form-data">
            <div class="w-full flex justify-between">
              <div class="w-[49%] flex flex-col gap-1">
                <label for="firstName" class="text-sm">Category Name <sup class="text-red-500">*</sup></label>
                <!-- <input type="text" name="first_name" id="firstName" class=" w-full border border-gray-400 bg-none py-1 px-2  rounded-md focus:outline-none" autocomplete="none" required> -->
                <select name="cat_id" id="cat" class=" w-full border border-gray-400 bg-none py-1 px-2 rounded-md focus:outline-none  focus:border-black">
                  <option value="select" selected disabled>Select Category</option>
                  <?php foreach ($all_cat as $category) { ?>
                  <option value="<?php echo $category['id']; ?>"><?php echo $category['cat_name']; ?></option>
                  <?php } ?>
                </select>
              </div>
              <div class="w-[49%] overflow-hidden flex flex-col gap-1">
                <label for="lastName" class="text-sm">Item Name <sup class="text-red-500">*</sup></label>
                <input type="text" id="lastName" name="item_name" class=" w-full border border-gray-400 bg-none py-1 px-2 rounded-md focus:outline-none focus:border-black" autocomplete="none" required>
              </div>
            </div>
            <div class="w-full flex justify-between">
              <div class="w-[49%]  flex flex-col gap-1">
                <label for="itemDetails" class="text-sm">Item Details <sup class="text-red-500">*</sup></label>
                <input type="text" name="item_details" id="itemDetails" class=" w-full border border-gray-400 bg-none py-1 px-2  rounded-md focus:outline-none  focus:border-black" autocomplete="none" required>
              </div>
              <div class="w-[49%] overflow-hidden  flex flex-col gap-1">
                <label for="item_price" class="text-sm">Price <sup class="text-red-500">*</sup></label>
                <input type="text" id="item_price" name="item_price" class=" w-full border border-gray-400 bg-none py-1 px-2 rounded-md focus:outline-none  focus:border-black" autocomplete="none" required>
              </div>
            </div>
            <div class="w-full flex justify-between">
              <div class="w-[49%] flex flex-col gap-1">
                <label for="available" class="text-sm">Set Availability <sup class="text-red-500">*</sup></label>
                <!-- <input type="text" name="first_name" id="firstName" class=" w-full border border-gray-400 bg-none py-1 px-2  rounded-md focus:outline-none" autocomplete="none" required> -->
                <select name="available" id="available" class=" w-full border border-gray-400 bg-none py-1 px-2 rounded-md focus:outline-none  focus:border-black">
                  <option value="select" selected disabled>Availability</option>
                  <option value="1">Yes</option>
                  <option value="0">No</option>
                </select>
              </div>
              <div class="w-[49%] overflow-hidden flex flex-col gap-1">
                <label for="item_price" class="text-sm ">Food Image <sup class="text-red-500">*</sup></label>
                <input type="file" id="item_price" name="item_image" class="file_img w-full border border-gray-400 bg-none rounded-md focus:outline-none  focus:border-black" autocomplete="none" required>
              </div>
            </div>
            <button type="submit" class="w-20 bg-blue-600 hover:bg-blue-700 rounded-md text-white py-1.5 justify-self-right px-2 ml-auto">Add</button>
          </form>
        </div>
      </div>
    </div>

    <!-- Add food item model end -->

    <!-- Add view details model statr-->

    <div class="view-detail-modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center ">
      <div class="view-detail-modal-overlay absolute w-full h-full bg-gray-900/20 backdrop-blur-sm"></div>
      
      <div class="modal-container bg-white w-[500px] md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
        <!-- Add margin if you want to see some of the overlay behind the modal-->
        <div class="modal-content py-4 text-left px-6 w-full">
          <!--Title-->
          <div class="flex justify-between items-center pb-3">
            <p class="text-2xl font-bold">Item Details!</p>
            <div class="view-detail-modal-close cursor-pointer z-50">
              <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
              </svg>
            </div>
          </div>
          <div class="w-full">
            <img src="<?php echo base_url('assets/images/items/Breakfast.jpeg') ;?>" class="w-full h-56 object-center my-4 shadow-gray-400 shadow-md rounded-md" alt="">
            <table id='tableContainer' class="border w-full">
              
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Add view details model end -->

    <!-- Add edit food  item details model start -->

    <div class="edit-item-modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center ">
      <div class="edit-item-modal-overlay absolute w-full h-full bg-gray-900/20 backdrop-blur-sm"></div>
      
      <div class="modal-container bg-white w-[500px] md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
        <!-- Add margin if you want to see some of the overlay behind the modal-->
        <div class="modal-content py-4 text-left px-6">
          <!--Title-->
          <div class="flex justify-between items-center pb-3">
            <p class="text-2xl font-bold">Edit Food Item!</p>
            <div class="edit-item-modal-close cursor-pointer z-50">
              <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
              </svg>
            </div>
          </div>
          <p class="text-sm text-center text-gray-700">Add your favorite category without hesitation.</p>
          <p id="item_edit_status" class="text-sm text-center mt-2  ease-in-out duration-400"></p>
          <form id="editItemId" class="w-full flex flex-col gap-3 mt-4" enctype="multipart/form-data">
            <div class="w-full flex justify-between">
              <div class="w-[49%] flex flex-col gap-1">
                <label for="firstName" class="text-sm">Category Name <sup class="text-red-500">*</sup></label>
                <select name="cat_id" id="category" class=" w-full border border-gray-400 bg-none py-1 px-2 rounded-md focus:outline-none  focus:border-black">
                  <?php foreach ($all_cat as $category) { ?>
                  <option value="select" disable hidden>Select Category</option>
                  <option value="<?php echo $category['id']; ?>"><?php echo $category['cat_name']; ?></option>
                  <?php } ?>
                </select>
              </div>
              <div class="w-[49%] overflow-hidden flex flex-col gap-1">
                <label for="editItemName" class="text-sm">Item Name <sup class="text-red-500">*</sup></label>
                <input type="text" id="editItemName" name="item_name" class=" w-full border border-gray-400 bg-none py-1 px-2 rounded-md focus:outline-none focus:border-black" autocomplete="none" required>
              </div>
            </div>
            <div class="w-full flex justify-between">
              <div class="w-[49%]  flex flex-col gap-1">
                <label for="editItemDetails" class="text-sm">Item Details <sup class="text-red-500">*</sup></label>
                <input type="text" name="item_details" id="editItemDetails" class=" w-full border border-gray-400 bg-none py-1 px-2  rounded-md focus:outline-none  focus:border-black" autocomplete="none" required>
              </div>
              <div class="w-[49%] overflow-hidden  flex flex-col gap-1">
                <label for="edit_item_price" class="text-sm">Price <sup class="text-red-500">*</sup></label>
                <input type="text" id="edit_item_price" name="item_price" class=" w-full border border-gray-400 bg-none py-1 px-2 rounded-md focus:outline-none  focus:border-black" autocomplete="none" required>
              </div>
            </div>
            <div class="w-full flex justify-between">
              <div class="w-[49%] flex flex-col gap-1">
                <label for="available" class="text-sm">Set Availability <sup class="text-red-500">*</sup></label>
                <select name="available" id="availableStatus" class=" w-full border border-gray-400 bg-none py-1 px-2 rounded-md focus:outline-none  focus:border-black">
                  <option value="1">Yes</option>
                  <option value="0">No</option>
                </select>
              </div>
              <div class="w-[49%] overflow-hidden flex flex-col gap-1">
                <label for="edit_item_image" class="text-sm ">Food Image</label>
                <input type="file" id="edit_item_image" name="item_image" class="file_img w-full border border-gray-400 bg-none rounded-md focus:outline-none  focus:border-black" autocomplete="none">
                <a id="fileInfo" target="_blank" class="text-blue-600 hover:underline"></a>   
              </div>
            </div>
            <button id="editItemBtn" data_id="" type="submit" class="w-20 bg-blue-600 hover:bg-blue-700 rounded-md text-white py-1.5 justify-self-right px-2 ml-auto"> Edit </button>
          </form>
        </div>
      </div>
    </div>


    <!-- Add food item details model end -->
  </main>

  <script>
		$(document).ready(function() {

			var table = $('#example').DataTable({
        responsive: true
      })

      $("#addCategoryId").on("submit", (e) => {
        e.preventDefault();
        $("#cat_insert_status").empty();  
        fetch("<?php echo base_url("Admin/set_category");?>", {
          method: 'POST',
          body: new FormData(e.target),
        })
        .then(res => res.json())
        .then(data => {
          if(data.status){
            $("#cat_insert_status").addClass("text-green-600")
            setTimeout(() => {
              $("#cat_insert_status").html(`${data.message}`);
            }, 3000);
            $("#addCategoryId")[0].reset();
          }else{
            $("#cat_insert_status").addClass("text-red-600")
            $("#cat_insert_status").html(`${data.message}`).show();
            setTimeout(() => {
              $("#cat_insert_status").fadeOut();
            }, 3000);
          }
        })
        .catch(err => console.error(err));
      })
		
      $("#addItemId").on("submit", (e) => {
        e.preventDefault();
        $("#item_insert_status").empty();  
        fetch("<?php echo base_url("Admin/set_item");?>", {
          method: 'POST',
          body: new FormData(e.target),
        })
        .then(res => res.json())
        .then(data => {
          if(data.status){
            $("#item_insert_status").addClass("text-green-600")
            setTimeout(() => {
              $("#item_insert_status").html(`${data.message}`);
            }, 3000);
            $("#addItemId")[0].reset();
            // alert('Item set');
          }else{
            $("#item_insert_status").addClass("text-red-600")
            $("#item_insert_status").html(`${data.message}`).show();
            setTimeout(() => {
              $("#item_insert_status").fadeOut();
            }, 3000);
            // alert('not set')
          }
        })
        .catch(err => console.error(err));
      })

      $("#editItemId").on("submit", (e) => {
        e.preventDefault();
        let itemID = $(e.target).find('button[type="submit"]').attr("data_id");
        let formData = new FormData(e.target);
        formData.append('item_id', itemID);
        fetch("<?php echo base_url("Admin/update_item");?>", {
          method: 'POST',
          body: formData
        })
        .then(res => res.json())
        .then(data => {
          if(data.status){
            $("#item_edit_status").addClass("text-green-600")
            $("#item_edit_status").html(`${data.message}`).show();
            setTimeout(() => {
              $("#item_edit_status").fadeOut();
              $("#addItemId")[0].reset();
            }, 3000);
          }else{
            $("#item_edit_status").addClass("text-red-600")
            $("#item_edit_status").html(`${data.message}`).show();
            setTimeout(() => {
              $("#item_edit_status").fadeOut();
            }, 3000);
          }
        })
        .catch(err => console.error(err));
      })
    });
	</script>

  <script>
    function openCatModal(e){
      toggleModal();

      const overlayCat = document.querySelector('.cat-modal-overlay')
      overlayCat.addEventListener('click', toggleModal)
      
      let closecatmodal = document.querySelectorAll('.cat-modal-close')
      for (let i = 0; i < closecatmodal.length; i++) {
        closecatmodal[i].addEventListener('click', toggleModal)
      }
    }
    
    function openItemModal(e){
      toggleItemModal();

      const overlayitem = document.querySelector('.item-modal-overlay')
      overlayitem.addEventListener('click', toggleItemModal)
      
      let closeitemmodal = document.querySelectorAll('.item-modal-close')
      for (let i = 0; i < closeitemmodal.length; i++) {
        closeitemmodal[i].addEventListener('click', toggleItemModal)
      }
    }
    
    function toggleModal () {
      document.getElementById("cat_insert_status").innerHTML = "";
      document.getElementById("addCategoryId").reset();
      const body = document.querySelector('body')
      const modal = document.querySelector('.cat-modal')
      modal.classList.toggle('opacity-0')
      modal.classList.toggle('pointer-events-none')
      body.classList.toggle('modal-active')
    }

    function toggleItemModal(){
      document.getElementById("addItemId").reset();
      const body = document.querySelector('body')
      const modal = document.querySelector('.item-modal')
      modal.classList.toggle('opacity-0')
      modal.classList.toggle('pointer-events-none')
      body.classList.toggle('modal-active')
    }

    function view_detail_model(button){
      
      itemId = button.getAttribute("data-id");
      // console.log('hello');
      let formData = new FormData();
      formData.append("item_id",itemId);
      fetch("<?php echo base_url('Admin/get_view_item_detail'); ?>", {
        method : "post",
        body : formData
      })
      .then(res => res.json())
      .then(data => {
        let status = (data.food_status  == 1) ? 'Available' : 'Unavaiable'; 
        let htmlContent = `
          <tbody>
              <tr class="border">
                  <th class="border px-2 py-2 w-28">Item Name</th>
                  <td class="border px-2 py-2">${data.item_name}</td>
              </tr>
              <tr class="border">
                  <th class="border px-2 py-2">Price</th>
                  <td class="border px-2 py-2">${data.price}</td>
              </tr>
              <tr class="border">
                  <th class="border px-2 py-2">Category</th>
                  <td class="border px-2 py-2">${data.category}</td>
              </tr>
              <tr class="border">
                  <th class="border px-2 py-2">Item Details</th>
                  <td class="border px-2 py-2">${data.item_details}</td>
              </tr>
              <tr class="border">
                  <th class="border px-2 py-2">Food Status</th>
                  <td class="border px-2 py-2">${status}</td>
              </tr>
          </tbody>`;
        document.getElementById("tableContainer").innerHTML = htmlContent;
      })
      .catch(err => console.error(err));
      toggleViewDetailModal();

      const overlayViewDetail = document.querySelector('.view-detail-modal-overlay')
      overlayViewDetail.addEventListener('click', toggleViewDetailModal)
      
      let closeViewDetailmodal = document.querySelectorAll('.view-detail-modal-close')
      for (let i = 0; i < closeViewDetailmodal.length; i++) {
        closeViewDetailmodal[i].addEventListener('click', toggleViewDetailModal)
      }
    }

    function toggleViewDetailModal(){
      // document.getElementById("addItemId").reset();
      const body = document.querySelector('body')
      const modal = document.querySelector('.view-detail-modal')
      modal.classList.toggle('opacity-0')
      modal.classList.toggle('pointer-events-none')
      body.classList.toggle('modal-active')
    }

    function edit_item_details(button){

      itemId = button.getAttribute("data-id");

      let formData = new FormData();
      formData.append("item_id",itemId);
      fetch("<?php echo base_url('Admin/get_edit_item_detail'); ?>", {
        method : "post",
        body : formData
      })
      .then(res => res.json())
      .then(data => {
        console.log(data[0]);
        let image = data[0].image;
        document.getElementById('category').value = data[0].category;
        document.getElementById('editItemName').value = data[0].item_name;
        document.getElementById('editItemDetails').value = data[0].item_details;
        document.getElementById('edit_item_price').value = data[0].price;
        document.getElementById('availableStatus').value = data[0].food_status;

        document.getElementById('fileInfo').textContent = data[0].image;
        document.getElementById('fileInfo').href = "<?php echo base_url('assets/images/items/'); ?>" + image;

        document.getElementById("editItemBtn").setAttribute("data_id", data[0].id);
      })
      .catch(err => console.error(err));

      toggleEditItemModal();

      const overlayEditItem = document.querySelector('.edit-item-modal-overlay')
      overlayEditItem.addEventListener('click', toggleEditItemModal)
      
      let closeEditItemmodal = document.querySelectorAll('.edit-item-modal-close')
      for (let i = 0; i < closeEditItemmodal.length; i++) {
        closeEditItemmodal[i].addEventListener('click', toggleEditItemModal)
      }
    }

    function toggleEditItemModal(){
      const body = document.querySelector('body')
      const modal = document.querySelector('.edit-item-modal')
      modal.classList.toggle('opacity-0')
      modal.classList.toggle('pointer-events-none')
      body.classList.toggle('modal-active')
    }

    function delete_item(button) {
        var formData = new FormData();
        formData.append('id', button.getAttribute('data-id'));

        if (window.confirm('Are you sure you want to delete this item?')) {
          fetch("<?php echo base_url('Admin/delete_item'); ?>", {
              method: "post",
              body: formData
          })
          .then(res => res.json())
          .then(data => {
              if (data.status == true) {
                  alert(data.message);
              } else {
                  alert(data.message);
              }
          })
          .catch(err => console.error("Error is ", err));
        }
      }
  </script>

</body>
</html>