<?php

require "../assets/db/connection.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management | Add Product</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <!-- Header -->
    <?php
    include "header.php";
    ?>
    <!-- Header -->
    <div class="container-fluid">
        <div class="row vh-100">
            <!-- Sidebar -->
            <?php
            include "sidebar.php";
            ?>
            <!-- Sidebar -->

            <!-- Main Content -->

            <div class="col-md-9 col-lg-10 px-md-4">
                <div class="d-flex justify-content-between align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1>Product Management | Add Product</h1>
                </div>

                <div class="col-12 mt-4 border-bottom">
                    <div class="row mb-4">
                        <div class="col-12 col-md-6">
                            <label for="pname" class="form-label">Product Name</label>
                            <input type="text" id="pname" class="form-control" placeholder="Enter Product Name">
                        </div>

                        <div class="col-12 col-md-6">
                            <label for="desc" class="form-label fw-semibold">Product Description</label>
                            <textarea id="desc" class="form-control" placeholder="Enter Product Description" rows="1" required></textarea>
                        </div>
                    </div>
                    <div class="row mt-4">

                        <div class="col-12 col-md-3 mb-4">
                            <label for="brand" class="form-label fw-semibold">Select Brand</label>
                            <select id="brand" class="form-select" required>
                                <option value="">Select Brand</option>

                                <?php
                                
                                $rs = Database::search("SELECT * FROM `brand`");

                                $num = $rs->num_rows;

                                for ($i = 0; $i < $num; $i++) {
                                    $data =  $rs->fetch_assoc();
                                
                                ?>
                                <option value="<?php echo $data["brand_id"] ?>"><?php echo $data['name'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>

                        <div class="col-12 col-md-3 mb-4">
                            <label for="category" class="form-label fw-semibold">Select Category</label>
                            <select id="category" class="form-select" required>
                                <option value="">Select Category</option>
                                <?php
                                
                                $rs = Database::search("SELECT * FROM `category`");

                                $num = $rs->num_rows;

                                for($i = 0; $i < $num; $i++){
                                    $data = $rs->fetch_assoc();

                                ?>
                                <option value="<?php echo $data["category_id"] ?>"><?php echo $data['name'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>

                        <div class="col-12 col-md-3 mb-4">
                            <label for="color" class="form-label fw-semibold">Select Color</label>
                            <select id="color" class="form-select" required>
                                <option value="">Select Color</option>
                                <?php
                                
                                $rs = Database::search("SELECT * FROM `color`");

                                $num = $rs->num_rows;

                                for($i = 0; $i < $num; $i++){
                                    $data = $rs->fetch_assoc();

                                ?>
                                <option value="<?php echo $data["color_id"] ?>"><?php echo $data['name'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>

                        <div class="col-12 col-md-3 mb-4">
                            <label for="size" class="form-label fw-semibold">Select Size</label>
                            <select id="size" class="form-select" required>
                                <option value="">Select Size</option>
                                <?php
                                
                                $rs = Database::search("SELECT * FROM `product_size`");

                                $num = $rs->num_rows;

                                for($i = 0; $i < $num; $i++){
                                    $data = $rs->fetch_assoc();

                                ?>
                                <option value="<?php echo $data["size_id"] ?>"><?php echo $data['name'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12 col-md-4 mb-4">
                            <label for="img1" class="form-label fw-semibold">Product Image 1</label>
                            <input type="file" id="img1" class="form-control" placeholder="Choose Product Image 1" required>
                        </div>

                        <div class="col-12 col-md-4 mb-4">
                            <label for="img2" class="form-label fw-semibold">Product Image 2</label>
                            <input type="file" id="img2" class="form-control" placeholder="Choose Product Image 2" required>
                        </div>

                        <div class="col-12 col-md-4 mb-4">
                            <label for="img3" class="form-label fw-semibold">Product Image 3</label>
                            <input type="file" id="img3" class="form-control" placeholder="Choose Product Image 3" required>
                        </div>
                    </div>
                    <div class="row mt-4 mb-4">
                        <div class="col-12 d-flex justify-content-center">
                            <button class="btn btn-color w-50" onclick="addProduct();">Add Product
                                
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Content -->


            <!-- Footer -->
            <?php
            include "footer.php";
            ?>
            <!-- Footer -->
        </div>
    </div>
    <script src="../assets/js/fontawosome.js"></script>
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/sweetalert2.js"></script>
    <script src="../assets/js/bootstrap.bundle.js"></script>
</body>

</html>