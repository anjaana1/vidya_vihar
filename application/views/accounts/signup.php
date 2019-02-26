<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>VVIT | Create an Account</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css'); ?>" />
</head>
<body>
    <nav class="navbar navbar-expand-lg p-0 bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">
                <h1 class="h1 text-white">VVIT Eduwork</h1>
            </a>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8"></div>
            <div class="col-lg-4 mt-5 px-5">
                <div class="card p-2">
                    <div class="card-body">
                       <h5 class="text-center">CREATE AN ACCOUNT</h5>
                        <form action="<?= base_url('user_login/signup'); ?>" method="post">
                            <div class="row p-2">
                                <div class="form-group col-lg-6 p-0 px-1">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" name="fname" placeholder="First name" value="<?= set_value('fname'); ?>" />
                                </div>
                                <div class="form-group col-lg-6 p-0 px-1">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" name="lname" placeholder="Last name" value="<?= set_value('lname'); ?>" />
                                </div>
                                <?= form_error('fname'); ?>
                            </div>
                            <div class="form-group col-lg-12 p-0">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" placeholder="Email" value="<?= set_value('email'); ?>" />
                                    <?= form_error('email'); ?>
                            </div>
                            <div class="form-group mt-2 col-lg-12 p-0">
                                <label>Phone</label>
                                <input type="text" class="form-control" name="phone" placeholder="Phone" value="<?= set_value('phone'); ?>" />
                                    <?= form_error('phone'); ?>
                            </div>
                            <div class="form-group mt-2 p-0">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password" value="<?= set_value('password'); ?>" />
                                    <?= form_error('password'); ?>
                            </div>
                            <center>
                                <input type="submit" class="btn btn-md btn-primary text-white mt-3 col-lg-6" value="CREATE ACCOUNT" />
                            </center>
                        </form>
                        <div class="inline-group text-center mt-4">
                            <p class="d-inline">Already have an account?</p>
                            <a href="<?= base_url('user_login/index'); ?>" class="d-inline h6 text-dark">LOGIN</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>