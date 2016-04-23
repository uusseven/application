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
          <ul class="dropdown-menu animated fadeInRight m-t-xs">
            <li>
              <span class="arrow top hidden-nav-xs"></span>
              <a href="#">Pengaturan</a>
            </li>
            <li>
              <a href="profil.html">Profil</a>
            </li>
            <li>
              <a href="#">
                <span class="badge bg-danger pull-right">3</span>
                Notifikasi
              </a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="log.html" data-toggle="ajaxModal" >Keluar</a>
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
                        <a href="profil.html">Profil</a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="badge bg-danger pull-right">3</span>
                          Notifikasi
                        </a>
                      </li>
                      <li class="divider"></li>
                      <li>
                        <a href="log.html" data-toggle="ajaxModal" >Keluar</a>
                      </li>
                    </ul>
                  </div>
                </div>


                <!-- nav -->
                <nav class="nav-primary hidden-xs">

                  <ul class="nav nav-main" data-ride="collapse">
                    <li  class="active">
                      <a href="index.html" class="auto">
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
                          <a href="profil.html" class="auto">
                            <i class="i i-dot"></i>

                            <span>Profil</span>
                          </a>
                        </li>

                        <li >
                          <a href="gantipassword.html" class="auto">
                            <i class="i i-dot"></i>

                            <span>Ganti password</span>
                          </a>
                        </li>
                        </ul>

                    </li>
                    <li >
                      <a href="survey.html" class="auto">
                        <b class="badge bg-danger pull-right">7</b>
                        <i class="i i-stack icon">
                        </i>
                        <span class="font-bold">Isi survey</span>
                      </a>

                    </li>
                    <li >
                      <a href="panduab.html" class="auto">
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
              <a href="log.html" data-toggle="ajaxModal" class="btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs">
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
                <h3 class="m-b-none">Ganti Password</h3>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <form data-validate="parsley">
                    <section class="panel panel-default">

                      <div class="panel-body">
                        <p class="text-muted">Harap isi dengan benar</p>
                        <div class="form-group">
                          <label>Username</label>
                          <input type="text" class="form-control" data-required="true">
                        </div>
                        <div class="form-group pull-in clearfix">
                          <div class="col-sm-6">
                            <label>Password Lama</label>
                            <input type="password" class="form-control" data-required="true" id="pwd">
                          </div>
                          <div class="col-sm-6">
                            <label>Password Baru</label>
                            <input type="password" class="form-control" data-equalto="#pwd" data-required="true">
                          </div>
                        </div>
                        <div class="checkbox i-checks">
                          <label>
                            <input type="checkbox" name="check" checked data-required="true"><i></i> Saya setuju dengan <a href="#" class="text-info">Kententuan Yang Berlaku</a>
                          </label>
                        </div>
                      </div>
                      <footer class="panel-footer text-right bg-light lter">
                        <button type="submit" class="btn btn-success btn-s-xs">Submit</button>
                      </footer>
                    </section>
                  </form>
                </div>



            </section>
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
  <!-- parsley -->
<script src="<?= base_url(); ?>assets/student/js/parsley/parsley.min.js"></script>
<script src="<?= base_url(); ?>assets/student/js/parsley/parsley.extend.js"></script>
  <script src="<?= base_url(); ?>assets/student/js/app.plugin.js"></script>
</body>
</html>
