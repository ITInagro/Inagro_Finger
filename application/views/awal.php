<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INAGRO</title>

    <link href="<?php echo base_url()?>asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>asset/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Data Tables -->
    <link href="<?php echo base_url()?>asset/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url()?>asset/css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="<?php echo base_url()?>asset/css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">

    <link href="<?php echo base_url()?>asset/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url()?>asset/css/style.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">

        	<!--start sidebar-->
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="<?php echo base_url()?>asset/img/_inagro/logo.jpg" style="width:40%"/>
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Admin INAGRO</strong>
                             </span> <span class="text-muted text-xs block">A<b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                            <li><a href="mailbox.html">Mailbox</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo site_url('index.php/login/logout')?>">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>


                <li>
                    <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="<?php echo site_url('index.php/absensi')?>">Dashboard v.1</a></li>
                        <li><a href="dashboard_2.html">Dashboard v.2</a></li>
                        <li><a href="dashboard_3.html">Dashboard v.3</a></li>
                        <li><a href="dashboard_4_1.html">Dashboard v.4</a></li>
                        <li><a href="dashboard_5.html">Dashboard v.5 <span class="label label-primary pull-right">NEW</span></a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo site_url('index.php/absensi')?>"><i class="fa fa-diamond"></i> <span class="nav-label">Layouts</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Graphs</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="graph_flot.html">Flot Charts</a></li>
                        <li><a href="graph_morris.html">Morris.js Charts</a></li>
                        <li><a href="graph_rickshaw.html">Rickshaw Charts</a></li>
                        <li><a href="graph_chartjs.html">Chart.js</a></li>
                        <li><a href="graph_chartist.html">Chartist</a></li>
                        <li><a href="graph_peity.html">Peity Charts</a></li>
                        <li><a href="graph_sparkline.html">Sparkline Charts</a></li>
                    </ul>
                </li>
                
            </ul>
            <!--stop sidebar-->

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
	        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
	        <div class="navbar-header">
	            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
	            <form role="search" class="navbar-form-custom" action="search_results.html">
	                <div class="form-group">
	                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
	                </div>
	            </form>
	        </div>
	        <ul class="nav navbar-top-links navbar-right">
	            <li>
	                <span class="m-r-sm text-muted welcome-message">Welcome to INSPINIA+ Admin Theme.</span>
	            </li>
	            
	            <li>
	                <a href="<?php echo site_url('login/logout'); ?>">
	                    <i class="fa fa-sign-out"></i> Log out
	                </a>
	            </li>
	        </ul>

	        </nav>
        </div>
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Master Karyawan</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li class="active">
                        <strong>Master Karyawan</strong>
                    </li>
                </ol>
            </div>
            <div class="col-lg-2">

            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
	                <div class="ibox float-e-margins">
	                    <div class="ibox-title">
	                        <h5>Basic Data Tables example with responsive plugin</h5>
	                        <div class="ibox-tools">
	                            <a class="collapse-link">
	                                <i class="fa fa-chevron-up"></i>
	                            </a>
	                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
	                                <i class="fa fa-wrench"></i>
	                            </a>
	                            <ul class="dropdown-menu dropdown-user">
	                                <li><a href="#">Config option 1</a>
	                                </li>
	                                <li><a href="#">Config option 2</a>
	                                </li>
	                            </ul>
	                            <a class="close-link">
	                                <i class="fa fa-times"></i>
	                            </a>
	                        </div>
	                    </div>
	                    <div class="ibox-content">

	                        <div class="table-responsive">
	                    <table class="table table-striped table-bordered table-hover dataTables-example" >
	                    <thead>
	                    <tr>
	                        <th>Rendering engine</th>
	                        <th>Browser</th>
	                        <th>Platform(s)</th>
	                        <th>Engine version</th>
	                        <th>CSS grade</th>
	                    </tr>
	                    </thead>
	                    <tbody>
	                    <tr class="gradeX">
	                        <td>Trident</td>
	                        <td>Internet
	                            Explorer 4.0
	                        </td>
	                        <td>Win 95+</td>
	                        <td class="center">4</td>
	                        <td class="center">X</td>
	                    </tr>
	                    <tr class="gradeC">
	                        <td>Trident</td>
	                        <td>Internet
	                            Explorer 5.0
	                        </td>
	                        <td>Win 95+</td>
	                        <td class="center">5</td>
	                        <td class="center">C</td>
	                    </tr>
	                    <tr class="gradeA">
	                        <td>Trident</td>
	                        <td>Internet
	                            Explorer 5.5
	                        </td>
	                        <td>Win 95+</td>
	                        <td class="center">5.5</td>
	                        <td class="center">A</td>
	                    </tr>
	                    <tr class="gradeA">
	                        <td>Trident</td>
	                        <td>Internet
	                            Explorer 6
	                        </td>
	                        <td>Win 98+</td>
	                        <td class="center">6</td>
	                        <td class="center">A</td>
	                    </tr>
	                    <tr class="gradeA">
	                        <td>Trident</td>
	                        <td>Internet Explorer 7</td>
	                        <td>Win XP SP2+</td>
	                        <td class="center">7</td>
	                        <td class="center">A</td>
	                    </tr>
	                    <tr class="gradeA">
	                        <td>Trident</td>
	                        <td>AOL browser (AOL desktop)</td>
	                        <td>Win XP</td>
	                        <td class="center">6</td>
	                        <td class="center">A</td>
	                    </tr>
	                    <tr class="gradeA">
	                        <td>Gecko</td>
	                        <td>Firefox 1.0</td>
	                        <td>Win 98+ / OSX.2+</td>
	                        <td class="center">1.7</td>
	                        <td class="center">A</td>
	                    </tr>
	                    <tr class="gradeA">
	                        <td>Gecko</td>
	                        <td>Firefox 1.5</td>
	                        <td>Win 98+ / OSX.2+</td>
	                        <td class="center">1.8</td>
	                        <td class="center">A</td>
	                    </tr>
	                    <tr class="gradeA">
	                        <td>Gecko</td>
	                        <td>Firefox 2.0</td>
	                        <td>Win 98+ / OSX.2+</td>
	                        <td class="center">1.8</td>
	                        <td class="center">A</td>
	                    </tr>
	                    <tr class="gradeA">
	                        <td>Gecko</td>
	                        <td>Firefox 3.0</td>
	                        <td>Win 2k+ / OSX.3+</td>
	                        <td class="center">1.9</td>
	                        <td class="center">A</td>
	                    </tr>
	                    <tr class="gradeA">
	                        <td>Gecko</td>
	                        <td>Camino 1.0</td>
	                        <td>OSX.2+</td>
	                        <td class="center">1.8</td>
	                        <td class="center">A</td>
	                    </tr>
	                    <tr class="gradeA">
	                        <td>Gecko</td>
	                        <td>Camino 1.5</td>
	                        <td>OSX.3+</td>
	                        <td class="center">1.8</td>
	                        <td class="center">A</td>
	                    </tr>
	                    <tr class="gradeA">
	                        <td>Gecko</td>
	                        <td>Netscape 7.2</td>
	                        <td>Win 95+ / Mac OS 8.6-9.2</td>
	                        <td class="center">1.7</td>
	                        <td class="center">A</td>
	                    </tr>
	                    <tr class="gradeA">
	                        <td>Gecko</td>
	                        <td>Netscape Browser 8</td>
	                        <td>Win 98SE+</td>
	                        <td class="center">1.7</td>
	                        <td class="center">A</td>
	                    </tr>
	                    <tr class="gradeA">
	                        <td>Gecko</td>
	                        <td>Netscape Navigator 9</td>
	                        <td>Win 98+ / OSX.2+</td>
	                        <td class="center">1.8</td>
	                        <td class="center">A</td>
	                    </tr>
	                    <tr class="gradeA">
	                        <td>Gecko</td>
	                        <td>Mozilla 1.0</td>
	                        <td>Win 95+ / OSX.1+</td>
	                        <td class="center">1</td>
	                        <td class="center">A</td>
	                    </tr>
	                    <tr class="gradeA">
	                        <td>Gecko</td>
	                        <td>Mozilla 1.1</td>
	                        <td>Win 95+ / OSX.1+</td>
	                        <td class="center">1.1</td>
	                        <td class="center">A</td>
	                    </tr>
	                    <tr class="gradeA">
	                        <td>Gecko</td>
	                        <td>Mozilla 1.2</td>
	                        <td>Win 95+ / OSX.1+</td>
	                        <td class="center">1.2</td>
	                        <td class="center">A</td>
	                    </tr>
	                    <tr class="gradeA">
	                        <td>Gecko</td>
	                        <td>Mozilla 1.3</td>
	                        <td>Win 95+ / OSX.1+</td>
	                        <td class="center">1.3</td>
	                        <td class="center">A</td>
	                    </tr>
	                    <tr class="gradeA">
	                        <td>Gecko</td>
	                        <td>Mozilla 1.4</td>
	                        <td>Win 95+ / OSX.1+</td>
	                        <td class="center">1.4</td>
	                        <td class="center">A</td>
	                    </tr>
	                    <tr class="gradeA">
	                        <td>Gecko</td>
	                        <td>Mozilla 1.5</td>
	                        <td>Win 95+ / OSX.1+</td>
	                        <td class="center">1.5</td>
	                        <td class="center">A</td>
	                    </tr>
	                    <tr class="gradeA">
	                        <td>Gecko</td>
	                        <td>Mozilla 1.6</td>
	                        <td>Win 95+ / OSX.1+</td>
	                        <td class="center">1.6</td>
	                        <td class="center">A</td>
	                    </tr>
	                    <tr class="gradeA">
	                        <td>Gecko</td>
	                        <td>Mozilla 1.7</td>
	                        <td>Win 98+ / OSX.1+</td>
	                        <td class="center">1.7</td>
	                        <td class="center">A</td>
	                    </tr>
	                    <tr class="gradeA">
	                        <td>Gecko</td>
	                        <td>Mozilla 1.8</td>
	                        <td>Win 98+ / OSX.1+</td>
	                        <td class="center">1.8</td>
	                        <td class="center">A</td>
	                    </tr>
	                    <tr class="gradeA">
	                        <td>Gecko</td>
	                        <td>Seamonkey 1.1</td>
	                        <td>Win 98+ / OSX.2+</td>
	                        <td class="center">1.8</td>
	                        <td class="center">A</td>
	                    </tr>
	                    <tr class="gradeA">
	                        <td>Gecko</td>
	                        <td>Epiphany 2.20</td>
	                        <td>Gnome</td>
	                        <td class="center">1.8</td>
	                        <td class="center">A</td>
	                    </tr>
	                    <tr class="gradeA">
	                        <td>Webkit</td>
	                        <td>Safari 1.2</td>
	                        <td>OSX.3</td>
	                        <td class="center">125.5</td>
	                        <td class="center">A</td>
	                    </tr>
	                    <tr class="gradeA">
	                        <td>Webkit</td>
	                        <td>Safari 1.3</td>
	                        <td>OSX.3</td>
	                        <td class="center">312.8</td>
	                        <td class="center">A</td>
	                    </tr>
	                    <tr class="gradeA">
	                        <td>Webkit</td>
	                        <td>Safari 2.0</td>
	                        <td>OSX.4+</td>
	                        <td class="center">419.3</td>
	                        <td class="center">A</td>
	                    </tr>
	                    <tr class="gradeA">
	                        <td>Webkit</td>
	                        <td>Safari 3.0</td>
	                        <td>OSX.4+</td>
	                        <td class="center">522.1</td>
	                        <td class="center">A</td>
	                    </tr>
	                    <tr class="gradeA">
	                        <td>Webkit</td>
	                        <td>OmniWeb 5.5</td>
	                        <td>OSX.4+</td>
	                        <td class="center">420</td>
	                        <td class="center">A</td>
	                    </tr>
	                    <tr class="gradeA">
	                        <td>Webkit</td>
	                        <td>iPod Touch / iPhone</td>
	                        <td>iPod</td>
	                        <td class="center">420.1</td>
	                        <td class="center">A</td>
	                    </tr>
	                    <tr class="gradeA">
	                        <td>Webkit</td>
	                        <td>S60</td>
	                        <td>S60</td>
	                        <td class="center">413</td>
	                        <td class="center">A</td>
	                    </tr>
	                    <tr class="gradeA">
	                        <td>Presto</td>
	                        <td>Opera 7.0</td>
	                        <td>Win 95+ / OSX.1+</td>
	                        <td class="center">-</td>
	                        <td class="center">A</td>
	                    </tr>
	                    <tr class="gradeA">
	                        <td>Presto</td>
	                        <td>Opera 7.5</td>
	                        <td>Win 95+ / OSX.2+</td>
	                        <td class="center">-</td>
	                        <td class="center">A</td>
	                    </tr>
	                    <tr class="gradeA">
	                        <td>Presto</td>
	                        <td>Opera 8.0</td>
	                        <td>Win 95+ / OSX.2+</td>
	                        <td class="center">-</td>
	                        <td class="center">A</td>
	                    </tr>
	                    <tr class="gradeA">
	                        <td>Presto</td>
	                        <td>Opera 8.5</td>
	                        <td>Win 95+ / OSX.2+</td>
	                        <td class="center">-</td>
	                        <td class="center">A</td>
	                    </tr>
	                    <tr class="gradeA">
	                        <td>Presto</td>
	                        <td>Opera 9.0</td>
	                        <td>Win 95+ / OSX.3+</td>
	                        <td class="center">-</td>
	                        <td class="center">A</td>
	                    </tr>
	                    <tr class="gradeA">
	                        <td>Presto</td>
	                        <td>Opera 9.2</td>
	                        <td>Win 88+ / OSX.3+</td>
	                        <td class="center">-</td>
	                        <td class="center">A</td>
	                    </tr>
	                    <tr class="gradeA">
	                        <td>Presto</td>
	                        <td>Opera 9.5</td>
	                        <td>Win 88+ / OSX.3+</td>
	                        <td class="center">-</td>
	                        <td class="center">A</td>
	                    </tr>
	                    <tr class="gradeA">
	                        <td>Presto</td>
	                        <td>Opera for Wii</td>
	                        <td>Wii</td>
	                        <td class="center">-</td>
	                        <td class="center">A</td>
	                    </tr>
	                    <tr class="gradeA">
	                        <td>Presto</td>
	                        <td>Nokia N800</td>
	                        <td>N800</td>
	                        <td class="center">-</td>
	                        <td class="center">A</td>
	                    </tr>
	                    <tr class="gradeA">
	                        <td>Presto</td>
	                        <td>Nintendo DS browser</td>
	                        <td>Nintendo DS</td>
	                        <td class="center">8.5</td>
	                        <td class="center">C/A<sup>1</sup></td>
	                    </tr>
	                    <tr class="gradeC">
	                        <td>KHTML</td>
	                        <td>Konqureror 3.1</td>
	                        <td>KDE 3.1</td>
	                        <td class="center">3.1</td>
	                        <td class="center">C</td>
	                    </tr>
	                    <tr class="gradeA">
	                        <td>KHTML</td>
	                        <td>Konqureror 3.3</td>
	                        <td>KDE 3.3</td>
	                        <td class="center">3.3</td>
	                        <td class="center">A</td>
	                    </tr>
	                    <tr class="gradeA">
	                        <td>KHTML</td>
	                        <td>Konqureror 3.5</td>
	                        <td>KDE 3.5</td>
	                        <td class="center">3.5</td>
	                        <td class="center">A</td>
	                    </tr>
	                    <tr class="gradeX">
	                        <td>Tasman</td>
	                        <td>Internet Explorer 4.5</td>
	                        <td>Mac OS 8-9</td>
	                        <td class="center">-</td>
	                        <td class="center">X</td>
	                    </tr>
	                    <tr class="gradeC">
	                        <td>Tasman</td>
	                        <td>Internet Explorer 5.1</td>
	                        <td>Mac OS 7.6-9</td>
	                        <td class="center">1</td>
	                        <td class="center">C</td>
	                    </tr>
	                    <tr class="gradeC">
	                        <td>Tasman</td>
	                        <td>Internet Explorer 5.2</td>
	                        <td>Mac OS 8-X</td>
	                        <td class="center">1</td>
	                        <td class="center">C</td>
	                    </tr>
	                    <tr class="gradeA">
	                        <td>Misc</td>
	                        <td>NetFront 3.1</td>
	                        <td>Embedded devices</td>
	                        <td class="center">-</td>
	                        <td class="center">C</td>
	                    </tr>
	                    <tr class="gradeA">
	                        <td>Misc</td>
	                        <td>NetFront 3.4</td>
	                        <td>Embedded devices</td>
	                        <td class="center">-</td>
	                        <td class="center">A</td>
	                    </tr>
	                    <tr class="gradeX">
	                        <td>Misc</td>
	                        <td>Dillo 0.8</td>
	                        <td>Embedded devices</td>
	                        <td class="center">-</td>
	                        <td class="center">X</td>
	                    </tr>
	                    <tr class="gradeX">
	                        <td>Misc</td>
	                        <td>Links</td>
	                        <td>Text only</td>
	                        <td class="center">-</td>
	                        <td class="center">X</td>
	                    </tr>
	                    <tr class="gradeX">
	                        <td>Misc</td>
	                        <td>Lynx</td>
	                        <td>Text only</td>
	                        <td class="center">-</td>
	                        <td class="center">X</td>
	                    </tr>
	                    <tr class="gradeC">
	                        <td>Misc</td>
	                        <td>IE Mobile</td>
	                        <td>Windows Mobile 6</td>
	                        <td class="center">-</td>
	                        <td class="center">C</td>
	                    </tr>
	                    <tr class="gradeC">
	                        <td>Misc</td>
	                        <td>PSP browser</td>
	                        <td>PSP</td>
	                        <td class="center">-</td>
	                        <td class="center">C</td>
	                    </tr>
	                    <tr class="gradeU">
	                        <td>Other browsers</td>
	                        <td>All others</td>
	                        <td>-</td>
	                        <td class="center">-</td>
	                        <td class="center">U</td>
	                    </tr>
	                    </tbody>
	                    <tfoot>
	                    <tr>
	                        <th>Rendering engine</th>
	                        <th>Browser</th>
	                        <th>Platform(s)</th>
	                        <th>Engine version</th>
	                        <th>CSS grade</th>
	                    </tr>
	                    </tfoot>
	                    </table>
	                        </div>

	                    </div>
	                </div>
	            </div>
            </div>
            
        </div>
        <div class="footer">
            <div class="pull-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong>Inagro &copy; 2019
            </div>
        </div>

        </div>
        </div>



    <!-- Mainly scripts -->
    <script src="<?php echo base_url()?>asset/js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url()?>asset/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>asset/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url()?>asset/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url()?>asset/js/plugins/jeditable/jquery.jeditable.js"></script>

    <!-- Data Tables -->
    <script src="<?php echo base_url()?>asset/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url()?>asset/js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url()?>asset/js/plugins/dataTables/dataTables.responsive.js"></script>
    <script src="<?php echo base_url()?>asset/js/plugins/dataTables/dataTables.tableTools.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url()?>asset/js/inspinia.js"></script>
    <script src="<?php echo base_url()?>asset/js/plugins/pace/pace.min.js"></script>

    <style>

    </style>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function() {
            $('.dataTables-example').DataTable({
                "dom": 'lTfigt',
                "tableTools": {
                    "sSwfPath": "js/plugins/dataTables/swf/copy_csv_xls_pdf.swf"
                }
            });

            /* Init DataTables */
            var oTable = $('#editable').DataTable();

            /* Apply the jEditable handlers to the table */
            oTable.$('td').editable( '../example_ajax.php', {
                "callback": function( sValue, y ) {
                    var aPos = oTable.fnGetPosition( this );
                    oTable.fnUpdate( sValue, aPos[0], aPos[1] );
                },
                "submitdata": function ( value, settings ) {
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
                        "column": oTable.fnGetPosition( this )[2]
                    };
                },

                "width": "90%",
                "height": "100%"
            } );


        });

        function fnClickAddRow() {
            $('#editable').dataTable().fnAddData( [
                "Custom row",
                "New row",
                "New row",
                "New row",
                "New row" ] );

        }
    </script>

</body>

</html>
