<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div calss="card">
        <div class="card-header">
            <h1><u>Edit products</u></h1>
                <div class="card-body">
                    <?php
                        include('conn/connect.php');
                        if(isset($_GET['product_id']))
                        {
                            $product_id = $_GET['product_id'];
                            $product_query = "SELECT * from products where product_id = '$product_id' limit 1 ";
                            $product_query_res = mysqli_query($conn, $product_query);

                            if(mysqli_num_rows($product_query_res) > 0)
                            {
                                $p_row = mysqli_fetch_array($product_query_res);
                                ?>
                                 <?php
                            }
                            else
                            {
                                ?>
                                <h4> no record found</h4>
                                <?php
                            }
                        }

                    ?>

                                
                    
                                <form action="" method="POST" enctype="multipart/form-data">
                                
                                <div class="row">
                                <div class="col-md-6">
                                    <label for="">category</label>
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
                                        foreach($category_run as $row)
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
                            <input type="hidden" name="product_id" value="<?php echo $p_row['product_id'];?>"/>
                            <div class="name">    
                            <label for="">name</label>
                            <input type="text" required name="product_name" value="<?php echo $p_row['p_name'];?> " placeholder="Ente product Name"  class="name" required>
                            </div>
                            
                            <div class="description">
                            <label for="">description</label>
                            <input type="text" name="description" value="<?php echo $p_row['description'];?>" placeholder="Ente description"  class="name" required>
                            </div>
                            
                            <div class="price">
                            <label for="">price</label>
                            <input type="text" name="price" value="<?php echo $p_row['price'];?>" placeholder="Ente price"  class="name" required>
                            </div>
                            
                            <div class="img">
                            <label for="">image</label>
                            <input type="hidden" name="old_img" value="<?php echo $p_row['img']?>">
                            
                            <input type="file" name="img"  class="name" required>
                            <img src="/admin_side/uploads/<?php echo $p_row['img']?>" alt="product image" width="20px" height="20px"> 
                            </div>
                        
                            <div class="button">
                            <input type="submit" name="insert_btn" value="edit product" class="btn"/>
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
    $product_id = $_POST['product_id'];
    $name = $_POST['product_name'];
    $category_id = $_POST['category_id'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    
    $path = "/admin_side/uploads";
    $new_img = $_FILES['img']['name'];
    $old_img = $_POST['old_img'];
    $update_filename = '';
    
    if($new_img != "")
    {
        $image_extension = pathinfo($new_img, PATHINFO_EXTENSION);
        $update_filename = time().'.'.$image_extension;;
    }
    else
    {
        $update_filename = $old_img;
    }
    $select_prod = mysqli_query($conn, "SELECT * FROM products WHERE p_name = '$name'");
    if(mysqli_num_rows($select_prod) > 0)
   {
      echo 'product alrdy exist in tbl';
   }
   else
   {
        $query = "UPDATE products set p_name = '$name', category_id = '$category_id', description = '$description', price = '$price', img = '$update_filename' where product_id = '$product_id' ";
        $query_run = mysqli_query($conn, $query);
        if($query_run)
        {
            if($_FILES['img']['name'] != "")
            {
                move_uploaded_file($_FILES['img']['tmp_name'], $path.'/'.$update_filename);
                if(file_exists("/admin_side/uploads/".$old_img))
                {
                    unlink("/admin_side/uploads/".$old_img);
                }
            }
         echo "product updated successfully";
        }
        else
        {
            echo "went wrong" ;
        }
   }
}
?>
</body>
</html>
