<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>OSA - Lost and Found System</b></a>

            <!--logo end-->
            
            <div class="top-menu">
              <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="<?php echo base_url();?>Admin/logout">Logout</a></li>
              </ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <?php 
                  $first_name = $this->session->userdata('first_name');
                  $last_name = $this->session->userdata('last_name');
                ?>
              
                  <p class="centered"><a href="profile.html"><img src="<?php echo base_url();?>assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered"><?php echo $first_name; ?> <?php echo $last_name; ?></h5>
                    
                   <li class="mt">
                      <a  href="<?php echo base_url();?>adminDashboard">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li>
                      <a   class="active" href="<?php echo base_url();?>adminAccounts">
                          <i class="fa fa-desktop"></i>
                          <span>Accounts</span>
                      </a>
                  </li>

                  
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Issue LFI Record</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url();?>adminFoundForm">Found Items Form</a></li>
                      </ul>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url();?>adminLossForm">Lost Items Form</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Data Tables</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url();?>adminFoundItems">Found Items</a></li>
                          <li><a  href="<?php echo base_url();?>adminLostItems">Lost Items</a></li>
                          <li><a  href="<?php echo base_url();?>adminRetrievedItems">Retrieved Items</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Dummy Pages (Debug)</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url();?>admin/forms">Forms</a></li>
                          <li><a  href="<?php echo base_url();?>admin/tables">Tables</a></li>
                          <li><a  href="<?php echo base_url();?>admin/buttons">Buttons</a></li>
                      </ul>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Blank Page</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
          		<p>Place your content here.</p>
          		</div>
          	</div>
			
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="blank.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="<?php echo base_url();?>assets/js/common-scripts.js"></script>

    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
