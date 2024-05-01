<?php include('../includes/config.php') ?>
<?php include('./header.php') ?>

<?php include('./sidebar.php') ?>

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
        <?php
        if (isset($_REQUEST['action'])) { ?>
            <!-- Info boxes -->
            <div class="card">
                <div class="card-header py-2">
                    <h3 class="card-title">
                        Add New Section
                    </h3>
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" placeholder="Title" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="section">Section</label>
                            <?php
                            $query = mysqli_query($db_conn, 'SELECT * FROM sections');
                            $count = 1;
                            while ($sections = mysqli_fetch_object($query)) { ?>
                                <div>
                                    <label for="<?=$count?>">
                                        <input type="checkbox" id='<?=$count?>' name="section[]" placeholder="Section" required>
                                    </label>
                                    <?=$sections->title?>
                                </div>
                            <?php $count++; }
                            ?>

                        </div>
                        <button class="btn btn-success">Submit</button>
                    </form>
                </div>

            </div>

            <!-- /.row -->


        <?php  } else { ?>
            <!-- Info boxes -->
            <div class="card">
                <div class="card-header py-2">
                    <h3 class="card-title">
                        Classes
                    </h3>
                    <div class="card-tools">
                        <a href="?action=add-new" class="btn btn-primary btn-xs"><i class="fa fa-plus me-2"></i> Add New</a>
                    </div>
                </div>
                <div class="card-body">
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
                        </table>
                    </div>
                </div>

            </div>

            <!-- /.row -->
        <?php }
        ?>

    </div><!--/. container-fluid -->
</section>
<?php include('./footer.php') ?>