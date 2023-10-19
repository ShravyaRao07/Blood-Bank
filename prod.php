<?php

include 'conn/connect.php';


if(isset($_POST['add_to_cart'])){
session_start();

$user_id = $_SESSION['user_login'] ;
if(!isset($_SESSION[$user_id]))


   $product_name = $_POST['p_name'];
   $product_price = $_POST['price'];
   $product_image = $_POST['img'];
   $product_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM crt WHERE p_name = '$product_name'");

   if(mysqli_num_rows($select_cart) > 0)
   {
      $message[] = 'product already added to cart';
   }
   else
   {
      $insert_product = mysqli_query($conn, "INSERT INTO crt(p_name, price, img, quantity) VALUES('$product_name', '$product_price', '$product_image','$product_quantity')");
      $message[] = 'product added to cart succesfully';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>products</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>

<?php
      
    $select_rows = mysqli_query($conn, "SELECT * FROM crt") or die('query failed');
    $row_count = mysqli_num_rows($select_rows);

?>

      <a href="cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a>

<div class="container">

<section class="products">

   <h1 class="heading">latest products</h1>

   <div class="box-container">

      <?php
      $category_id = $_GET['id'];
      $select_products = mysqli_query($conn, "SELECT * FROM products where category_id ='$category_id' ");
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){
      ?>

      <form action="" method="post">
         <div class="box">
            <img src="admin_side/uploads/<?php echo $fetch_product['img']; ?>" alt=""width = "20px" height = "10px">
            <h3><?php echo $fetch_product['p_name']; ?></h3>
            <div class="price">$<?php echo $fetch_product['price']; ?>/-</div>
            <input type="hidden" name="p_name" value="<?php echo $fetch_product['p_name']; ?>">
            <input type="hidden" name="price" value="<?php echo $fetch_product['price']; ?>">
            <input type="hidden" name="img" value="<?php echo $fetch_product['img']; ?>">
            <input type="submit" class="btn" value="add to cart" name="add_to_cart">
         </div>
      </form>

      <?php
         }
      }
      else
      {
         echo '<p class="empty">no products added yet!</p>';
      }
      
      ?>

   </div>

</section>

</div>




</body>
</html>