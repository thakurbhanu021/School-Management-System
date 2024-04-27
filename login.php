<?php include('./header.php') ?>

<section class="bg-light vh-100 d-flex">
    <div class="col-3 m-auto">
        <div class="card">
            <div class="card-body py-5">
                <div class="border border-dark rounded-circle mx-auto d-flex" style="width: 100px; height:100px">
                    <i class="fa fa-user text-dark fa-3x m-auto"></i>
                </div>
                <form action="./actions/login.php" method="POST">
                    <div>

                    </div>
                    <div class="form-outline mt-4" data-mdb-input-init>
                        <input type="email" id="email2" name="email2" class="form-control" />
                        <label class="form-label" for="email2">Your Email</label>
                    </div>
                    <div class="form-outline mt-4" data-mdb-input-init>
                        <input type="password" id="password" name="password" class="form-control" />
                        <label class="form-label" for="password">Your Password</label>
                    </div>
                    <div class="text-center mt-4"> 
                        <button class="btn btn-primary btn-block w-50 mx-auto" name="login">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include('./footer.php') ?>