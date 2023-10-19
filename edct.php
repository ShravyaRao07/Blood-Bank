<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin/editst.css">
    <title>Document</title>
</head>
<body>
<div class="container" >
        <!--<h1 class="mb-2"> Categories</h1>-->
        <div class="row">
            <div class="col-xl">
                <div class="card">
                    <div class="card-header">
                        <h1 class="font-weight-bold text-primarymt-2"><b> Edit Categories</b></h1>
                    </div>
                    <div class="card-body">
                    <?php
                        include('conn/connect.php');
                        if(isset($_GET['category_id']))
                        {
                            $category_id = $_GET['category_id'];
                            $category_edit = "SELECT * from category where 	category_id ='$category_id' limit 1";
                            $category_run = mysqli_query($conn, $category_edit);
                            
                            if(mysqli_num_rows($category_run) > 0)
                            {
                                $row = mysqli_fetch_array($category_run);
                                
                            }
                            else
                            {
                                ?>
                                <h4> No Record Found</h4>
                                <?php
                            }
                        }
                    ?>
                    <form action="" method="POST">
                        <div class="id">
                            <input type="text"  name='category_id' value="<?=$row['category_id'];?>">
                        </div>
                        <div class="category-name">
                            <input type="text" name="category_name" value="<?= $row['category_name'];?>" placeholder="Enter Category Name"  class="form-control" required>
                            </div>
                            <div class="button">
                                <input type="submit" name="update_cat" value="Update Category" class="btn btn-primary">
                                <!--<a href="viewcat.php" class="btn btn-secondary">Back</a>-->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
<?php
include('conn/connect.php');
if(isset($_POST['update_cat']))
{
    $category_id = $_POST['category_id'];
    $cat_name = $_POST['category_name'];
    $select_cat = mysqli_query($conn, "SELECT * FROM category WHERE category_name = '$cat_name'");

   if(mysqli_num_rows($select_cat) > 0)
   {
      echo 'category alrdy exist in tbl';
   }
   else
   {
        $query = "UPDATE category set category_name = '$cat_name' where category_id='$category_id' ";
        $query_run = mysqli_query($conn, $query);
        if($query_run)
        {
            echo "updated successfully";
        
        }
        else
        {
            echo "something went wrong";
        }
    }
}
?>
</body>
</html>










