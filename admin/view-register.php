<?php
include('includes/header.php');
include('connection.php')
?>
<div class="container-fluid px-4">
    <h4 class="mt-4">User Manager</h4>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">User Manager</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="col-lg-4">
                        <form action="" name="form1" method="post">
                            <div class="form-group">
                                <label for="firstname">Firstname</label>
                                <input type="text" class="form-control" id="firstname" placeholder="Enter firstname" name="firstname">
                            </div>
                            <div class="form-group">
                                <label for="lastname">Lastname</label>
                                <input type="text" class="form-control" id="lastname" placeholder="Enter lastname" name="lastname">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="lastname">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                            </div>
                            <button type="submit" name="insert" class="btn btn-default" style="background-color:grey;margin: 15px 20px;">Insert</button>
                            <button type="submit" name="update" class="btn btn-default" style="background-color:grey;margin: 15px 20px;">Update</button>
                            <button type=" submit" name="delete" class="btn btn-default" style="background-color:grey;margin: 15px 20px;">Delete</button>
                        </form>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Edit</th>
                                <th>Delete</th>
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
                                echo "<td>"; ?> <a href="edit.php?id=<?php echo $row["id"]; ?>"><button type="button" class="btn btn-success">Edit</button></a> <?php echo "</td>";
                                                                                                                                                                echo "<td>"; ?> <a href="delete.php?id=<?php echo $row["id"]; ?>"><button type="button" class="btn btn-danger">Delete</button></a> <?php echo "</td>";
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
<?php
if (isset($_POST["insert"])) {
    mysqli_query($link, "insert into table1 value(NULL,'$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[password]')");
?>
    <script type="text/javascript">
        window.location.href = window.location.href;
    </script>
<?php
}
if (isset($_POST["delete"])) {
    mysqli_query($link, "delete from table1 where firstname='$_POST[firstname]'") or die(mysqli_error($link));
?>
    <script type="text/javascript">
        window.location.href = window.location.href;
    </script>
<?php
}
if (isset($_POST["update"])) {
    mysqli_query($link, "update table1 set firstname='$_POST[lastname]' where firstname='$_POST[firstname]'") or die(mysqli_error($link));
?>
    <script type="text/javascript">
        window.location.href = window.location.href;
    </script>
<?php
}

?>