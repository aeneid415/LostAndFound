<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>OSA Lost and Found System</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/js/bootstrap-daterangepicker/daterangepicker.css" />
        
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
                      <a  href="<?php echo base_url();?>adminAccounts">
                          <i class="fa fa-desktop"></i>
                          <span>Accounts</span>
                      </a>
                  </li>

                  
                  <li class="sub-menu">
                      <a class="active" href="javascript:;" >
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
          	<h3><i class="fa fa-angle-right"></i> Item Retrieval</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
          		    <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i> Please fill in the needed details</h4>
                      <form action="<?php echo base_url();?>Admin/submitRetrieval" role="form" method="post" accept-charset="utf-8" class="form-horizontal style-form">
                      <div class="row">

                        <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 15px;">
                              <label for="type">Item</label>
                              <input class="form-control" name="item" type="text"  placeholder="e.g: Wallet, cellphone" id="example-number-input" required>

                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 15px;">
                              <label for="type">When was it found?</label>
                              <input  class="form-control" name="return_date" type="date" placeholder="e.g: P-608" id="example-number-input" required>

                        </div>
                        <!--
                          <div class="form-group">
                              <label class="col-sm-1 col-sm-2 control-label">Item: </label>
                              <div class="col-sm-4">
                                  <input type="text" name="item" class="form-control" required>
                                
                              </div>
                              <label class="col-sm-2 col-sm-2 control-label">When was it found?:</label>
                              <div class="col-sm-5">
                                  <input type="date" class="form-control" name="return_date" required> 
                                                                    
                              </div>
                          </div>
                        -->
                      </div>
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 15px;">
                              <label for="type">Name of Finder</label>
                              <input class="form-control" name="finder_name" type="text"  placeholder="e.g: Nicolas Proulx"  required>

                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 15px;">
                              <label for="type">Owner of the Item (if any)</label>
                              <input  class="form-control" name="item_owner" type="text" placeholder="e.g: Anita Turner">

                        </div>
                        <!--
                          <div class="form-group">
                            <label class="col-sm-1 col-sm-2 control-label">Name of Finder: </label>
                              <div class="col-sm-4">
                                  <input type="text" name="finder_name" class="form-control" required>
                                
                              </div>
                            <label class="col-sm-2 col-sm-2 control-label">Owner of the Item (if any): </label>
                              <div class="col-sm-5">
                                  <input type="text" name="item_owner" class="form-control">
                                
                              </div>
                          </div>

                        -->
                      </div>
                      <div class="row">
                          <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 15px;">
                              <label for="type">Course and Year/Department:</label>
                              
                              <input type="text" class="form-control" name="courseandyear" required>
                          </div>
                                  
                          <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 15px;">    
                            <label for="type">From where (exact location) was the item found?:</label>
                            <textarea class="form-control" rows="5" name="location" required></textarea>
                                  
                          </div>

                          
                      </div>
                      <div class="row">
                            <div class="col-sm-12">
                              <button type="submit" class="btn btn-theme02 btn-block" type="submit">Submit</button>
                            </div>
                          
                      </div>
                          

                      </form>
                  </div>
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
    <script src="<?php echo base_url();?>assets/js/jquery-ui-1.9.2.custom.min.js"></script>

  <!--custom switch-->
  <script src="<?php echo base_url();?>assets/js/bootstrap-switch.js"></script>
  
  <!--custom tagsinput-->
  <script src="<?php echo base_url();?>assets/js/jquery.tagsinput.js"></script>
  
  <!--custom checkbox & radio-->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-daterangepicker/daterangepicker.js"></script>
  
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
  
  
  <script src="<?php echo base_url();?>assets/js/form-component.js"></script>
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>
  <script>
    $('.datepicker').datepicker();
  </script>

  </body>
</html>

<!--
<div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i> Please fill in the needed details</h4>
                      <form action="<?php echo base_url();?>admin/submitRetrieval"  role="form" method="post" accept-charset="utf-8" class="form-horizontal style-form">
                      
                          <div class="form-group">
                              <label class="col-sm-1 col-sm-2 control-label">Item: </label>
                              <div class="col-sm-4">
                                  <input type="text" name="item" class="form-control" required>
                                
                              </div>
                              <label class="col-sm-2 col-sm-2 control-label">When was it found?:</label>
                              <div class="col-sm-5">
                                  <input type="date" class="form-control" name="return_date" required> 
                                                                    
                              </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-1 col-sm-2 control-label">Name of Finder: </label>
                              <div class="col-sm-4">
                                  <input type="text" name="finder_name" class="form-control" required>
                                
                              </div>
                            <label class="col-sm-2 col-sm-2 control-label">Owner of the Item (if any): </label>
                              <div class="col-sm-5">
                                  <input type="text" name="item_owner" class="form-control">
                                
                              </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Course and Year/Department:</label>
                              <div class="col-sm-3">
                                  <input type="text" class="form-control" name="courseandyear" required>
                                  
                              </div>
                            <label class="col-sm-2 col-sm-2 control-label">From where (exact location) was the item found?:</label>
                              <div class="col-sm-5">
                                  <textarea class="form-control" rows="5" name="location" required></textarea>
                                  
                              </div>

                          </div>
                          <div class="form-group">
                            <div class="col-sm-5">
                              <button type="button" class="btn btn-theme02 btn-block" type="submit">Submit</button>
                            </div>
                          </div>
                          

                      </form>
                  </div>
-->
