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
                        <h4 > View Categories
                            <a href="Addcategory.php" class="btn-btn-primary float-end"></a>
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
                                            <th>EDIT</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include('conn/connect.php');
                                            $category = "select * from category";
                                            $category_run = mysqli_query($conn, $category);
                                            if(mysqli_num_rows($category_run) > 0)
                                            {
                                                foreach($category_run as $item)
                                                {
                                        ?>
                                                
                                                <tr>
                                                    <td><?= $item['category_id']?></td>
                                                    <td><?= $item['category_name']?></td>
                                                    <td>
                                                        <a href="edct.php?category_id=<?= $item['category_id']?>" class="button">Edit</a>
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
</body>
</html>