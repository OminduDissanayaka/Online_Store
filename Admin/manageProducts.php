<?php
session_start();

require "../assets/db/connection.php";

if (!isset($_SESSION['admin'])) {
    header("Location: signin.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
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
                    <h1>Product Management</h1>
                    <div class="d-flex align-items-center">
                        <input type="text" id="ProductSearch" class="form-control me-2" placeholder="Product ID or Name">
                        <button class="btn btn-color">Search</button>
                    </div>
                </div>
                <div class="col-12 mt-4 border-bottom">
                    <div class="row">
                        <div class="col-3 d-flex">
                            <button type="submit" class="btn btn-color w-100 d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#addBrand">Add Brand</button>
                        </div>

                        <div class="col-3 d-flex">
                            <button type="submit" class="btn btn-color w-100 d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#addCategory">Add Category</button>
                        </div>

                        <div class="col-3 d-flex">
                            <button type="submit" class="btn btn-color w-100 d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#addColor">Add Color</button>
                        </div>

                        <div class="col-3 d-flex">
                            <button type="submit" class="btn btn-color w-100 d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#addSize">Add Size</button>
                        </div>
                    </div>
                    <div class="row mt-4 mb-4">
                        <div class="col-12 col-md-6 mb-4">
                            <a class="btn btn-color w-100" href="addProduct.php">Add New Product</a>
                        </div>

                        <div class="col-12 col-md-6 mb-4">
                            <button class="btn btn-color w-100" data-bs-toggle="modal" data-bs-target="#updateStock">Update Stock</button>
                        </div>
                    </div>
                </div>
                <div class="table-responsive mt-4">
                    <table class="table table-striped table-hover mt-4">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Product ID</th>
                                <th>Brand</th>
                                <th>Category</th>
                                <th>Product Name</th>
                                <th>Description</th>
                                <th>Color</th>
                                <th>Size</th>
                                <th>Qty</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>00123</td>
                                <td>Abc</td>
                                <td>Mens Shirt</td>
                                <td>T Shirt</td>
                                <td>Description T-Shirt</td>
                                <td>Red</td>
                                <td>XL</td>
                                <td>10</td>
                                <td>2500</td>
                                <td class="d-flex justify-content-start align-items-stretch">
                                    <button class="btn btn-sm btn-warning me-2 w-100">Update</button>
                                    <button class="btn btn-sm btn-success me-2 w-100">Active</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>00124</td>
                                <td>Abc</td>
                                <td>Mens Shirt</td>
                                <td>T Shirt</td>
                                <td>Description T-Shirt</td>
                                <td>Red</td>
                                <td>XL</td>
                                <td>10</td>
                                <td>2500</td>
                                <td class="d-flex justify-content-start align-items-stretch">
                                    <button class="btn btn-sm btn-warning me-2 w-100">Update</button>
                                    <button class="btn btn-sm btn-danger me-2 w-100">Inactive</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
    <!-- Models -->

    <!-- Add Brand -->
    <div class="modal fade" id="addBrand" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content shadow-lg rounded-3">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">Add New Brand</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <div class="mb-3">
                        <label for="brandName" class="form-label fw-semibold">Brand Name</label>
                        <input type="text" id="brandName" class="form-control" placeholder="Enter Brand Name">
                    </div>
                    <button class="btn btn-color w-100 fw-semibold" onclick="addBrand();">Add Brand</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Add Brand -->

    <!-- Add Category -->
    <div class="modal fade" id="addCategory" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content shadow-lg rounded-3">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">Add New Category</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <div class="mb-3">
                        <label for="categoryName" class="form-label fw-semibold">Category Name</label>
                        <input type="text" id="categoryName" class="form-control" placeholder="Enter Category Name">
                    </div>
                    <button class="btn btn-color w-100 fw-semibold" onclick="addCategory();">Add Category</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Add Category -->

    <!-- Add Color -->

    <div class="modal fade" id="addColor" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content shadow-lg rounded-3">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">Add New Color</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <div class="mb-3">
                        <label for="colorName" class="form-label fw-semibold">Color Name</label>
                        <input type="text" id="colorName" class="form-control" placeholder="Enter Color Name">
                    </div>
                    <button class="btn btn-color w-100 fw-semibold" onclick="addColor();">Add Color</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Color -->

    <!-- Add Size -->

    <div class="modal fade" id="addSize" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content shadow-lg rounded-3">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">Add New Size</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <div class="mb-3">
                        <label for="sizeName" class="form-label fw-semibold">Size Name</label>
                        <input type="text" id="sizeName" class="form-control" placeholder="Enter Size Name">
                    </div>
                    <button class="btn btn-color w-100 fw-semibold" onclick="addSize();">Add Size</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Size -->


    <!-- Stock Model -->

    <div class="modal fade" id="updateStock" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content shadow-lg rounded-3">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">Update Stock</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <div class="mb-3">
                        <label for="stockName" class="form-label fw-semibold">Stock Name</label>
                        <select id="selectProduct" class="form-select" required>
                            <option value="">Select Product</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="productQty" class="form-label fw-semibold">Quantity</label>
                        <input type="number" id="productQty" class="form-control" placeholder="Enter Quantity" required>
                    </div>

                    <div class="mb-3">
                        <label for="productPrice" class="form-label fw-semibold">Price</label>
                        <div class="input-group">
                            <span class="input-group-text">LKR</span>
                            <input type="number" id="productPrice" class="form-control" placeholder="Enter Price" required>
                        </div>
                    </div>

                    <button class="btn btn-color w-100 fw-semibold" onclick="updateStock();">Update Stock</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Stock Model -->

    <!-- Models -->
    <script src="../assets/js/fontawosome.js"></script>
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/sweetalert2.js"></script>
    <script src="../assets/js/bootstrap.bundle.js"></script>
</body>

</html>