<!DOCTYPE html>
<html lang="en" class="app">
<head>
  <meta charset="utf-8" />
  <title>Student</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/student/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/student/css/animate.css" type="text/css" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/student/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/student/css/icon.css" type="text/css" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/student/css/font.css" type="text/css" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/student/css/app.css" type="text/css" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/student/js/calendar/bootstrap_calendar.css" type="text/css" />
  <!--[if lt IE 9]>
    <script src="<?= base_url(); ?>assets/student/js/ie/html5shiv.js"></script>
    <script src="<?= base_url(); ?>assets/student/js/ie/respond.min.js"></script>
    <script src="<?= base_url(); ?>assets/student/js/ie/excanvas.js"></script>
  <![endif]-->
</head>
<body class="">
  <section class="vbox">
    <header class="bg-white header header-md navbar navbar-fixed-top-xs box-shadow">
      <div class="navbar-header aside-md dk">
        <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="#nav">
          <i class="fa fa-bars"></i>
        </a>
        <a href="index.html" class="navbar-brand">
          <img src="<?= base_url(); ?>assets/student/images/rsz_li.png" class="m-r-sm" alt="scale">
          <span class="hidden-nav-xs">Aplikasi Survey</span>
        </a>
        <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user">
          <i class="fa fa-cog"></i>
        </a>
      </div>
      <form class="navbar-form navbar-left input-s-lg m-t m-l-n-xs hidden-xs" role="search">
        <div class="form-group">

        </div>
      </form>
      <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user user">
        <li class="hidden-xs">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="i i-chat3"></i>
            <span class="badge badge-sm up bg-danger count">2</span>
          </a>
          <section class="dropdown-menu aside-xl animated flipInY">
            <section class="panel bg-white">
              <div class="panel-heading b-light bg-light">
                <strong>You have <span class="count">2</span> notifications</strong>
              </div>
              <div class="list-group list-group-alt">
                <a href="#" class="media list-group-item">
                  <span class="pull-left thumb-sm">
                    <img src="<?= base_url(); ?>assets/student/images/a0.png" alt="..." class="img-circle">
                  </span>
                  <span class="media-body block m-b-none">
                    Use awesome animate.css<br>
                    <small class="text-muted">10 minutes ago</small>
                  </span>
                </a>
                <a href="#" class="media list-group-item">
                  <span class="media-body block m-b-none">
                    1.0 initial released<br>
                    <small class="text-muted">1 hour ago</small>
                  </span>
                </a>
              </div>
              <div class="panel-footer text-sm">
                <a href="#" class="pull-right"><i class="fa fa-cog"></i></a>
                <a href="#notes" data-toggle="class:show animated fadeInRight">See all the notifications</a>
              </div>
            </section>
          </section>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="thumb-sm avatar pull-left">
              <img src="<?= base_url(); ?>assets/student/images/a0.png" alt="...">
            </span>
            Arie Kurniawan<b class="caret"></b>
          </a>
          <ul class="dropdown-menu animated fadeInRight">
            <li>
              <span class="arrow top"></span>
              <a href="#">Pengaturan</a>
            </li>
            <li>
              <a href="<?php echo base_url('index.php/student/Profil'); ?>">Profil</a>
            </li>
            <li>
              <a href="#">
                <span class="badge bg-danger pull-right">3</span>
                Notifikasi
              </a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="<?php echo base_url('index.php/student/index'); ?>" data-toggle="ajaxModal" >Keluar</a>
            </li>
          </ul>
        </li>
      </ul>
    </header>
    <section>
      <section class="hbox stretch">
        <!-- .aside -->
        <aside class="bg-black aside-md hidden-print" id="nav">
          <section class="vbox">
            <section class="w-f scrollable">
              <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">
                <div class="clearfix wrapper dk nav-user hidden-xs">
                  <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <span class="thumb avatar pull-left m-r">
                        <img src="<?= base_url(); ?>assets/student/images/a0.png" class="dker" alt="...">
                        <i class="on md b-black"></i>
                      </span>
                      <span class="hidden-nav-xs clear">
                        <span class="block m-t-xs">
                          <strong class="font-bold text-lt">Arie Kurniawan</strong>
                          <b class="caret"></b>
                        </span>
                        <span class="text-muted text-xs block">Mahasiswa</span>
                      </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                      <li>
                        <span class="arrow top hidden-nav-xs"></span>
                        <a href="#">Pengaturan</a>
                      </li>
                      <li>
                        <a href="<?php echo base_url('index.php/student/Profil'); ?>">Profil</a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="badge bg-danger pull-right">3</span>
                          Notifikasi
                        </a>
                      </li>
                      <li class="divider"></li>
                      <li>
                        <a href="<?php echo base_url('index.php/student/index'); ?>" data-toggle="ajaxModal" >Keluar</a>
                      </li>
                    </ul>
                  </div>
                </div>


                <!-- nav -->
                <nav class="nav-primary hidden-xs">

                  <ul class="nav nav-main" data-ride="collapse">
                    <li  class="active">
                      <a href="<?php echo base_url('index.php/student/indexHome'); ?>" class="auto">
                        <i class="i i-statistics icon">

                        </i>
                        <span class="font-bold">Akun</span>
                        <span class="pull-right text-muted">
                          <i class="i i-circle-sm-o text"></i>
                          <i class="i i-circle-sm text-active"></i>
                        </span>
                      </a>
                      <ul class="nav dk">
                        <li >
                          <a href="<?php echo base_url('index.php/student/Profil'); ?>" class="auto">
                            <i class="i i-dot"></i>

                            <span>Profil</span>
                          </a>
                        </li>

                        <li >
                          <a href="<?php echo base_url('index.php/student/eror'); ?>" class="auto">
                            <i class="i i-dot"></i>

                            <span>Ganti password</span>
                          </a>
                        </li>
                        </ul>

                    </li>
                    <li >
                      <a href="<?php echo base_url('index.php/student/Survey'); ?>" class="auto">
                        <b class="badge bg-danger pull-right">7</b>
                        <i class="i i-stack icon">
                        </i>
                        <span class="font-bold">Isi survey</span>
                      </a>

                    </li>
                    <li >
                      <a href="<?php echo base_url('index.php/student/panduan'); ?>" class="auto">
                        <span class="pull-right text-muted">
                          <i class="i i-circle-sm-o text"></i>
                          <i class="i i-circle-sm text-active"></i>
                        </span>
                        <i class="i i-docs icon">
                        </i>
                        <span class="font-bold">Panduan</span>
                      </a>
                    </li>
                    <li >

                  <div class="line dk hidden-nav-xs"></div>
                </nav>
                <!-- / nav -->
              </div>
            </section>

            <footer class="footer hidden-xs no-padder text-center-nav-xs">
              <a href="<?php echo base_url('index.php/student/index'); ?>" data-toggle="ajaxModal" class="btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs">
                <i class="i i-logout"></i>
              </a>
              <a href="#nav" data-toggle="class:nav-xs" class="btn btn-icon icon-muted btn-inactive m-l-xs m-r-xs">
                <i class="i i-circleleft text"></i>
                <i class="i i-circleright text-active"></i>
              </a>
            </footer>
          </section>
        </aside>
        <!-- /.aside -->
        <section id="content">
          <section class="hbox stretch">
            <section>
              <section class="vbox">
                <section class="scrollable padder">
                  <section class="row m-b-md">
                    <div class="col-sm-6">
                      <h3 class="m-b-xs text-black">Survey</h3>
                      <small>Welcome back, Arie Kurniawan, <i class="fa fa-map-marker fa-lg text-primary"></i> Bandung</small>
                    </div>
                    <div class="col-sm-6 text-right text-left-xs m-t-md">
                  <a href="#nav, #sidebar" class="btn btn-icon b-2x btn-info btn-rounded" data-toggle="class:nav-xs, show"><i class="fa fa-bars"></i></a>
                    </div>
                  </section>
            <!-- side content -->
            <aside class="aside-md bg-black hide" id="sidebar">
              <section class="vbox animated fadeInRight">
                <section class="scrollable">
                  <div class="wrapper"><strong>Live feed</strong></div>
                  <ul class="list-group no-bg no-borders auto">
                    <li class="list-group-item">
                      <span class="fa-stack pull-left m-r-sm">
                        <i class="fa fa-circle fa-stack-2x text-success"></i>
                        <i class="fa fa-reply fa-stack-1x text-white"></i>
                      </span>
                      <span class="clear">
                        <a href="#">Goody@gmail.com</a> sent your email
                        <small class="icon-muted">13 minutes ago</small>
                      </span>
                    </li>
                    <li class="list-group-item">
                      <span class="fa-stack pull-left m-r-sm">
                        <i class="fa fa-circle fa-stack-2x text-danger"></i>
                        <i class="fa fa-file-o fa-stack-1x text-white"></i>
                      </span>
                      <span class="clear">
                        <a href="#">Mide@live.com</a> invite you to join a meeting
                        <small class="icon-muted">20 minutes ago</small>
                      </span>
                    </li>
                    <li class="list-group-item">
                      <span class="fa-stack pull-left m-r-sm">
                        <i class="fa fa-circle fa-stack-2x text-info"></i>
                        <i class="fa fa-map-marker fa-stack-1x text-white"></i>
                      </span>
                      <span class="clear">
                        <a href="#">Geoge@yahoo.com</a> is online
                        <small class="icon-muted">1 hour ago</small>
                      </span>
                    </li>
                    <li class="list-group-item">
                      <span class="fa-stack pull-left m-r-sm">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-info fa-stack-1x text-white"></i>
                      </span>
                      <span class="clear">
                        <a href="#"><strong>Admin</strong></a> post a info
                        <small class="icon-muted">1 day ago</small>
                      </span>
                    </li>
                  </ul>
                  <div class="wrapper"><strong>Friends</strong></div>
                  <ul class="list-group no-bg no-borders auto">
                    <li class="list-group-item">
                      <div class="media">
                        <span class="pull-left thumb-sm avatar">
                          <img src="<?= base_url(); ?>assets/student/images/a3.png" alt="..." class="img-circle">
                          <i class="on b-black bottom"></i>
                        </span>
                        <div class="media-body">
                          <div><a href="#">Chris Fox</a></div>
                          <small class="text-muted">about 2 minutes ago</small>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="media">
                        <span class="pull-left thumb-sm avatar">
                          <img src="<?= base_url(); ?>assets/student/images/a2.png" alt="...">
                          <i class="on b-black bottom"></i>
                        </span>
                        <div class="media-body">
                          <div><a href="#">Amanda Conlan</a></div>
                          <small class="text-muted">about 2 hours ago</small>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="media">
                        <span class="pull-left thumb-sm avatar">
                          <img src="<?= base_url(); ?>assets/student/images/a1.png" alt="...">
                          <i class="busy b-black bottom"></i>
                        </span>
                        <div class="media-body">
                          <div><a href="#">Dan Doorack</a></div>
                          <small class="text-muted">3 days ago</small>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="media">
                        <span class="pull-left thumb-sm avatar">
                          <img src="<?= base_url(); ?>assets/student/images/a0.png" alt="...">
                          <i class="away b-black bottom"></i>
                        </span>
                        <div class="media-body">
                          <div><a href="#">Lauren Taylor</a></div>
                          <small class="text-muted">about 2 minutes ago</small>
                        </div>
                      </div>
                    </li>
                  </ul>
                </section>
              </section>
            </aside>
            <!-- / side content -->
          </section>
          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
        </section>
      </section>
    </section>
  </section>
  <script src="<?= base_url(); ?>assets/student/js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?= base_url(); ?>assets/student/js/bootstrap.js"></script>
  <!-- App -->
  <script src="<?= base_url(); ?>assets/student/js/app.js"></script>
  <script src="<?= base_url(); ?>assets/student/js/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?= base_url(); ?>assets/student/js/charts/easypiechart/jquery.easy-pie-chart.js"></script>
  <script src="<?= base_url(); ?>assets/student/js/charts/sparkline/jquery.sparkline.min.js"></script>
  <script src="<?= base_url(); ?>assets/student/js/charts/flot/jquery.flot.min.js"></script>
  <script src="<?= base_url(); ?>assets/student/js/charts/flot/jquery.flot.tooltip.min.js"></script>
  <script src="<?= base_url(); ?>assets/student/js/charts/flot/jquery.flot.spline.js"></script>
  <script src="<?= base_url(); ?>assets/student/js/charts/flot/jquery.flot.pie.min.js"></script>
  <script src="<?= base_url(); ?>assets/student/js/charts/flot/jquery.flot.resize.js"></script>
  <script src="<?= base_url(); ?>assets/student/js/charts/flot/jquery.flot.grow.js"></script>
  <script src="<?= base_url(); ?>assets/student/js/charts/flot/demo.js"></script>

  <script src="<?= base_url(); ?>assets/student/js/calendar/bootstrap_calendar.js"></script>
  <script src="<?= base_url(); ?>assets/student/js/calendar/demo.js"></script>

  <script src="<?= base_url(); ?>assets/student/js/sortable/jquery.sortable.js"></script>
  <script src="<?= base_url(); ?>assets/student/js/app.plugin.js"></script>
</body>
</html>
