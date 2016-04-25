<!DOCTYPE html>
<html lang="en" class="app">
<head>
  <meta charset="utf-8" />
  <title>Lecrturer</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/lecturer/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/lecturer/css/animate.css" type="text/css" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/lecturer/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/lecturer/css/icon.css" type="text/css" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/lecturer/css/font.css" type="text/css" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/lecturer/css/app.css" type="text/css" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/lecturer/js/calendar/bootstrap_calendar.css" type="text/css" />
  <!--[if lt IE 9]>
    <script src="<?= base_url(); ?>assets/lecturer/js/ie/html5shiv.js"></script>
    <script src="<?= base_url(); ?>assets/lecturer/js/ie/respond.min.js"></script>
    <script src="<?= base_url(); ?>assets/lecturer/js/ie/excanvas.js"></script>
  <![endif]-->
</head>
<body class="">
  <section class="vbox">
    <header class="bg-white header header-md navbar navbar-fixed-top-xs box-shadow">
      <div class="navbar-header aside-md dk">
        <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="#nav">
          <i class="fa fa-bars"></i>
        </a>
        <a href="<?php echo base_url('index.php/lecturer/indexHome'); ?>" class="navbar-brand">
          <img src="<?= base_url(); ?>assets/lecturer/images/rsz_li.png" class="m-r-sm" alt="scale">
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
                    <img src="<?= base_url(); ?>assets/lecturer/images/a0.png" alt="..." class="img-circle">
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
              <img src="<?= base_url(); ?>assets/lecturer/images/a0.png" alt="...">
            </span>
            Pak Dosen<b class="caret"></b>
          </a>
          <ul class="dropdown-menu animated fadeInRight m-t-xs">
            <li>
              <span class="arrow top hidden-nav-xs"></span>
              <a href="#">Pengaturan</a>
            </li>
            <li>
              <a href="<?php echo base_url('index.php/lecturer/Profil'); ?>">Profil</a>
            </li>
            <li>
              <a href="#">
                <span class="badge bg-danger pull-right">3</span>
                Notifikasi
              </a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="<?php echo base_url('index.php/lecturer/index'); ?>" data-toggle="ajaxModal" >Keluar</a>
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
                        <img src="<?= base_url(); ?>assets/lecturer/images/a0.png" class="dker" alt="...">
                        <i class="on md b-black"></i>
                      </span>
                      <span class="hidden-nav-xs clear">
                        <span class="block m-t-xs">
                          <strong class="font-bold text-lt">Pak Dosen</strong>
                          <b class="caret"></b>
                        </span>
                        <span class="text-muted text-xs block">Dosen</span>
                      </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                      <li>
                        <span class="arrow top hidden-nav-xs"></span>
                        <a href="#">Pengaturan</a>
                      </li>
                      <li>
                        <a href="<?php echo base_url('index.php/lecturer/Profil'); ?>">Profil</a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="badge bg-danger pull-right">3</span>
                          Notifikasi
                        </a>
                      </li>
                      <li class="divider"></li>
                      <li>
                        <a href="<?php echo base_url('index.php/lecturer/index'); ?>" data-toggle="ajaxModal" >Keluar</a>
                      </li>
                    </ul>
                  </div>
                </div>


                <!-- nav -->
                <nav class="nav-primary hidden-xs">

                  <ul class="nav nav-main" data-ride="collapse">
                    <li  class="active">
                      <a href="<?php echo base_url('index.php/lecturer/indexHome'); ?>" class="auto">
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
                          <a href="<?php echo base_url('index.php/lecturer/Profil'); ?>" class="auto">
                            <i class="i i-dot"></i>

                            <span>Profil</span>
                          </a>
                        </li>

                        <li >
                          <a href="<?php echo base_url('index.php/lecturer/gantipassword'); ?>" class="auto">
                            <i class="i i-dot"></i>

                            <span>Ganti password</span>
                          </a>
                        </li>
                        </ul>

                    </li>
                    <li >
                      <a href="<?php echo base_url('index.php/lecturer/hasilSurvey'); ?>" class="auto">
                        <b class="badge bg-danger pull-right">7</b>
                        <i class="i i-stack icon">
                        </i>
                        <span class="font-bold">Lihat survey</span>
                      </a>

                    </li>
                    <li >
                      <a href="<?php echo base_url('index.php/lecturer/panduan'); ?>" class="auto">
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
              <a href="<?php echo base_url('index.php/lecturer/index'); ?>" data-toggle="ajaxModal" class="btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs">
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
          <section class="vbox">
            <section class="scrollable padder">
              <div class="m-b-md">
                <div class="row">
                  <div class="col-sm-6">
                    <h3 class="m-b-none">Hasil Survey</h3>
                  </div>
                  <div class="col-sm-6">
                    <div class="text-right text-left-xs">
                      <div class="sparkline m-l m-r-lg pull-right" data-type="bar" data-height="35" data-bar-width="6" data-bar-spacing="2" data-bar-color="#fb6b5b">5,8,9,12,8,10,8,9,7,8,6</div>
                      <div class="m-t-md">
                        <span class="text-uc">Responden</span>
                        <div class="h4 m-n"><strong>212</strong></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <section class="panel panel-default">
                    <header class="panel-heading font-bold">Biofisika</header>
                    <div class="panel-body">
                      <div id="flot-pie"  style="height:240px"></div>
                    </div>
                  </section>
                </div>
                <div class="col-md-6">
                  <section class="panel panel-default">
                    <header class="panel-heading font-bold">Kimia Analitik</header>
                    <div class="panel-body">
                      <div id="flot-pie-donut"  style="height:240px"></div>
                    </div>
                  </section>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-4">
                  <section class="panel panel-default">
                    <header class="panel-heading">
                      Tingkat Kepuasan Mahasiswa
                    </header>
                    <div class="panel-body text-center">
                      <div class="inline">
                        <div class="easypiechart" data-percent="77" data-bar-color="#fcc633" data-line-width="16" data-loop="false" data-size="188">
                          <div>
                            <span class="h2 m-l-sm step">77</span>%
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
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
                                            <img src="<?= base_url(); ?>assets/lecturer/images/a0.png" class="dker" alt="...">
                                            <i class="on md b-black"></i>
                                          </span>
                                          <span class="hidden-nav-xs clear">
                                            <span class="block m-t-xs">
                                              <strong class="font-bold text-lt">Pak Dosen</strong>
                                              <b class="caret"></b>
                                            </span>
                                            <span class="text-muted text-xs block">Dosen</span>
                                          </span>
                                        </a>
                                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                          <li>
                                            <span class="arrow top hidden-nav-xs"></span>
                                            <a href="#">Pengaturan</a>
                                          </li>
                                          <li>
                                            <a href="<?php echo base_url('index.php/lecturer/Profil'); ?>">Profil</a>
                                          </li>
                                          <li>
                                            <a href="#">
                                              <span class="badge bg-danger pull-right">3</span>
                                              Notifications
                                            </a>
                                          </li>
                                          <li class="divider"></li>
                                          <li>
                                            <a href="<?php echo base_url('index.php/lecturer/modalLockme'); ?>" data-toggle="ajaxModal" >Logout</a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>


                                    <!-- nav -->
                                    <nav class="nav-primary hidden-xs">

                                      <ul class="nav nav-main" data-ride="collapse">
                                        <li  class="active">
                                          <a href="<?php echo base_url('index.php/lecturer/indexHome'); ?>" class="auto">
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
                                              <a href="<?php echo base_url('index.php/lecturer/Profil'); ?>" class="auto">
                                                <i class="i i-dot"></i>

                                                <span>Profil</span>
                                              </a>
                                            </li>

                                            <li >
                                              <a href="<?php echo base_url('index.php/lecturer/eror'); ?>" class="auto">
                                                <i class="i i-dot"></i>

                                                <span>Ganti password</span>
                                              </a>
                                            </li>
                                            </ul>

                                        </li>
                                        <li >
                                          <a href="<?php echo base_url('index.php/lecturer/hasilSurvey'); ?>" class="auto">
                                            <b class="badge bg-danger pull-right">7</b>
                                            <i class="i i-stack icon">
                                            </i>
                                            <span class="font-bold">Lihat survey</span>
                                          </a>

                                        </li>
                                        <li >
                                          <a href="<?php echo base_url('index.php/lecturer/panduan'); ?>" class="auto">
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


                              </section>
                            </aside>
  </section>
  <script src="<?= base_url(); ?>assets/lecturer/js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?= base_url(); ?>assets/lecturer/js/bootstrap.js"></script>
  <!-- App -->
  <script src="<?= base_url(); ?>assets/lecturer/js/app.js"></script>
  <script src="<?= base_url(); ?>assets/lecturer/js/slimscroll/jquery.slimscroll.min.js"></script>
    <!-- Sparkline Chart -->
  <script src="<?= base_url(); ?>assets/lecturer/js/charts/sparkline/jquery.sparkline.min.js"></script>
  <!-- Easy Pie Chart -->
  <script src="<?= base_url(); ?>assets/lecturer/js/charts/easypiechart/jquery.easy-pie-chart.js"></script>
  <!-- Flot -->
  <script src="<?= base_url(); ?>assets/lecturer/js/charts/flot/jquery.flot.min.js"></script>
  <script src="<?= base_url(); ?>assets/lecturer/js/charts/flot/jquery.flot.tooltip.min.js"></script>
  <script src="<?= base_url(); ?>assets/lecturer/js/charts/flot/jquery.flot.resize.js"></script>
  <script src="<?= base_url(); ?>assets/lecturer/js/charts/flot/jquery.flot.orderBars.js"></script>
  <script src="<?= base_url(); ?>assets/lecturer/js/charts/flot/jquery.flot.pie.min.js"></script>
  <script src="<?= base_url(); ?>assets/lecturer/js/charts/flot/jquery.flot.grow.js"></script>
  <script src="<?= base_url(); ?>assets/lecturer/js/charts/flot/demo.js"></script>
  <script src="<?= base_url(); ?>assets/lecturer/js/app.plugin.js"></script>
</body>
</html>
