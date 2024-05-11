<?php include('./includes/config.php'); ?>
<?php include('./header.php') ?>

<!-- Navbar -->

<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggle button -->
        <button data-mdb-collapse-init class="navbar-toggler" type="button" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Navbar brand -->
            <a class="navbar-brand mt-2 mt-lg-0" href="#">
                SMP
                <!-- <img src="#" height="15" alt="MDB Logo" loading="lazy" /> -->
            </a>
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Course</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Event</a>
                </li>
                <!-- <li class="nav-item dropdown">
                    <a data-mdb-dropdown-init class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" aria-expanded="false">
                        Dropdown link
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="#">Action</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Another action</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </li>
                    </ul>
                </li> -->
            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->

        <!-- Right elements -->
        <div class="d-flex align-items-center">
            <!-- Icon -->
            <!-- Notifications -->

            <!-- <div class="dropdown">
                <a data-mdb-dropdown-init class="link-secondary me-3 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button" aria-expanded="false">
                    <i class="fas fa-bell"></i>
                    <span class="badge rounded-pill badge-notification bg-danger">1</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                    <li>
                        <a class="dropdown-item" href="#">Some news</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Another news</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </li>
                </ul>
            </div> -->

            <!-- Avatar -->
            <div class="dropdown ">

                <?php if (isset($_SESSION['login'])) { ?>
                    <a data-mdb-dropdown-init class="dropdown-toggle d-flex align-items-center hidden-arrow me-2" href="#" id="navbarDropdownMenuAvatar" role="button" aria-expanded="false">
                        <i class="fa fa-user me-2"></i> Account
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                        <li>
                            <a class="dropdown-item" href="./admin/dashboard.php">Dashboard</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Settings</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="./logout.php">Logout</a>
                        </li>
                    </ul>
                <?php } else { ?>
                    <a data-mdb-dropdown-init class="dropdown-toggle d-flex align-items-center hidden-arrow " href="#" id="navbarDropdownMenuAvatar" role="button" aria-expanded="false">
                        <i class="fa fa-user me-5"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                        <li>
                            <a class="dropdown-item" href="./login.php">Login</a>
                        </li>
                    </ul>
                <?php } ?>
            </div>

        </div>
        <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
</nav>

<!-- Navbar -->

<!-- Hero Section -->

<div class="d-flex shadow-lg" style="height: 500px;background: linear-gradient(-45deg, #3923a7 50%, transparent 50%);">
    <div class="container-fluid my-auto">
        <div class="row px-3">
            <div class="col-lg-6 my-auto">
                <h1 class="display-3">School Management System</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam at tempore neque qui tempora minima libero possimus consequuntur. Id, odit.</p>
                <a href="#" class="btn btn-lg btn-primary">Call to action</a>
            </div>
            <div class="col-lg-6">
                <div class="col-lg-8 mx-auto card shadow-lg">
                    <div class="card-body">
                        <h3 class="text-center">Inquiry Form</h3>
                        <form action="" method="post">
                            <div class="form-outline mt-4" data-mdb-input-init>
                                <input type="text" id="name" class="form-control" />
                                <label class="form-label" for="name">Your Name</label>
                            </div>
                            <div class="form-outline mt-4" data-mdb-input-init>
                                <input type="email" id="email" class="form-control" />
                                <label class="form-label" for="email">Your Email</label>
                            </div>
                            <div class="form-outline mt-4" data-mdb-input-init>
                                <input type="tel" id="mobile" class="form-control" />
                                <label class="form-label" for="mobile">Your Phone number</label>
                            </div>
                            <div class="form-outline mt-4" data-mdb-input-init>
                                <input type="text" id="query" class="form-control" />
                                <label class="form-label" for="query">Your Query</label>
                            </div>
                            <button type="button" class="btn btn-primary btn-block mt-4" data-mdb-ripple-init>Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Hero Section -->

<!-- About us -->

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 my-auto">
                <h2 class="">About <br>School Management System</h2>
                <div class="pr-5">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae, tenetur aut voluptatem ipsum voluptate quisquam!</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam accusamus autem nisi, unde sit quae, fugit soluta, adipisci ad dolorem omnis molestias velit error? Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam nam praesentium earum officia veritatis ex, iure, deleniti unde eligendi maiores dolores deserunt voluptatibus quia obcaecati quam explicabo ut magnam facere exercitationem quaerat, consequatur hic.</p>
                </div>
                <a href="about-us.php" class="btn btn-primary">Know more</a>
            </div>
            <div class="col-lg-6">
                <img src="./assets/images/undraw_Co-working_re_w93t-removebg-preview.png" alt="about" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- About us -->

<!-- Course Section -->
<style>
        .course-images {
            width: 100%;
            height: 170px !important; 
            object-fit: cover;
            object-position: center;
        }
    </style>

<section class="py-5 bg-light">
    <div class="text-center mb-5">
        <h2 class="">Our Courses</h2>
        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, aspernatur?</p>
    </div>
    <div class="container">
        <div class="row">
            <?php
            $query = mysqli_query($db_conn, 'SELECT * FROM courses ORDER BY id DESC LIMIT 0,8');
            
            // for ($i = 0; $i < 8; $i++) { 
             while ($course = mysqli_fetch_object($query)) { ?>
                <div class="col-lg-3 mt-3">
                    <div class="card ">
                        <img src="./dist/uploads/<?=$course->img ?>" alt="" class="img-fluid rounded-top course-images" >
                        <div class="card-body text-center">
                            <b><?=$course->name ?></b>
                            <p class="card-text">
                                <b>Duration: </b><?=$course->duration ?><br>
                                <b>Price: </b> 40000/- Rs.
                            </p>
                            <button class="btn btn-block btn-primary">Enroll</button>
                        </div>
                    </div>
                </div>
            <?php } ?>


        </div>
    </div>
</section>

<!-- Course Section -->

<!-- Teacher Section -->

<section class="py-5">
    <div class="text-center mb-5">
        <h2 class="">Our Teachers</h2>
        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, aspernatur?</p>
    </div>
    <div class="container pt-5">
        <div class="row">
            <?php for ($i = 0; $i < 4; $i++) { ?>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="col-7 position-absolute" style="top:-50px;">
                            <img src="./assets/images/undraw_Reading_book_re_kqpk-removebg-preview.png" alt="img" class="mw-100 border rounded-circle">
                        </div>
                        <div class="card-body pt-5 mt-5">
                            <h4 class="card-title mt-3">John Doe</h4>
                            <p class="">
                                <i class="fa-sharp fa-solid fa-star text-warning"></i>
                                <i class="fa-sharp fa-solid fa-star text-warning"></i>
                                <i class="fa-sharp fa-solid fa-star text-warning"></i>
                                <i class="fa-sharp fa-solid fa-star text-warning"></i>
                                <i class="fa-sharp fa-solid fa-star text-warning"></i>
                            </p>
                            <p class="card-text">
                                <b>Course: </b> 5 <br>
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>
</section>

<!-- Teacher Section -->

<!-- Achievement Section -->

<section class="py-5" style="background:#3923a7; color:white;">
    <div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pr-5">
                    <h2>Acheivements</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus dicta dolorem deleniti pariatur omnis minus illum reiciendis nam officiis quam, accusamus aliquid libero commodi voluptates?</p>

                    <img src="./assets/images/undraw_Co-working_re_w93t-removebg-preview.png" alt="img" class="img-fluid">
                </div>
                <div class="col-lg-6 my-auto">
                    <div class="row">
                        <div class="col-lg-6  mb-4">
                            <div class="border rounded p-3">
                                <div class="card-body text-center">
                                    <span><i class="fa-sharp fa-solid fa-graduation-cap fa-2x  text-warning"></i></span>
                                    <h2 class="my-2 font-weight-bold h1 text-">334</h2>
                                    <hr class="border-warning">
                                    <h4>Graduates</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6  mb-4">
                            <div class="border rounded p-3">
                                <div class="card-body text-center">
                                    <span><i class="fa-sharp fa-solid fa-graduation-cap fa-2x  text-warning"></i></span>
                                    <h2 class="my-2 font-weight-bold h1 text-">334</h2>
                                    <hr class="border-warning">
                                    <h4>Graduates</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6  mb-4">
                            <div class="border rounded p-3">
                                <div class="card-body text-center">
                                    <span><i class="fa-sharp fa-solid fa-graduation-cap fa-2x  text-warning"></i></span>
                                    <h2 class="my-2 font-weight-bold h1 text-">334</h2>
                                    <hr class="border-warning">
                                    <h4>Graduates</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6  mb-4">
                            <div class="border rounded p-3">
                                <div class="card-body text-center">
                                    <span><i class="fa-sharp fa-solid fa-graduation-cap fa-2x  text-warning"></i></span>
                                    <h2 class="my-2 font-weight-bold h1 text-">334</h2>
                                    <hr class="border-warning">
                                    <h4>Graduates</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Achievement Section -->

<!-- Testimonials -->

<section class="py-5">
    <div class="text-center mb-5">
        <h2 class="">What People Says</h2>
        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, aspernatur?</p>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="border rounded position-relative">
                        <div class="p-4 text-center">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro sequi quam repellendus nam nesciunt unde eligendi, iusto, iste officia, doloribus aut voluptatum quidem officiis esse. Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem cupiditate ex nisi velit mollitia at nostrum laboriosam vero atque dolorem!
                        </div>
                        <i class="fa fa-quote-left fa-3x position-absolute" style="top:0.5rem; left:0.5rem; opacity:0.2;"></i>
                    </div>
                    <div class="text-center mt-n2">
                        <img src="./assets/images/undraw_Reading_book_re_kqpk-removebg-preview.png" alt="img" class="rounded-circle border" width="100px" height="100px">
                        <h6 class="mb-0 mt-3">Bhanu Pratap</h6>
                        <p><i>Designation</i></p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="border rounded position-relative">
                        <div class="p-4 text-center">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro sequi quam repellendus nam nesciunt unde eligendi, iusto, iste officia, doloribus aut voluptatum quidem officiis esse. Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem cupiditate ex nisi velit mollitia at nostrum laboriosam vero atque dolorem!
                        </div>
                        <i class="fa fa-quote-left fa-3x position-absolute" style="top:0.5rem; left:0.5rem; opacity:0.2;"></i>
                    </div>
                    <div class="text-center mt-n2">
                        <img src="./assets/images/undraw_Reading_book_re_kqpk-removebg-preview.png" alt="img" class="rounded-circle border" width="100px" height="100px">
                        <h6 class="mb-0 mt-3">Bhanu Pratap</h6>
                        <p><i>Designation</i></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Testimonials -->

<!-- footer  -->

<footer style="background:url(./assets/images/earth-11595_1280.jpg) center/cover no-repeat">
    <div class="py-5" style="background: #00000088;">
        <div class="container-fluid">
            <div class="row text-light">
                <div class="col-lg-4">
                    <h5>Useful Links</h5>
                    <ul class="fa-ul ml-4">
                        <li> <a href="#" class="text-light"> <i class="fa-li fa fa-angle-right"></i> Link </a> </li>
                        <li> <a href="#" class="text-light"> <i class="fa-li fa fa-angle-right"></i> Link </a> </li>
                        <li> <a href="#" class="text-light"> <i class="fa-li fa fa-angle-right"></i> Link </a> </li>
                        <li> <a href="#" class="text-light"> <i class="fa-li fa fa-angle-right"></i> Link </a> </li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5>Social Presence</h5>
                    <div>
                        <span class="fa fa-stack">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-facebook-f fa-stack-1x fa-inverse text-dark"></i>
                        </span>
                        <span class="fa fa-stack">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-instagram fa-stack-1x fa-inverse text-dark"></i>
                        </span>
                        <span class="fa fa-stack">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-twitter fa-stack-1x fa-inverse text-dark"></i>
                        </span>
                        <span class="fa fa-stack">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-linkedin fa-stack-1x fa-inverse text-dark"></i>
                        </span>
                        <span class="fa fa-stack">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-youtube fa-stack-1x fa-inverse text-dark"></i>
                        </span>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h5>Subscribe Now</h5>
                    <form action="#">
                        <div class="form-outline mt-4" data-mdb-input-init>
                            <input type="email" id="email2" class="form-control" />
                            <label class="form-label" for="email2">Your Email</label>
                        </div>
                        <button class="btn btn-primary btn-sm mt-4">Subscribe Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- footer  -->

<!-- Copyright -->

<section class="py-2 bg-dark text-light">
    <div class="container-fluid">
        Copyright 2025 All Right Reserved. <a href="#" class="text-light">School management System</a>
    </div>
</section>

<!-- Copyright -->

<?php include('./footer.php') ?>