<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url()."images/favicon.png" ?>">
    <title>Admin Dashboard</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()."asset/css/lib/bootstrap/bootstrap.min.css" ?>" rel="stylesheet">
    <!-- Custom CSS -->

    <link href="<?php echo base_url()."asset/css/lib/calendar2/semantic.ui.min.css" ?>" rel="stylesheet">
    <link href="<?php echo base_url()."asset/css/lib/calendar2/pignose.calendar.min.css" ?>" rel="stylesheet">
    <link href="<?php echo base_url()."asset/css/lib/owl.carousel.min.css" ?>" rel="stylesheet" />
    <link href="<?php echo base_url()."asset/css/lib/owl.theme.default.min.css" ?>" rel="stylesheet" />
    <link href="<?php echo base_url()."asset/css/helper.css" ?>" rel="stylesheet">
    <link href="<?php echo base_url()."asset/css/style.css" ?>" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    
    <!-- Main wrapper  -->
      <?php $this->load->view('header'); ?>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <?php $this->load->view('sidebar'); ?>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-usd f-s-40 color-primary"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>568120</h2>
                                    <p class="m-b-0">Total Revenue</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-shopping-cart f-s-40 color-success"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>1178</h2>
                                    <p class="m-b-0">Sales</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-archive f-s-40 color-warning"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>25</h2>
                                    <p class="m-b-0">Stores</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-user f-s-40 color-danger"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>847</h2>
                                    <p class="m-b-0">Customer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row bg-white m-l-0 m-r-0 box-shadow ">

                    <!-- column -->
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Extra Area Chart</h4>
                                <div id="extra-area-chart"></div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->

                    <!-- column -->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body browser">
                                <p class="f-w-600">iMacs <span class="pull-right">85%</span></p>
                                <div class="progress ">
                                    <div role="progressbar" style="width: 85%; height:8px;" class="progress-bar bg-danger wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                                </div>

                                <p class="m-t-30 f-w-600">iBooks<span class="pull-right">90%</span></p>
                                <div class="progress">
                                    <div role="progressbar" style="width: 90%; height:8px;" class="progress-bar bg-info wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                                </div>

                                <p class="m-t-30 f-w-600">iPhone<span class="pull-right">65%</span></p>
                                <div class="progress">
                                    <div role="progressbar" style="width: 65%; height:8px;" class="progress-bar bg-success wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                                </div>

                                <p class="m-t-30 f-w-600">Samsung<span class="pull-right">65%</span></p>
                                <div class="progress">
                                    <div role="progressbar" style="width: 65%; height:8px;" class="progress-bar bg-warning wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                                </div>

								<p class="m-t-30 f-w-600">android<span class="pull-right">65%</span></p>
                                <div class="progress m-b-30">
                                    <div role="progressbar" style="width: 65%; height:8px;" class="progress-bar bg-success wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                </div>



                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
           <?php $this->load->view('footer'); ?>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="<?php echo base_url()."asset/js/lib/jquery/jquery.min.js" ?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url()."asset/js/lib/bootstrap/js/popper.min.js" ?>"></script>
    <script src="<?php echo base_url()."asset/js/lib/bootstrap/js/bootstrap.min.js" ?>"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url()."asset/js/jquery.slimscroll.js" ?>"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url()."asset/js/sidebarmenu.js" ?>"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url()."asset/js/lib/sticky-kit-master/dist/sticky-kit.min.js" ?>"></script>
    <!--Custom JavaScript -->





    <!-- Amchart -->
     <script src="<?php echo base_url()."asset/js/lib/morris-chart/raphael-min.js" ?>"></script>
    <script src="<?php echo base_url()."asset/js/lib/morris-chart/morris.js" ?>"></script>
    <script src="<?php echo base_url()."asset/js/lib/morris-chart/dashboard1-init.js" ?>"></script>


	<script src="<?php echo base_url()."asset/js/lib/calendar-2/moment.latest.min.js" ?>"></script>
    <!-- scripit init-->
    <script src="<?php echo base_url()."asset/js/lib/calendar-2/semantic.ui.min.js" ?>"></script>
    <!-- scripit init-->
    <script src="<?php echo base_url()."asset/js/lib/calendar-2/prism.min.js" ?>"></script>
    <!-- scripit init-->
    <script src="<?php echo base_url()."asset/js/lib/calendar-2/pignose.calendar.min.js" ?>"></script>
    <!-- scripit init-->
    <script src="<?php echo base_url()."asset/js/lib/calendar-2/pignose.init.js" ?>"></script>


    <script src="<?php echo base_url()."asset/js/lib/datamap/d3.min.js" ?>"></script>
    <script src="<?php echo base_url()."asset/js/lib/datamap/topojson.js" ?>"></script>
    <script src="<?php echo base_url()."asset/js/lib/datamap/datamaps.world.min.js" ?>"></script>
    <script src="<?php echo base_url()."asset/js/lib/datamap/datamap-init.js" ?>"></script>

    <script src="<?php echo base_url()."asset/js/lib/weather/jquery.simpleWeather.min.js" ?>"></script>
    <script src="<?php echo base_url()."asset/js/lib/weather/weather-init.js"?>"></script>

    <script src="<?php echo base_url()."asset/js/lib/owl-carousel/owl.carousel.min.js" ?>"></script>
    <script src="<?php echo base_url()."asset/js/lib/owl-carousel/owl.carousel-init.js" ?>"></script>
    <script src="<?php echo base_url()."asset/js/scripts.js" ?>"></script>
    <!-- scripit init-->

    <script src="<?php echo base_url()."asset/js/custom.min.js" ?>"></script>

</body>

</html>