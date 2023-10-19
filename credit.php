<?php

include ('conn/connect.php');
session_start();

//$user_id = $_SESSION['user_id'] ;

if(isset($_POST['order_btn'])){

   $name = $_POST['name'];
   $number = $_POST['number'];
   $email = $_POST['email'];
   $city = $_POST['city'];
   $street = $_POST['street'];
   $state = $_POST['state'];
   $pin_code = $_POST['pin_code'];
   $placed_on = date('d-M-Y');

   $price_total = 0;
   $product_name[] = '';
   header("location:thanks.php");
   
   $cart_query = mysqli_query($conn, "SELECT * FROM `crt`");
   
   if(mysqli_num_rows($cart_query) > 0){
      while($product_item = mysqli_fetch_assoc($cart_query)){
         $product_name[] = $product_item['p_name'] .' ('. $product_item['quantity'] .') ';
         $product_price = number_format($product_item['price'] * $product_item['quantity']);
         $price_total += $product_price;
      };
   };

   $total_product = implode(', ',$product_name);
   $detail_query = mysqli_query($conn, "INSERT INTO `orders`( name, email, number,city, street, state,  pin_code, total_products, total_price, placed_on) VALUES('$user_id','$name','$email','$number','$city','$street','$state','$pin_code','$total_product','$price_total','$placed_on')") or die('query failed');

   if($cart_query && $detail_query){
      echo "
      <div class='order-message-container'>
      <div class='message-container'>
         <h3>thank you for shopping!</h3>
         <div class='order-detail'>
            <span>".$total_product."</span>
            <span class='total'> total : $".$price_total."/-  </span>
         </div>
         <div class='customer-details'>
            <p> your name : <span>".$name."</span> </p>
            <p> your number : <span>".$number."</span> </p>
            <p> your email : <span>".$email."</span> </p>
            <p> your address : <span> ".$city.", ".$street.",".$state.",  - ".$pin_code."</span> </p>
            <p> your payment mode : <span>".$method."</span> </p>
            <p>(*pay when product arrives*)</p>
         </div>
            <a href='index.php' class='btn'>continue shopping</a>
         </div>
      </div>
      ";
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>checkout</title>
   <!-- CSS only -->
   <link rel="stylesheet" href="css/credit.css">

</head>
<body>



<div class="container">

<section class="checkout-form">

   <h1 class="heading">complete your order</h1>

   <form action="" method="post">

   <div class="display-order">
      <div class="container">


   <?php
         $select_cart = mysqli_query($conn, "SELECT * FROM `crt`");
         $total = 0;
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
            $total_price = number_format($fetch_cart['price'] * $fetch_cart['quantity']);
            $grand_total = $total += $total_price;
      ?>
      <span><?= $fetch_cart['p_name']; ?>(<?= $fetch_cart['quantity']; ?>)</span>
      <?php
         }
      }else{
         echo "<div class='display-order'><span>your cart is empty!</span></div>";
      }
      ?>
      <span class="grand-total"> grand total : $<?= $grand_total; ?>/- </span>
   </div>
     
   </div>

      <div class="flex">
         <div class="inputBox">
            <span>your name</span>
            <input type="text" placeholder="enter your name" name="name" required>
         </div>
         <br>
         <div class="inputBox">
            <span>your number</span>
            <input type="tel" pattern="[0-9\s]{10}"  placeholder="enter your number" name="number" required>
         </div>
         <br>
         <div class="inputBox">
            <span>your email</span>
            <input type="email" placeholder="enter your email" name="email" required>
         </div>
         <br>
         <div class="inputBox">
            <span>city</span>
            <input type="text" placeholder="e.g. udupi" name="city" required>
         </div>
         <br>
         <div class="inputBox">
            <span>street</span>
            <input type="text" placeholder="enter delivery address" name="street" required>
         </div>
         <br>
         <div class="inputBox">
            <span>state</span>
            <input type="text" placeholder="e.g. karnataka" name="state" required>
         </div>
         <br>
         <div class="inputBox">
            <span>pin code</span>
            <input type="text" placeholder="e.g. 123456" name="pin_code" required>
         </div>
      
      <br>
      
        <div class="inputBox">
            <span>card number</span>
            <input type="number" pattern="[0-9\s]{16}" placeholder="Enter Cared Number" class="card-number-input" required>
        </div>
        <div class="inputBox">
            <span>card holder</span>
            <input type="text" placeholder="Enter owners name"class="card-holder-input"required>
        </div>
            <div class="inputBox">
                <span>expiration mm</span>
                <select name="" id="" class="month-input"required>
                    <option value="month" selected disabled>month</option>
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
            </div>
            <div class="inputBox">
                <span>expiration yy</span>
                <select name="" id="" class="year-input"required>
                    <option value="year" selected disabled>year</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                    <option value="2029">2029</option>
                    <option value="2030">2030</option>
                </select>
            </div>
            <div class="inputBox">
                <span>cvv</span>
                <input type="number" pattern="[0-9\s]{3}" placeholder="Enter CVV"  class="cvv-input">
            </div>
        </div>
      
      <br>
      <input type="submit" value="order now" name="order_btn" class="btn">
   </div>
   </form>

</section>

</div>
</body>
</html>