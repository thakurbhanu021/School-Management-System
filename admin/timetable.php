<?php include('../includes/config.php') ?>
<?php include('./header.php') ?>

<?php include('./sidebar.php') ?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Manage Time Table</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="./dashboard.php">Admin</a></li>
                    <li class="breadcrumb-item active">Time Table</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <form action="">
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="class">Select Class</label>
                            <select name="class" id="class" class="form-control" required>
                                <option value="">-Select Class-</option>
                                <?php
                                // $classes = get_the_classes($db_conn);
                                $args = array(
                                    'type' => 'class',
                                    'status' => 'publish',
                                );
                                $classes = get_posts($args);
                                foreach ($classes as $key => $class) { ?>
                                    <option value="<?= $class->id ?>"><?= $class->title ?></option>
                                <?php }
                                ?>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group" id="section-container">
                                <label for="section">Select Section</label>
                                <select name="section" id="section" class="form-control" required>
                                    <option value="">-Select Section-</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Timings</th>
                            <th>Monday</th>
                            <th>Tuesday</th>
                            <th>Wednesday</th>
                            <th>Thursday</th>
                            <th>Friday</th>
                            <th>Saturday</th>
                            <th>Sunday</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $args = array(
                            'type' => 'period',
                            'status' => 'publish',
                        );
                        $periods = get_posts($args);

                        foreach ($periods as $period) { ?>
                            <tr>
                                <td>7:00 AM - 7:45 AM</td>
                                <?php
                                $days = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'];

                                foreach ($days as $day) {
                                    $query =  mysqli_query($db_conn, "SELECT * FROM posts as p INNER JOIN metadata as md ON (md.item_id = p.id) INNER JOIN metadata as mp ON (mp.item_id = p.id) WHERE p.type = 'timetable' AND p.status = 'publish' AND md.meta_key = 'day_name' AND md.meta_value = '$day' AND mp.meta_key = 'period_id' AND mp.meta_value = '$period->id'");

                                    if (mysqli_num_rows($query) > 0) {
                                        while ($timetable = mysqli_fetch_object($query)) {   ?>
                                            <td>
                                                <p>
                                                    <b>Teacher:</b> <?php $teacher_id = get_metadata($timetable->item_id, 'teacher_id',)[0]->meta_value;
                                                                    echo get_user_data($teacher_id)[0]->name;
                                                                    ?>
                                                    <br>
                                                    <b>Class:</b> Class 1 <br>
                                                    <b>Section:</b> B <br>
                                                    <b>Subject:</b> Mathematics <br>
                                                </p>
                                            </td>
                                        <?php }
                                    } else { ?>
                                        <td>
                                            Unscheduled
                                        </td>
                                <?php }
                                } ?>
                            </tr>
                        <?php  } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!--/. container-fluid -->
</section>
<?php include('./footer.php') ?>