<?php

    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'php_3');

    $con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

    if($con === false)
    {
       die("Error:". mysqli_connect_error());
    }

    $id = $_POST['iid'];
    $item_name = $_POST['name'];
    $item_code = $_POST['code'];
    $item_price = $_POST['price'];  
    $item_image = $_POST['image'];
    $item_description = $_POST['description'];
    $item_remark = $_POST['remark'];
    $category_id = $_POST['categoryID'];

    $sql = "INSERT INTO items (id,item_name,item_code,item_price,item_image,item_description,item_remark,category_id) VALUES('$id','$item_name','$item_code','$item_price','$item_image','$item_description','$item_remark','$category_id')";
    $result = mysqli_query($con,$sql);

    // if($result){
    //     echo "Save Successfully.";
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.css">
</head>
<body>
    <?php include('nav.php');?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>Item Number</th>
                        <th>Item Code</th>
                        <th>Item Price</th>
                        <th>Item image</th>
                        <th>Item description</th>
                        <th>Item remark</th>
                        <th>Category ID</th>
                        <th></th>
                    </tr>
                    <?php 

                        $readData = "SELECT * FROM items";
                        $resultData = mysqli_query($con,$readData);
                        $rowCount = mysqli_num_rows($resultData);
                        
                        if($rowCount > 0){   
                            while($row = mysqli_fetch_assoc($resultData))   
                            {
                                                     
                    ?>
                    <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['item_name'];?></td>
                        <td><?php echo $row['item_code'];?></td>
                        <td><?php echo $row['item_price'];?></td>
                        <td><?php echo $row['item_image'];?></td>
                        <td><?php echo $row['item_description'];?></td>
                        <td><?php echo $row['item_remark'];?></td>
                        <td><?php echo $row['category_id'];?></td>
                        <td>
                        <a href="edit.php?id=<?php.echo $row['$id'];?>" class="btn btn-primary">Edit
                        </a>
                        </td>
                    </tr>
                    <?php
                    
                     } 
                        }
                        else{
                            echo "There is no record!";
                        }
                    ?>  
                </table>
            </div>
        </div>
    </div>
    <section class="bg-success py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione maxime sunt commodi! Doloremque aspernatur amet, commodi deserunt autem cupiditate laudantium cum. Reprehenderit magnam officiis sapiente quos, nesciunt architecto expedita mollitia?</p>
                </div>
                <div class="col-md-4">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione maxime sunt commodi! Doloremque aspernatur amet, commodi deserunt autem cupiditate laudantium cum. Reprehenderit magnam officiis sapiente quos, nesciunt architecto expedita mollitia?</p>
                </div>
                <div class="col-md-4">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione maxime sunt commodi! Doloremque aspernatur amet, commodi deserunt autem cupiditate laudantium cum. Reprehenderit magnam officiis sapiente quos, nesciunt architecto expedita mollitia?</p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>