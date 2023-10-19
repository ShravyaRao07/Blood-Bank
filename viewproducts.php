<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin/viewst.css">
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
                            <a href="" class="btn-btn-primary float-end"></a>
                        </h4>
                    </div>
                        <div class="card-body">
                        <div class="bck">
                            <a href="index.php">Back</a>
                            </div>
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
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <?php
                                        include('conn/connect.php');
                                            
                                            $products = "SELECT p.*, c.category_name as cname  from products p , category c  where c.category_id = p.category_id ";
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
                                                    
                                                    <td><img src ="../admin_side/uploads/<?php echo $item['img']?>" width="20px" height="20px"/></td>
                                                    <td>
                                                        
                                                        <a href="editpro.php?product_id=<?=$item['product_id']?>" class="button">Edit</a>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="button">delete</a>
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
                                            </form>

                        </table>
                    </div>
                </div>
                        
                    </div>
                </div>
            </div>
        </div>
</div>
</body>
</html>