<?php
include('includes/header.php');
include('connection.php')
?>
<div class="container-fluid px-4">
    <h1 class="mt-4">User Manager</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Total Users
                    <?php
                    $dash_user_query = "SELECT * from table1";
                    $dash_user_query_run = mysqli_query($link, $dash_user_query);
                    if ($user_total = mysqli_num_rows($dash_user_query_run)) {
                        echo '<h4 class="mb-0">' . $user_total . '</h4>';
                    } else {
                        echo '<h4 class=mb-0"> No Data </h4>';
                    }
                    ?>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="details.php">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Total Lessons
                    <h4 class="mb-0">80</h4>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">Total Blocked Users
                    <h4 class="mb-0">0</h4>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include('includes/footer.php');
    include('includes/scripts.php');
    ?>