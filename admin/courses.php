<?php include('../includes/config.php') ?>
<?php include('./header.php') ?>

<?php
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $category = $_POST['category'];
    $duration = $_POST['duration'];
    $image = $_FILES["thumbnail"]["name"];

    $target_dir = "../dist/uploads/";
    $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["thumbnail"]["tmp_name"]);
        if ($check !== false) {
            // echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            $_SESSION['failed_msg'] = 'File is not an image.';
            // echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        $_SESSION['failed_msg'] = 'Sorry, file already exists.';
        // echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["thumbnail"]["size"] > 500000) {
        $_SESSION['failed_msg'] = 'Sorry, your file is too large.';
        // echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        $_SESSION['failed_msg'] = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed.';
        // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        // $_SESSION['failed_msg'] = 'Sorry, your file was not uploaded.';
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) {
            mysqli_query($db_conn, "INSERT INTO courses (name,category,duration,img) VALUE ('$name', '$category', '$duration', '$image')") or die(mysqli_error($db_conn));

            $_SESSION['success_msg'] = 'File has been uploaded successfully';

            header("location: ./courses.php");
        } else {
            $_SESSION['failed_msg'] = 'Sorry, there was an error uploading your file.';
            // echo "Sorry, there was an error uploading your file.";
        }
    }
    // header('Location: ./courses.php');
}
?>


<?php include('./sidebar.php') ?>


<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Manage Courses</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= $site_url ?>/dashboard.php">Admin</a></li>
                    <li class="breadcrumb-item active">Courses</li>
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
                        Add New Course
                    </h3>
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" placeholder="Course Title" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="category">Course Category</label>
                            <select name="category" id="category" class="form-control">
                                <option value="">Select Category</option>
                                <option value="program">Programming</option>
                                <option value="web">Web Development</option>
                                <option value="app">App Development</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="duration">Duration</label>
                            <input type="text" name="duration" id="Duration" required class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="file" name="thumbnail" id="thumbnail" required>
                        </div>
                        <button name='submit' class="btn btn-success">Submit</button>
                        <div class="form-group mt-2">
                            <?php if (isset($_SESSION['failed_msg'])) { ?>
                                <small class='text-danger ml-2' style='font-size:16px;'>
                                    <?= $_SESSION['failed_msg'] ?>
                                </small>
                            <?php unset($_SESSION['failed_msg']);
                            } ?>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.row -->

        <?php  } else { ?>
            <!-- Info boxes -->
            <div class="card">
                <div class="card-header py-2">
                    <h3 class="card-title">
                        Courses
                    </h3>
                    <div class="card-tools">
                        <a href="?action=add-new" class="btn btn-primary btn-xs"><i class="fa fa-plus me-2"></i> Add New</a>
                    </div>
                </div>
                <?php
                if (isset($_SESSION['success_msg'])) { ?>
                    <div class="col-12">
                        <small class='text-success ml-2' style='font-size:16px;'>
                            <?= $_SESSION['success_msg'] ?>
                        </small>
                    </div>
                <?php unset($_SESSION['success_msg']);
                }
                ?>
                <div class="card-body">
                    <div class="table-responsive bg-white">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Duration</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $count = 1;
                                $course_query = mysqli_query($db_conn, 'SELECT * FROM courses');
                                while ($course = mysqli_fetch_object($course_query)) { ?>
                                    <tr>
                                        <td><?= $count; ?></td>
                                        <td> <img src="../dist/uploads/<?= $course->img ?>" alt="<?= $course->img ?>" width="100px" class="border"> </td>
                                        <td><?= $course->name ?></td>
                                        <td><?= $course->category ?></td>
                                        <td><?= $course->duration ?></td>
                                        <td><?= $course->date ?></td>
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
        <?php }
        ?>

    </div><!--/. container-fluid -->
</section>
<?php include('./footer.php') ?>