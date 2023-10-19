<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view.css">
    <title>Document</title>
</head>
<body>
<div class="container" >
        <!--<h1 class="mb-2"> Categories</h1>-->
        <div class="row">
            <div class="col-xl">
                <div class="card">
                    <div class="card-header">
                        <h4 > View Products
                            <a href="Addcategory.php" class="btn-btn-primary float-end"></a>
                        </h4>
                    </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>NAME</th>
                                            <th>CATEGORY</th>
                                            <th>IMAGE</th>
                                            <th>EDIT</th>
                                            <th>DELETE</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include('connection/connect.php');
                                            //$products = "select * from products  ";
                                            $products = "SELECT p.*, c.category_name as cname  from products p , cat c  where c.category_id = p.product_id ";
                                            $product_run = mysqli_query($conn, $products);
                                            if(mysqli_num_rows($product_run) > 0)
                                            {
                                                foreach($product_run as $item)
                                                {
                                                    ?>
                                                
                                                <tr>
                                                    <td><?= $item['product_id']?></td>
                                                    <td><?= $item['p_name']?></td>
                                                    <td><?= $item['cname']?></td>
                                                    <td><?= $item['img']?></td>
                                                    <td><img src = "../uploads/imgs/<? = $item['img']?>" width="20px" height="20px"/></td>
                                                    <td>
                                                        
                                                        <a href="#">edit</a>
                                                    </td>
                                                    <td>
                                                        <form action="" method="POST">
                                                            <button type="submit" name="submit" value="<?php echo $item['product_id'];?>" class="btn">delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                <?php
                                                }
                                            }
                                            else
                                            {
                                                ?>
                                                <tr>
                                                    <td colspan="5">No Record Found</td>
                                                </tr>
                                                <?php
                                            }
                                            ?>

                        </table>
                    </div>
                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
<?php
include('connect.php');
if(isset($_POST['submit']))
{
    $product_id = $_POST['submit'];

    $query = "DELETE FROM products WHERE product_id='$product_id' limit 1";
    $query_run = mysqli_query($conn, $query );

    if($query_run)
    {
       echo "product deleted successfully";
    
    }
    else
    {
        echo "went wrong" ;
    }
}
?>
</body>
</html>
