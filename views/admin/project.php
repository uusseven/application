<!DOCTYPE html>
<html lang="en" class="app">
<head>  
  <meta charset="utf-8" />
  <title>Scale | Web Application</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="css/animate.css" type="text/css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="css/icon.css" type="text/css" />
  <link rel="stylesheet" href="css/font.css" type="text/css" />
  <link rel="stylesheet" href="css/app.css" type="text/css" />  
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
          <img src="images/logo.png" class="m-r-sm" alt="scale">
          <span class="hidden-nav-xs">Scale</span>
        </a>
        <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user">
          <i class="fa fa-cog"></i>
        </a>
      </div>
      <ul class="nav navbar-nav hidden-xs">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="i i-grid"></i>
          </a>
          <section class="dropdown-menu aside-lg bg-white on animated fadeInLeft">
            <div class="row m-l-none m-r-none m-t m-b text-center">
              <div class="col-xs-4">
                <div class="padder-v">
                  <a href="#">
                    <span class="m-b-xs block">
                      <i class="i i-mail i-2x text-primary-lt"></i>
                    </span>
                    <small class="text-muted">Mailbox</small>
                  </a>
                </div>
              </div>
              <div class="col-xs-4">
                <div class="padder-v">
                  <a href="#">
                    <span class="m-b-xs block">
                      <i class="i i-calendar i-2x text-danger-lt"></i>
                    </span>
                    <small class="text-muted">Calendar</small>
                  </a>
                </div>
              </div>
              <div class="col-xs-4">
                <div class="padder-v">
                  <a href="#">
                    <span class="m-b-xs block">
                      <i class="i i-map i-2x text-success-lt"></i>
                    </span>
                    <small class="text-muted">Map</small>
                  </a>
                </div>
              </div>
              <div class="col-xs-4">
                <div class="padder-v">
                  <a href="#">
                    <span class="m-b-xs block">
                      <i class="i i-paperplane i-2x text-info-lt"></i>
                    </span>
                    <small class="text-muted">Trainning</small>
                  </a>
                </div>
              </div>
              <div class="col-xs-4">
                <div class="padder-v">
                  <a href="#">
                    <span class="m-b-xs block">
                      <i class="i i-images i-2x text-muted"></i>
                    </span>
                    <small class="text-muted">Photos</small>
                  </a>
                </div>
              </div>
              <div class="col-xs-4">
                <div class="padder-v">
                  <a href="#">
                    <span class="m-b-xs block">
                      <i class="i i-clock i-2x text-warning-lter"></i>
                    </span>
                    <small class="text-muted">Timeline</small>
                  </a>
                </div>
              </div>
            </div>
          </section>
        </li>
      </ul>
      <form class="navbar-form navbar-left input-s-lg m-t m-l-n-xs hidden-xs" role="search">
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-btn">
              <button type="submit" class="btn btn-sm bg-white b-white btn-icon"><i class="fa fa-search"></i></button>
            </span>
            <input type="text" class="form-control input-sm no-border" placeholder="Search apps, projects...">            
          </div>
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
            John.Smith <b class="caret"></b>
          </a>
          <ul class="dropdown-menu animated fadeInRight">            
            <li>
              <span class="arrow top"></span>
              <a href="#">Settings</a>
            </li>
            <li>
              <a href="profile.html">Profile</a>
            </li>
            <li>
              <a href="#">
                <span class="badge bg-danger pull-right">3</span>
                Notifications
              </a>
            </li>
            <li>
              <a href="docs.html">Help</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="modal.lockme.html" data-toggle="ajaxModal" >Logout</a>
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
                          <strong class="font-bold text-lt">John.Smith</strong> 
                          <b class="caret"></b>
                        </span>
                        <span class="text-muted text-xs block">Art Director</span>
                      </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">                      
                      <li>
                        <span class="arrow top hidden-nav-xs"></span>
                        <a href="#">Settings</a>
                      </li>
                      <li>
                        <a href="profile.html">Profile</a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="badge bg-danger pull-right">3</span>
                          Notifications
                        </a>
                      </li>
                      <li>
                        <a href="docs.html">Help</a>
                      </li>
                      <li class="divider"></li>
                      <li>
                        <a href="modal.lockme.html" data-toggle="ajaxModal" >Logout</a>
                      </li>
                    </ul>
                  </div>
                </div>                


                <!-- nav -->                 
                <nav class="nav-primary hidden-xs">
                  <div class="text-muted text-sm hidden-nav-xs padder m-t-sm m-b-sm">Start</div>
                  <ul class="nav nav-main" data-ride="collapse">
                    <li >
                      <a href="index.html" class="auto">
                        <i class="i i-statistics icon">
                        </i>
                        <span class="font-bold">Overview</span>
                      </a>
                    </li>
                    <li >
                      <a href="#" class="auto">
                        <span class="pull-right text-muted">
                          <i class="i i-circle-sm-o text"></i>
                          <i class="i i-circle-sm text-active"></i>
                        </span>
                        <b class="badge bg-danger pull-right">4</b>
                        <i class="i i-stack icon">
                        </i>
                        <span class="font-bold">Layouts</span>
                      </a>
                      <ul class="nav dk">
                        <li >
                          <a href="layout-color.html" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Color option</span>
                          </a>
                        </li>
                        <li >
                          <a href="layout-hbox.html" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Hbox layout</span>
                          </a>
                        </li>
                        <li >
                          <a href="layout-boxed.html" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Boxed layout</span>
                          </a>
                        </li>
                        <li >
                          <a href="layout-fluid.html" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Fluid layout</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li >
                      <a href="#" class="auto">
                        <span class="pull-right text-muted">
                          <i class="i i-circle-sm-o text"></i>
                          <i class="i i-circle-sm text-active"></i>
                        </span>
                        <i class="i i-lab icon">
                        </i>
                        <span class="font-bold">UI kit</span>
                      </a>
                      <ul class="nav dk">
                        <li >
                          <a href="buttons.html" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Buttons</span>
                          </a>
                        </li>
                        <li >
                          <a href="icons.html" class="auto">                            
                            <b class="badge bg-info pull-right">369</b>                                                        
                            <i class="i i-dot"></i>

                            <span>Icons</span>
                          </a>
                        </li>
                        <li >
                          <a href="grid.html" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Grid</span>
                          </a>
                        </li>
                        <li >
                          <a href="widgets.html" class="auto">                            
                            <b class="badge bg-dark pull-right">8</b>                                                        
                            <i class="i i-dot"></i>

                            <span>Widgets</span>
                          </a>
                        </li>
                        <li >
                          <a href="components.html" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Components</span>
                          </a>
                        </li>
                        <li >
                          <a href="list.html" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>List group</span>
                          </a>
                        </li>
                        <li >
                          <a href="#table" class="auto">                            
                            <span class="pull-right text-muted">
                              <i class="i i-circle-sm-o text"></i>
                              <i class="i i-circle-sm text-active"></i>
                            </span>                            
                            <i class="i i-dot"></i>

                            <span>Table</span>
                          </a>
                          <ul class="nav dker">
                            <li >
                              <a href="table-static.html">
                                <i class="i i-dot"></i>
                                <span>Table static</span>
                              </a>
                            </li>
                            <li >
                              <a href="table-datatable.html">
                                <i class="i i-dot"></i>
                                <span>Datatable</span>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li >
                          <a href="#form" class="auto">                            
                            <span class="pull-right text-muted">
                              <i class="i i-circle-sm-o text"></i>
                              <i class="i i-circle-sm text-active"></i>
                            </span>                            
                            <i class="i i-dot"></i>

                            <span>Form</span>
                          </a>
                          <ul class="nav dker">
                            <li >
                              <a href="form-elements.html">
                                <i class="i i-dot"></i>
                                <span>Form elements</span>
                              </a>
                            </li>
                            <li >
                              <a href="form-validation.html">
                                <i class="i i-dot"></i>
                                <span>Form validation</span>
                              </a>
                            </li>
                            <li >
                              <a href="form-wizard.html">
                                <i class="i i-dot"></i>
                                <span>Form wizard</span>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li >
                          <a href="chart.html" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Chart</span>
                          </a>
                        </li>
                        <li >
                          <a href="portlet.html" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Portlet</span>
                          </a>
                        </li>
                        <li >
                          <a href="timeline.html" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Timeline</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li >
                      <a href="#" class="auto">
                        <span class="pull-right text-muted">
                          <i class="i i-circle-sm-o text"></i>
                          <i class="i i-circle-sm text-active"></i>
                        </span>
                        <i class="i i-docs icon">
                        </i>
                        <span class="font-bold">Pages</span>
                      </a>
                      <ul class="nav dk">
                        <li >
                          <a href="profile.html" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Profile</span>
                          </a>
                        </li>
                        <li >
                          <a href="invoice.html" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Invoice</span>
                          </a>
                        </li>
                        <li >
                          <a href="intro.html" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Intro</span>
                          </a>
                        </li>
                        <li >
                          <a href="master.html" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Master</span>
                          </a>
                        </li>
                        <li >
                          <a href="gmap.html" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Google Map</span>
                          </a>
                        </li>
                        <li >
                          <a href="jvectormap.html" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Vector Map</span>
                          </a>
                        </li>
                        <li >
                          <a href="signin.html" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Signin</span>
                          </a>
                        </li>
                        <li >
                          <a href="signup.html" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Signup</span>
                          </a>
                        </li>
                        <li >
                          <a href="404.html" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>404</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li  class="active">
                      <a href="#" class="auto">
                        <span class="pull-right text-muted">
                          <i class="i i-circle-sm-o text"></i>
                          <i class="i i-circle-sm text-active"></i>
                        </span>
                        <i class="i i-grid2 icon">
                        </i>
                        <span class="font-bold">Apps</span>
                      </a>
                      <ul class="nav dk">
                        <li >
                          <a href="mail.html" class="auto">                            
                            <b class="badge bg-success lt pull-right">2</b>                                                        
                            <i class="i i-dot"></i>

                            <span>Mailbox</span>
                          </a>
                        </li>
                        <li >
                          <a href="fullcalendar.html" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Calendar</span>
                          </a>
                        </li>
                        <li  class="active">
                          <a href="project.html" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Project</span>
                          </a>
                        </li>
                        <li >
                          <a href="media.html" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Media</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                  <div class="line dk hidden-nav-xs"></div>
                  <div class="text-muted text-xs hidden-nav-xs padder m-t-sm m-b-sm">Lables</div>
                  <ul class="nav">
                    <li>
                      <a href="mail.html#work">
                        <i class="i i-circle-sm text-info-dk"></i>
                        <span>Work space</span>
                      </a>
                    </li>
                    <li>
                      <a href="mail.html#social">
                        <i class="i i-circle-sm text-success-dk"></i>
                        <span>Connection</span>
                      </a>
                    </li>
                    <li>
                      <a href="mail.html#projects">
                        <i class="i i-circle-sm text-danger-dk"></i>
                        <span>Projects</span>
                      </a>
                    </li>
                  </ul>
                  <div class="text-muted text-xs hidden-nav-xs padder m-t-sm m-b-sm">Circles</div>
                  <ul class="nav">
                    <li>
                      <a href="#">
                        <i class="i i-circle-sm-o text-success-lt"></i>
                        <span>College</span>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="i i-circle-sm-o text-warning"></i>
                        <span>Social</span>
                      </a>
                    </li>
                  </ul>
                </nav>
                <!-- / nav -->
              </div>
            </section>
            
            <footer class="footer hidden-xs no-padder text-center-nav-xs">
              <a href="modal.lockme.html" data-toggle="ajaxModal" class="btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs">
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
            <section class="scrollable wrapper-lg">
              <div class="m-b h2">
                <span class="font-thin">Projects</span> 
                <span class="badge bg-danger lt v-middle">5</span>
              </div>
              <div class="row m-b-lg">
                <div class="col-sm-9">
                  <a href="#" class="btn btn-sm btn-default btn-rounded m-b-xs">Web Application</a>
                  <a href="#" class="btn btn-sm btn-default btn-rounded m-b-xs">E-Commerce</a>
                  <a href="#" class="btn btn-sm btn-default btn-rounded m-b-xs">Website</a>
                  <a href="#" class="btn btn-sm btn-default btn-rounded m-b-xs">CMS</a>
                </div>
                <div class="col-sm-3 text-right text-left-xs">
                  <div class="btn-group">
                    <a class="btn btn-sm btn-rounded btn-default dropdown-toggle" data-toggle="dropdown">Filter by <span class="caret"></span></a>
                    <ul class="dropdown-menu text-left pull-right pull-none-xs">
                      <li><a href="#">Android</a></li>
                      <li><a href="#">IOS</a></li>
                      <li><a href="#">Windows Phone</a></li>
                      <li class="divider"></li>
                      <li><a href="#">More</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="row m-b">
                <div class="col-sm-6 col-md-4">
                  <section class="panel b-a">
                    <div class="panel-heading no-border bg-primary lt">
                      <span class="pull-right badge dk m-t-sm">17</span>
                      <a href="#" class="h4 text-lt m-t-sm m-b-sm block font-bold">E-learning application</a>
                    </div>
                    <div class="panel-body">
                      <span class="pull-right text-muted">3:30 pm</span>
                      <a href="#" class="block m-b text-ellipsis">Jone start working on new issue</a>
                      <div id="b-c" class="text-center">
                        <div class="easypiechart inline m-b m-t" data-percent="60" data-line-width="10" data-bar-Color="#afc5de" data-track-Color="#f2f4f8" data-scale-Color="false" data-size="150" data-line-cap='butt' data-animate="2000">
                          <div>
                            <span class="h1 m-l-sm step font-bold"></span>%
                            <div class="text text-xs text-muted">completed</div>
                          </div>
                        </div>
                      </div>
                      <div class="row text-center m-t">
                        <div class="col-xs-6">
                          <p>Finished</p>
                          <h3 class="font-thin">12</h3>
                        </div>
                        <div class="col-xs-6">
                          <p>Remaining</p>
                          <h3 class="font-thin">20</h3>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix panel-footer">
                      <a href="#" class="pull-right"><i class="i i-trashcan text-muted"></i></a>
                      <a href="#" class="m-r"><i class="i i-calendar text-muted"></i></a>
                      <a href="#" class=""><i class="i i-graph text-muted"></i></a>                      
                    </div>
                  </section>
                </div>
                <div class="col-sm-6 col-md-4">
                  <section class="panel b-a">
                    <div class="panel-heading no-border bg-info lt">
                      <span class="pull-right badge dk m-t-sm">45</span>
                      <a href="#" class="h4 text-lt m-t-sm m-b-sm block font-bold">Jone's Coffee Shop</a>
                    </div>
                    <div class="panel-body">
                      <span class="pull-right text-muted">1:30 pm</span>
                      <a href="#" class="block m-b text-ellipsis">Milestone released</a>
                      <div id="b-c" class="text-center">
                        <div class="easypiechart inline m-b m-t" data-percent="90" data-line-width="10" data-bar-Color="#c2f0f1" data-track-Color="#f2f4f8" data-scale-Color="false" data-size="150" data-line-cap='butt' data-animate="2000">
                          <div>
                            <span class="h1 m-l-sm step font-bold"></span>%
                            <div class="text text-xs text-muted">completed</div>
                          </div>
                        </div>
                      </div>
                      <div class="row text-center m-t">
                        <div class="col-xs-6">
                          <p>Finished</p>
                          <h3 class="font-thin">132</h3>
                        </div>
                        <div class="col-xs-6">
                          <p>Remaining</p>
                          <h3 class="font-thin">5</h3>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix panel-footer">
                      <a href="#" class="pull-right"><i class="i i-trashcan text-muted"></i></a>
                      <a href="#" class="m-r"><i class="i i-calendar text-muted"></i></a>
                      <a href="#" class=""><i class="i i-graph text-muted"></i></a>                      
                    </div>
                  </section>
                </div>
                <div class="col-sm-6 col-md-4">
                  <section class="panel b-a">
                    <div class="panel-heading no-border bg-success lter">
                      <span class="pull-right badge dk m-t-sm">20</span>
                      <a href="#" class="h4 text-lt m-t-sm m-b-sm block font-bold">Bussiness website</a>
                    </div>
                    <div class="panel-body">
                      <span class="pull-right text-muted">9:30 am</span>
                      <a href="#" class="block m-b text-ellipsis">Kick-off meeting</a>
                      <div id="b-c" class="text-center">
                        <div class="easypiechart inline m-b m-t" data-percent="10" data-line-width="10" data-bar-Color="#b5ebba" data-track-Color="#f2f4f8" data-scale-Color="false" data-size="150" data-line-cap='butt' data-animate="2000">
                          <div>
                            <span class="h1 m-l-sm step font-bold"></span>%
                            <div class="text text-xs text-muted">completed</div>
                          </div>
                        </div>
                      </div>
                      <div class="row text-center m-t">
                        <div class="col-xs-6">
                          <p>Finished</p>
                          <h3 class="font-thin">1</h3>
                        </div>
                        <div class="col-xs-6">
                          <p>Remaining</p>
                          <h3 class="font-thin">160</h3>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix panel-footer">
                      <a href="#" class="pull-right"><i class="i i-trashcan text-muted"></i></a>
                      <a href="#" class="m-r"><i class="i i-calendar text-muted"></i></a>
                      <a href="#" class=""><i class="i i-graph text-muted"></i></a>                      
                    </div>
                  </section>
                </div>
                <div class="col-sm-6 col-md-4">
                  <section class="panel b-a">
                    <div class="panel-heading no-border bg-warning lter">
                      <span class="pull-right badge dk m-t-sm">12</span>
                      <a href="#" class="h4 text-lt m-t-sm m-b-sm block font-bold">Wordpress Plugin</a>
                    </div>
                    <div class="panel-body">
                      <span class="pull-right text-muted">9:30 am</span>
                      <a href="#" class="block m-b text-ellipsis">Kick-off meeting</a>
                      <div id="b-c" class="text-center">
                        <div class="easypiechart inline m-b m-t" data-percent="35" data-line-width="10" data-bar-Color="#ffebb4" data-track-Color="#fff" data-color="#f2f4f8" data-scale-Color="false" data-size="150" data-animate="2000">
                          <div>
                            <span class="h1 m-l-sm step font-bold"></span>%
                            <div class="text text-xs text-muted">completed</div>
                          </div>
                        </div>
                      </div>
                      <div class="row text-center m-t">
                        <div class="col-xs-6">
                          <p>Finished</p>
                          <h3 class="font-thin">39</h3>
                        </div>
                        <div class="col-xs-6">
                          <p>Remaining</p>
                          <h3 class="font-thin">120</h3>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix panel-footer">
                      <a href="#" class="pull-right"><i class="i i-trashcan text-muted"></i></a>
                      <a href="#" class="m-r"><i class="i i-calendar text-muted"></i></a>
                      <a href="#" class=""><i class="i i-graph text-muted"></i></a>                      
                    </div>
                  </section>
                </div>
                <div class="col-sm-6 col-md-4">
                  <section class="panel b-a">
                    <div class="panel-heading no-border bg-light dk">
                      <span class="pull-right badge dker m-t-sm">4</span>
                      <a href="#" class="h4 text-lt m-t-sm m-b-sm block font-bold">E-Commerce</a>
                    </div>
                    <div class="panel-body">
                      <span class="pull-right text-muted">9:30 am</span>
                      <a href="#" class="block m-b text-ellipsis">Kick-off meeting</a>
                      <div id="b-c" class="text-center">
                        <div class="easypiechart inline m-b m-t" data-percent="50" data-line-width="10" data-bar-Color="#e0e6f0" data-track-Color="#fff" data-color="#f2f4f8" data-scale-Color="false" data-rotate="90" data-size="150" data-animate="2000">
                          <div>
                            <span class="h1 m-l-sm step font-bold"></span>%
                            <div class="text text-xs text-muted">completed</div>
                          </div>
                        </div>
                      </div>
                      <div class="row text-center m-t">
                        <div class="col-xs-6">
                          <p>Finished</p>
                          <h3 class="font-thin">30</h3>
                        </div>
                        <div class="col-xs-6">
                          <p>Remaining</p>
                          <h3 class="font-thin">30</h3>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix panel-footer">
                      <a href="#" class="pull-right"><i class="i i-trashcan text-muted"></i></a>
                      <a href="#" class="m-r"><i class="i i-calendar text-muted"></i></a>
                      <a href="#" class=""><i class="i i-graph text-muted"></i></a>                      
                    </div>
                  </section>
                </div>
              </div>
              <div>
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-default btn-rounded"><i class="i i-arrow-left4"></i></button>
                  <button type="button" class="btn btn-sm btn-default btn-rounded"><i class="i i-arrow-right4"></i></button>
                </div>
              </div>
            </section>
          </section>
          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
        </section>
      </section>
    </section>
  </section>
  <script src="js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.js"></script>
  <!-- App -->
  <script src="js/app.js"></script>  
  <script src="js/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="js/charts/easypiechart/jquery.easy-pie-chart.js"></script>
  <script src="js/app.plugin.js"></script>
</body>
</html>