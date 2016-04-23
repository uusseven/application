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
                        <li  class="active">
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
              <p>FontAwesome! <span class="label label-lg bg-info">4.0</span></p>
            </header>
            <section class="scrollable wrapper">
              <h3>Font Awesome gives you scalable vector icons that can instantly be customized — size, color, drop shadow, and anything that can be done with the power of CSS.</h3>
              <div>
                <section id="web-application">
                  <h4 class="page-header">Web Application Icons</h4>

                  <div class="row list-icon">                  
                      <div class="col-md-3 col-sm-4"><i class="fa fa-adjust"></i> fa-adjust</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-anchor"></i> fa-anchor</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-archive"></i> fa-archive</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-arrows"></i> fa-arrows</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-arrows-h"></i> fa-arrows-h</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-arrows-v"></i> fa-arrows-v</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-asterisk"></i> fa-asterisk</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-ban"></i> fa-ban</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-bar-chart-o"></i> fa-bar-chart-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-barcode"></i> fa-barcode</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-bars"></i> fa-bars</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-beer"></i> fa-beer</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-bell"></i> fa-bell</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-bell-o"></i> fa-bell-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-bolt"></i> fa-bolt</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-book"></i> fa-book</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-bookmark"></i> fa-bookmark</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-bookmark-o"></i> fa-bookmark-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-briefcase"></i> fa-briefcase</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-bug"></i> fa-bug</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-building-o"></i> fa-building-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-bullhorn"></i> fa-bullhorn</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-bullseye"></i> fa-bullseye</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-calendar"></i> fa-calendar</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-calendar-o"></i> fa-calendar-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-camera"></i> fa-camera</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-camera-retro"></i> fa-camera-retro</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-caret-square-o-down"></i> fa-caret-square-o-down</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-caret-square-o-left"></i> fa-caret-square-o-left</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-caret-square-o-right"></i> fa-caret-square-o-right</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-caret-square-o-up"></i> fa-caret-square-o-up</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-certificate"></i> fa-certificate</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-check"></i> fa-check</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-check-circle"></i> fa-check-circle</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-check-circle-o"></i> fa-check-circle-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-check-square"></i> fa-check-square</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-check-square-o"></i> fa-check-square-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-circle"></i> fa-circle</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-circle-o"></i> fa-circle-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-clock-o"></i> fa-clock-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-cloud"></i> fa-cloud</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-cloud-download"></i> fa-cloud-download</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-cloud-upload"></i> fa-cloud-upload</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-code"></i> fa-code</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-code-fork"></i> fa-code-fork</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-coffee"></i> fa-coffee</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-cog"></i> fa-cog</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-cogs"></i> fa-cogs</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-comment"></i> fa-comment</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-comment-o"></i> fa-comment-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-comments"></i> fa-comments</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-comments-o"></i> fa-comments-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-compass"></i> fa-compass</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-credit-card"></i> fa-credit-card</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-crop"></i> fa-crop</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-crosshairs"></i> fa-crosshairs</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-cutlery"></i> fa-cutlery</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-dashboard"></i> fa-dashboard <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-desktop"></i> fa-desktop</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-dot-circle-o"></i> fa-dot-circle-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-download"></i> fa-download</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-edit"></i> fa-edit <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-ellipsis-h"></i> fa-ellipsis-h</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-ellipsis-v"></i> fa-ellipsis-v</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-envelope"></i> fa-envelope</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-envelope-o"></i> fa-envelope-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-eraser"></i> fa-eraser</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-exchange"></i> fa-exchange</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-exclamation"></i> fa-exclamation</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-exclamation-circle"></i> fa-exclamation-circle</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-exclamation-triangle"></i> fa-exclamation-triangle</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-external-link"></i> fa-external-link</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-external-link-square"></i> fa-external-link-square</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-eye"></i> fa-eye</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-eye-slash"></i> fa-eye-slash</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-female"></i> fa-female</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-fighter-jet"></i> fa-fighter-jet</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-film"></i> fa-film</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-filter"></i> fa-filter</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-fire"></i> fa-fire</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-fire-extinguisher"></i> fa-fire-extinguisher</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-flag"></i> fa-flag</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-flag-checkered"></i> fa-flag-checkered</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-flag-o"></i> fa-flag-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-flash"></i> fa-flash <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-flask"></i> fa-flask</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-folder"></i> fa-folder</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-folder-o"></i> fa-folder-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-folder-open"></i> fa-folder-open</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-folder-open-o"></i> fa-folder-open-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-frown-o"></i> fa-frown-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-gamepad"></i> fa-gamepad</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-gavel"></i> fa-gavel</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-gear"></i> fa-gear <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-gears"></i> fa-gears <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-gift"></i> fa-gift</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-glass"></i> fa-glass</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-globe"></i> fa-globe</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-group"></i> fa-group <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-hdd-o"></i> fa-hdd-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-headphones"></i> fa-headphones</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-heart"></i> fa-heart</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-heart-o"></i> fa-heart-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-home"></i> fa-home</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-inbox"></i> fa-inbox</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-info"></i> fa-info</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-info-circle"></i> fa-info-circle</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-key"></i> fa-key</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-keyboard-o"></i> fa-keyboard-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-laptop"></i> fa-laptop</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-leaf"></i> fa-leaf</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-legal"></i> fa-legal <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-lemon-o"></i> fa-lemon-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-level-down"></i> fa-level-down</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-level-up"></i> fa-level-up</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-lightbulb-o"></i> fa-lightbulb-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-location-arrow"></i> fa-location-arrow</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-lock"></i> fa-lock</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-magic"></i> fa-magic</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-magnet"></i> fa-magnet</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-mail-forward"></i> fa-mail-forward <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-mail-reply"></i> fa-mail-reply <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-mail-reply-all"></i> fa-mail-reply-all</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-male"></i> fa-male</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-map-marker"></i> fa-map-marker</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-meh-o"></i> fa-meh-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-microphone"></i> fa-microphone</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-microphone-slash"></i> fa-microphone-slash</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-minus"></i> fa-minus</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-minus-circle"></i> fa-minus-circle</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-minus-square"></i> fa-minus-square</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-minus-square-o"></i> fa-minus-square-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-mobile"></i> fa-mobile</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-mobile-phone"></i> fa-mobile-phone <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-money"></i> fa-money</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-moon-o"></i> fa-moon-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-music"></i> fa-music</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-pencil"></i> fa-pencil</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-pencil-square"></i> fa-pencil-square</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-pencil-square-o"></i> fa-pencil-square-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-phone"></i> fa-phone</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-phone-square"></i> fa-phone-square</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-picture-o"></i> fa-picture-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-plane"></i> fa-plane</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-plus"></i> fa-plus</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-plus-circle"></i> fa-plus-circle</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-plus-square"></i> fa-plus-square</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-plus-square-o"></i> fa-plus-square-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-power-off"></i> fa-power-off</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-print"></i> fa-print</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-puzzle-piece"></i> fa-puzzle-piece</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-qrcode"></i> fa-qrcode</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-question"></i> fa-question</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-question-circle"></i> fa-question-circle</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-quote-left"></i> fa-quote-left</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-quote-right"></i> fa-quote-right</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-random"></i> fa-random</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-refresh"></i> fa-refresh</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-reply"></i> fa-reply</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-reply-all"></i> fa-reply-all</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-retweet"></i> fa-retweet</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-road"></i> fa-road</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-rocket"></i> fa-rocket</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-rss"></i> fa-rss</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-rss-square"></i> fa-rss-square</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-search"></i> fa-search</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-search-minus"></i> fa-search-minus</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-search-plus"></i> fa-search-plus</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-share"></i> fa-share</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-share-square"></i> fa-share-square</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-share-square-o"></i> fa-share-square-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-shield"></i> fa-shield</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-shopping-cart"></i> fa-shopping-cart</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-sign-in"></i> fa-sign-in</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-sign-out"></i> fa-sign-out</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-signal"></i> fa-signal</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-sitemap"></i> fa-sitemap</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-smile-o"></i> fa-smile-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-sort"></i> fa-sort</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-sort-alpha-asc"></i> fa-sort-alpha-asc</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-sort-alpha-desc"></i> fa-sort-alpha-desc</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-sort-amount-asc"></i> fa-sort-amount-asc</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-sort-amount-desc"></i> fa-sort-amount-desc</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-sort-asc"></i> fa-sort-asc</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-sort-desc"></i> fa-sort-desc</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-sort-down"></i> fa-sort-down <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-sort-numeric-asc"></i> fa-sort-numeric-asc</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-sort-numeric-desc"></i> fa-sort-numeric-desc</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-sort-up"></i> fa-sort-up <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-spinner"></i> fa-spinner</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-square"></i> fa-square</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-square-o"></i> fa-square-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-star"></i> fa-star</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-star-half"></i> fa-star-half</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-star-half-empty"></i> fa-star-half-empty <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-star-half-full"></i> fa-star-half-full <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-star-half-o"></i> fa-star-half-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-star-o"></i> fa-star-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-subscript"></i> fa-subscript</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-suitcase"></i> fa-suitcase</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-sun-o"></i> fa-sun-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-superscript"></i> fa-superscript</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-tablet"></i> fa-tablet</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-tachometer"></i> fa-tachometer</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-tag"></i> fa-tag</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-tags"></i> fa-tags</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-tasks"></i> fa-tasks</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-terminal"></i> fa-terminal</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-thumb-tack"></i> fa-thumb-tack</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-thumbs-down"></i> fa-thumbs-down</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-thumbs-o-down"></i> fa-thumbs-o-down</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-thumbs-o-up"></i> fa-thumbs-o-up</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-thumbs-up"></i> fa-thumbs-up</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-ticket"></i> fa-ticket</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-times"></i> fa-times</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-times-circle"></i> fa-times-circle</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-times-circle-o"></i> fa-times-circle-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-tint"></i> fa-tint</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-toggle-down"></i> fa-toggle-down <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-toggle-left"></i> fa-toggle-left <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-toggle-right"></i> fa-toggle-right <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-toggle-up"></i> fa-toggle-up <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-trash-o"></i> fa-trash-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-trophy"></i> fa-trophy</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-truck"></i> fa-truck</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-umbrella"></i> fa-umbrella</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-unlock"></i> fa-unlock</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-unlock-alt"></i> fa-unlock-alt</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-unsorted"></i> fa-unsorted <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-upload"></i> fa-upload</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-user"></i> fa-user</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-users"></i> fa-users</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-video-camera"></i> fa-video-camera</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-volume-down"></i> fa-volume-down</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-volume-off"></i> fa-volume-off</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-volume-up"></i> fa-volume-up</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-warning"></i> fa-warning <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-wheelchair"></i> fa-wheelchair</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-wrench"></i> fa-wrench</div>
                    
                  </div>

                </section>

                <section id="form-control">
                  <h4 class="page-header">Form Control Icons</h4>

                  <div class="row list-icon">
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-check-square"></i> fa-check-square</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-check-square-o"></i> fa-check-square-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-circle"></i> fa-circle</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-circle-o"></i> fa-circle-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-dot-circle-o"></i> fa-dot-circle-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-minus-square"></i> fa-minus-square</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-minus-square-o"></i> fa-minus-square-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-plus-square"></i> fa-plus-square</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-plus-square-o"></i> fa-plus-square-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-square"></i> fa-square</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-square-o"></i> fa-square-o</div>
                    
                  </div>

                </section>

                <section id="currency">
                  <h4 class="page-header">Currency Icons</h4>

                  <div class="row list-icon">
                    

                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-bitcoin"></i> fa-bitcoin <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-btc"></i> fa-btc</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-cny"></i> fa-cny <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-dollar"></i> fa-dollar <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-eur"></i> fa-eur</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-euro"></i> fa-euro <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-gbp"></i> fa-gbp</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-inr"></i> fa-inr</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-jpy"></i> fa-jpy</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-krw"></i> fa-krw</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-money"></i> fa-money</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-rmb"></i> fa-rmb <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-rouble"></i> fa-rouble <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-rub"></i> fa-rub</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-ruble"></i> fa-ruble <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-rupee"></i> fa-rupee <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-try"></i> fa-try</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-turkish-lira"></i> fa-turkish-lira <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-usd"></i> fa-usd</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-won"></i> fa-won <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-yen"></i> fa-yen <span class="text-muted">(alias)</span></div>
                    
                  </div>

                </section>

                <section id="text-editor">
                  <h4 class="page-header">Text Editor Icons</h4>

                  <div class="row list-icon">
                    

                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-align-center"></i> fa-align-center</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-align-justify"></i> fa-align-justify</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-align-left"></i> fa-align-left</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-align-right"></i> fa-align-right</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-bold"></i> fa-bold</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-chain"></i> fa-chain <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-chain-broken"></i> fa-chain-broken</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-clipboard"></i> fa-clipboard</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-columns"></i> fa-columns</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-copy"></i> fa-copy <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-cut"></i> fa-cut <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-dedent"></i> fa-dedent <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-eraser"></i> fa-eraser</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-file"></i> fa-file</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-file-o"></i> fa-file-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-file-text"></i> fa-file-text</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-file-text-o"></i> fa-file-text-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-files-o"></i> fa-files-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-floppy-o"></i> fa-floppy-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-font"></i> fa-font</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-indent"></i> fa-indent</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-italic"></i> fa-italic</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-link"></i> fa-link</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-list"></i> fa-list</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-list-alt"></i> fa-list-alt</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-list-ol"></i> fa-list-ol</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-list-ul"></i> fa-list-ul</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-outdent"></i> fa-outdent</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-paperclip"></i> fa-paperclip</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-paste"></i> fa-paste <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-repeat"></i> fa-repeat</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-rotate-left"></i> fa-rotate-left <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-rotate-right"></i> fa-rotate-right <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-save"></i> fa-save <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-scissors"></i> fa-scissors</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-strikethrough"></i> fa-strikethrough</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-table"></i> fa-table</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-text-height"></i> fa-text-height</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-text-width"></i> fa-text-width</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-th"></i> fa-th</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-th-large"></i> fa-th-large</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-th-list"></i> fa-th-list</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-underline"></i> fa-underline</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-undo"></i> fa-undo</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-unlink"></i> fa-unlink <span class="text-muted">(alias)</span></div>
                    
                  </div>

                </section>

                <section id="directional">
                  <h4 class="page-header">Directional Icons</h4>

                  <div class="row list-icon">
                    

                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-angle-double-down"></i> fa-angle-double-down</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-angle-double-left"></i> fa-angle-double-left</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-angle-double-right"></i> fa-angle-double-right</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-angle-double-up"></i> fa-angle-double-up</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-angle-down"></i> fa-angle-down</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-angle-left"></i> fa-angle-left</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-angle-right"></i> fa-angle-right</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-angle-up"></i> fa-angle-up</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-circle-down"></i> fa-arrow-circle-down</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-circle-left"></i> fa-arrow-circle-left</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-circle-o-down"></i> fa-arrow-circle-o-down</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-circle-o-left"></i> fa-arrow-circle-o-left</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-circle-o-right"></i> fa-arrow-circle-o-right</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-circle-o-up"></i> fa-arrow-circle-o-up</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-circle-right"></i> fa-arrow-circle-right</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-circle-up"></i> fa-arrow-circle-up</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-down"></i> fa-arrow-down</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-left"></i> fa-arrow-left</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-right"></i> fa-arrow-right</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-up"></i> fa-arrow-up</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-arrows"></i> fa-arrows</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-arrows-alt"></i> fa-arrows-alt</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-arrows-h"></i> fa-arrows-h</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-arrows-v"></i> fa-arrows-v</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-caret-down"></i> fa-caret-down</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-caret-left"></i> fa-caret-left</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-caret-right"></i> fa-caret-right</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-caret-square-o-down"></i> fa-caret-square-o-down</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-caret-square-o-left"></i> fa-caret-square-o-left</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-caret-square-o-right"></i> fa-caret-square-o-right</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-caret-square-o-up"></i> fa-caret-square-o-up</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-caret-up"></i> fa-caret-up</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-chevron-circle-down"></i> fa-chevron-circle-down</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-chevron-circle-left"></i> fa-chevron-circle-left</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-chevron-circle-right"></i> fa-chevron-circle-right</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-chevron-circle-up"></i> fa-chevron-circle-up</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-chevron-down"></i> fa-chevron-down</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-chevron-left"></i> fa-chevron-left</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-chevron-right"></i> fa-chevron-right</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-chevron-up"></i> fa-chevron-up</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-hand-o-down"></i> fa-hand-o-down</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-hand-o-left"></i> fa-hand-o-left</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-hand-o-right"></i> fa-hand-o-right</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-hand-o-up"></i> fa-hand-o-up</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-long-arrow-down"></i> fa-long-arrow-down</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-long-arrow-left"></i> fa-long-arrow-left</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-long-arrow-right"></i> fa-long-arrow-right</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-long-arrow-up"></i> fa-long-arrow-up</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-toggle-down"></i> fa-toggle-down <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-toggle-left"></i> fa-toggle-left <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-toggle-right"></i> fa-toggle-right <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-toggle-up"></i> fa-toggle-up <span class="text-muted">(alias)</span></div>
                    
                  </div>

                </section>

                <section id="video-player">
                  <h4 class="page-header">Video Player Icons</h4>

                  <div class="row list-icon">
                    

                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-arrows-alt"></i> fa-arrows-alt</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-backward"></i> fa-backward</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-compress"></i> fa-compress</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-eject"></i> fa-eject</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-expand"></i> fa-expand</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-fast-backward"></i> fa-fast-backward</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-fast-forward"></i> fa-fast-forward</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-forward"></i> fa-forward</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-pause"></i> fa-pause</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-play"></i> fa-play</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-play-circle"></i> fa-play-circle</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-play-circle-o"></i> fa-play-circle-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-step-backward"></i> fa-step-backward</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-step-forward"></i> fa-step-forward</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-stop"></i> fa-stop</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-youtube-play"></i> fa-youtube-play</div>
                    
                  </div>

                </section>

                <section id="brand">
                  <h4 class="page-header">Brand Icons</h4>

                  <div class="alert alert-success">
                    <ul class="margin-bottom-none padding-left-lg">
                      <li>All brand icons are trademarks of their respective owners.</li>
                      <li>The use of these trademarks does not indicate endorsement of the trademark holder by Font Awesome, nor vice versa.</li>
                    </ul>

                  </div>

                  <div class="row list-icon">
                    

                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-adn"></i> fa-adn</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-android"></i> fa-android</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-apple"></i> fa-apple</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-bitbucket"></i> fa-bitbucket</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-bitbucket-square"></i> fa-bitbucket-square</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-bitcoin"></i> fa-bitcoin <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-btc"></i> fa-btc</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-css3"></i> fa-css3</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-dribbble"></i> fa-dribbble</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-dropbox"></i> fa-dropbox</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-facebook"></i> fa-facebook</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-facebook-square"></i> fa-facebook-square</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-flickr"></i> fa-flickr</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-foursquare"></i> fa-foursquare</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-github"></i> fa-github</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-github-alt"></i> fa-github-alt</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-github-square"></i> fa-github-square</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-gittip"></i> fa-gittip</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-google-plus"></i> fa-google-plus</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-google-plus-square"></i> fa-google-plus-square</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-html5"></i> fa-html5</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-instagram"></i> fa-instagram</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-linkedin"></i> fa-linkedin</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-linkedin-square"></i> fa-linkedin-square</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-linux"></i> fa-linux</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-maxcdn"></i> fa-maxcdn</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-pagelines"></i> fa-pagelines</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-pinterest"></i> fa-pinterest</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-pinterest-square"></i> fa-pinterest-square</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-renren"></i> fa-renren</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-skype"></i> fa-skype</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-stack-exchange"></i> fa-stack-exchange</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-stack-overflow"></i> fa-stack-overflow</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-trello"></i> fa-trello</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-tumblr"></i> fa-tumblr</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-tumblr-square"></i> fa-tumblr-square</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-twitter"></i> fa-twitter</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-twitter-square"></i> fa-twitter-square</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-vimeo-square"></i> fa-vimeo-square</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-vk"></i> fa-vk</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-weibo"></i> fa-weibo</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-windows"></i> fa-windows</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-xing"></i> fa-xing</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-xing-square"></i> fa-xing-square</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-youtube"></i> fa-youtube</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-youtube-play"></i> fa-youtube-play</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-youtube-square"></i> fa-youtube-square</div>
                    
                  </div>
                </section>

                <section id="medical">
                  <h4 class="page-header">Medical Icons</h4>

                  <div class="row list-icon">
                    

                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-ambulance"></i> fa-ambulance</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-h-square"></i> fa-h-square</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-hospital-o"></i> fa-hospital-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-medkit"></i> fa-medkit</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-plus-square"></i> fa-plus-square</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-stethoscope"></i> fa-stethoscope</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-user-md"></i> fa-user-md</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-wheelchair"></i> fa-wheelchair</div>
                    
                  </div>

                </section>
              </div>
              <h3 class="m-t-xl">275 Custom Icons</h3>
              <div class="row list-icon">
                <div class="col-md-3 col-sm-4">
                  <i class="i i-move"></i> i-move
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-move-vertical"></i> i-move-vertical
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-resize-enlarge"></i> i-resize-enlarge
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-resize-shrink"></i> i-resize-shrink
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-move-horizontal"></i> i-move-horizontal
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-download"></i> i-download
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-upload"></i> i-upload
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-cloud-download"></i> i-cloud-download
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-cloud-upload"></i> i-cloud-upload
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-circleleft"></i> i-circleleft
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-circledown"></i> i-circledown
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-circleup"></i> i-circleup
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-circleright"></i> i-circleright
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-home"></i> i-home
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-download3"></i> i-download3
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-pin"></i> i-pin
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-pictures"></i> i-pictures
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-share3"></i> i-share3
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-pencil2"></i> i-pencil2
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-mail2"></i> i-mail2
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-support"></i> i-support
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-asc"></i> i-asc
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-dsc"></i> i-dsc
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-ok"></i> i-ok
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-error"></i> i-error
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-expand"></i> i-expand
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-collapse"></i> i-collapse
                </div>                
                <div class="col-md-3 col-sm-4">
                  <i class="i i-screen"></i> i-screen
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-phone3"></i> i-phone3
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-phone-portrait"></i> i-phone-portrait
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-phone-landscape"></i> i-phone-landscape
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-tablet"></i> i-tablet
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-tablet-landscape"></i> i-tablet-landscape
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-laptop"></i> i-laptop
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-cube"></i> i-cube
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-chart"></i> i-chart
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-graph"></i> i-graph
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-meter"></i> i-meter
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-heart2"></i> i-heart2
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-star2"></i> i-star2
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-stack"></i> i-stack
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-tv"></i> i-tv
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-user2"></i> i-user2
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-users2"></i> i-users2
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-search2"></i> i-search2
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-zoom-in2"></i> i-zoom-in2
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-zoom-out2"></i> i-zoom-out2
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-slider-v"></i> i-slider-v
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-slider"></i> i-slider
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-stats"></i> i-stats
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-bars"></i> i-bars
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-arrow-up-left2"></i> i-arrow-up-left2
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-arrow-up2"></i> i-arrow-up2
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-arrow-up-right2"></i> i-arrow-up-right2
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-arrow-right2"></i> i-arrow-right2
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-arrow-down-right2"></i> i-arrow-down-right2
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-arrow-down-2"></i> i-arrow-down-2
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-arrow-down-left-2"></i> i-arrow-down-left-2
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-arrow-left2"></i> i-arrow-left2
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-file-pdf"></i> i-file-pdf
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-file-openoffice"></i> i-file-openoffice
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-file-word"></i> i-file-word
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-file-excel"></i> i-file-excel
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-file-zip"></i> i-file-zip
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-file-powerpoint"></i> i-file-powerpoint
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-file-xml"></i> i-file-xml
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-file-css"></i> i-file-css
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-video"></i> i-video
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-settings"></i> i-settings
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-camera"></i> i-camera
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-tag"></i> i-tag
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-bulb"></i> i-bulb
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-location"></i> i-location
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-eye2"></i> i-eye2
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-bubble"></i> i-bubble
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-mail"></i> i-mail
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-paperplane"></i> i-paperplane
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-data"></i> i-data
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-t-shirt"></i> i-t-shirt
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-lab"></i> i-lab
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-calendar"></i> i-calendar
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-earth"></i> i-earth
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-world"></i> i-world
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-vynil"></i> i-vynil
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-gauge"></i> i-gauge
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-statistics"></i> i-statistics
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-arrow-left3"></i> i-arrow-left3
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-arrow-down3"></i> i-arrow-down3
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-arrow-up3"></i> i-arrow-up3
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-arrow-right3"></i> i-arrow-right3
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-arrow-left4"></i> i-arrow-left4
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-arrow-down4"></i> i-arrow-down4
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-arrow-up4"></i> i-arrow-up4
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-arrow-right4"></i> i-arrow-right4
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-arrow-left5"></i> i-arrow-left5
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-arrow-down5"></i> i-arrow-down5
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-arrow-up5"></i> i-arrow-up5
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-arrow-right5"></i> i-arrow-right5
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-search"></i> i-search
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-list"></i> i-list
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-add-to-list"></i> i-add-to-list
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-list2"></i> i-list2
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-play"></i> i-play
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-pause"></i> i-pause
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-stop"></i> i-stop
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-backward"></i> i-backward
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-forward"></i> i-forward
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-feed"></i> i-feed
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-switch"></i> i-switch
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-clock2"></i> i-clock2
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-health"></i> i-health
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-pencil"></i> i-pencil
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-minus2"></i> i-minus2
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-plus2"></i> i-plus2
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-stats"></i> i-stats
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-paperclip"></i> i-paperclip
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-keyboard"></i> i-keyboard
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-mic"></i> i-mic
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-heart"></i> i-heart
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-layout"></i> i-layout
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-layout2"></i> i-layout2
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-layout3"></i> i-layout3
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-cloud"></i> i-cloud
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-info"></i> i-info
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-question"></i> i-question
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-notification"></i> i-notification
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-libreoffice"></i> i-libreoffice
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-headphones"></i> i-headphones
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-copy2"></i> i-copy2
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-copy3"></i> i-copy3
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-paste"></i> i-paste
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-spinner"></i> i-spinner
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-plus"></i> i-plus
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-minus"></i> i-minus
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-cancel"></i> i-cancel
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-images"></i> i-images
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-logout"></i> i-logout
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-login"></i> i-login
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-infinity"></i> i-infinity
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-docs"></i> i-docs
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-landscape"></i> i-landscape
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-portrait"></i> i-portrait
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-share"></i> i-share
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-youtube"></i> i-youtube
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-checkmark"></i> i-checkmark
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-notice"></i> i-notice
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-link"></i> i-link
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-link2"></i> i-link2
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-popup"></i> i-popup
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-publish"></i> i-publish
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-browser"></i> i-browser
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-checkmark2"></i> i-checkmark2
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-cross2"></i> i-cross2
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-question2"></i> i-question2
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-info2"></i> i-info2
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-loop"></i> i-loop
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-retweet"></i> i-retweet
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-arrow"></i> i-arrow
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-arrow2"></i> i-arrow2
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-shuffle"></i> i-shuffle
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-ccw"></i> i-ccw
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-cycle"></i> i-cycle
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-cw"></i> i-cw
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-switch"></i> i-switch
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-back"></i> i-back
                </div>                                
                <div class="col-md-3 col-sm-4">
                  <i class="i i-code"></i> i-code
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-vcard"></i> i-vcard
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-googleplus"></i> i-googleplus
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-facebook"></i> i-facebook
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-twitter"></i> i-twitter
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-rss"></i> i-rss
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-signal"></i> i-signal
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-flow-tree"></i> i-flow-tree
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-domain3"></i> i-domain3
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-trashcan"></i> i-trashcan
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-book"></i> i-book
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-bars"></i> i-bars
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-stopwatch"></i> i-stopwatch
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-map2"></i> i-map2
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-checkmark"></i> i-checkmark
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-sun"></i> i-sun
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-clip"></i> i-clip
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-study"></i> i-study
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-music"></i> i-music
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-params"></i> i-params
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-stack3"></i> i-stack3
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-arrow-down"></i> i-arrow-down
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-arrow-down-left"></i> i-arrow-down-left
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-arrow-down-right"></i> i-arrow-down-right
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-arrow-left"></i> i-arrow-left
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-arrow-right"></i> i-arrow-right
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-arrow-up-right"></i> i-arrow-up-right
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-arrow-up"></i> i-arrow-up
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-arrow-up-left"></i> i-arrow-up-left
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-compass"></i> i-compass
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-users3"></i> i-users3
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-user3"></i> i-user3
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-camera2"></i> i-camera2
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-file"></i> i-file
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-file2"></i> i-file2
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-file-plus"></i> i-file-plus
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-file-minus"></i> i-file-minus
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-file-check"></i> i-file-check
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-file-remove"></i> i-file-remove
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-file-copy"></i> i-file-copy
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-stack2"></i> i-stack2
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-folder"></i> i-folder
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-folder-upload"></i> i-folder-upload
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-folder-download"></i> i-folder-download
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-folder-minus"></i> i-folder-minus
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-folder-plus"></i> i-folder-plus
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-folder2"></i> i-folder2
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-folder-open"></i> i-folder-open
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-tag2"></i> i-tag2
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-cart"></i> i-cart
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-phone"></i> i-phone
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-phone2"></i> i-phone2
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-local"></i> i-local
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-alarm"></i> i-alarm
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-clock"></i> i-clock
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-history"></i> i-history
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-stopclock"></i> i-stopclock
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-rotate"></i> i-rotate
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-rotate2"></i> i-rotate2
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-redo"></i> i-redo
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-undo"></i> i-undo
                </div>                
                <div class="col-md-3 col-sm-4">
                  <i class="i i-chat"></i> i-chat
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-chat2"></i> i-chat2
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-chat3"></i> i-chat3
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-data2"></i> i-data2
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-spin"></i> i-spin
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-health2"></i> i-health2
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-cog2"></i> i-cog2
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-bulb"></i> i-bulb
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-rating"></i> i-rating
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-rating2"></i> i-rating2
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-rating3"></i> i-rating3
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-grid"></i> i-grid
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-grid2"></i> i-grid2
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-grid3"></i> i-grid3
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-ellipsis"></i> i-ellipsis
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-dot"></i> i-dot
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-dots"></i> i-dots
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-bar"></i> i-bar
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-bar2"></i> i-bar2
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-bars3"></i> i-bars3
                </div>                
                <div class="col-md-3 col-sm-4">
                  <i class="i i-menu"></i> i-menu
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-menu2"></i> i-menu2
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-download2"></i> i-download2
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-upload2"></i> i-upload2
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-eye"></i> i-eye
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-eye-slash"></i> i-eye-slash
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-bookmark"></i> i-bookmark
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-up"></i> i-up
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-right"></i> i-right
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-down"></i> i-down
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-left"></i> i-left
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-check"></i> i-check
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-checked"></i> i-checked
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-popout"></i> i-popout
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-newtab"></i> i-newtab
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-map"></i> i-map
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-layer"></i> i-layer
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-layer2"></i> i-layer2
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-like"></i> i-like
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-dislike"></i> i-dislike
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-football"></i> i-football
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-hexagon-o"></i> i-hexagon-o
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-hexagon"></i> i-hexagon
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-hexagon2-o"></i> i-hexagon2-o
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-hexagon2"></i> i-hexagon2
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-circle-o"></i> i-circle-o
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-circle"></i> i-circle
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-circle-sm-o"></i> i-circle-sm-o
                </div>
                <div class="col-md-3 col-sm-4">
                  <i class="i i-circle-sm"></i> i-circle-sm
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
  
  <script src="js/app.plugin.js"></script>
</body>
</html>