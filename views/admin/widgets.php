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
                    <li  class="active">
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
                        <li  class="active">
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
                    <li >
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
                        <li >
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
            <header class="header bg-white b-b b-light">
              <p>Widgets <small>(colorful)</small></p>
            </header>
            <section class="scrollable wrapper">              
              <div class="row">
                <div class="col-lg-8">
                  <div class="row">
                    <div class="col-sm-6">
                      <section class="panel panel-default">
                        <header class="panel-heading bg-light no-border">
                          <div class="clearfix">
                            <a href="#" class="pull-left thumb-md avatar b-3x m-r">
                              <img src="images/a1.png">
                            </a>
                            <div class="clear">
                              <div class="h3 m-t-xs m-b-xs">
                                John.Smith 
                                <i class="fa fa-circle text-success pull-right text-xs m-t-sm"></i>
                              </div>
                              <small class="text-muted">Art director</small>
                            </div>
                          </div>
                        </header>
                        <div class="list-group no-radius alt">
                          <a class="list-group-item" href="#">
                            <span class="badge bg-success">25</span>
                            <i class="fa fa-comment icon-muted"></i> 
                            Messages
                          </a>
                          <a class="list-group-item" href="#">
                            <span class="badge bg-info">16</span>
                            <i class="fa fa-envelope icon-muted"></i> 
                            Inbox
                          </a>
                          <a class="list-group-item" href="#">
                            <span class="badge bg-light">5</span>
                            <i class="fa fa-eye icon-muted"></i> 
                            Profile visits
                          </a>
                        </div>
                      </section>
                      <section class="panel panel-info">
                        <div class="panel-body">
                          <a href="#" class="thumb pull-right m-l m-t-xs avatar">
                            <img src="images/a4.png">
                            <i class="on md b-white bottom"></i>
                          </a>
                          <div class="clear">
                            <a href="#" class="text-info">@Mike Mcalidek <i class="icon-twitter"></i></a>
                            <small class="block text-muted">2,415 followers / 225 tweets</small>
                            <a href="#" class="btn btn-xs btn-success m-t-xs">Follow</a>
                          </div>
                        </div>
                      </section>
                    </div>
                    <div class="col-sm-6">                  
                      <section class="panel panel-default">
                        <div class="text-center wrapper bg-light lt">
                          <div class="sparkline inline" data-type="bar" data-height="126" data-bar-width="6" data-bar-spacing="20" data-stacked-bar-color="['#1d89cf', '#e0e6f0']">10:10,8:12,12:8,10:10,11:9,7:13,9:11,8:12,11:9</div>
                        </div>
                        <ul class="list-group no-radius">
                          <li class="list-group-item">
                            <span class="pull-right">45,000</span>
                            <span class="label bg-primary">1</span>
                            .inc company
                          </li>
                          <li class="list-group-item">
                            <span class="pull-right">23,200</span>
                            <span class="label bg-info">2</span>
                            Gamecorp
                          </li>
                          <li class="list-group-item">
                            <span class="pull-right">21,000</span>
                            <span class="label bg-success">3</span>
                            Starup
                          </li>
                          <li class="list-group-item">
                            <span class="pull-right">15,000</span>
                            <span class="label bg-light">4</span>
                            Neosoft company
                          </li>
                        </ul>
                      </section>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <section class="panel panel-default">
                    <div class="panel-body">
                      <div class="clearfix text-center m-t">
                        <div class="inline">
                          <div class="easypiechart" data-percent="75" data-line-width="5" data-bar-color="#4cc0c1" data-track-Color="#f5f5f5" data-scale-Color="false" data-size="134" data-line-cap='butt' data-animate="1000">
                            <div class="thumb-lg">
                              <img src="images/a5.png" class="img-circle">
                            </div>
                          </div>
                          <div class="h4 m-t m-b-xs">John.Smith</div>
                          <small class="text-muted m-b">Art director</small>
                        </div>                      
                      </div>
                    </div>
                    <footer class="panel-footer bg-info text-center">
                      <div class="row pull-out">
                        <div class="col-xs-4">
                          <div class="padder-v">
                            <span class="m-b-xs h3 block text-white">245</span>
                            <small class="text-muted">Followers</small>
                          </div>
                        </div>
                        <div class="col-xs-4 dk">
                          <div class="padder-v">
                            <span class="m-b-xs h3 block text-white">55</span>
                            <small class="text-muted">Following</small>
                          </div>
                        </div>
                        <div class="col-xs-4">
                          <div class="padder-v">
                            <span class="m-b-xs h3 block text-white">2,035</span>
                            <small class="text-muted">Tweets</small>
                          </div>
                        </div>
                      </div>
                    </footer>
                  </section>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <section class="row m-l-none m-r-none m-b text-center box-shadow">
                    <div class="col-xs-4 bg-primary dk lter r-l">
                      <div class="wrapper">
                        <i class="fa fa-facebook fa fa-3x m-t m-b-sm text-white"></i>
                        <p class="text-muted font-bold">Facebook</p>
                        <div class="h4 font-bold">32k</div>
                      </div>
                    </div>
                    <div class="col-xs-4 bg-info lt">
                      <div class="wrapper">
                        <i class="fa fa-twitter fa fa-3x m-t m-b-sm text-white"></i>
                        <p class="text-muted font-bold">Twitter</p>
                        <div class="h4 font-bold">50k</div>
                      </div>
                    </div>
                    <div class="col-xs-4 bg-danger lt r-r">
                      <div class="wrapper">
                        <i class="fa fa-dribbble fa fa-3x m-t m-b-sm text-white"></i>
                        <p class="text-muted font-bold">Dribbble</p>
                        <div class="h4 font-bold">16k</div>
                      </div>
                    </div>
                  </section>
                  <!-- chat -->
                  <section class="panel panel-default">
                    <header class="panel-heading">Chat</header>
                    <section class="chat-list panel-body">
                      <article id="chat-id-1" class="chat-item left">
                        <a href="#" class="pull-left thumb-sm avatar"><img src="images/a2.png"></a>
                        <section class="chat-body">
                          <div class="panel b-light text-sm m-b-none">
                            <div class="panel-body">
                              <span class="arrow left"></span>
                              <p class="m-b-none">Hi John, What's up...</p>
                            </div>
                          </div>
                          <small class="text-muted"><i class="fa fa-ok text-success"></i> 2 minutes ago</small>
                        </section>
                      </article>
                      <article id="chat-id-1" class="chat-item right">
                        <a href="#" class="pull-right thumb-sm avatar"><img src="images/a3.png" class="img-circle"></a>
                        <section class="chat-body">                      
                          <div class="panel bg-light text-sm m-b-none">
                            <div class="panel-body">
                              <span class="arrow right"></span>
                              <p class="m-b-none">Lorem ipsum dolor sit amet, conse <br>adipiscing eli...<br>:)</p>
                            </div>
                          </div>
                          <small class="text-muted">1 minutes ago</small>
                        </section>
                      </article>                          
                    </section>
                    <footer class="panel-footer">
                      <!-- chat form -->
                      <article class="chat-item" id="chat-form">
                        <a class="pull-left thumb-sm avatar"><img src="images/a3.png" class="img-circle"></a>
                        <section class="chat-body">
                          <form action="" class="m-b-none">
                            <div class="input-group">
                              <input type="text" class="form-control" placeholder="Say something">
                              <span class="input-group-btn">
                                <button class="btn btn-default" type="button">SEND</button>
                              </span>
                            </div>
                          </form>
                        </section>
                      </article>
                    </footer>
                  </section>
                  <!-- /chat -->            
                  <section class="panel panel-default">
                    <header class="panel-heading">                    
                      <span class="label bg-dark">15</span> Inbox
                    </header>
                    <section class="panel-body slim-scroll" data-height="230px" data-size="10px">
                      <article class="media">
                        <span class="pull-left thumb-sm"><img src="images/a2.png"></span>
                        <div class="media-body">
                          <div class="pull-right media-xs text-center text-muted">
                            <strong class="h4">12:18</strong><br>
                            <small class="label bg-light">pm</small>
                          </div>
                          <a href="#" class="h4">Bootstrap 3 released</a>
                          <small class="block"><a href="#" class="">John Smith</a> <span class="label label-success">Circle</span></small>
                          <small class="block m-t-sm">Sleek, intuitive, and powerful mobile-first front-end framework for faster and easier web development.</small>
                        </div>
                      </article>
                      <div class="line pull-in"></div>
                      <article class="media">
                        <span class="pull-left thumb-sm"><i class="fa fa-file-o fa-3x icon-muted"></i></span>                
                        <div class="media-body">
                          <div class="pull-right media-xs text-center text-muted">
                            <strong class="h4">17</strong><br>
                            <small class="label bg-light">feb</small>
                          </div>
                          <a href="#" class="h4">Bootstrap documents</a>
                          <small class="block"><a href="#" class="">John Smith</a> <span class="label label-info">Friends</span></small>
                          <small class="block m-t-sm">There are a few easy ways to quickly get started with Bootstrap, each one appealing to a different skill level and use case. Read through to see what suits your particular needs.</small>
                        </div>
                      </article>
                      <div class="line pull-in"></div>
                      <article class="media">
                        <div class="media-body">
                          <div class="pull-right media-xs text-center text-muted">
                            <strong class="h4">09</strong><br>
                            <small class="label bg-light">jan</small>
                          </div>
                          <a href="#" class="h4 text-success">Mobile first html/css framework</a>
                          <small class="block m-t-sm">Bootstrap, Ratchet</small>
                        </div>
                      </article>
                    </section>
                  </section>
                </div>
                <div class="col-lg-6">
                  <!-- .comment-list -->
                  <section class="comment-list block">
                    <article id="comment-id-1" class="comment-item">
                      <a class="pull-left thumb-sm avatar">
                        <img src="images/a1.png" class="img-circle">
                      </a>
                      <span class="arrow left"></span>
                      <section class="comment-body panel panel-default">
                        <header class="panel-heading bg-white">
                          <a href="#">John smith</a>
                          <label class="label bg-info m-l-xs">Editor</label> 
                          <span class="text-muted m-l-sm pull-right">
                            <i class="fa fa-clock-o"></i>
                            Just now
                          </span>
                        </header>
                        <div class="panel-body">
                          <div>Lorem ipsum dolor sit amet, consecteter adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</div>
                          <div class="comment-action m-t-sm">
                            <a href="#" data-toggle="class" class="btn btn-default btn-xs active">
                              <i class="fa fa-star-o text-muted text"></i>
                              <i class="fa fa-star text-danger text-active"></i> 
                              Like
                            </a>
                            <a href="#comment-form" class="btn btn-default btn-xs">
                              <i class="fa fa-mail-reply text-muted"></i> Reply
                            </a>
                          </div>
                        </div>
                      </section>
                    </article>
                    <!-- .comment-reply -->
                    <article id="comment-id-2" class="comment-item comment-reply">
                      <a class="pull-left thumb-sm avatar">
                        <img src="images/a8.png">
                      </a>
                      <span class="arrow left"></span>
                      <section class="comment-body panel panel-default text-sm">
                        <div class="panel-body">
                          <span class="text-muted m-l-sm pull-right">
                            <i class="fa fa-clock-o"></i>
                            10m ago
                          </span>
                          <a href="#">Mika Sam</a>
                          <label class="label bg-dark m-l-xs">Admin</label> 
                          Report this comment is helpful                           
                        </div>
                      </section>
                    </article>
                    <!-- / .comment-reply -->
                    <article id="comment-id-3" class="comment-item">
                      <a class="pull-left thumb-sm avatar"><img src="images/a9.png"></a>
                      <span class="arrow left"></span>
                      <section class="comment-body panel panel-default">
                        <header class="panel-heading">                      
                          <a href="#">By me</a>
                          <label class="label bg-success m-l-xs">User</label> 
                          <span class="text-muted m-l-sm pull-right">
                            <i class="fa fa-clock-o"></i>
                            1h ago
                          </span>
                        </header>
                        <div class="panel-body">
                          <div>This comment was posted by you.</div>
                          <div class="comment-action m-t-sm">
                            <a href="#comment-id-3" data-dismiss="alert" class="btn btn-default btn-xs">
                              <i class="fa fa-trash-o text-muted"></i> 
                              Remove
                            </a>
                          </div>
                        </div>
                      </section>
                    </article>
                    <article id="comment-id-4" class="comment-item">
                      <a class="pull-left thumb-sm avatar"><img src="images/a5.png"></a>
                      <span class="arrow left"></span>
                      <section class="comment-body panel panel-default">
                        <header class="panel-heading">
                          <a href="#">Peter</a>
                          <label class="label bg-primary m-l-xs">Vip</label> 
                          <span class="text-muted m-l-sm pull-right">
                            <i class="fa fa-clock-o"></i>
                            2hs ago
                          </span>
                        </header>
                        <div class="panel-body">
                          <blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                            <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                          </blockquote>
                          <div>Lorem ipsum dolor sit amet, consecteter adipiscing elit...</div>
                          <div class="comment-action m-t-sm">
                            <a href="#" data-toggle="class" class="btn btn-default btn-xs">
                              <i class="fa fa-star-o text-muted text"></i>
                              <i class="fa fa-star text-danger text-active"></i> 
                              Like
                            </a>
                            <a href="#comment-form" class="btn btn-default btn-xs"><i class="fa fa-mail-reply text-muted"></i> Reply</a>
                          </div>
                        </div>
                      </section>
                    </article>
                    <!-- comment form -->
                    <article class="comment-item media" id="comment-form">
                      <a class="pull-left thumb-sm avatar"><img src="images/a6.png"></a>
                      <section class="media-body">
                        <form action="" class="m-b-none">
                          <div class="input-group">
                            <input type="text" class="form-control" placeholder="Input your comment here">
                            <span class="input-group-btn">
                              <button class="btn btn-primary" type="button">POST</button>
                            </span>
                          </div>
                        </form>
                      </section>
                    </article>
                  </section>
                  <!-- / .comment-list -->
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
<script src="js/charts/sparkline/jquery.sparkline.min.js"></script>
  <script src="js/app.plugin.js"></script>
</body>
</html>