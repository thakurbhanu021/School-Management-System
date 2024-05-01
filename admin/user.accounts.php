<?php include('../includes/config.php') ?>
<?php include('./header.php') ?>

<?php include('./sidebar.php') ?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Manage Accounts</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="./dashboard.php">Account</a></li>
                    <li class="breadcrumb-item active"> <?php echo ucwords($_REQUEST['user'])  ?> </li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Info boxes -->
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

                    while ($users = mysqli_fetch_object($user_result)) 
                    { 
                        ?>
                        <!-- echo $users->email . '<br>'; -->
                        <tr>
                            <td> <?=$count++?> </td>
                            <td> <?=$users->name?></td>
                            <td> <?=$users->email?></td>
                            <td></td>
                        </tr>

                    <?php } ?>
                </tbody>

            </table>

        </div>
        <!-- /.row -->

    </div><!--/. container-fluid -->
</section>
<?php include('./footer.php') ?>