<!DOCTYPE html>
<html lang="en" class="app">
<head>
  <meta charset="utf-8" />
  <title>Admin</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="css/animate.css" type="text/css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="css/icon.css" type="text/css" />
  <link rel="stylesheet" href="css/font.css" type="text/css" />
  <link rel="stylesheet" href="css/app.css" type="text/css" />
  <link rel="stylesheet" href="js/calendar/bootstrap_calendar.css" type="text/css" />
  <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
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
          <img src="images/rsz_li.png" class="m-r-sm" alt="scale">
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
                    <img src="images/a0.png" alt="..." class="img-circle">
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
              <img src="images/a0.png" alt="...">
            </span>
            Mr. Admin<b class="caret"></b>
          </a>
          <ul class="dropdown-menu animated fadeInRight">
            <li>
              <span class="arrow top"></span>
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
                        <img src="images/a0.png" class="dker" alt="...">
                        <i class="on md b-black"></i>
                      </span>
                      <span class="hidden-nav-xs clear">
                        <span class="block m-t-xs">
                          <strong class="font-bold text-lt">Mr. Admin</strong>
                          <b class="caret"></b>
                        </span>
                        <span class="text-muted text-xs block">Admin</span>
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
                      <a href="buatsurvey.html" class="auto">
                        <b class="badge bg-danger pull-right">7</b>
                        <i class="i i-stack icon">
                        </i>
                        <span class="font-bold">Buat survey</span>
                      </a>

                    </li>
                    <li >
                      <a href="#" class="auto">
                        <span class="pull-right text-muted">
                          <i class="i i-circle-sm-o text"></i>
                          <i class="i i-circle-sm text-active"></i>
                        </span>
                        <i class="i i-docs icon">
                        </i>
                        <span class="font-bold">Atur</span>
                      </a>
                      <ul class="nav dk">
                        <li >
                          <a href="tambahakudosen.html" class="auto">
                            <i class="i i-dot"></i>

                            <span>Tambah akun Dosen</span>
                          </a>
                        </li>
                        </ul>
                        <ul class="nav dk">
                          <li >
                            <a href="panduan.html" class="auto">
                              <i class="i i-dot"></i>

                              <span>Tambah akun Mahasiswa</span>
                            </a>
                          </li>
                          </ul>

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
          <section class="hbox stretch">
                <section>
                  <section class="vbox">
                    <section class="scrollable wrapper">
                      <div class="panel b-a padder">
                        <div class="row">

                        </div>
                      </div>
                      <div class="blog-post">
                        <div class="post-item">
                          <div class="post-media">
                            <section class="m-b-none">
                              <div class="carousel auto slide" id="c-fade">

                                <div class="col-sm-10">
                                  <section class="panel panel-default">
                                    <header class="panel-heading font-bold">Tambah Akun Dosen</header>
                                    <div class="form-group">
                                      <div class="col-lg-offset-2 col-lg-10">

                                      </div>
                                    </div>
                                    <div class="panel-body">
                                      <form class="bs-example form-horizontal">
                                        <div class="form-group">
                                          <label class="col-lg-2 control-label">Nama</label>
                                          <div class="col-lg-10">
                                            <input type="Text" class="form-control" placeholder="Nama">
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-lg-2 control-label">Username</label>
                                          <div class="col-lg-10">
                                            <input type="Text" class="form-control" placeholder="Username">
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-lg-2 control-label">Password</label>
                                          <div class="col-lg-10">
                                            <input type="Text" class="form-control" placeholder="Password">
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-lg-2 control-label">Tahun Masuk</label>
                                          <div class="col-lg-10">
                                            <input type="Text" class="form-control" placeholder="Tahun Masuk">
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-lg-2 control-label">NIP</label>
                                          <div class="col-lg-10">
                                            <input type="Text" class="form-control" placeholder="NIP">
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-sm-2 control-label">Status</label>
                                          <div class="col-sm-10">
                                            <select name="account" class="form-control m-b">
                                              <option>--Pilih Status--</option>
                                              <option>Tetap</option>
                                              <option>Luar Biasa</option>
                                            </select>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-sm-2 control-label">Jurusan</label>
                                          <div class="col-sm-10">
                                            <select name="account" class="form-control m-b">
                                              <option>--Pilih Jurusan--</option>
                                              <option>Sarjana Biologi</option>
                                              <option>Sarjana Mikrobiologi</option>
                                              <option>Sarjana Rekayasa Hayati</option>
                                              <option>Sarjana Rekayasa Kehutanan</option>
                                              <option>Sarjana Rekayasa Pertanian</option>
                                              <option>Sarjana Teknologi Pasca Panen</option>
                                            </select>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                            <button type="submit" class="btn btn-success btn-s-xs">Tambah</button>
                                          </div>
                                        </div>
                                      </form>
                                    </div>
                                  </section>
                                </div>
                              </div>
                      </form>
                    </section>
                  </section>
                </section>
              </section>
          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
        </section>
      </section>
      <script src="js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.js"></script>
  <!-- App -->
  <script src="js/app.js"></script>
  <script src="js/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="js/charts/easypiechart/jquery.easy-pie-chart.js"></script>
  <script src="js/charts/sparkline/jquery.sparkline.min.js"></script>
  <script src="js/charts/flot/jquery.flot.min.js"></script>
  <script src="js/charts/flot/jquery.flot.tooltip.min.js"></script>
  <script src="js/charts/flot/jquery.flot.spline.js"></script>
  <script src="js/charts/flot/jquery.flot.pie.min.js"></script>
  <script src="js/charts/flot/jquery.flot.resize.js"></script>
  <script src="js/charts/flot/jquery.flot.grow.js"></script>
  <script src="js/charts/flot/demo.js"></script>

  <script src="js/calendar/bootstrap_calendar.js"></script>
  <script src="js/calendar/demo.js"></script>

  <script src="js/sortable/jquery.sortable.js"></script>
  <script src="js/app.plugin.js"></script>
</body>
</html>
