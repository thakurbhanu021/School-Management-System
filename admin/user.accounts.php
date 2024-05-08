<?php include('../includes/config.php') ?>

<?php
 $error = '';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5(1234567890);
    $type = $_POST['type'];

    $check_query = mysqli_query($db_conn, "SELECT * FROM accounts WHERE email = '$email'");

    if(mysqli_num_rows($check_query)>0){
        $error = 'Email already exists!';
    } 
    else {
        $query = "INSERT INTO accounts (`name` , `email` , `password`, `type`) VALUES ('$name', '$email', '$password', '$type')";

        mysqli_query($db_conn, $query) or die(mysqli_error($db_conn));
    
        $_SESSION['success_msg'] = ucfirst($type) . ' has been successfuly registered!';
    
        header('location: user.accounts.php?user=' . $type);
    
        exit();
    }    
}

?>


<?php include('./header.php') ?>

<?php include('./sidebar.php') ?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <div class="d-flex">
                    <h1 class="m-0">Manage Accounts</h1>
                    <a href="?user=<?= $_REQUEST['user'] ?>&action=add-new" class="btn btn-primary bt-sm ml-2">Add New</a>
                </div>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="./dashboard.php">Account</a></li>
                    <li class="breadcrumb-item active"> <?php echo ucfirst($_REQUEST['user'])  ?> </li>
                </ol>
            </div><!-- /.col -->
            <?php
            if (isset($_SESSION['success_msg'])) { ?>
                <div class="col-12">
                    <small class='text-success ml-2' style='font-size:16px;'>
                        <?= $_SESSION['success_msg'] ?>
                    </small>
                </div>
            <?php
                unset($_SESSION['success_msg']);
            }
            ?>
        </div><!-- /.row -->

    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Info boxes -->
        <?php if (isset($_GET['action']) && $_GET['action']) { ?>
            <div class="card w-50 m-auto">
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group mt-4">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Full Name" />
                            <!-- <label class="form-label" for="name">Your Name</label> -->
                        </div>
                        <div class="form-group mt-4">
                            <input type="email" id="email" name="email" class="form-control mb-4" placeholder="Email" />
                            <?=$error?>
                            <!-- <label class="form-label" for="email">Your Email</label> -->
                        </div>
                        <input type="hidden" id="type" name="type" class="form-control" value="<?php echo $_REQUEST['user']  ?>" />
                        <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">Register</button>
                    </form>
                </div>
            </div>
        <?php } else { ?>
            <div class="table-responsive bg-white">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $count = 1;
                        $user_query = 'SELECT * FROM accounts WHERE `type` = "' . $_REQUEST['user'] . '"';
                        $user_result = mysqli_query($db_conn, $user_query);

                        // 3 ways to fetch data 

                        // one way 

                        // while( $users = mysqli_fetch_array($user_result)){
                        //     echo $users['email'];
                        // }

                        // second way 

                        // $user = mysqli_fetch_all($user_result, MYSQLI_ASSOC);
                        // print_r($user);

                        // third way 

                        while ($users = mysqli_fetch_object($user_result)) {
                        ?>
                            <!-- echo $users->email . '<br>'; -->
                            <tr>
                                <td> <?= $count++ ?> </td>
                                <td> <?= $users->name ?></td>
                                <td> <?= $users->email ?></td>
                                <td></td>
                            </tr>

                        <?php } ?>
                    </tbody>

                </table>

            </div>
        <?php } ?>

        <!-- /.row -->

    </div><!--/. container-fluid -->
</section>
<?php include('./footer.php') ?>