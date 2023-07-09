<!DOCTYPE html>
<!-- saved from url=(0041)http://carsrental.great-site.net/en/admin -->
<html>

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Dashboard</title>
<link rel="shortcut icon" href="http://carsrental.great-site.net/en/images/favicon.ico">
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.6 -->
<link rel="stylesheet" href="../dashboard_files/bootstrap.min.css">

<!-- Font Awesome CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Select2 -->
<link rel="stylesheet" href="../dashboard_files/select2.min.css">
<!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
<!-- end -->
<!-- Theme style -->
<link rel="stylesheet" href="../dashboard_files/AdminLTE.min.css">



<!-- Arabic RTL  -->




<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="../dashboard_files/_all-skins.min.css">
<!--Toastr notification -->
<!-- Toastr CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">


<!--Custom Css File-->
<link rel="stylesheet" href="../dashboard_files/custom.css">


<!-- Pace Loader -->
<link rel="stylesheet" href="../dashboard_files/pace.min.css">
<!-- Theme color finder -->
<script type="text/javascript">
var sidebar_collapse = (typeof(Storage) !== "undefined") ? localStorage.getItem('collapse') : 'skin-blue';
</script>
<!-- jQuery 2.2.3 -->
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>

<!-- </copy> -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"
    integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<!-- include summernote css/js -->
<link href="../dashboard_files/summernote.min.css" rel="stylesheet">

<style type="text/css">
#chart_container {
    min-width: 320px;
    max-width: 600px;
    margin: 0 auto;
}

@font-face {
    font-family: 'Poppins';
    src: url('../Poppins-Regular.ttf');
}



@font-face {
    font-family: 'Sukar';
    src: url('../Sukar-Regular.otf');
}

@font-face {
    font-family: 'Cairo';
    src: url('../Cairo-Regular.ttf');
}

@font-face {
    font-family: 'Almarai';
    src: url('../Almarai-Regular.ttf');
}


*,
body,
div,
p,
span,
label,
h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: 'Poppins';
    font-weight: 500;
}


*,
body,
div,
p,
span,
label,
h1,
h2,
h3,
h4,
h5,
h6,
a {
    font-family: 'Poppins';
    font-weight: 500;
}
</style>

<style type="text/css">
.jqstooltip {
    position: absolute;
    left: 0px;
    top: 0px;
    visibility: hidden;
    background: rgb(0, 0, 0) transparent;
    background-color: rgba(0, 0, 0, 0.6);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
    -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
    color: white;
    font: 10px arial, san serif;
    text-align: left;
    white-space: nowrap;
    padding: 5px;
    border: 1px solid white;
    z-index: 10000;
}

.jqsfield {
    color: white;
    font: 10px arial, san serif;
    text-align: left;
}
</style>
</head>

<body class="skin-blue sidebar-mini  pace-done" style="height: auto;">
    <div class="pace  pace-inactive">
        <div class="pace-progress" data-progress-text="100%" data-progress="99"
            style="transform: translate3d(100%, 0px, 0px);">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>
    <div class="wrapper" style="height: auto;">

        <!-- Change the theme color if it is set -->
        <script type="text/javascript">
        if (sidebar_collapse == 'true') {
            $("body").addClass('sidebar-collapse');
        }
        </script>
        <!-- end -->

        <!-- Start Main Header -->
        <header class="main-header">

            <!-- Logo -->
            <a href="http://carsrental.great-site.net/en/admin" class="logo">
                <span class="logo-mini"><b>CN</b></span>
                <span class="logo-lg"><b>
                        Cars Rental
                    </b></span>
            </a>

            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="http://carsrental.great-site.net/en/admin/users#" class="sidebar-toggle"
                    data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">

                    <ul class="nav navbar-nav">
                        <!-- <li class="text-center hidden-xs" id="">

                        <!-- User Account Menu -->
                        <li class="dropdown tasks-menu">
                            <a href="http://carsrental.great-site.net/en/admin/users#"
                                class="dropdown-toggle text-right" data-toggle="dropdown" title="App Language">
                                <i class="fa-solid fa-earth-americas fa-lg"></i> &nbsp;
                                Language
                            </a>
                            <ul class="dropdown-menu" style="width: auto;height: auto;">
                                <li>
                                    <div class="slimScrollDiv"
                                        style="position: relative; overflow: hidden; width: auto; height: 200px;">
                                        <ul class="menu languages"
                                            style="overflow: hidden; width: 100%; height: 200px;">
                                            <li>
                                                <a rel="alternate" hreflang="en"
                                                    href="http://carsrental.great-site.net/en/admin/users">
                                                    English
                                                </a>
                                            </li>
                                            <li>
                                                <a rel="alternate" hreflang="ar"
                                                    href="http://carsrental.great-site.net/ar/admin/users">
                                                    العربية
                                                </a>
                                            </li>

                                        </ul>
                                        <div class="slimScrollBar"
                                            style="background: rgb(0, 0, 0); width: 3px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;">
                                        </div>
                                        <div class="slimScrollRail"
                                            style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;">
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </li>

                        <li class="dropdown messages-menu">
                            <a href="http://carsrental.great-site.net/en/admin/users#" class="dropdown-toggle"
                                data-toggle="dropdown">
                                <i class="fa-regular fa-comment fa-lg"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have <span style="font-size:16px"
                                        class="text-maroon"><b>0</b></span> comments</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <div class="slimScrollDiv"
                                        style="position: relative; overflow: hidden; width: auto; height: 200px;">
                                        <ul class="menu" style="overflow: hidden; width: 100%; height: 200px;">

                                            <li>
                                                <a href="http://carsrental.great-site.net/en/admin/users#">
                                                    <div class="pull-left">
                                                        <img src="../customer_files/default.png" class="img-circle"
                                                            alt="User Image">
                                                    </div>
                                                    <h4>
                                                        Not found !
                                                    </h4>
                                                </a>
                                            </li>

                                        </ul>
                                        <div class="slimScrollBar"
                                            style="background: rgb(0, 0, 0); width: 3px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;">
                                        </div>
                                        <div class="slimScrollRail"
                                            style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;">
                                        </div>
                                    </div>
                                </li>
                                <li class="footer"><a
                                        href="http://carsrental.great-site.net/en/admin/comments/pending">Show All</a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown messages-menu">
                            <a href="http://carsrental.great-site.net/en/admin/users#" class="dropdown-toggle"
                                data-toggle="dropdown">
                                <i class="fa-regular fa-envelope fa-lg"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have <span style="font-size:16px"
                                        class="text-maroon"><b>0</b></span> messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <div class="slimScrollDiv"
                                        style="position: relative; overflow: hidden; width: auto; height: 200px;">
                                        <ul class="menu" style="overflow: hidden; width: 100%; height: 200px;">

                                            <li>
                                                <a href="http://carsrental.great-site.net/en/admin/users#">
                                                    <div class="pull-left">
                                                        <img src="../customer_files/default(1).png" class="img-circle"
                                                            alt="User Image">
                                                    </div>
                                                    <h4>
                                                        Not found !
                                                    </h4>
                                                </a>
                                            </li>

                                        </ul>
                                        <div class="slimScrollBar"
                                            style="background: rgb(0, 0, 0); width: 3px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;">
                                        </div>
                                        <div class="slimScrollRail"
                                            style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;">
                                        </div>
                                    </div>
                                </li>
                                <li class="footer"><a
                                        href="http://carsrental.great-site.net/en/admin/pages/messages">Show All</a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown messages-menu">
                            <a href="http://carsrental.great-site.net/en/admin/users#" class="dropdown-toggle"
                                data-toggle="dropdown">
                                <i class="fa-regular fa-bell fa-lg"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have <span style="font-size:16px"
                                        class="text-maroon"><b>0</b></span> bookings</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <div class="slimScrollDiv"
                                        style="position: relative; overflow: hidden; width: auto; height: 200px;">
                                        <ul class="menu" style="overflow: hidden; width: 100%; height: 200px;">

                                            <li>
                                                <a href="http://carsrental.great-site.net/en/admin/users#">
                                                    <div class="pull-left">
                                                        <img src="../customer_files/default(2).png" class="img-circle"
                                                            alt="User Image">
                                                    </div>
                                                    <h4>
                                                        Not found !
                                                    </h4>
                                                </a>
                                            </li>

                                        </ul>
                                        <div class="slimScrollBar"
                                            style="background: rgb(0, 0, 0); width: 3px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;">
                                        </div>
                                        <div class="slimScrollRail"
                                            style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;">
                                        </div>
                                    </div>
                                </li>
                                <li class="footer"><a href="http://carsrental.great-site.net/en/admin/bookings">Show
                                        All</a></li>
                            </ul>
                        </li>


                        <li class="dropdown user user-menu">
                            <a href="http://carsrental.great-site.net/en/admin/users#" class="dropdown-toggle"
                                data-toggle="dropdown">
                                <img src="../customer_files/NdH2M6Ite5mdZiezbY82MplXuSvKX9Z2BD2L9XPF.png"
                                    class="user-image" alt="User Image">
                                <span class="hidden-xs">Test Test</span>
                            </a>

                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="../customer_files/NdH2M6Ite5mdZiezbY82MplXuSvKX9Z2BD2L9XPF.png"
                                        class="img-circle" alt="User Image">
                                    <p>
                                        Test Test <small>Year 2022</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="">
                                                <a href="http://carsrental.great-site.net/en/admin/profile"
                                                    style="margin-bottom:10px" class="btn btn-default btn-block "> <i
                                                        class="fa fa-user fa-fw"></i> Profile</a>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="">
                                                <a target="_blank" href="http://carsrental.great-site.net/"
                                                    style="margin-bottom:10px" class="btn btn-default btn-block "> <i
                                                        class="fa fa-eye fa-fw"></i> Visit Website</a>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="">
                                                <form action="http://carsrental.great-site.net/en/admin/logout"
                                                    method="POST">
                                                    <input type="hidden" name="_token"
                                                        value="kXqIZKzWRCB4rLHPhnI7rn3K1Ja0WwtYbuLao7tv"> <button
                                                        type="submit" style="cursor:pointer"
                                                        class="btn btn-default btn-block confirm_logout"><i
                                                            class="fa fa-power-off fa-fw"></i> Logout</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>

            </nav>

        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar" style="height: auto;">
                <div class="user-panel">
                    <div class="pull-left">
                        <img src="../dashboard_files/NdH2M6Ite5mdZiezbY82MplXuSvKX9Z2BD2L9XPF.png"
                            style="width:40px;height:40px;border-radius:50%" class="" alt="User Image">
                    </div>
                    <div class="pull-left info" style="margin-top:10px">
                        <p> Test Test</p>
                    </div>
                </div>
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">

                    <!--<li class="header">MAIN NAVIGATION</li>-->
                    <li class="active">
                        <a href="http://carsrental.great-site.net/en/admin"><i class="fa fa-dashboard text-aqua"></i>
                            <span> Dashboard</span></a>
                    </li>

                    <!-- Admins -->
                    <li class=" users-active-li roles-list-active-li role-active-li treeview">
                        <a href="http://carsrental.great-site.net/en/users.html">
                            <i class="fa fa-star"></i> <span>Admins</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/admins">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Admins</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/admins/create">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Create New</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/admins/admingroups">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Admin Groups</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Users -->
                    <li class=" users-active-li roles-list-active-li role-active-li treeview">
                        <a href="http://carsrental.great-site.net/en/users.html">
                            <i class="fa fa-users"></i> <span>Customers</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/users">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Customers</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/users/create">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Create New</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Categories -->
                    <li class=" users-active-li roles-list-active-li role-active-li treeview">
                        <a href="http://carsrental.great-site.net/en/users.html">
                            <i class="fa fa-tags"></i> <span>Categories</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/categories/brands">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Brands</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/categories">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Categories</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/categories/create">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Create New</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Fuel Types -->
                    <li class=" users-active-li roles-list-active-li role-active-li treeview">
                        <a href="http://carsrental.great-site.net/en/users.html">
                            <i class="fa fa-tint"></i> <span>Fule Types</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/fueltypes">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Fule Types</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/fueltypes/create">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Create New</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Cars -->
                    <li class=" users-active-li roles-list-active-li role-active-li treeview">
                        <a href="http://carsrental.great-site.net/en/users.html">
                            <i class="fa fa-car"></i> <span>Cars</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/cars/attribute">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Car Attributes</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/cars">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Cars</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/cars/create">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Create New</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Drivers -->
                    <li class=" users-active-li roles-list-active-li role-active-li treeview">
                        <a href="http://carsrental.great-site.net/en/users.html">
                            <i class="fa fa-id-card"></i> <span>Drivers</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/drivers">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Drivers</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/drivers/create">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Create New</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Bookings -->
                    <li class=" users-active-li roles-list-active-li role-active-li treeview">
                        <a href="http://carsrental.great-site.net/en/users.html">
                            <i class="fa fa-check-circle"></i> <span>Bookings</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/bookings">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Bookings</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/bookings/pending">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Pending Bookings</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/bookings/processing">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Processing Bookings</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/bookings/accepted">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Accepted Bookings</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/bookings/cancelled">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Cancelled Bookings</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/bookings/create">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Create New</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- News -->
                    <li class=" users-active-li roles-list-active-li role-active-li treeview">
                        <a href="http://carsrental.great-site.net/en/users.html">
                            <i class="fa-solid fa-newspaper"></i> <span>News</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/news">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>News</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/news/create">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Create New</span>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <!-- Comments -->
                    <li class=" users-active-li roles-list-active-li role-active-li treeview">
                        <a href="http://carsrental.great-site.net/en/users.html">
                            <i class="fa fa-comments"></i> <span>Comments</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/comments/pending">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Pending Comments</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/comments/active">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Active Comments</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- News -->
                    <li class=" users-active-li roles-list-active-li role-active-li treeview">
                        <a href="http://carsrental.great-site.net/en/users.html">
                            <i class="fa fa-folder"></i> <span>Pages</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/pages/messages">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Messages</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/pages/about">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>About Us</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/pages/faq">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>FAQs</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/pages/service">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Services</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/pages/feature">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Features</span>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <!-- Settings -->
                    <li class=" users-active-li roles-list-active-li role-active-li treeview">
                        <a href="http://carsrental.great-site.net/en/users.html">
                            <i class="fa fa-cogs"></i> <span>Settings</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/settings/condition">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Terms &amp; Conditions</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/settings">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Settings</span>
                                </a>
                            </li>

                        </ul>
                    </li>



                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper " style="min-height: 536px;">

            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1 class="dashboard-page-title">
                    <i class="fa fa-dashboard"></i> Dashboard
                </h1>
            </section>
            <!-- Content Header (Page header) -->

            <!-- Main content -->
            <section class="content">

                <!-- Info boxes -->
                <div class="row">

                    <div class="col-lg-3 col-xs-6">
                        <div class="small-box bg-blue">
                            <div class="inner text-uppercase">
                                <h3>8</h3>
                                <p>Categories</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-tags"></i>
                            </div>

                            <a href="http://carsrental.great-site.net/en/admin/categories"
                                class="small-box-footer text-uppercase">
                                Show Info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-6">
                        <div class="small-box bg-blue">
                            <div class="inner text-uppercase">
                                <h3>11</h3>
                                <p>Car Attributes</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-flag"></i>
                            </div>

                            <a href="http://carsrental.great-site.net/en/admin/cars/attribute"
                                class="small-box-footer text-uppercase">
                                Show Info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-6">
                        <div class="small-box bg-blue">
                            <div class="inner text-uppercase">
                                <h3>33</h3>
                                <p>Cars</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-car"></i>
                            </div>

                            <a href="http://carsrental.great-site.net/en/admin/cars"
                                class="small-box-footer text-uppercase">
                                Show Info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-6">
                        <div class="small-box bg-blue">
                            <div class="inner text-uppercase">
                                <h3>14</h3>
                                <p>Bookings</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-check-circle"></i>
                            </div>

                            <a href="http://carsrental.great-site.net/en/admin/bookings"
                                class="small-box-footer text-uppercase">
                                Show Info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-6">
                        <div class="small-box bg-blue">
                            <div class="inner text-uppercase">
                                <h3>15</h3>
                                <p>Customers</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-users"></i>
                            </div>

                            <a href="http://carsrental.great-site.net/en/admin/users"
                                class="small-box-footer text-uppercase">
                                Show Info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-6">
                        <div class="small-box bg-blue">
                            <div class="inner text-uppercase">
                                <h3>3</h3>
                                <p>News</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-newspaper-o"></i>
                            </div>

                            <a href="http://carsrental.great-site.net/en/admin/news"
                                class="small-box-footer text-uppercase">
                                Show Info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-6">
                        <div class="small-box bg-blue">
                            <div class="inner text-uppercase">
                                <h3>13</h3>
                                <p>Comments</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-comments"></i>
                            </div>

                            <a href="http://carsrental.great-site.net/en/admin/comments/pending"
                                class="small-box-footer text-uppercase">
                                Show Info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-6">
                        <div class="small-box bg-blue">
                            <div class="inner text-uppercase">
                                <h3>6</h3>
                                <p>Drivers</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-id-card"></i>
                            </div>

                            <a href="http://carsrental.great-site.net/en/admin/drivers"
                                class="small-box-footer text-uppercase">
                                Show Info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-6">
                        <div class="small-box bg-blue">
                            <div class="inner text-uppercase">
                                <h3>0</h3>
                                <p>Messages</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-envelope"></i>
                            </div>

                            <a href="http://carsrental.great-site.net/en/admin/pages/messages"
                                class="small-box-footer text-uppercase">
                                Show Info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-6">
                        <div class="small-box bg-blue">
                            <div class="inner text-uppercase">
                                <h3>4</h3>
                                <p>Services</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-wrench"></i>
                            </div>

                            <a href="http://carsrental.great-site.net/en/admin/pages/service"
                                class="small-box-footer text-uppercase">
                                Show Info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-6">
                        <div class="small-box bg-blue">
                            <div class="inner text-uppercase">
                                <h3>7</h3>
                                <p>Features</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-lightbulb-o"></i>
                            </div>

                            <a href="http://carsrental.great-site.net/en/admin/pages/feature"
                                class="small-box-footer text-uppercase">
                                Show Info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-6">
                        <div class="small-box bg-blue">
                            <div class="inner text-uppercase">
                                <h3>4</h3>
                                <p>FAQs</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-question-circle"></i>
                            </div>

                            <a href="http://carsrental.great-site.net/en/admin/pages/faq"
                                class="small-box-footer text-uppercase">
                                Show Info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>


                </div>

                <!-- Info boxes -->

                <!-- Latest 6 Bookings  -->
                <div class="box">

                    <div class="box-header with-border" style="padding:15px">
                        <h3 class="box-title">
                            Latest 6 Bookings

                        </h3>




                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <div id="DataTables_Table_0_wrapper"
                                class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table
                                            class="table table-hover table-bordered text-center datatable dataTable no-footer"
                                            id="DataTables_Table_0" role="grid"
                                            aria-describedby="DataTables_Table_0_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0"
                                                        aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                        aria-sort="ascending"
                                                        aria-label="#: activate to sort column descending"
                                                        style="width: 20px;">#</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Customer: activate to sort column ascending"
                                                        style="width: 119px;"><b>Customer</b></th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Car: activate to sort column ascending"
                                                        style="width: 105px;"><b>Car</b></th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Date: activate to sort column ascending"
                                                        style="width: 121px;"><b>Date</b></th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Time: activate to sort column ascending"
                                                        style="width: 121px;"><b>Time</b></th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Status: activate to sort column ascending"
                                                        style="width: 67px;"><b>Status</b></th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Date: activate to sort column ascending"
                                                        style="width: 81px;"><b>Date</b></th>
                                                    <th width="8%" class="sorting" tabindex="0"
                                                        aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                        aria-label="Manage: activate to sort column ascending"
                                                        style="width: 48px;"><b>Manage</b></th>
                                                </tr>
                                            </thead>
                                            <tbody>






                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">1</td>
                                                    <td>
                                                        Test <br>
                                                        3204345345356 <br>
                                                    </td>
                                                    <td>New Car</td>
                                                    <td>
                                                        <div><b>From:</b> 2023-04-15</div>
                                                        <div><b>To:</b> 2023-04-25</div>
                                                    </td>
                                                    <td>
                                                        <div><b>From:</b> 2023-04-15</div>
                                                        <div><b>To:</b> 2023-04-25</div>
                                                    </td>
                                                    <td>
                                                        <span class="badge label-success">Accepted</span>
                                                    </td>
                                                    <td>21 hours ago</td>
                                                    <td>
                                                        <div class="btn-group manage-button" title="View Account">
                                                            <a class="btn btn-primary btn-o dropdown-toggle"
                                                                data-toggle="dropdown"
                                                                href="http://carsrental.great-site.net/en/admin#">
                                                                <i class="fa fa-cog"></i> <span class="caret"></span>
                                                            </a>
                                                            <ul role="menu"
                                                                class="dropdown-menu dropdown-light pull-right">



                                                                <li>
                                                                    <a title="Show Record"
                                                                        href="http://carsrental.great-site.net/en/admin/bookings/show/16">
                                                                        <i class="fa fa-fw fa-eye"></i> Show
                                                                    </a>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td class="sorting_1">2</td>
                                                    <td>
                                                        Ahmed Dev <br>
                                                        012121212121212 <br>
                                                    </td>
                                                    <td>Suzuki Car 2022</td>
                                                    <td>
                                                        <div><b>From:</b> 2023-04-07</div>
                                                        <div><b>To:</b> 2023-04-08</div>
                                                    </td>
                                                    <td>
                                                        <div><b>From:</b> 2023-04-07</div>
                                                        <div><b>To:</b> 2023-04-08</div>
                                                    </td>
                                                    <td>
                                                        <span class="badge label-success">Accepted</span>
                                                    </td>
                                                    <td>1 week ago</td>
                                                    <td>
                                                        <div class="btn-group manage-button" title="View Account">
                                                            <a class="btn btn-primary btn-o dropdown-toggle"
                                                                data-toggle="dropdown"
                                                                href="http://carsrental.great-site.net/en/admin#">
                                                                <i class="fa fa-cog"></i> <span class="caret"></span>
                                                            </a>
                                                            <ul role="menu"
                                                                class="dropdown-menu dropdown-light pull-right">



                                                                <li>
                                                                    <a title="Show Record"
                                                                        href="http://carsrental.great-site.net/en/admin/bookings/show/15">
                                                                        <i class="fa fa-fw fa-eye"></i> Show
                                                                    </a>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">3</td>
                                                    <td>
                                                        Dffeytyt <br>
                                                        64564765 <br>
                                                    </td>
                                                    <td>Audi Car 2019</td>
                                                    <td>
                                                        <div><b>From:</b> 2022-09-02</div>
                                                        <div><b>To:</b> 2022-09-22</div>
                                                    </td>
                                                    <td>
                                                        <div><b>From:</b> 2022-09-02</div>
                                                        <div><b>To:</b> 2022-09-22</div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-maroon">Pending</span>
                                                    </td>
                                                    <td>7 months ago</td>
                                                    <td>
                                                        <div class="btn-group manage-button" title="View Account">
                                                            <a class="btn btn-primary btn-o dropdown-toggle"
                                                                data-toggle="dropdown"
                                                                href="http://carsrental.great-site.net/en/admin#">
                                                                <i class="fa fa-cog"></i> <span class="caret"></span>
                                                            </a>
                                                            <ul role="menu"
                                                                class="dropdown-menu dropdown-light pull-right">



                                                                <li>
                                                                    <a title="Show Record"
                                                                        href="http://carsrental.great-site.net/en/admin/bookings/show/14">
                                                                        <i class="fa fa-fw fa-eye"></i> Show
                                                                    </a>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td class="sorting_1">4</td>
                                                    <td>
                                                        Dffeytyt <br>
                                                        64564765 <br>
                                                    </td>
                                                    <td>Audi Car 2019</td>
                                                    <td>
                                                        <div><b>From:</b> 2022-09-14</div>
                                                        <div><b>To:</b> 2022-09-20</div>
                                                    </td>
                                                    <td>
                                                        <div><b>From:</b> 2022-09-14</div>
                                                        <div><b>To:</b> 2022-09-20</div>
                                                    </td>
                                                    <td>
                                                        <span class="badge label-danger">Cancelled</span>
                                                    </td>
                                                    <td>7 months ago</td>
                                                    <td>
                                                        <div class="btn-group manage-button" title="View Account">
                                                            <a class="btn btn-primary btn-o dropdown-toggle"
                                                                data-toggle="dropdown"
                                                                href="http://carsrental.great-site.net/en/admin#">
                                                                <i class="fa fa-cog"></i> <span class="caret"></span>
                                                            </a>
                                                            <ul role="menu"
                                                                class="dropdown-menu dropdown-light pull-right">



                                                                <li>
                                                                    <a title="Show Record"
                                                                        href="http://carsrental.great-site.net/en/admin/bookings/show/13">
                                                                        <i class="fa fa-fw fa-eye"></i> Show
                                                                    </a>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">5</td>
                                                    <td>
                                                        Dsfds <br>
                                                        498594389438 <br>
                                                    </td>
                                                    <td>Audi Car 2019</td>
                                                    <td>
                                                        <div><b>From:</b> 2022-09-13</div>
                                                        <div><b>To:</b> 2022-09-22</div>
                                                    </td>
                                                    <td>
                                                        <div><b>From:</b> 2022-09-13</div>
                                                        <div><b>To:</b> 2022-09-22</div>
                                                    </td>
                                                    <td>
                                                        <span class="badge label-success">Accepted</span>
                                                    </td>
                                                    <td>7 months ago</td>
                                                    <td>
                                                        <div class="btn-group manage-button" title="View Account">
                                                            <a class="btn btn-primary btn-o dropdown-toggle"
                                                                data-toggle="dropdown"
                                                                href="http://carsrental.great-site.net/en/admin#">
                                                                <i class="fa fa-cog"></i> <span class="caret"></span>
                                                            </a>
                                                            <ul role="menu"
                                                                class="dropdown-menu dropdown-light pull-right">



                                                                <li>
                                                                    <a title="Show Record"
                                                                        href="http://carsrental.great-site.net/en/admin/bookings/show/11">
                                                                        <i class="fa fa-fw fa-eye"></i> Show
                                                                    </a>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td class="sorting_1">6</td>
                                                    <td>
                                                        New One <br>
                                                        01145657854 <br>
                                                    </td>
                                                    <td>Nissan Car 2022</td>
                                                    <td>
                                                        <div><b>From:</b> 2022-08-06</div>
                                                        <div><b>To:</b> 2022-08-07</div>
                                                    </td>
                                                    <td>
                                                        <div><b>From:</b> 2022-08-06</div>
                                                        <div><b>To:</b> 2022-08-07</div>
                                                    </td>
                                                    <td>
                                                        <span class="badge label-success">Accepted</span>
                                                    </td>
                                                    <td>8 months ago</td>
                                                    <td>
                                                        <div class="btn-group manage-button" title="View Account">
                                                            <a class="btn btn-primary btn-o dropdown-toggle"
                                                                data-toggle="dropdown"
                                                                href="http://carsrental.great-site.net/en/admin#">
                                                                <i class="fa fa-cog"></i> <span class="caret"></span>
                                                            </a>
                                                            <ul role="menu"
                                                                class="dropdown-menu dropdown-light pull-right">



                                                                <li>
                                                                    <a title="Show Record"
                                                                        href="http://carsrental.great-site.net/en/admin/bookings/show/10">
                                                                        <i class="fa fa-fw fa-eye"></i> Show
                                                                    </a>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>

                    <!-- Latest 6 Users or clients  -->
                    <div class="box">

                        <div class="box-header with-border" style="padding:15px">
                            <h3 class="box-title">
                                Latest 6 Users

                            </h3>


                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <div id="DataTables_Table_1_wrapper"
                                    class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="DataTables_Table_1"
                                                class="table table-hover table-bordered text-center datatable dataTable no-footer"
                                                role="grid" aria-describedby="DataTables_Table_1_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting_asc" tabindex="0"
                                                            aria-controls="DataTables_Table_1" rowspan="1" colspan="1"
                                                            aria-sort="ascending"
                                                            aria-label="#: activate to sort column descending"
                                                            style="width: 20px;">#</th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_1" rowspan="1" colspan="1"
                                                            aria-label="Image: activate to sort column ascending"
                                                            style="width: 59px;"><b>Image</b></th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_1" rowspan="1" colspan="1"
                                                            aria-label="Name: activate to sort column ascending"
                                                            style="width: 102px;"><b>Name</b></th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_1" rowspan="1" colspan="1"
                                                            aria-label="Email Address: activate to sort column ascending"
                                                            style="width: 195px;"><b>Email Address</b></th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_1" rowspan="1" colspan="1"
                                                            aria-label="Phone: activate to sort column ascending"
                                                            style="width: 118px;"><b>Phone</b></th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_1" rowspan="1" colspan="1"
                                                            aria-label="Status: activate to sort column ascending"
                                                            style="width: 59px;"><b>Status</b></th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_1" rowspan="1" colspan="1"
                                                            aria-label="Date: activate to sort column ascending"
                                                            style="width: 80px;"><b>Date</b></th>
                                                        <th width="8%" class="sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_1" rowspan="1" colspan="1"
                                                            aria-label="Manage: activate to sort column ascending"
                                                            style="width: 48px;"><b>Manage</b></th>
                                                    </tr>
                                                </thead>
                                                <tbody>






                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1">1</td>
                                                        <td>
                                                            <img style="width:40px;height:35px"
                                                                src="../dashboard_files/default(1).png" alt="">
                                                        </td>
                                                        <td>Test</td>
                                                        <td>testtest@gmail.com</td>
                                                        <td>3204345345356</td>
                                                        <td>
                                                            <span class="badge label-success">Active</span>
                                                        </td>
                                                        <td>21 hours ago</td>
                                                        <td>
                                                            <div class="btn-group manage-button" title="View Account">
                                                                <a class="btn btn-primary btn-o dropdown-toggle"
                                                                    data-toggle="dropdown"
                                                                    href="http://carsrental.great-site.net/en/admin#">
                                                                    <i class="fa fa-cog"></i> <span
                                                                        class="caret"></span>
                                                                </a>
                                                                <ul role="menu"
                                                                    class="dropdown-menu dropdown-light pull-right">

                                                                    <li>
                                                                        <a title="Disable Record"
                                                                            href="http://carsrental.great-site.net/en/admin/users/activation/17">
                                                                            <i class="fa fa-fw fa-close"></i> Disable
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a title="Show Record"
                                                                            href="http://carsrental.great-site.net/en/admin/users/show/17">
                                                                            <i class="fa fa-fw fa-eye"></i> Show
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a title="Edit Record"
                                                                            href="http://carsrental.great-site.net/en/admin/users/edit/17">
                                                                            <i class="fa fa-fw fa-pencil"></i> Edit
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <form
                                                                            action="http://carsrental.great-site.net/en/admin/users/destroy/17"
                                                                            method="POST" style="display:inline">
                                                                            <input type="hidden" name="_token"
                                                                                value="xLiKy4wgcw4Ce5mbCtryCt9xc5plkc8Ectcrew4C">
                                                                            <input type="hidden" name="_method"
                                                                                value="DELETE">
                                                                            <button title="Edit Record" type="submit"
                                                                                class="delete" style="cursor:pointer">
                                                                                <i class="fa fa-trash fa-fw"></i> Delete
                                                                            </button>
                                                                        </form>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td class="sorting_1">2</td>
                                                        <td>
                                                            <img style="width:40px;height:35px"
                                                                src="../dashboard_files/p3siAV9v08C1PRWGkVSn77PIXBCm31dVmQ16q5Qd.png"
                                                                alt="">
                                                        </td>
                                                        <td>Ahmed Dev</td>
                                                        <td>ahmeddev@gmail.com</td>
                                                        <td>012121212121212</td>
                                                        <td>
                                                            <span class="badge label-success">Active</span>
                                                        </td>
                                                        <td>1 week ago</td>
                                                        <td>
                                                            <div class="btn-group manage-button" title="View Account">
                                                                <a class="btn btn-primary btn-o dropdown-toggle"
                                                                    data-toggle="dropdown"
                                                                    href="http://carsrental.great-site.net/en/admin#">
                                                                    <i class="fa fa-cog"></i> <span
                                                                        class="caret"></span>
                                                                </a>
                                                                <ul role="menu"
                                                                    class="dropdown-menu dropdown-light pull-right">

                                                                    <li>
                                                                        <a title="Disable Record"
                                                                            href="http://carsrental.great-site.net/en/admin/users/activation/16">
                                                                            <i class="fa fa-fw fa-close"></i> Disable
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a title="Show Record"
                                                                            href="http://carsrental.great-site.net/en/admin/users/show/16">
                                                                            <i class="fa fa-fw fa-eye"></i> Show
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a title="Edit Record"
                                                                            href="http://carsrental.great-site.net/en/admin/users/edit/16">
                                                                            <i class="fa fa-fw fa-pencil"></i> Edit
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <form
                                                                            action="http://carsrental.great-site.net/en/admin/users/destroy/16"
                                                                            method="POST" style="display:inline">
                                                                            <input type="hidden" name="_token"
                                                                                value="xLiKy4wgcw4Ce5mbCtryCt9xc5plkc8Ectcrew4C">
                                                                            <input type="hidden" name="_method"
                                                                                value="DELETE">
                                                                            <button title="Edit Record" type="submit"
                                                                                class="delete" style="cursor:pointer">
                                                                                <i class="fa fa-trash fa-fw"></i> Delete
                                                                            </button>
                                                                        </form>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1">3</td>
                                                        <td>
                                                            <img style="width:40px;height:35px"
                                                                src="../dashboard_files/default(1).png" alt="">
                                                        </td>
                                                        <td>Refvandri Wardi</td>
                                                        <td>00revandriwardi@gmail.com</td>
                                                        <td>081365910054</td>
                                                        <td>
                                                            <span class="badge label-success">Active</span>
                                                        </td>
                                                        <td>4 months ago</td>
                                                        <td>
                                                            <div class="btn-group manage-button" title="View Account">
                                                                <a class="btn btn-primary btn-o dropdown-toggle"
                                                                    data-toggle="dropdown"
                                                                    href="http://carsrental.great-site.net/en/admin#">
                                                                    <i class="fa fa-cog"></i> <span
                                                                        class="caret"></span>
                                                                </a>
                                                                <ul role="menu"
                                                                    class="dropdown-menu dropdown-light pull-right">

                                                                    <li>
                                                                        <a title="Disable Record"
                                                                            href="http://carsrental.great-site.net/en/admin/users/activation/15">
                                                                            <i class="fa fa-fw fa-close"></i> Disable
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a title="Show Record"
                                                                            href="http://carsrental.great-site.net/en/admin/users/show/15">
                                                                            <i class="fa fa-fw fa-eye"></i> Show
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a title="Edit Record"
                                                                            href="http://carsrental.great-site.net/en/admin/users/edit/15">
                                                                            <i class="fa fa-fw fa-pencil"></i> Edit
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <form
                                                                            action="http://carsrental.great-site.net/en/admin/users/destroy/15"
                                                                            method="POST" style="display:inline">
                                                                            <input type="hidden" name="_token"
                                                                                value="xLiKy4wgcw4Ce5mbCtryCt9xc5plkc8Ectcrew4C">
                                                                            <input type="hidden" name="_method"
                                                                                value="DELETE">
                                                                            <button title="Edit Record" type="submit"
                                                                                class="delete" style="cursor:pointer">
                                                                                <i class="fa fa-trash fa-fw"></i> Delete
                                                                            </button>
                                                                        </form>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td class="sorting_1">4</td>
                                                        <td>
                                                            <img style="width:40px;height:35px"
                                                                src="../dashboard_files/default(1).png" alt="">
                                                        </td>
                                                        <td>Refvandri</td>
                                                        <td>revandriw@gmail.com</td>
                                                        <td>081365910054</td>
                                                        <td>
                                                            <span class="badge label-danger">Inactive</span>
                                                        </td>
                                                        <td>4 months ago</td>
                                                        <td>
                                                            <div class="btn-group manage-button" title="View Account">
                                                                <a class="btn btn-primary btn-o dropdown-toggle"
                                                                    data-toggle="dropdown"
                                                                    href="http://carsrental.great-site.net/en/admin#">
                                                                    <i class="fa fa-cog"></i> <span
                                                                        class="caret"></span>
                                                                </a>
                                                                <ul role="menu"
                                                                    class="dropdown-menu dropdown-light pull-right">

                                                                    <li>
                                                                        <a title="Activation Record"
                                                                            href="http://carsrental.great-site.net/en/admin/users/activation/14">
                                                                            <i class="fa fa-fw fa-check"></i> Activation
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a title="Show Record"
                                                                            href="http://carsrental.great-site.net/en/admin/users/show/14">
                                                                            <i class="fa fa-fw fa-eye"></i> Show
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a title="Edit Record"
                                                                            href="http://carsrental.great-site.net/en/admin/users/edit/14">
                                                                            <i class="fa fa-fw fa-pencil"></i> Edit
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <form
                                                                            action="http://carsrental.great-site.net/en/admin/users/destroy/14"
                                                                            method="POST" style="display:inline">
                                                                            <input type="hidden" name="_token"
                                                                                value="xLiKy4wgcw4Ce5mbCtryCt9xc5plkc8Ectcrew4C">
                                                                            <input type="hidden" name="_method"
                                                                                value="DELETE">
                                                                            <button title="Edit Record" type="submit"
                                                                                class="delete" style="cursor:pointer">
                                                                                <i class="fa fa-trash fa-fw"></i> Delete
                                                                            </button>
                                                                        </form>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1">5</td>
                                                        <td>
                                                            <img style="width:40px;height:35px"
                                                                src="../dashboard_files/k8dD5J2R5VqPeSEeZGm4GWkxkhAX8aYjCJaTQMGb.jpg"
                                                                alt="">
                                                        </td>
                                                        <td>Ahmed Ahmed</td>
                                                        <td>ahmed2@gmail.com</td>
                                                        <td>01102020202</td>
                                                        <td>
                                                            <span class="badge label-success">Active</span>
                                                        </td>
                                                        <td>4 months ago</td>
                                                        <td>
                                                            <div class="btn-group manage-button" title="View Account">
                                                                <a class="btn btn-primary btn-o dropdown-toggle"
                                                                    data-toggle="dropdown"
                                                                    href="http://carsrental.great-site.net/en/admin#">
                                                                    <i class="fa fa-cog"></i> <span
                                                                        class="caret"></span>
                                                                </a>
                                                                <ul role="menu"
                                                                    class="dropdown-menu dropdown-light pull-right">

                                                                    <li>
                                                                        <a title="Disable Record"
                                                                            href="http://carsrental.great-site.net/en/admin/users/activation/13">
                                                                            <i class="fa fa-fw fa-close"></i> Disable
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a title="Show Record"
                                                                            href="http://carsrental.great-site.net/en/admin/users/show/13">
                                                                            <i class="fa fa-fw fa-eye"></i> Show
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a title="Edit Record"
                                                                            href="http://carsrental.great-site.net/en/admin/users/edit/13">
                                                                            <i class="fa fa-fw fa-pencil"></i> Edit
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <form
                                                                            action="http://carsrental.great-site.net/en/admin/users/destroy/13"
                                                                            method="POST" style="display:inline">
                                                                            <input type="hidden" name="_token"
                                                                                value="xLiKy4wgcw4Ce5mbCtryCt9xc5plkc8Ectcrew4C">
                                                                            <input type="hidden" name="_method"
                                                                                value="DELETE">
                                                                            <button title="Edit Record" type="submit"
                                                                                class="delete" style="cursor:pointer">
                                                                                <i class="fa fa-trash fa-fw"></i> Delete
                                                                            </button>
                                                                        </form>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td class="sorting_1">6</td>
                                                        <td>
                                                            <img style="width:40px;height:35px"
                                                                src="../dashboard_files/default(1).png" alt="">
                                                        </td>
                                                        <td>Dffeytyt</td>
                                                        <td>test1@gmail.com</td>
                                                        <td>64564765</td>
                                                        <td>
                                                            <span class="badge label-success">Active</span>
                                                        </td>
                                                        <td>7 months ago</td>
                                                        <td>
                                                            <div class="btn-group manage-button" title="View Account">
                                                                <a class="btn btn-primary btn-o dropdown-toggle"
                                                                    data-toggle="dropdown"
                                                                    href="http://carsrental.great-site.net/en/admin#">
                                                                    <i class="fa fa-cog"></i> <span
                                                                        class="caret"></span>
                                                                </a>
                                                                <ul role="menu"
                                                                    class="dropdown-menu dropdown-light pull-right">

                                                                    <li>
                                                                        <a title="Disable Record"
                                                                            href="http://carsrental.great-site.net/en/admin/users/activation/11">
                                                                            <i class="fa fa-fw fa-close"></i> Disable
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a title="Show Record"
                                                                            href="http://carsrental.great-site.net/en/admin/users/show/11">
                                                                            <i class="fa fa-fw fa-eye"></i> Show
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a title="Edit Record"
                                                                            href="http://carsrental.great-site.net/en/admin/users/edit/11">
                                                                            <i class="fa fa-fw fa-pencil"></i> Edit
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <form
                                                                            action="http://carsrental.great-site.net/en/admin/users/destroy/11"
                                                                            method="POST" style="display:inline">
                                                                            <input type="hidden" name="_token"
                                                                                value="xLiKy4wgcw4Ce5mbCtryCt9xc5plkc8Ectcrew4C">
                                                                            <input type="hidden" name="_method"
                                                                                value="DELETE">
                                                                            <button title="Edit Record" type="submit"
                                                                                class="delete" style="cursor:pointer">
                                                                                <i class="fa fa-trash fa-fw"></i> Delete
                                                                            </button>
                                                                        </form>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>


            </section>
            <!-- /.content -->

        </div>
        <!-- /.content-wrapper -->


        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>
                    Footer text for dashboard
                </b>
            </div>
            <strong> <i class="fa fa-heart fa-fw fa-lg" style="color:red"></i> &nbsp;&nbsp; Copyright © <span
                    style="color:#56a7ed">2023</span> All Rights Reserved</strong>
        </footer>

    </div>
    <!-- ./wrapper -->




    <!-- Bootstrap 3.3.6 -->
    {{-- <script src="../dashboard_files/bootstrap.min.js.download"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- end -->

    <!-- SlimScroll -->
    {{-- <script src="../dashboard_files/jquery.slimscroll.min.js.download"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script>

    <!-- FastClick -->
    <script src="../dashboard_files/fastclick.js.download"></script>
    <!-- Select2 -->
    <script src="../dashboard_files/select2.full.min.js.download"></script>
    <!-- AdminLTE App -->
    <script>
    var AdminLTEOptions = {
        /*https://adminlte.io/themes/AdminLTE/documentation/index.html*/
        sidebarExpandOnHover: true,
        navbarMenuHeight: "200px", //The height of the inner menu
        animationSpeed: 250,
    };
    </script>
    <script src="../dashboard_files/app.js.download"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dashboard_files/demo.js.download"></script>
    <!-- page script -->
    <!--Toastr notification -->
    <script src="../dashboard_files/toastr.js.download"></script>

    <!--Toastr notification end-->

    <!-- Custom JS -->
    <script src="../dashboard_files/special_char_check.js.download"></script>
    <script src="../dashboard_files/custom.js.download"></script>

    <!-- Pace Loader -->
    <script src="../dashboard_files/pace.min.js.download"></script>
    <script type="text/javascript">
    $(document).ajaxStart(function() {
        Pace.restart();
    });
    </script>
    <!-- Sweet alert -->
    <script src="../dashboard_files/sweetalert.min.js.download"></script>
    <!-- iCheck -->

    <!-- Initialize Select2 Elements -->
    <script type="text/javascript">
    $(".select2").select2();
    </script>
    <!-- Initialize toggler -->
    <script type="text/javascript">
    $(document).ready(function() {
        $('[data-toggle="popover"]').popover();
    });
    </script>

    <script type="text/javascript">
    $(document).ready(function() {
        setTimeout(function() {
            $(".alert-dismissable").fadeOut(1000, function() {});
        }, 10000);
    });
    </script>
    <script type="text/javascript">
    function round_off(input = 0) {
        return input;
    }
    </script>

    <!-- Sparkline -->
    <script src="../dashboard_files/jquery.sparkline.min.js.download"></script>
    <!-- jvectormap -->
    <script src="../dashboard_files/jquery-jvectormap-1.2.2.min.js.download"></script>
    <script src="../dashboard_files/jquery-jvectormap-world-mill-en.js.download"></script>

    <!-- PIE CHART END -->



    <!-- validation -->
    <script src="../dashboard_files/jquery.validate.min.js.download"></script>
    <script src="../dashboard_files/additional-methods.min.js.download"></script>

    <script src="../dashboard_files/sweetalert.min.js(1).download"></script>
    <script src="../dashboard_files/jquery.countTo.js.download"></script>

    <script src="../dashboard_files/jquery.dataTables.min.js.download"></script>
    <script src="../dashboard_files/dataTables.bootstrap4.min.js.download"></script>

    <script src="../dashboard_files/summernote.min.js.download"></script>

    <script>
    $(document).ready(function() {

        // Start Datatable ...
        $('.datatable').DataTable();


    });
    </script>
    <script src="../dashboard_files/main.js.download"></script>


</body>