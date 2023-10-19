<?php

include 'conn/connect.php';
if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['p_name'];
   $product_price = $_POST['price'];
   $product_image = $_POST['img'];
   $product_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM crt WHERE p_name = '$product_name'");

   if(mysqli_num_rows($select_cart) > 0)
   {
      $message[] = 'product already added to cart';
      header("location:crt.php");
   }
   else
   {
      $insert_product = mysqli_query($conn, "INSERT INTO crt(p_name, price, img, quantity) VALUES('$product_name', '$product_price', '$product_image','$product_quantity')");
      $message[] = 'product added to cart succesfully'; 
      header("location:crt.php");
   }

}
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};
    $select_rows = mysqli_query($conn, "SELECT * FROM crt") or die('query failed');
    $row_count = mysqli_num_rows($select_rows);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<div class="col-lg-5 col-md-7 col-6">
    <div class="middel_right">
        <div class="search_btn">
            <a href="search.php"><i class="ion-ios-search-strong"></i></a>
                <div class="search">
                    <form action="" method="POST">
                        <input type="text" name="search" value="<?php if(isset($_POST['search'])){echo $_POST['search'];}?>"placeholder="Search Product ....">
                        <button type="submit"><i class="ion-ios-search-strong" ></i></button>
                    </form>
                </div>
        </div>
    </div>
</div>
                                        


<?php
    include('conn/connect.php');
    if(isset($_POST['search']))
    {
        $srch = $_POST['search'];
        $query = "SELECT * from products where p_name like '%{$srch}%' ";
        $query_run = mysqli_query($conn, $query);

        if(mysqli_num_rows($query_run) > 0)
        {
           while($fetch_product = mysqli_fetch_assoc($query_run)){
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
            echo"no result";
         }
        }
         else{
            echo"";
         }
         ?>
         
    </body>
</html>
        
    

