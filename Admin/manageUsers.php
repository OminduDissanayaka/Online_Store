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
    <title>User Management</title>
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
    <div class="d-flex justify-content-between align-items-center pt-3 pb-3 mb-3 border-bottom">
        <h1>User Management</h1>
        <div class="d-flex align-items-center">
            <input type="text" id="UserSearch" class="form-control me-2" placeholder="Search by Name or Email">
            <button class="btn btn-color" id="Usersearchbtn">Search</button>
        </div>
    </div>
    <!-- data table -->
     <div class="table-responsive mt-4">
        <table class="table table-striped table-hover align-midle">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Full name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Omindu Dissanayaka</td>
                    <td>ominduanjana@gmail.com</td>
                    <td>0760510568</td>
                    <td><span class="badge bg-success">Active</span></td>
                    <td>
                        <button class="btn btn-sm btn-warning me-2"><i class="fa-light fa-pen-to-square me-2"></i>Change Status</button>
                    </td>
                </tr>

                <tr>
                    <td>1</td>
                    <td>Damindu Dissanayaka</td>
                    <td>damindu@gmail.com</td>
                    <td>0718080458</td>
                    <td><span class="badge bg-danger">Inactive</span></td>
                    <td>
                        <button class="btn btn-sm btn-warning me-2"><i class="fa-light fa-pen-to-square me-2"></i>Change Status</button>
                    </td>
                </tr>
            </tbody>
        </table>
     </div>
    <!-- data table -->
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