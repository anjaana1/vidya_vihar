<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>VVIT | User Login</title>
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
                <div class="card p-4">
                    <div class="card-body">
                      <?= $this->session->flashdata("msg"); ?>
                       <h5 class="text-center">LOGIN</h5>
                        <form action="<?= base_url('user_login/index'); ?>" method="post">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" placeholder="Email" />
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password" />
                            </div>
                            <center>
                                <input type="submit" class="btn btn-md btn-primary text-white mt-2 col-lg-6" value="LOGIN" />
                            </center>
                        </form>
                        <div class="inline-group text-center mt-4">
                            <p class="d-inline">Create an account</p>
                            <a href="<?= base_url('user_login/signup'); ?>" class="d-inline h6 text-dark">CREATE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>