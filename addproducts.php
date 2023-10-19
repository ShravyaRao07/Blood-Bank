<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin/addproducts.css">
    <title>Document</title>
</head>
<body>
    <div class="card">
        <div class="card-header">
            <h1><u>Add products</u></h1>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                    <div class="row">
                    <div class="col-md-6">
                        <label for="">CATEGORY:</label>
                        <?php
                            include('conn/connect.php');
                            $category = " SELECT * from category";
                            $category_run = mysqli_query($conn, $category);
                                
                            if(mysqli_num_rows($category_run) > 0)
                            {
                                ?>
                                <select name="category_id" required calss="form-control">
                                <option selected>--select category--</option>
                                <?php
                                while($row = mysqli_fetch_assoc($category_run))
                                {
                                    ?>
                                    <option value="<?php echo $row["category_id"] ?>"><?php echo  $row["category_name"] ?></option>
                                    <?php
                                }
                                    ?>
                                </select>
                                <?php
                            }   
                            else
                            {
                                ?>
                                <h5> no category available</h5>  
                                <?php
                            }
                                ?>
                    
                    <div class="name">    
                    <label for="">NAME:</label>
                    <input type="text" required name="product_name" placeholder="Ente product Name"  class="name" required>
                    </div>
                    <div>

                        <label for="">AVAILABILITY:</label>
                        <select name="product_availability" id="product_availability" required>
                        <option value="stock" selected>In Stock</option>
                        <option value="outofstock">Out Of Stock</option>
                        </div>

                    <div class="description">
                    <label for="">DESCRIPTION:</label>
                    <input type="text" name="description" placeholder="Ente description"  class="name" required>
                    </div>
                    
                    <div class="price">
                    <label for="">PRICE:</label>
                    <input type="text" name="price" placeholder="Ente price"  class="name" required>
                    </div>
                    
                    <div class="img">
                    <label for="">IMAGE:</label>
                    <input type="file" name="img" placeholder="choose file"  class="name" required>
                    </div>
                
                    <div class="button">
                    <input type="submit" name="insert_btn" value="ADD PRODUCT" class="btn"/>
                    </div>
                </div>
                </div>
                </form>
        </div>
    </div>
    </div>
<?php
include('conn/connect.php');
if(isset($_POST['insert_btn']))
{
    
    $name = $_POST['product_name'];
    $category_id = $_POST['category_id'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image = $_FILES['img']['name'];
    $image_extension = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time().'.'.$image_extension;
    
    $select_prod = mysqli_query($conn, "SELECT * FROM products WHERE p_name = '$name'");
    if(mysqli_num_rows($select_prod) > 0)
   {
      echo 'product alrdy exist in tbl';
   }
   else
   {
        $query = "INSERT into products(p_name, category_id, description, price, img) values('$name','$category_id','$description','$price','$filename')";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            move_uploaded_file($_FILES['img']['tmp_name'], 'admin_side/uploads/'.$filename);
            echo " product added successfully";
        }
        else
        {
            echo " something went wrong";
        }
    }
}

?>
</body>
</html>




