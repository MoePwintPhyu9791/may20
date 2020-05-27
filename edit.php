<?php
    $id = $_GET['id'];

    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'php_3');

    $con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

    if($con === false)
    {
       die("Error:". mysqli_connect_error());
    }
    $sql = "SELECT * FROM items WHERE id = ".$id;
    $resultData = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($resultData);
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
                    <form action="senddata.php" method="post">
                        <div class="form-group">
                          <label for="iid">ID</label>
                          <input type="text"
                            class="form-control" name="iid" id="iid" aria-describedby="helpId" placeholder="Enter Item ID">
                          <small id="helpId" class="form-text text-white">Enter Item ID.</small>
                        </div>
                        <div class="form-group">
                          <label for="name">Item_Name</label>
                          <input type="text"
                            class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="Enter Item Name">
                          <small id="helpId" class="form-text text-white">Enter Item Name.</small>
                        </div>
                        <div class="form-group">
                          <label for="code">Item_code</label>
                          <input type="text"
                            class="form-control" name="code" id="code" aria-describedby="helpId" placeholder="Enter Item Code">
                          <small id="helpId" class="form-text text-white">Enter Item Code.</small>
                        </div>
                        <div class="form-group">
                          <label for="price">Item_Price</label>
                          <input type="text"
                            class="form-control" name="price" id="price" aria-describedby="helpId" placeholder="Enter Item Price">
                          <small id="helpId" class="form-text text-white">Enter Item Price.</small>
                        </div>
                        <div class="form-group">
                          <label for="image">Item_Image</label>
                          <input type="text"
                            class="form-control" name="image" id="image" aria-describedby="helpId" placeholder="Any Image?!">
                          <small id="helpId" class="form-text text-white"></small>
                        </div>
                        <div class="form-group">
                          <label for="description">Item_Description</label>
                          <input type="text"
                            class="form-control" name="description" id="description" aria-describedby="helpId" placeholder="Enter Item Description">
                          <small id="helpId" class="form-text text-white">Enter Item Description.</small>
                        </div>
                        <div class="form-group">
                          <label for="remark">Item_Remark</label>
                          <textarea class="form-control" name="remark" id="remark" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="categoryID">Category_ID</label>
                          <input type="text"
                            class="form-control" name="categoryID" id="categoryID" aria-describedby="helpId" placeholder="Enter Category ID">
                          <small id="helpId" class="form-text text-white">Enter Category ID.</small>
                        </div>
                        <input type="submit" value="Send" class="btn btn-light">
                    </form>
</body>
</html>