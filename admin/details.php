<?php
include('includes/header.php');
include('connection.php')
?>
<div class="container-fluid px-4">
    <h4 class="mt-4">User Manager</h4>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">User Details</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Email</th>
                                <th>Password</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $res = mysqli_query($link, "select * from table1");
                            while ($row = mysqli_fetch_array($res)) {
                                echo "<tr>";
                                echo "<td>";
                                echo $row["id"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["firstname"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["lastname"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["email"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["password"];
                                echo "</td>";
                                echo "</tr>";
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('includes/footer.php');
include('includes/scripts.php');
?>