
  <style>
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    .side-bar{
      position: fixed;
      top: 0;
      left: 0;
      width: 65px;
      height: 100%;
      background: #ffffff;
      overflow: hidden;
      color: #5b5b5b;
      padding: 6px 8px;
      z-index: 100;
      transition: .3s ease-in;
      overflow: hidden;
      white-space: nowrap;
    }
    .side-bar.open{
      width: 200px; 
    }
    .side-bar .menu{
      text-align: center;
      border-radius: 10px;
      transition: 0.2s ease-out;
      cursor: pointer;
    }
    .side-bar .menu:hover{
      background: #dbdbdb;
      color: #5b5b5b;
    }
    .side-bar ul{
      margin-top: 20px;
      height: 100%;
    }
    .side-bar ul li{
      list-style: none;
      display: block;
    }
    .side-bar ul a{
      display: flex;
      text-decoration: none;
      gap: 0.5rem;
      justify-content: start;
      align-items: baseline;
      color: #5b5b5b;
    }
    .side-bar ul a:hover{
      background: #efefef;
      border-radius: 10px;
      
    }
    .side-bar i{
      color: #434343;
      height: 60px;
      min-width: 50px;
      text-align: center;
      line-height: 60px;
      transition: 0.1s ease-in-out;
    }

    main {
      min-height: calc(100vh - 55px);
      background: #f5f5f5;
      margin-left: 65px;
      
      transition: margin-left .3s ease-in;;
    }

    .side-bar.open ~ main {
      margin-left: 200px;
    }
    
  </style>
</head>
<body>
    <div class="side-bar">
      <div>
        <i class="bx bx-menu menu"></i>
        Foodi Adda
      </div>
      <!-- Sidebar icons -->
      <hr>
      <ul>
        <li>
          <a href="<?php echo base_url('Admin/home') ;?>">
            <!-- <i class='bx bx-grid-alt'></i> -->
            <i class="fas fa-house-user" title="Dashboard"></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#">
            <!-- <i class='bx bx-user' ></i> -->
            <!-- <i class='bx bx-cart-download' ></i> -->
            <i class="fa-solid fa-cart-arrow-down" title="Orders"></i>
            <span class="links_name">Orders</span>
          </a>  
        </li>
        <li>
          <a href="<?php echo base_url('Admin/food_menu') ;?>">
            <!-- <i class='bx bx-chat' ></i> -->
            <i class="bx bx-food-menu" title="Food Menu"></i>
            <span class="links_name">Food Menu</span>
          </a>
          
        </li>
        <li>
          <a href="#">
            <i class='bx bx-pie-chart-alt-2' title="Expenses"></i>
            <span class="links_name">Expenses</span>
          </a>
          
        </li>
        <li>
          <a href="#">
            <!-- <i class='bx bx-folder' ></i> -->
            <i class='bx bx-user' title="User"></i>
            <span class="links_name">User</span>
          </a>
          
        </li>
        <!-- <li>
          <a href="#">
            <i class='bx bx-cart-alt' ></i>
            <span class="links_name">Order</span>
          </a>
          
        </li> -->
        <!-- <li>
          <a href="#">
            <i class='bx bx-heart' ></i>
            <span class="links_name">Saved</span>
          </a>
          
        </li> -->
        <li>
          <a href="#">
            <i class='bx bx-cog' title="Setting"></i>
            <span class="links_name">Setting</span>
          </a>
          
        </li> 
      </ul>
    </div>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      let sidebar = document.querySelector(".side-bar");
      let toggleBtn = document.querySelector(".menu");
      let homePage = document.querySelector(".home-page")

      toggleBtn.addEventListener("click", (e) => {
        e.preventDefault();
        sidebar.classList.toggle("open");
        homePage.classList.toggle("open");
      });
    });
  </script>
