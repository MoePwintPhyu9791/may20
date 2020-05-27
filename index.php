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
            <div class="col-md-4">
                <h3>Our Services</h3>
                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores ex eum, laborum pariatur quasi quae tenetur provident debitis magni repellat illo est esse nisi quam, voluptatum dolor libero sint.</p>
            </div>
            <div class="col-md-4">
                <h3>Our Information</h3>
                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores ex eum, laborum pariatur quasi quae tenetur provident debitis magni repellat illo est esse nisi quam, voluptatum dolor libero sint.</p>
            </div>
            <div class="col-md-4">
                <h3>Our Products</h3>
                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores ex eum, laborum pariatur quasi quae tenetur provident debitis magni repellat illo est esse nisi quam, voluptatum dolor libero sint.</p>
            </div>
        </div>
    </div>
    <section class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Welcome to SFU</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus reprehenderit mollitia ipsa! Qui magnam tempora iusto dicta possimus veritatis in consequuntur, labore quisquam non? Magni quia commodi quasi hic. Rem.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-success text-warning py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4"> 
                    <label for="name">Computer</label> 
                    <br>
                    <img src="images/computer.jpg" alt="pot cake" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <label for="name">Printer</label>
                    <br>
                    <img src="images/printer.jpg" alt="pot cake" class="img-fluid">
                </div>
                <div class="col-md-4">
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
                </div>
            </div>
        </div>
    </section>
    <section class="bg-dark py-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-white text-center">
                        &copy;Copyright 2020. All right reserved. developed by: mpp
                    </p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>