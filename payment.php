<?php
include('header.php');
include 'conn/connect.php';

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>
    <div class="d-grid gap-2">
       <h2> <center>Kindly Choose Your Payment Mode To Checkout</center></h2>
        <br>
        <br>
        <br>
        <br>
    <button type="submit" class="btn btn-light" name="cod"><a href="cod.php">CASH ON DELIVERY</button></a>
    <br>
    <br>
    <br>
    <br>
    <button type="submit" class="btn btn-light" name="credit"><a href="credit.php">CREDIT CARD</button></a>
</div>
</body>
