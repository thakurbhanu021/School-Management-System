<?php include('../includes/config.php') ?>
<?php include('./header.php') ?>

<?php include('./sidebar.php') ?>

<?php
    if(isset($_POST['submit'])) {
        $title = $_POST['title'];

        mysqli_query($db_conn, "INSERT INTO sections (title) VALUE ('$title')") OR die('saccadv');;
    } else{

    }

?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Manage Sections</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="./dashboard.php">Admin</a></li>
                    <li class="breadcrumb-item active">Sections</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <!-- Info boxes -->
                <div class="card">
                    <div class="card-header py-2">
                        <h3 class="card-title">
                            Classes
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive bg-white">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>S.No.</th>
                                        <th>Title</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $count = 1;
                                    $query = mysqli_query($db_conn, 'SELECT * FROM sections');
                                    while ($sections = mysqli_fetch_object($query)) { ?>
                                        <tr>
                                            <td><?= $count; ?></td>
                                            <td><?= $sections->title ?></td>
                                            <td></td>
                                        </tr>

                                    <?php $count++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <div class="col-lg-4">
                <!-- Info boxes -->
                <div class="card">
                    <div class="card-header py-2">
                        <h3 class="card-title">
                            Add New Section
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" placeholder="Title" required class="form-control">
                            </div>
                            <button name="submit" class="btn btn-success float-right">Submit</button>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
        </div>
    </div><!--/. container-fluid -->
</section>
<?php include('./footer.php') ?>