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
    <link href="<?php echo base_url();?>assets/datatables/datatables.min.css"  rel="stylesheet" >
    <link href="<?php echo base_url();?>assets/datatables/DataTables/css/jquery.dataTables.min.css"  rel="stylesheet" >
    <link href="<?php echo base_url();?>assets/datatables/Buttons/css/buttons.dataTables.min.css"  rel="stylesheet" >
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
                      <a  href="<?php echo base_url();?>adminAccounts">
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
                      <a  class="active" href="javascript:;" >
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
            <h3><i class="fa fa-angle-right"></i> All Found Items</h3>
            
              

              <div class="row mt">
                  <div class="col-md-12" >
                      <div class="content-panel">
                          <table id="found" class="table table-striped table-advance table-hover"  >
                            <!-- <h4><i class="fa fa-angle-right"></i> As of *insert date here*</h4> -->
                            <?php
                                $error = $this->session->flashdata('error');
                                $success = $this->session->flashdata('success');
                                if(!empty($error)){
                            ?>
                              <div class="alert alert-danger alert-dismissable">
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                  <strong>Error!</strong> <?php echo $error; ?>
                              </div>
                            <?php } else if(!empty($success)){ ?>
                              <div class="alert alert-success alert-dismissable">
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                  <strong>Success!</strong> <?php echo $success; ?>
                              </div>
                            <?php } ?>
                            
                              <thead>
                              <tr>
                                  <th>Record ID</th>
                                  <th>Finder Name</th>
                                  <th>Course & Year/Department</th>
                                  <th>Item</th>
                                  <th>From where was it found?</th>
                                  <th>Found when?</th>
                                  <th>Turned over to SAO on</th>
                                  <th>Action</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php
                                if($fetch_foundItems->num_rows() > 0){

                                  foreach ($fetch_foundItems -> result() as $row) 
                                  {
                                ?>
                              <tr>
                                  <td><?php echo $row->record_id; ?></td>
                                  <td><?php echo $row->finder_name; ?></td>
                                  <td><?php echo $row->course_year_dep; ?></td>
                                  <td><?php echo $row->item; ?></td>
                                  <td><?php echo $row->location; ?></td>
                                  <td><?php echo $row->date_found; ?></td>
                                  <td><?php echo $row->date_issued; ?></td>
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>

                              <?php
                                  }

                                }else{
                              ?>
                              <tr>
                                <td colspan = 9 style = "text-align: center;"> <h3>No users found</h3> </td>
                              </tr>
                              <?php
                                }

                              ?>
                              
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
              
            
      
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
    <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
    <script src="https://npmcdn.com/bootstrap@4.0.0-alpha.5/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/jquery/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/datatables/datatables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/datatables/DataTables/js/jquery.dataTables.min.js"></script>
         
    <!-- Others -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/datatables/JSZip/jszip.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/datatables/pdfmake/pdfmake.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/datatables/pdfmake/vfs_fonts.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/datatables/Buttons/js/dataTables.buttons.min.js"></script>

    <!-- Buttons -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/datatables/Buttons/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/datatables/Buttons/js/buttons.print.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/datatables/Buttons/js/buttons.flash.min.js"></script>


    <!--common script for all pages-->
    <script src="<?php echo base_url();?>assets/js/common-scripts.js"></script>

    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  <script>
            $(document).ready(function() {
                $('#found').DataTable( {
                    dom: 'Bfrtip',
                    buttons: [
                        'excel', 'pdf', 'print'
                    ]
                } );
                
            } );


        </script>

  </body>
</html>
