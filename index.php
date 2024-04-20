<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management System</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css" rel="stylesheet" />
</head>

<body>
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
                    <img src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp" height="15" alt="MDB Logo" loading="lazy" />
                </a>
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Projects</a>
                    </li>
                    <li class="nav-item dropdown">
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
                    </li>
                </ul>
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->

            <!-- Right elements -->
            <div class="d-flex align-items-center">
                <!-- Icon -->
                <a class="link-secondary me-3" href="#">
                    <i class="fas fa-shopping-cart"></i>
                </a>

                <!-- Notifications -->
                <div class="dropdown">
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
                </div>
                <!-- Avatar -->
                <div class="dropdown">
                    <a data-mdb-dropdown-init class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuAvatar" role="button" aria-expanded="false">
                        <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" height="25" alt="Black and White Portrait of a Man" loading="lazy" />
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                        <li>
                            <a class="dropdown-item" href="#">My profile</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Settings</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Logout</a>
                        </li>
                    </ul>
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
                            <h3 class="text-center">Admission Form</h3>
                            <form action="" method="post">
                                <div class="form-outline mt-4" data-mdb-input-init>
                                    <input type="text" id="form1" class="form-control" />
                                    <label class="form-label" for="form1">Your Name</label>
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
                                    <input type="text" id="class" class="form-control" />
                                    <label class="form-label" for="class">Your Class</label>
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

    <!-- Course Section -->
    <section class="py-5">
        <div class="text-center mb-5">
            <h2 class="">Our Courses</h2>
            <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, aspernatur?</p>
        </div>
        <div class="container">
            <div class="row">
                <?php
                for ($i = 0; $i < 8; $i++) { ?>
                    <div class="col-lg-3 mt-3">
                        <div class="card">
                            <img src="./assets/images/undraw_Co-working_re_w93t-removebg-preview.png" alt="" class="img-fluid rounded-top">
                            <div class="card-body text-center">
                                <b>Jr. Kindergarten</b>
                                <p class="card-text">
                                    <b>Duration: </b> 6 Months <br>
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

    <section class="py-5">
        <div class="text-center mb-5">
            <h2 class="">Our Teachers</h2>
            <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, aspernatur?</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <img src="./assets/images/undraw_Reading_book_re_kqpk-removebg-preview.png" alt="img">
                                </div>
                                <div class="col-8"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js"></script>
</body>

</html>