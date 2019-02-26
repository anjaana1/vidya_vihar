<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>VVIT Eduwork | HOME</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css'); ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" />
</head>
<body>
    <nav class="navbar navbar-expand-lg p-0 bg-dark sticky-top">
        <div class="container">
            <a href="<?= base_url('home/index'); ?>" class="navbar-brand">
                <h1 class="h1 text-white">VVIT Eduwork</h1>
            </a>
            <ul class="navbar-nav">
                <form action="" method="get" class="mr-5">
                    <div class="input-group">
                        <input type="search" class="form-control" size="40" name="search" placeholder="Search" />
                        <span class="input-group-btn">
                            <a href="#" class="btn bg-white">
                                    <i class="fas fa-search text-secondary"></i>
                            </a>
                        </span>
                    </div>
                </form>
                <a href="<?= base_url('home/index'); ?>" class="nav-item px-4 text-white mt-2"><i class="fas fa-home text-white mr-1"></i>HOME</a>
                <a href="<?= base_url('home/profile'); ?>" class="nav-item px-4 text-white mt-2"><i class="fas fa-user mr-1 text-white"></i>PROFILE</a>
                <a href="<?= base_url('home/logout'); ?>" class="nav-item px-4 text-white mt-2"><i class="fas fa-power-off mr-1 text-white"></i>LOGOUT</a>
            </ul>
        </div>
    </nav>