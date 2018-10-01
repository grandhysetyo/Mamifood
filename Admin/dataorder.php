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
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Ela - Bootstrap Admin Dashboard Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    
</head>

<body class="fix-header fix-sidebar">
    <!-- Main wrapper  -->
    <div id="main-wrapper" class="container">
        <!-- header header  -->
        <?php include 'header.php';?>
        <!-- End header header -->

        <!-- Left Sidebar  -->
        <!-- Sidebar scroll-->            
        <!-- Sidebar navigation-->
        <?php include 'menu.php'; ?>
        <!-- End Sidebar navigation -->            
        <!-- End Sidebar scroll-->
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
                   <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Makanan</h4>
                               
                                <div class="table-responsive m-t-40">
                                    <div id="example23_wrapper" class="dataTables_wrapper">
                                        <div class="dt-buttons">
                                            <a class="dt-button buttons-copy buttons-html5" tabindex="0" aria-controls="example23" href="#"><span>Copy</span></a>
                                            <a class="dt-button buttons-csv buttons-html5" tabindex="0" aria-controls="example23" href="#"><span>CSV</span></a>
                                            <a class="dt-button buttons-excel buttons-html5" tabindex="0" aria-controls="example23" href="#"><span>Excel</span></a>
                                            <a class="dt-button buttons-pdf buttons-html5" tabindex="0" aria-controls="example23" href="#"><span>PDF</span></a>
                                            <a class="dt-button buttons-print" tabindex="0" aria-controls="example23" href="#"><span>Print</span></a>
                                            <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF &amp; Print</h6>
                                        </div>
                                        <div id="example23_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="example23"></label></div>
                                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example23_info" style="width: 100%;">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 50.4px;">No</th>
                                                <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Nama Makanan: activate to sort column ascending" style="width: 150.4px;"> tglOrder</th>
                                                <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="NoHp. Makanan: activate to sort column ascending" style="width: 137.4px;">Catatan</th>
                                                <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="NoHp. Makanan: activate to sort column ascending" style="width: 137.4px;">Total</th>
                                                <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Alamat Makanan: activate to sort column ascending" style="width: 128.4px;">Action</th>
                                            </tr>
                                        </thead>
                                        <!-- <tfoot>
                                            <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Age</th><th rowspan="1" colspan="1">Start date</th><th rowspan="1" colspan="1">Salary</th></tr>
                                        </tfoot> -->
                                        <tbody>
                                        <?php 
                                            include 'config/koneksi.php';
                                           
                                            $query = $conn->query("SELECT * FROM tb_order");
                                            
                                            $no = 1;
                                          
                                            ?>
                                            <!-- Show data Here -->
                                            <?php 
                                              while ($data = $query->fetch_assoc()) {
                                            ?>
                                              <tr>
                                                <td><?=  $no++; ?></td>
                                                <td><?=  $data['tglOrder']; ?></td>
                                                <td><?=  $data['catatan']; ?></td>
                                                <td><?=  $data['total']; ?></td>
                                                <td>
                                                    <a href=""><span class="badge badge-success">Terima</span></a>
                                                    <a href=""><span class="badge badge-warning">Tolak</span></a>
                                                </td>
                                              </tr> 
                                            <?php
                                                }
                                            ?>
                                        </tbody>
                                        </table>
                                        <div class="dataTables_info" id="example23_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                                        <div class="dataTables_paginate paging_simple_numbers" id="example23_paginate"><a class="paginate_button previous disabled" aria-controls="example23" data-dt-idx="0" tabindex="0" id="example23_previous">Previous</a><span><a class="paginate_button current" aria-controls="example23" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="example23" data-dt-idx="2" tabindex="0">2</a><a class="paginate_button " aria-controls="example23" data-dt-idx="3" tabindex="0">3</a><a class="paginate_button " aria-controls="example23" data-dt-idx="4" tabindex="0">4</a><a class="paginate_button " aria-controls="example23" data-dt-idx="5" tabindex="0">5</a><a class="paginate_button " aria-controls="example23" data-dt-idx="6" tabindex="0">6</a></span><a class="paginate_button next" aria-controls="example23" data-dt-idx="7" tabindex="0" id="example23_next">Next</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>

</body>

</html>