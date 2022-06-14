<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title><?php echo $title ?></title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="<?php echo base_url('assets') ?>/favicon.svg" type="image/x-icon"/>

    <!-- Fonts and icons -->
    <script src="<?php echo base_url('assets') ?>/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Open+Sans:300,400,600,700"]},
            custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ['<?php echo base_url('assets') ?>/css/fonts.css']},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/azzara.min.css">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/demo.css">
</head>
<body>
    <div class="wrapper">
        <!--
            Tip 1: You can change the background color of the main header using: data-background-color="blue | purple | light-blue | green | orange | red"
        -->
        <div class="main-header" data-background-color="green">
        <head>
            <style>
            body{
              background-image: url('<?php echo base_url();?>/assets/bg_1.jpg');
              background-attachment: fixed;
              background-repeat: no-repeat;
              background-size: cover;
              }
              </style>
              </head>
            <!-- Logo Header -->
            <div class="logo-header">

                <a class="logo">
                    <center><img src="<?php echo base_url('assets') ?>/logo-beranda.png" width="150" alt="navbar brand" class="navbar-brand">
                    </a>
                    <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">
                            <i class="fa fa-bars"></i>
                        </span>
                    </button>
                    <button class="topbar-toggler more"><i class="fa fa-ellipsis-v"></i></button>
                    <div class="navbar-minimize">
                        <button class="btn btn-minimize btn-rounded">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                </div>
                <!-- End Logo Header -->

                <!-- Navbar Header -->
                <nav class="navbar navbar-header navbar-expand-lg">

                    <div class="container-fluid">

                        <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                            <li class="nav-item toggle-nav-search hidden-caret">
                                <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                                    <i class="fa fa-search"></i>
                                </a>
                            </li>

                                <li class="nav-item dropdown hidden-caret">
                                    <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                                        <div class="avatar-sm">
                                           
                                                <img src="<?php echo base_url('assets') ?>/user.png" alt="..." class="avatar-img rounded-circle">
                                         
                                       </div>
                                   </a>
                                   <ul class="dropdown-menu dropdown-user animated fadeIn">

                                    <li>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="<?php echo base_url('login/logout')  ?>">Logout</a>
                                    </li>
                                </ul>
                            </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>

        <!-- Sidebar -->
        <div class="sidebar">

            <div class="sidebar-background"></div>
            <div class="sidebar-wrapper scrollbar-inner">
                <div class="sidebar-content">
                    <div class="user">
                      
                            <div class="avatar-sm float-left mr-2">
                                <img src="<?php echo base_url('assets') ?>/user.png" alt="..." class="avatar-img rounded-circle">
                       </div>

                   <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            <?php echo $this->session->userdata('nama') ?>
                            <span class="user-level">user</span>
                        </span>
                    </a>
                    <div class="clearfix"></div>


                </div>
            </div>
            <ul class="nav">
                <li class="nav-item active">
                    <a href="<?php echo base_url('user/dashboard')  ?>">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                        <span class="badge badge-count">5</span>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Components</h4>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('user/karyawan')  ?>">
                        <i class="fas fa-user-alt"></i>
                        <p>Personal Data</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#forms">
                        <i class="fas fa-stopwatch"></i>
                        <p>Time Management</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="forms">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="<?php echo base_url('user/cuti')  ?>">
                                    <span class="sub-item">Time Off</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('user/absensi')  ?>">
                                    <span class="sub-item">Attendance</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('user/payroll')  ?>">
                        <i class="fas fa-receipt"></i>
                        <p>Payroll</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
        <!-- End Sidebar -->
