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
                            <div class="card-title">
                                <h4>Buka Toko</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
                                        <div class="form-group">
                                            <label>Nama Toko</label>
                                            <input type="text"  class="form-control" placeholder="Ibu Marni" value="Ibu Marni" disabled="">
                                        </div>
                                        <div class="form-group">
                                            <label>Jam Buka</label>
                                            <select class="form-control">
                                                    <option>Pilih Jam</option>
                                                    <option>Sekarang - 12.00 Siang</option>
                                                    <option>Sekarang - 16.00 Sore</option>
                                                    <option>Sekarang - 22.00 Malam</option>                                                    
                                                    
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Pilih - Makanan1</label>
                                            <select class="form-control">
                                                    <option>Pilih</option>
                                                    <option>Nasi Tongkol</option>
                                                    <option>Nasi Uduk</option>
                                                    <option>Nasi Kuning</option>
                                                    <option>Nasi Goreng</option>
                                                    
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Pilih - Makanan2</label>
                                            <select class="form-control">
                                                    <option>Pilih</option>
                                                    <option>Nasi Tongkol</option>
                                                    <option>Nasi Uduk</option>
                                                    <option>Nasi Kuning</option>
                                                    <option>Nasi Goreng</option>
                                                    
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Pilih - Makanan3</label>
                                            <select class="form-control">
                                                    <option>Pilih</option>
                                                    <option>Nasi Tongkol</option>
                                                    <option>Nasi Uduk</option>
                                                    <option>Nasi Kuning</option>
                                                    <option>Nasi Goreng</option>
                                                    
                                            </select>
                                        </div>                                        
                                        <div class="form-group">
                                                    <label class="col-sm-2 control-label">Catatan Pengeluaran</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" rows="5" placeholder="Text input"></textarea>
                                                    </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Total Pengeluaran</label>
                                            <input type="text"  class="form-control" >
                                        </div>
                                        <button type="submit" class="btn btn-default">Submit</button>
                                    </form>
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