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
</head>
<body>
  <?php include_once ("common/sidebar.php"); ?>
  <?php include_once ("common/navbar.php"); ?>
  <main class="py-8 px-16">
    <h1 class="text-2xl font-medium">Dashboard</h1>
    <div class="my-8 flex gap-4">
      <div class="w-48 h-20 border bg-white rounded-lg shadow-md border-gray-300 flex justify-center items-center gap-4">
        <div class=" bg-green-100 rounded-full w-10 h-10 flex justify-center items-center">
          <i class="fa-solid fa-list text-green-600"></i>
        </div>
        <div>
          <h4 class="text-2xl"><?php echo $all_info['categories']['total_cat'];  ?></h4>
          <span class="text-sm text-gray-600">Total Category</span>
        </div>
      </div>

      <div class="w-48 h-20 border bg-white rounded-lg shadow-md border-gray-300 flex justify-center items-center gap-4">
        <div class=" bg-orange-100 rounded-full w-10 h-10 flex justify-center items-center">
          <i class="fa-solid fa-bowl-food text-orange-600"></i>
        </div>
        <div>
          <h4 class="text-2xl"><?php echo $all_info['items']['total_items']; ?></h4>
          <span class="text-sm text-gray-600">Total Items</span>
        </div>
      </div>

      <div class="w-48 h-20 border bg-white rounded-lg shadow-md border-gray-300 flex justify-center items-center gap-4">
        <div class=" bg-blue-100 rounded-full w-10 h-10 flex justify-center items-center">
          <!-- <i class="fa-solid fa-bowl-food text-orange-600"></i> -->
          <i class="fa-solid fa-users text-blue-600"></i>
        </div>
        <div>
          <h4 class="text-2xl">400</h4>
          <span class="text-sm text-gray-600">Total User</span>
        </div>
      </div>
    </div>
  </main>
</body>
</html>