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
                    <li  class="active">
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
                        <li  class="active">
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
          <section class="hbox stretch">
            <aside class="aside-md bg-light dker b-r" id="subNav">
              <div class="wrapper b-b header">Submenu Header</div>
              <ul class="nav">
                <li class="b-b "><a href="#"><i class="fa fa-chevron-right pull-right m-t-xs text-xs icon-muted"></i>Phasellus at ultricies</a></li>
                <li class="b-b "><a href="#"><i class="fa fa-chevron-right pull-right m-t-xs text-xs icon-muted"></i>Malesuada augue</a></li>
                <li class="b-b "><a href="#"><i class="fa fa-chevron-right pull-right m-t-xs text-xs icon-muted"></i>Donec eleifend</a></li>
                <li class="b-b "><a href="#"><i class="fa fa-chevron-right pull-right m-t-xs text-xs icon-muted"></i>Dapibus porta</a></li>
                <li class="b-b "><a href="#"><i class="fa fa-chevron-right pull-right m-t-xs text-xs icon-muted"></i>Dacus eu neque</a></li>
              </ul>
            </aside>
            <aside>
              <section class="vbox">
                <header class="header bg-white b-b clearfix">
                  <div class="row m-t-sm">
                    <div class="col-sm-8 m-b-xs">
                      <a href="#subNav" data-toggle="class:hide" class="btn btn-sm btn-default active"><i class="fa fa-caret-right text fa-lg"></i><i class="fa fa-caret-left text-active fa-lg"></i></a>
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-default" title="Refresh"><i class="fa fa-refresh"></i></button>
                        <button type="button" class="btn btn-sm btn-default" title="Remove"><i class="fa fa-trash-o"></i></button>
                        <button type="button" class="btn btn-sm btn-default" title="Filter" data-toggle="dropdown"><i class="fa fa-filter"></i> <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                          <li><a href="#">Action</a></li>
                          <li><a href="#">Another action</a></li>
                          <li><a href="#">Something else here</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Separated link</a></li>
                        </ul>
                      </div>
                      <a href="modal.html" data-toggle="ajaxModal" class="btn btn-sm btn-default"><i class="fa fa-plus"></i> Create</a>
                    </div>
                    <div class="col-sm-4 m-b-xs">
                      <div class="input-group">
                        <input type="text" class="input-sm form-control" placeholder="Search">
                        <span class="input-group-btn">
                          <button class="btn btn-sm btn-default" type="button">Go!</button>
                        </span>
                      </div>
                    </div>
                  </div>
                </header>
                <section class="scrollable wrapper w-f">
                  <section class="panel panel-default">
                    <div class="table-responsive">
                      <table class="table table-striped m-b-none">
                        <thead>
                          <tr>
                            <th width="20"><label class="checkbox m-n i-checks"><input type="checkbox"><i></i></label></th>
                            <th width="20"></th>
                            <th class="th-sortable" data-toggle="class">Project
                              <span class="th-sort">
                                <i class="fa fa-sort-down text"></i>
                                <i class="fa fa-sort-up text-active"></i>
                                <i class="fa fa-sort"></i>
                              </span>
                            </th>
                            <th>Task</th>
                            <th>Date</th>
                            <th width="30"></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><label class="checkbox m-n i-checks"><input type="checkbox" name="ids[]"><i></i></label></td>
                            <td><a href="#modal" data-toggle="modal"><i class="fa fa-search-plus text-muted"></i></a></td>
                            <td>Idrawfast</td>
                            <td>4c</td>
                            <td>Jul 25, 2013</td>
                            <td>
                              <a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
                            </td>
                          </tr>
                          <tr class="bg-primary-ltest">
                            <td><label class="checkbox m-n i-checks"><input type="checkbox" name="ids[]"><i></i></label></td>
                            <td><a href="#modal" data-toggle="modal"><i class="fa fa-search-plus text-muted"></i></a></td>
                            <td>Formasa</td>
                            <td>8c</td>
                            <td>Jul 22, 2013</td>
                            <td>
                              <a href="#" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td><label class="checkbox m-n i-checks"><input type="checkbox" name="ids[]"><i></i></label></td>
                            <td><a href="#modal" data-toggle="modal"><i class="fa fa-search-plus text-muted"></i></a></td>
                            <td>Avatar system</td>
                            <td>15c</td>
                            <td>Jul 15, 2013</td>
                            <td>
                              <a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td><label class="checkbox m-n i-checks"><input type="checkbox" name="ids[]"><i></i></label></td>
                            <td><a href="#modal" data-toggle="modal"><i class="fa fa-search-plus text-muted"></i></a></td>
                            <td>Throwdown</td>
                            <td>4c</td>
                            <td>Jul 11, 2013</td>
                            <td>
                              <a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td><label class="checkbox m-n i-checks"><input type="checkbox" name="ids[]"><i></i></label></td>
                            <td><a href="#modal" data-toggle="modal"><i class="fa fa-search-plus text-muted"></i></a></td>
                            <td>Idrawfast</td>
                            <td>4c</td>
                            <td>Jul 7, 2013</td>
                            <td>
                              <a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td><label class="checkbox m-n i-checks"><input type="checkbox" name="ids[]"><i></i></label></td>
                            <td><a href="#modal" data-toggle="modal"><i class="fa fa-search-plus text-muted"></i></a></td>
                            <td>Formasa</td>
                            <td>8c</td>
                            <td>Jul 3, 2013</td>
                            <td>
                              <a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td><label class="checkbox m-n i-checks"><input type="checkbox" name="ids[]"><i></i></label></td>
                            <td><a href="#modal" data-toggle="modal"><i class="fa fa-search-plus text-muted"></i></a></td>
                            <td>Avatar system </b></td>
                            <td>15c</td>
                            <td>Jul 2, 2013</td>
                            <td>
                              <a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td><label class="checkbox m-n i-checks"><input type="checkbox" name="ids[]"><i></i></label></td>
                            <td><a href="#modal" data-toggle="modal"><i class="fa fa-search-plus text-muted"></i></a></td>
                            <td>Videodown</td>
                            <td>4c</td>
                            <td>Jul 1, 2013</td>
                            <td>
                              <a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td><label class="checkbox m-n i-checks"><input type="checkbox" name="ids[]"><i></i></label></td>
                            <td><a href="#modal" data-toggle="modal"><i class="fa fa-search-plus text-muted"></i></a></td>
                            <td>Throwdown</td>
                            <td>4c</td>
                            <td>Jul 11, 2013</td>
                            <td>
                              <a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td><label class="checkbox m-n i-checks"><input type="checkbox" name="ids[]"><i></i></label></td>
                            <td><a href="#modal" data-toggle="modal"><i class="fa fa-search-plus text-muted"></i></a></td>
                            <td>Idrawfast</td>
                            <td>4c</td>
                            <td>Jul 7, 2013</td>
                            <td>
                              <a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td><label class="checkbox m-n i-checks"><input type="checkbox" name="ids[]"><i></i></label></td>
                            <td><a href="#modal" data-toggle="modal"><i class="fa fa-search-plus text-muted"></i></a></td>
                            <td>Formasa</td>
                            <td>8c</td>
                            <td>Jul 3, 2013</td>
                            <td>
                              <a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td><label class="checkbox m-n i-checks"><input type="checkbox" name="ids[]"><i></i></label></td>
                            <td><a href="#modal" data-toggle="modal"><i class="fa fa-search-plus text-muted"></i></a></td>
                            <td>Avatar system </b></td>
                            <td>15c</td>
                            <td>Jul 2, 2013</td>
                            <td>
                              <a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td><label class="checkbox m-n i-checks"><input type="checkbox" name="ids[]"><i></i></label></td>
                            <td><a href="#modal" data-toggle="modal"><i class="fa fa-search-plus text-muted"></i></a></td>
                            <td>Videodown</td>
                            <td>4c</td>
                            <td>Jul 1, 2013</td>
                            <td>
                              <a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td><label class="checkbox m-n i-checks"><input type="checkbox" name="ids[]"><i></i></label></td>
                            <td><a href="#modal" data-toggle="modal"><i class="fa fa-search-plus text-muted"></i></a></td>
                            <td>Throwdown</td>
                            <td>4c</td>
                            <td>Jul 11, 2013</td>
                            <td>
                              <a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td><label class="checkbox m-n i-checks"><input type="checkbox" name="ids[]"><i></i></label></td>
                            <td><a href="#modal" data-toggle="modal"><i class="fa fa-search-plus text-muted"></i></a></td>
                            <td>Idrawfast</td>
                            <td>4c</td>
                            <td>Jul 7, 2013</td>
                            <td>
                              <a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td><label class="checkbox m-n i-checks"><input type="checkbox" name="ids[]"><i></i></label></td>
                            <td><a href="#modal" data-toggle="modal"><i class="fa fa-search-plus text-muted"></i></a></td>
                            <td>Formasa</td>
                            <td>8c</td>
                            <td>Jul 3, 2013</td>
                            <td>
                              <a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td><label class="checkbox m-n i-checks"><input type="checkbox" name="ids[]"><i></i></label></td>
                            <td><a href="#modal" data-toggle="modal"><i class="fa fa-search-plus text-muted"></i></a></td>
                            <td>Avatar system </b></td>
                            <td>15c</td>
                            <td>Jul 2, 2013</td>
                            <td>
                              <a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td><label class="checkbox m-n i-checks"><input type="checkbox" name="ids[]"><i></i></label></td>
                            <td><a href="#modal" data-toggle="modal"><i class="fa fa-search-plus text-muted"></i></a></td>
                            <td>Videodown</td>
                            <td>4c</td>
                            <td>Jul 1, 2013</td>
                            <td>
                              <a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </section>
                </section>
                <footer class="footer bg-white b-t">
                  <div class="row text-center-xs">
                    <div class="col-md-6 hidden-sm">
                      <p class="text-muted m-t">Showing 20-30 of 50</p>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right text-center-xs">                
                      <ul class="pagination pagination-sm m-t-sm m-b-none">
                        <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </footer>
              </section>
            </aside>
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
    <div class="modal fade" id="modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Idrawfast 02/2013</h4>
        </div>
        <div class="modal-body">
          <p>This is a table in a modal, click the trash icon to remove the item</p>
          <section class="panel panel-default m-l-n-md  m-r-n-md m-b-none">
            <header class="panel-heading">
              <span class="label bg-danger pull-right">4 left</span>
              Tasks
            </header>
            <table class="table table-striped m-b-none text-sm">
              <thead>
                <tr>
                  <th>Progress</th>
                  <th>Item</th>                    
                  <th width="20"></th>
                </tr>
              </thead>
              <tbody>
                <tr id="item-1">
                  <td>
                    <div class="progress progress-sm progress-striped active m-t-xs m-b-none">
                      <div class="progress-bar progress-bar-success" data-toggle="tooltip" data-original-title="80%" style="width: 80%"></div>
                    </div>
                  </td>
                  <td>App prototype design</td>
                  <td class="text-right">
                    <a href="#item-1" data-dismiss="alert"><i class="fa fa-trash-o"></i></a>
                  </td>
                </tr>
                <tr id="item-2">
                  <td>
                    <div class="progress progress-xs m-t-xs m-b-none">
                      <div class="progress-bar progress-bar-info" data-toggle="tooltip" data-original-title="40%" style="width: 40%"></div>
                    </div>
                  </td>
                  <td>Design documents</td>
                  <td class="text-right">
                     <a href="#item-2" data-dismiss="alert"><i class="fa fa-trash-o"></i></a>
                  </td>
                </tr>
                <tr id="item-3">                    
                  <td>
                    <div class="progress progress-xs m-t-xs m-b-none">
                      <div class="progress-bar progress-bar-warning" data-toggle="tooltip" data-original-title="20%" style="width: 20%"></div>
                    </div>
                  </td>
                  <td>UI toolkit</td>
                  <td class="text-right">
                     <a href="#item-3" data-dismiss="alert"><i class="fa fa-trash-o"></i></a>
                  </td>
                </tr>
                <tr id="item-4">                    
                  <td>
                    <div class="progress progress-xs m-t-xs m-b-none">
                      <div class="progress-bar progress-bar-danger" data-toggle="tooltip" data-original-title="15%" style="width: 15%"></div>
                    </div>
                  </td>
                  <td>Testing</td>
                  <td class="text-right">
                     <a href="#item-4" data-dismiss="alert"><i class="fa fa-trash-o"></i></a>
                  </td>
                </tr>
              </tbody>
            </table>
          </section>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-rounded" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-info btn-rounded" data-loading-text="Updating...">Save changes</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
  <script src="js/app.plugin.js"></script>
</body>
</html>