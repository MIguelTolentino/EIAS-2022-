<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<?php 
session_start();
if(empty($_SESSION['user_id'])){
    header("Location:index.php");
}
include('functions/config.php'); 
include('nav.php'); 
?>
<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                        <?php
                            if($_SESSION['role_id'] == 1){
                        ?>
                    <li class="active">
                        <a href="dashboard.php"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="menu-title">EIAS</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-clipboard-list"></i>Borrow Details</a>
                        <ul class="sub-menu children dropdown-menu">                            
                            <li><i class="fa fa-people-carry"></i><a href="request.php">Request Borrow</a></li>
                            <li><i class="fa fa-archive"></i><a href="myborrow.php">My Borrow</a></li>
                            <li><i class="fa fa-ban"></i><a href="penalties.php">Penalties</a></li>
                        </ul>
                    </li>


                    <li class="menu-title">Inventory</li><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Items</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-box-open"></i><a href="borrow.php">Borrow</a></li>                           
                            <li><i class="menu-icon fa fa-list-ol"></i><a href="return.php">Return</a></li>
                        </ul>
                    </li>
        
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-wrench"></i>Maintenance</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-boxes"></i><a href="items.php">Add Item</a></li>
                            <li><i class="menu-icon fas fa-user"></i><a href="users.php">Users</a></li>
                            <li><i class="menu-icon fa fa-list-alt "></i><a href="category.php">Category</a></li>
                            <li><i class="menu-icon fa fa-clone"></i><a href="brands.php">Brands</a></li>
                            <li><i class="menu-icon fa fa-parachute-box"></i><a href="supplier.php">Supplier</a></li>
                            <li><i class="menu-icon fa fa-map-marked-alt"></i><a href="locations.php">Locations</a></li>
                            <li><i class="menu-icon fa fa-map-marked-alt"></i><a href="tracker.php">Tracker</a></li>
                        </ul>
                    </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="logs.php" aria-expanded="false"><i class="menu-icon fas fa-history"></i><span
                        class="hide-menu">History Activities</span></a></li>
                        <?php
                        }else{
                        ?>
                            <li class="active">
                                <a href="dashboard.php"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                            </li>
                            <li class="menu-title">EIAS</li><!-- /.menu-title -->
                            <li class="menu-item-has-children dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-clipboard-list"></i>Borrow Item</a>
                                <ul class="sub-menu children dropdown-menu">                            
                                    <li><i class="fa fa-people-carry"></i><a href="myborrow.php">Borrow Status</a></li>
                                    <li><i class="fa fa-archive"></i><a href="borrow.php">Borrow</a></li>
                                </ul>
                            </li>
                        <?php
                            }
                        ?>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="images/EIAS.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo-eias.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                <ul class="navbar-nav float-start me-auto"> 
                        <li class="nav-item d-none d-lg-block"><a
                                class="nav-link waves-effect waves-light" href="viewBorrow.php"
                                data-sidebartype="mini-sidebar"><i class="mdi mdi-cart font-24"></i></a></li>
                    </ul>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                    <!--    <div class="dropdown for-notification">-->
                    <!--        <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                    <!--            <i class="fa fa-bell"></i>-->
                    <!--            <span class="count bg-danger">3</span>-->
                    <!--        </button>-->
                    <!--        <div class="dropdown-menu" aria-labelledby="notification">-->
                    <!--            <p class="red">You have 3 Notification</p>-->
                    <!--            <a class="dropdown-item media" href="#">-->
                    <!--                <i class="fa fa-check"></i>-->
                    <!--                <p>Server #1 overloaded.</p>-->
                    <!--            </a>-->
                    <!--            <a class="dropdown-item media" href="#">-->
                    <!--                <i class="fa fa-info"></i>-->
                    <!--                <p>Server #2 overloaded.</p>-->
                    <!--            </a>-->
                    <!--            <a class="dropdown-item media" href="#">-->
                    <!--                <i class="fa fa-warning"></i>-->
                    <!--                <p>Server #3 overloaded.</p>-->
                    <!--            </a>-->
                    <!--        </div>-->
                    <!--    </div>-->

                    <!--    <div class="dropdown for-message">-->
                    <!--        <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                    <!--            <i class="fa fa-envelope"></i>-->
                    <!--            <span class="count bg-primary">4</span>-->
                    <!--        </button>-->
                    <!--        <div class="dropdown-menu" aria-labelledby="message">-->
                    <!--            <p class="red">You have 4 Mails</p>-->
                    <!--            <a class="dropdown-item media" href="#">-->
                    <!--                <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>-->
                    <!--                <div class="message media-body">-->
                    <!--                    <span class="name float-left">Jonathan Smith</span>-->
                    <!--                    <span class="time float-right">Just now</span>-->
                    <!--                    <p>Hello, this is an example msg</p>-->
                    <!--                </div>-->
                    <!--            </a>-->
                    <!--            <a class="dropdown-item media" href="#">-->
                    <!--                <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>-->
                    <!--                <div class="message media-body">-->
                    <!--                    <span class="name float-left">Jack Sanders</span>-->
                    <!--                    <span class="time float-right">5 minutes ago</span>-->
                    <!--                    <p>Lorem ipsum dolor sit amet, consectetur</p>-->
                    <!--                </div>-->
                    <!--            </a>-->
                    <!--            <a class="dropdown-item media" href="#">-->
                    <!--                <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>-->
                    <!--                <div class="message media-body">-->
                    <!--                    <span class="name float-left">Cheryl Wheeler</span>-->
                    <!--                    <span class="time float-right">10 minutes ago</span>-->
                    <!--                    <p>Hello, this is an example msg</p>-->
                    <!--                </div>-->
                    <!--            </a>-->
                    <!--            <a class="dropdown-item media" href="#">-->
                    <!--                <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>-->
                    <!--                <div class="message media-body">-->
                    <!--                    <span class="name float-left">Rachel Santos</span>-->
                    <!--                    <span class="time float-right">15 minutes ago</span>-->
                    <!--                    <p>Lorem ipsum dolor sit amet, consectetur</p>-->
                    <!--                </div>-->
                    <!--            </a>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <!--<a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>-->

                            <!--<a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>-->

                            <!--<a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>-->

                            <a class="nav-link" href="functions/logout.php"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->
        <!-- Content -->
       <!-- Page wrapper  -->
       <div class="page-wrapper">
        <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <?php 
                if(@$_GET['error'] == 1){
                    ?>
                    <div style="color: green;"><center><?php echo @$_GET['messsage'] ?></center></div>
                    <?php
                }else if(@$_GET['error'] == 2){
                    ?>
                    <div style="color: red;"><center><?php echo @$_GET['messsage'] ?></center></div>
                    <?php
                }else{
                    ?>
                    <div style="color: red;"><center><?php echo @$_GET['messsage'] ?></center></div>
                    <?php
                }
                ?>
                <div class="row el-element-overlay">
                    <?php 
                    $query = "SELECT * FROM `tbl_items` INNER JOIN tbl_suppliers ON tbl_items.supplier_id=tbl_suppliers.supplier_id INNER JOIN tbl_brands ON tbl_items.brand_id=tbl_brands.brand_id INNER JOIN tbl_category ON tbl_items.category_id=tbl_category.category_id WHERE item_status != 3";
                    $result = $con->query($query);
                    while($row = $result->fetch_assoc()){
                        ?>
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="el-card-item">
                                    <div class="el-card-avatar el-overlay-1"> <img src="images/logo-eias.png"
                                            alt="user" />
                                        <div class="el-overlay">
                                            <ul class="list-style-none el-info">
                                                <li class="el-item"><a
                                                        class="btn default btn-outline image-popup-vertical-fit el-link"
                                                        href="images/logo-eias.png"><i
                                                            class="mdi mdi-magnify-plus"></i></a></li>
                                            </ul>
                                        </div>
                                        <span style="font-weight: bold;">Supplier: <?php echo $row['supplier_name']; ?> Brand: <?php echo $row['brand_name']; ?> Category: <?php echo $row['category_name']; ?></span>
                                    </div>
                                    <div class="el-card-content">
                                        <h4 class="mb-0"><?php echo $row['item_name']; ?></h4>
                                            <span class="text-muted">
                                                <?php echo $row['item_description']; ?></br>
                                                Stocks: <?php echo $row['item_quantity']; ?>
                                            </span>
                                        </br>
                                        <form method="post" action="functions/addborrow.php">
                                            <input type="hidden" name="userid" value="<?php echo $_SESSION['user_id']; ?>">
                                            <input type="hidden" name="itemid" value="<?php echo $row['item_id']; ?>">
                                            <input type="number" name="bquantity" id="quantity" style="width: 20%; border-style: inset;" name="bquantity" required>
                                            <button class="btn btn-default" type="submit" name="addborrow">Borrow</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2018 Ela Admin
                    </div>
                    <div class="col-sm-6 text-right">
                    All Rights Reserved by EIAS System | Designed by <a href="https://colorlib.com">Colorlib</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="assets/js/init/weather-init.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    <script src="assets/js/init/fullcalendar-init.js"></script>

    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!-- This Page JS -->
    <script src="assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <script src="dist/js/pages/mask/mask.init.js"></script>
    <script src="assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
    <script src="assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
    <script src="assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
    <script src="assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
    <script src="assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/libs/quill/dist/quill.min.js"></script>
    <script src="assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script src="assets/libs/magnific-popup/meg.init.js"></script>
    <script src="dist/js/script.js"></script>

    <!--Local Stuff-->
    <script>
        $('#zero_config').DataTable();
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function () {
            //
            // Dear reader, it's actually very easy to initialize MiniColors. For example:
            //
            //  $(selector).minicolors();
            //
            // The way I've done it below is just for the demo, so don't get confused
            // by it. Also, data- attributes aren't supported at this time...they're
            // only used for this demo.
            //
            $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function (value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    </script>
</body>
</html>
