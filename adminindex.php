<?php
include('conn/connect.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/admin/indexstyle.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
<body>
  <div class="sidebar close">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Admin Panel</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="#">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Dashboard</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-list-ul' id="cat" ></i>
            <span class="link_name">Category</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#"><U>Category</U></a></li>
          <li><a href="Addcategory.php">Add Category</a></li>
          <li><a href="viewcat.php">Edit category</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-chevron-right-circle'></i>
            <span class="link_name">Products</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#"><U>Products</U></a></li>
          <li><a href="addproducts.php">Add Products</a></li>
          <li><a href="viewproducts.php">Edit/Delete Products</a></li>
          
        </ul>
      </li>
      <li>
        <a href="#">
            <i class='bx bx-cart'></i>
          <span class="link_name">orders</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Orders</a></li>
        </ul>
      </li>
      <ul class="sub-menu blank">
        <li>
            <a href="index.php">
                <i class='bx bx-log-out' id="log_out"></i>
                <span class="link_name">Logout</span>
            </a>
        </li>
      </ul>
    <!--<i class='bx bx-log-out' ></i>-->
    </div>
  </li>
</ul>
</div>
  <section class="home-section">
    <div class="home-content">
      <div class="img"></div>
      
      <i class='bx bx-menu' ></i>
      <span class="text"> Welcome Admin </span>
    </div>
  </section>
  <script>
  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
   arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
  </script>
</body>
</html>
