<!DOCTYPE html>
<html lang="en" class="app">
<head>  
  <meta charset="utf-8" />
  <title>Scale | Web Application</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/css/animate.css" type="text/css" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/css/icon.css" type="text/css" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/css/font.css" type="text/css" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/css/app.css" type="text/css" />  
    <!--[if lt IE 9]>
    <script src="<?= base_url(); ?>assets/admin/js/ie/html5shiv.js"></script>
    <script src="<?= base_url(); ?>assets/admin/js/ie/respond.min.js"></script>
    <script src="<?= base_url(); ?>assets/admin/js/ie/excanvas.js"></script>
  <![endif]-->
</head>
<body class="">
  <section class="vbox">
    <header class="bg-white header header-md navbar navbar-fixed-top-xs box-shadow">
      <div class="navbar-header aside-md dk">
        <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="#nav">
          <i class="fa fa-bars"></i>
        </a>
        <a href="<?php echo base_url('index.php/admin/indexHome'); ?>" class="navbar-brand">
          <img src="<?= base_url(); ?>assets/admin/images/logo.png" class="m-r-sm" alt="scale">
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
                    <img src="<?= base_url(); ?>assets/admin/images/a0.png" alt="..." class="img-circle">
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
              <img src="<?= base_url(); ?>assets/admin/images/a0.png" alt="...">
            </span>
            John.Smith <b class="caret"></b>
          </a>
          <ul class="dropdown-menu animated fadeInRight">            
            <li>
              <span class="arrow top"></span>
              <a href="#">Settings</a>
            </li>
            <li>
              <a href="<?php echo base_url('index.php/admin/Profil'); ?>">Profile</a>
            </li>
            <li>
              <a href="#">
                <span class="badge bg-danger pull-right">3</span>
                Notifications
              </a>
            </li>
            <li>
              <a href="<?php echo base_url('index.php/admin/docs'); ?>">Help</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="<?php echo base_url('index.php/admin/modalLockme'); ?>" data-toggle="ajaxModal" >Logout</a>
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
                        <img src="<?= base_url(); ?>assets/admin/images/a0.png" class="dker" alt="...">
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
                        <a href="<?php echo base_url('index.php/admin/Profil'); ?>">Profile</a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="badge bg-danger pull-right">3</span>
                          Notifications
                        </a>
                      </li>
                      <li>
                        <a href="<?php echo base_url('index.php/admin/docs'); ?>">Help</a>
                      </li>
                      <li class="divider"></li>
                      <li>
                        <a href="<?php echo base_url('index.php/admin/modalLockme'); ?>" data-toggle="ajaxModal" >Logout</a>
                      </li>
                    </ul>
                  </div>
                </div>                


                <!-- nav -->                 
                <nav class="nav-primary hidden-xs">
                  <div class="text-muted text-sm hidden-nav-xs padder m-t-sm m-b-sm">Start</div>
                  <ul class="nav nav-main" data-ride="collapse">
                    <li >
                      <a href="<?php echo base_url('index.php/admin/indexHome'); ?>" class="auto">
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
                          <a href="<?php echo base_url('index.php/admin/layoutc'); ?>" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Color option</span>
                          </a>
                        </li>
                        <li >
                          <a href="<?php echo base_url('index.php/admin/layout'); ?>" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Hbox layout</span>
                          </a>
                        </li>
                        <li >
                          <a href="<?php echo base_url('index.php/admin/layoutb'); ?>" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Boxed layout</span>
                          </a>
                        </li>
                        <li >
                          <a href="<?php echo base_url('index.php/admin/layoutf'); ?>" class="auto">                                                        
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
                        <li  class="active">
                          <a href="<?php echo base_url('index.php/admin/button'); ?>" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Buttons</span>
                          </a>
                        </li>
                        <li >
                          <a href="<?php echo base_url('index.php/admin/ikon'); ?>" class="auto">                            
                            <b class="badge bg-info pull-right">369</b>                                                        
                            <i class="i i-dot"></i>

                            <span>Icons</span>
                          </a>
                        </li>
                        <li >
                          <a href="<?php echo base_url('index.php/admin/grid'); ?>" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Grid</span>
                          </a>
                        </li>
                        <li >
                          <a href="<?php echo base_url('index.php/admin/widget'); ?>" class="auto">                            
                            <b class="badge bg-dark pull-right">8</b>                                                        
                            <i class="i i-dot"></i>

                            <span>Widgets</span>
                          </a>
                        </li>
                        <li >
                          <a href="<?php echo base_url('index.php/admin/components'); ?>" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Components</span>
                          </a>
                        </li>
                        <li >
                          <a href="<?php echo base_url('index.php/admin/list'); ?>" class="auto">                                                        
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
                              <a href="<?php echo base_url('index.php/admin/tablestatic'); ?>">
                                <i class="i i-dot"></i>
                                <span>Table static</span>
                              </a>
                            </li>
                            <li >
                              <a href="<?php echo base_url('index.php/admin/datatable'); ?>">
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
                              <a href="<?php echo base_url('index.php/admin/element'); ?>">
                                <i class="i i-dot"></i>
                                <span>Form elements</span>
                              </a>
                            </li>
                            <li >
                              <a href="<?php echo base_url('index.php/admin/validation'); ?>">
                                <i class="i i-dot"></i>
                                <span>Form validation</span>
                              </a>
                            </li>
                            <li >
                              <a href="<?php echo base_url('index.php/admin/wizard'); ?>">
                                <i class="i i-dot"></i>
                                <span>Form wizard</span>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li >
                          <a href="<?php echo base_url('index.php/admin/chart'); ?>" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Chart</span>
                          </a>
                        </li>
                        <li >
                          <a href="<?php echo base_url('index.php/admin/portlet'); ?>" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Portlet</span>
                          </a>
                        </li>
                        <li >
                          <a href="<?php echo base_url('index.php/admin/timeline'); ?>" class="auto">                                                        
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
                          <a href="<?php echo base_url('index.php/admin/Profil'); ?>" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Profile</span>
                          </a>
                        </li>
                        <li >
                          <a href="<?php echo base_url('index.php/admin/invoice'); ?>" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Invoice</span>
                          </a>
                        </li>
                        <li >
                          <a href="<?php echo base_url('index.php/admin/intro'); ?>" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Intro</span>
                          </a>
                        </li>
                        <li >
                          <a href="<?php echo base_url('index.php/admin/master'); ?>" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Master</span>
                          </a>
                        </li>
                        <li >
                          <a href="<?php echo base_url('index.php/admin/gmap'); ?>" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Google Map</span>
                          </a>
                        </li>
                        <li >
                          <a href="<?php echo base_url('index.php/admin/jvectormap'); ?>" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Vector Map</span>
                          </a>
                        </li>
                        <li >
                          <a href="<?php echo base_url('index.php/admin/signin'); ?>" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Signin</span>
                          </a>
                        </li>
                        <li >
                          <a href="<?php echo base_url('index.php/admin/signup'); ?>" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Signup</span>
                          </a>
                        </li>
                        <li >
                          <a href="<?php echo base_url('index.php/admin/eror'); ?>" class="auto">                                                        
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
                          <a href="<?php echo base_url('index.php/admin/mail'); ?>" class="auto">                            
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
                          <a href="<?php echo base_url('index.php/admin/project'); ?>" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Project</span>
                          </a>
                        </li>
                        <li >
                          <a href="<?php echo base_url('index.php/admin/media'); ?>" class="auto">                                                        
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
                      <a href="<?php echo base_url('index.php/admin/mail'); ?>">
                        <i class="i i-circle-sm text-info-dk"></i>
                        <span>Work space</span>
                      </a>
                    </li>
                    <li>
                      <a href="<?php echo base_url('index.php/admin/mail'); ?>">
                        <i class="i i-circle-sm text-success-dk"></i>
                        <span>Connection</span>
                      </a>
                    </li>
                    <li>
                      <a href="<?php echo base_url('index.php/admin/mail'); ?>">
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
              <a href="<?php echo base_url('index.php/admin/modalLockme'); ?>" data-toggle="ajaxModal" class="btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs">
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
		          <div class="row m-t">
		            <div class="col-md-6">
		              <h4 class="m-t-xs">Button options</h4>
		              <div class="doc-buttons">
		                <a href="#" class="btn btn-s-md btn-default">Default</a>                
		                <a href="#" class="btn btn-s-md btn-primary">Primary</a>
		                <a href="#" class="btn btn-s-md btn-success">Success</a>
		                <a href="#" class="btn btn-s-md btn-info">Info</a>
		                <a href="#" class="btn btn-s-md btn-warning">Warning</a>
		                <a href="#" class="btn btn-s-md btn-danger">Danger</a>
		                <a href="#" class="btn btn-s-md btn-dark">Dark</a>
		                <a href="#" class="btn btn-s-md btn-default disabled">Disabled</a>
		              </div>    
		              
		              <h4 class="m-t">Button size</h4>
		              <p>
		                <a href="#" class="btn btn-default btn-lg">Large button</a>
		              </p>
		              <p>
		                <a href="#" class="btn btn-default">Default button</a>
		              </p>
		              <p>
		                <a href="#" class="btn btn-default btn-sm">Small button</a>
		              </p>
		              <p>
		                <a href="#" class="btn btn-default btn-xs">Extra small button</a>
		              </p>
		         
		              <h4 class="m-t-lg">Button dropdowns</h4>
		              <p class="text-muted">Single button dropdowns</p>
		              <div class="m-b-sm">
		                <div class="btn-group">
		                  <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
		                  <ul class="dropdown-menu">
		                    <li><a href="#">Action</a></li>
		                    <li><a href="#">Another action</a></li>
		                    <li><a href="#">Something else here</a></li>
		                    <li class="divider"></li>
		                    <li><a href="#">Separated link</a></li>
		                  </ul>
		                </div>
		                <div class="btn-group">
		                  <button class="btn btn-success dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
		                  <ul class="dropdown-menu">
		                    <li><a href="#">Action</a></li>
		                    <li><a href="#">Another action</a></li>
		                    <li><a href="#">Something else here</a></li>
		                    <li class="divider"></li>
		                    <li><a href="#">Separated link</a></li>
		                  </ul>
		                </div>
		              </div>
		              <div class="m-b-sm">
		                <div class="btn-group">
		                  <button class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
		                  <ul class="dropdown-menu">
		                    <li><a href="#">Action</a></li>
		                    <li><a href="#">Another action</a></li>
		                    <li><a href="#">Something else here</a></li>
		                    <li class="divider"></li>
		                    <li><a href="#">Separated link</a></li>
		                  </ul>
		                </div>
		              </div>
		              <div class="m-b-sm">
		                <div class="btn-group">
		                  <button class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
		                  <ul class="dropdown-menu">
		                    <li><a href="#">Action</a></li>
		                    <li><a href="#">Another action</a></li>
		                    <li><a href="#">Something else here</a></li>
		                    <li class="divider"></li>
		                    <li><a href="#">Separated link</a></li>
		                  </ul>
		                </div>
		              </div>
		              <p class="text-muted">Split button dropdowns & variation </p>
		              <div class="m-b-sm">
		                <div class="btn-group">
		                  <button class="btn btn-default">Action</button>
		                  <button class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
		                  <ul class="dropdown-menu">
		                    <li><a href="#">Action</a></li>
		                    <li><a href="#">Another action</a></li>
		                    <li><a href="#">Something else here</a></li>
		                    <li class="divider"></li>
		                    <li><a href="#">Separated link</a></li>
		                  </ul>
		                </div>
		                <div class="btn-group dropup">
		                  <button class="btn btn-default">Action</button>
		                  <button class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
		                  <ul class="dropdown-menu">
		                    <li><a href="#">Action</a></li>
		                    <li><a href="#">Another action</a></li>
		                    <li><a href="#">Something else here</a></li>
		                    <li class="divider"></li>
		                    <li><a href="#">Separated link</a></li>
		                  </ul>
		                </div>
		              </div>

		              <h4 class="m-t-lg">Button with icon</h4>
		              <p>
		                <a href="#" class="btn btn-default"><i class="fa fa-html5"></i> Html5</a>
		                <a href="#" class="btn btn-info"><i class="fa fa-css3"></i> CSS3</a>
		              </p>            
		              <p>
		                <a href="#" class="btn btn-default btn-lg btn-block"><i class="fa fa-bars pull-right"></i> Block button with icon</a>
		              </p>
		              <p>
		                <a href="#" class="btn btn-default btn-block"><i class="fa fa-bars pull-left"></i> Block button with icon</a>
		              </p>
		              <h4 class="m-t-lg">
		                Button icon
		              </h4>
		              <p id="social-buttons">
		                <a href="#" class="btn btn-sm btn-icon btn-info"><i class="fa fa-twitter"></i></a>
		                <a href="#" class="btn btn-sm btn-icon btn-primary"><i class="fa fa-facebook"></i></a>
		                <a href="#" class="btn btn-sm btn-icon btn-danger"><i class="fa fa-google-plus"></i></a>
		              </p>
		              <h4 class="m-t-lg">
		                Button icon rounded
		              </h4>
		              <p id="social-buttons">
		                <a href="#" class="btn btn-rounded btn-sm btn-icon btn-default"><i class="fa fa-twitter"></i></a>
		                <a href="#" class="btn btn-rounded btn-sm btn-icon btn-default"><i class="fa fa-facebook"></i></a>
		                <a href="#" class="btn btn-rounded btn-sm btn-icon btn-default"><i class="fa fa-google-plus"></i></a>
		              </p>       
		            </div>
		            <div class="col-md-6">
		              <h4 class="m-t-xs">Rounded button</h4>
		              <div class="doc-buttons">
		                <a href="#" class="btn btn-s-md btn-default btn-rounded">Default</a>
		                <a href="#" class="btn btn-s-md btn-primary btn-rounded">Primary</a>
		                <a href="#" class="btn btn-s-md btn-success btn-rounded">Success</a>
		                <a href="#" class="btn btn-s-md btn-info btn-rounded">Info</a>
		                <a href="#" class="btn btn-s-md btn-warning btn-rounded">Warning</a>
		                <a href="#" class="btn btn-s-md btn-danger btn-rounded">Danger</a>
		                <a href="#" class="btn btn-s-md btn-dark btn-rounded">Dark</a>
		                <a href="#" class="btn btn-s-md btn-default btn-rounded disabled">Disabled</a>
		              </div>

		              <h4 class="m-t-lg">Button groups</h4>
		              <div class="m-b-sm">
		                <div class="btn-group">
		                  <button type="button" class="btn btn-default">Left</button>
		                  <button type="button" class="btn btn-default">Middle</button>
		                  <button type="button" class="btn btn-default">Right</button>
		                </div>              
		              </div>
		              <p class="text-muted">Vertical button groups</p>
		              <div class="btn-group-vertical m-b-sm">
		                <button type="button" class="btn btn-default">Top</button>
		                <button type="button" class="btn btn-default">Middle</button>
		                <button type="button" class="btn btn-default">Bottom</button>
		              </div>
		              <p class="text-muted">Nested button groups</p>
		              <div class="btn-group m-b-sm">
		                <button type="button" class="btn btn-default">1</button>
		                <button type="button" class="btn btn-success">2</button>
		                <button type="button" class="btn btn-default">3</button>
		                <div class="btn-group">
		                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
		                    Dropdown
		                    <span class="caret"></span>
		                  </button>
		                    <ul class="dropdown-menu">
		                    <li><a href="#">Dropdown link</a></li>
		                    <li><a href="#">Dropdown link</a></li>
		                    <li><a href="#">Dropdown link</a></li>
		                  </ul>
		                </div>
		              </div>
		              <p class="text-muted">Justified button groups</p>
		              <div class="m-b-sm">
		                <div class="btn-group btn-group-justified">
		                  <a href="#" class="btn btn-primary">Left</a>
		                  <a href="#" class="btn btn-info">Middle</a>
		                  <a href="#" class="btn btn-success">Right</a>
		                </div>
		              </div>
		              <p class="text-muted">Multiple button groups</p>
		              <div class="btn-toolbar">
		                <div class="btn-group">
		                  <button type="button" class="btn btn-default">1</button>
		                  <button type="button" class="btn btn-default active">2</button>
		                  <button type="button" class="btn btn-default">3</button>
		                  <button type="button" class="btn btn-default">4</button>
		                </div>
		                <div class="btn-group">
		                  <button type="button" class="btn btn-default">5</button>
		                  <button type="button" class="btn btn-default">6</button>
		                  <button type="button" class="btn btn-default">7</button>
		                </div>
		                <div class="btn-group">
		                  <button type="button" class="btn btn-default">8</button>
		                </div>
		              </div>
		            
		              <h4 class="m-t-lg">Button components</h4>
		              <p class="text-muted">
		                <span>There are a few easy ways to quickly get started with Bootstrap, each one ...</span>
		                <span class="text-muted hide" id="moreless"> appealing to a different skill level and use case. Read through to see what suits your particular needs.</span>
		              </p>
		              <p>
		                <button href="#moreless" class="btn btn-sm btn-default" data-toggle="class:show">
		                  <i class="fa fa-plus text"></i>
		                  <span class="text">More</span>
		                  <i class="fa fa-minus text-active"></i>
		                  <span class="text-active">Less</span>
		                </button>
		              </p>
		              <p>
		                <button class="btn btn-default" id="btn-1" href="#btn-1" data-toggle="class:btn-success">
		                  <i class="fa fa-cloud-upload text"></i>
		                  <span class="text">Upload</span>
		                  <i class="fa fa-check text-active"></i>
		                  <span class="text-active">Success</span>
		                </button>
		                <button class="btn btn-default" data-toggle="button">
		                  <i class="fa fa-heart-o text"></i>
		                  <i class="fa fa-heart text-active text-danger"></i>
		                </button>
		                <button class="btn btn-default" data-toggle="button">
		                  <span class="text">
		                    <i class="fa fa-thumbs-up text-success"></i> 25
		                  </span>
		                  <span class="text-active">
		                    <i class="fa fa-thumbs-down text-danger"></i> 10
		                  </span>
		                </button>
		                <button class="btn btn-success" data-toggle="class:show inline" data-target="#spin" data-loading-text="Saving...">Save</button> <i class="fa fa-spin fa-spinner hide" id="spin"></i>
		              </p>
		              <div class="m-b-sm">
		                <div class="btn-group" data-toggle="buttons">
		                  <label class="btn btn-sm btn-info active">
		                    <input type="radio" name="options" id="option1"><i class="fa fa-check text-active"></i> Male
		                  </label>
		                  <label class="btn btn-sm btn-success">
		                    <input type="radio" name="options" id="option2"><i class="fa fa-check text-active"></i> Female
		                  </label>
		                  <label class="btn btn-sm btn-primary">
		                    <input type="radio" name="options" id="option3"><i class="fa fa-check text-active"></i> N/A
		                  </label>
		                </div>
		              </div>

		              <div class="m-b-sm">
		                <div class="btn-group" data-toggle="buttons">
		                  <label class="btn btn-sm btn-default">
		                    <input type="checkbox" name="options" id="option1"> option1
		                  </label>
		                  <label class="btn btn-sm btn-default">
		                    <input type="checkbox" name="options" id="option2"> option2
		                  </label>
		                </div>                
		              </div>

		              <h5 class="m-t-lg">Select Button</h5>
	                  <div class="btn-group m-r">
	                    <button data-toggle="dropdown" class="btn btn-sm btn-default dropdown-toggle">
	                      <span class="dropdown-label">Option1</span> 
	                      <span class="caret"></span>
	                    </button>
	                    <ul class="dropdown-menu dropdown-select">
	                        <li class="active"><a href="#"><input type="radio" name="d-s-r" checked="">Option1</a></li>
	                        <li><a href="#"><input type="radio" name="d-s-r">Option2</a></li>
	                        <li><a href="#"><input type="radio" name="d-s-r">Option3</a></li>
	                        <li class="disabled"><a href="#"><input type="radio" name="d-s-r" disabled="">I'm disabled</a></li>
	                    </ul>
	                  </div>

		              <h4 class="m-t-lg">
		                <a href="#" class="pull-right text-sm" data-toggle="class:btn-rounded" data-target="#social-buttons a">Toggle</a>
		                Social buttons
		              </h4>
		              <p id="social-buttons">
		                <a href="#" class="btn btn-rounded btn-sm btn-info"><i class="fa fa-fw fa-twitter"></i> Twitter</a>
		                <a href="#" class="btn btn-rounded btn-sm btn-primary"><i class="fa fa-fw fa-facebook"></i> Facebook</a>
		                <a href="#" class="btn btn-rounded btn-sm btn-danger"><i class="fa fa-fw fa-google-plus"></i> Google+</a>
		              </p>
		            </div>
		          </div>
		        </section>
          </section>
          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
        </section>
      </section>
    </section>
  </section>
  <script src="<?= base_url(); ?>assets/admin/js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?= base_url(); ?>assets/admin/js/bootstrap.js"></script>
  <!-- App -->
  <script src="<?= base_url(); ?>assets/admin/js/app.js"></script>  
  <script src="<?= base_url(); ?>assets/admin/js/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?= base_url(); ?>assets/admin/js/app.plugin.js"></script>
</body>
</html>