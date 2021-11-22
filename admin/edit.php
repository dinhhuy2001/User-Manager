<?php
include('includes/header.php');
include('connection.php');
$id = $_GET["id"];

$firstname = "";
$lastname = "";
$email = "";
$password = "";

$res = mysqli_query($link, "select * from table1 where id=$id");
while ($row = mysqli_fetch_array($res)) {
    $firstname = $row["firstname"];
    $lastname = $row["lastname"];
    $email = $row["email"];
    $password = $row["password"];
}
?>
<div class="container-fluid px-4">
    <h4 class="mt-4">User Manager</h4>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">User Manager</li>
    </ol>
    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    <h4>Edit User</h4>
                </div>
                <div class="card-body">
                    <form action="" name="form1" method="post">
                        <div class="form-group">
                            <label for="firstname">Firstname</label>
                            <input type="text" class="form-control" id="firstname" placeholder="Enter firstname" name="firstname" value="<?php echo $firstname; ?>">
                        </div>
                        <div class="form-group">
                            <label for="lastname">Lastname</label>
                            <input type="text" class="form-control" id="lastname" placeholder="Enter lastname" name="lastname" value="<?php echo $lastname; ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $email; ?>">
                        </div>
                        <div class="form-group">
                            <label for="lastname">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" value="<?php echo $password; ?>">
                        </div>
                        <div class="container" style="height:50px;width:100px;margin:10px auto;">
                            <button type="submit" name="update" class="btn btn-default" style="margin:20px auto; background-color:grey;">Update</button>
                        </div>

                    </form>
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
if (isset($_POST["update"])) {
    mysqli_query($link, "update table1 set firstname='$_POST[firstname]',lastname='$_POST[lastname]',email='$_POST[email]',password='$_POST[password]' where id=$id");
?>
    <script type="text/javascript">
        window.location = "view-register.php";
    </script>
<?php
}
?>