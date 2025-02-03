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
    <title>Dashboard</title>
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
            <!-- Side Bar-->

            <?php
            include "sidebar.php";
            ?>

            <!-- Side Bar-->

            <!-- Main Content -->

            <div class="col-md-9 ms-sm-auto col-lg-10">

                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 mb-3 border-bottom">
                    <h1>Dashboard</h1>
                </div>

                <div class="row g-3">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card shadow-lg">
                            <div class="card-body text-center">
                                <h5 class="card-title">Users</h5>
                                <p class="fs-4">2457</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card shadow-lg">
                            <div class="card-body text-center">
                                <h5 class="card-title">Sales</h5>
                                <p class="fs-4">2564</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card shadow-lg">
                            <div class="card-body text-center">
                                <h5 class="card-title">Orders</h5>
                                <p class="fs-4">1769</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card shadow-lg">
                            <div class="card-body text-center">
                                <h5 class="card-title">Revenue</h5>
                                <p class="fs-4">LKR 895,250.000</p>
                            </div>
                        </div>
                    </div>

                    <!-- Chart Section -->

                    <div class="row mt-3 g-3">

                        <div class="col-lg-8">
                            <div class="card shadow-lg">
                                <div class="card-header bg-dark text-white">Sales Overview</div>
                                <div class="card-body">
                                    <canvas id="salesChart"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- Chart Section-->

                        <!-- Recent Orders -->

                        <div class="col-lg-4">
                            <div class="card shadow-lg">
                                <div class="card-head bg-dark text-white">Recent Orders</div>
                                <div class="card-body">
                                    <ul class="list-group-item">Order $15124</ul>
                                    <ul class="list-group-item">Order $15124</ul>
                                    <ul class="list-group-item">Order $15124</ul>
                                    <ul class="list-group-item">Order $15124</ul>
                                    <ul class="list-group-item">Order $15124</ul>

                                </div>
                            </div>
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
    <script src="../assets/js/chart.js"></script>
    <script>
        var chart = document.getElementById("salesChart");

        new Chart(chart, {
            type: 'line',
            data: {
                labels: [
                    "Jan", "Feb", "Mar", "Apr", "May", "Jun",
                    "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
                ],
                datasets: [{
                    label: 'Sales Data',
                    data: [1200, 1900, 4522, 854, 456, 2300, 1500, 3100, 5000, 4200, 3900, 2800],
                    borderColor: 'blue',
                    tension: 0.1
                }],
            },

            options:{
                responsive: true,
                maintainAspectRatio: false,
            }
        });
    </script>
</body>

</html> 