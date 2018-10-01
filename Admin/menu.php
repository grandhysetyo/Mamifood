<div class="left-sidebar">
<div class="scroll-sidebar">
<nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <?php 
                            
                            if ($_SESSION['typeuser']=='client') {
                                
                            
                         ?>
                        <li class="nav-label">Menu Ibu</li>
                        <li> <a class="has-arrow" href="#"><i class="fa fa-home"></i><span class="hide-menu">Toko Ibu</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a  href="bukatoko.php">Buka Toko</a></li>
                                <li><a href="addDatamakanan.php">Add Data Makanan</a></li>
                                <li><a href="datamakanan.php">View Data Makanan</a></li>
                                <li><a href="dataorder.php">Terima Order</a></li>
                                <li><a href="#">Laporan Keuangan</a></li>
                            </ul>
                        </li>
                        <?php }
                            elseif ($_SESSION['typeuser']=='admin') {

                         ?>
                        <li class="nav-label">Menu Admin</li>
                        <li> <a class="has-arrow  " href="#"><i class="fa fa-table"></i><span class="hide-menu">Data Konsumen</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="addDatakonsumen.php">Add Data </a></li>
                                <li><a href="datakonsumen.php">View Data</a></li>
                                
                            </ul>
                        </li>
                        <li> <a class="has-arrow" href="#"><i class="fa fa-table"></i><span class="hide-menu">Data Client</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="addDataclient.php">Add Data </a></li>
                                <li><a href="dataclient.php">View Data </a></li>
                                
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#"><i class="fa fa-table"></i><span class="hide-menu">Data Kurir</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="addDatakurir.php">Add Data </a></li>
                                <li><a href="datakurir.php">View Data </a></li>
                                
                            </ul>
                        </li>
                        <?php }
                            elseif ($_SESSION['typeuser']=='kurir') {
                         ?>
                        <li class="nav-label">Menu Kurir</li>
                        <li> <a class="has-arrow  " href="#" ><i class="fa fa-table"></i><span class="hide-menu">Data Kurir</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="dataorder.php">Terima Order </a></li>
                                <li><a href="editDatakurir.php">Edit Data</a></li>
                                
                            </ul>
                        </li>
                        <?php } ?>
                    </ul>
</nav>
</div>
 </div>