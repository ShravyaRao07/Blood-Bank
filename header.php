
<?php include("conn/connect.php");
include("functions/function.php");
  

$cat =  display_cat();
?>
<?php
$products = get_product('category_id');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/user/style.css">
</head>
<body>
    

<div class="header_bottom sticky-header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="main_menu_inner">
                                <div class="logo_sticky">
                                    <a href="#"><img src="images/logo/logo1.jpg" alt="logo"></a>
                                </div>
                                <div class="main_menu">
                                    <nav>
                                        <ul>
                                            <li class="active">
                                                <a href="#">Home </a>
                                            </li>
                                            <li>
                                                <a href="categories.php">Category <i class="ion-chevron-down"></i></a>
                                                <ul class="sub_menu">
                                                <?php
                                                    while($row = mysqli_fetch_assoc($cat))
                                                    {
                                                        ?>
                                                        <li><a href="prod.php?id=<?=$row['category_id'];?>">
                                                        <?php echo $row['category_name'] ?></a></li>
                                                        <?php 
                                                    }
                                                    ?>
                                                </ul>
                                            </li>
                                            
                                            <li><a href="#">About Us</a>
                                                
                                                </li>
                                            <li><a href="#">Contact us<i class="ion-chevron-down"></i></a>
                                                    <ul class="sub_menu">
                                                    </ul>
                                                    </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header bottom ends -->
        </header>
        </body>
</html>