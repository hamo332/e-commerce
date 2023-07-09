<!DOCTYPE html>
<html>

<head>
    <!-- FORM CSS CODE -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Create Product</title>
    <link rel='shortcut icon' href='images/favicon.ico' />
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="../../../Dashboard/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <!-- <link rel="stylesheet" href="../../../Dashboard/css/font-awesome-4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Select2 -->
    <link rel="stylesheet" href="../../../Dashboard/plugins/select2/select2.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../../Dashboard/plugins/DataTables-1.10.18/css/dataTables.bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap.min.css" /> -->

    <!-- end -->
    <!-- Theme style -->
    <link rel="stylesheet" href="../../../Dashboard/dist/css/AdminLTE.min.css">



    <!-- Arabic RTL  -->




    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../../Dashboard/dist/css/skins/_all-skins.min.css">
    <!--Toastr notification -->
    <link rel="stylesheet" href="../../../Dashboard/toastr/toastr.css">
    <!--Toastr notification end-->
    <!-- iCheck -->
    <!-- <link rel="stylesheet" href="../../../Dashboard/plugins/iCheck/square/orange.css"> -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--Custom Css File-->
    <link rel="stylesheet" href="../../../Dashboard/dist/css/custom.css">


    <!-- Pace Loader -->
    <link rel="stylesheet" href="../../../Dashboard/plugins/pace/pace.min.css">
    <!-- Theme color finder -->
    <script type="text/javascript">
    var sidebar_collapse = (typeof(Storage) !== "undefined") ? localStorage.getItem('collapse') : 'skin-blue';
    </script>
    <!-- jQuery 2.2.3 -->
    <script src="../../../Dashboard/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- </copy> -->




    <!-- jvectormap -->
    <link rel="stylesheet" href="../../../Dashboard/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <link rel="stylesheet" href="../../../css/mediaQuery.css">


    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

    <style type="text/css">
    #chart_container {
        min-width: 320px;
        max-width: 600px;
        margin: 0 auto;
    }

    @font-face {
        font-family: 'Poppins';
        src: url('../../../Dashboard/css/fonts/Poppins/Poppins-Regular.ttf');
    }



    @font-face {
        font-family: 'Sukar';
        src: url('../../../Dashboard/css/fonts/Sukar/Sukar-Regular.otf');
    }

    @font-face {
        font-family: 'Cairo';
        src: url('../../../Dashboard/css/fonts/Cairo/Cairo-Regular.ttf');
    }

    @font-face {
        font-family: 'Almarai';
        src: url('../../../Dashboard/css/fonts/Almarai/Almarai-Regular.ttf');
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
    </style>

    <style>
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

</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

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
            <a href="" class="logo">
                <span class="logo-mini"><b>CN</b></span>
                <span class="logo-lg"><b>
                        Cars Rental
                    </b></span>
            </a>

            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">

                    <ul class="nav navbar-nav">
                        <!-- <li class="text-center hidden-xs" id="">
            <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search Sales Invoice">
            </div>
          </form> 
          </li> -->
                        <!-- User Account Menu -->
                        <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle text-right" data-toggle="dropdown" title="App Language"
                                data-toggle='tooltip'>
                                <i class="fa-solid fa-earth-americas fa-lg"></i> &nbsp;
                                Language
                            </a>
                            <ul class="dropdown-menu" style="width: auto;height: auto;">
                                <li>
                                    <ul class="menu languages">
                                        <li>
                                            <a rel="alternate" hreflang="en" href="../../../en/admin/categories/create">
                                                English
                                            </a>
                                        </li>
                                        <li>
                                            <a rel="alternate" hreflang="ar" href="../../../en/admin/categories/create">
                                                العربية
                                            </a>
                                        </li>

                                    </ul>
                                </li>

                            </ul>
                        </li>

                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa-regular fa-comment fa-lg"></i>
                                <span
                                    class="label bg-maroon">{{Auth()->user()->unreadNotifications()->where('type', 'App\Notifications\admin\CommentNotify')->count()}}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have <span style="font-size:16px"
                                        class="text-maroon"><b>{{Auth()->user()->unreadNotifications()->where('type', 'App\Notifications\admin\CommentNotify')->count()}}</b></span>
                                    comments</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <div class="slimScrollDiv"
                                        style="position: relative; overflow: hidden; width: auto; height: 200px;">
                                        <ul class="menu" style="overflow: hidden; width: 100%; height: 200px;">

                                        @foreach (Auth()->user()->unreadNotifications as $comment)
                                            @if($comment->type == 'App\Notifications\admin\CommentNotify')
                                            <li>
                                                <!-- start message -->
                                                <a href="{{route('showCommentsFromNotification', $comment->id)}}">
                                                {{-- <a href="http://carsrental.great-site.net/en/admin/comments/show/17"> --}}
                                                    <div class="pull-left">
                                                        <img src="../../../uploads/cars/default.png" class="img-circle"
                                                            alt="User Image">
                                                    </div>
                                                    <h4>
                                                        {{$comment->data['alert']}}
                                                        <small><i class="fa fa-clock-o"></i> <i>{{$comment->created_at}}</i></small>
                                                    </h4>
                                                    <p style="color:#1a91d7">New commet has been added
                                                        by {{$comment->data['user_createName']}} !</p>
                                                    <div class="starts">
                                                        <i class="fa fa-star text-orange"></i>
                                                        <i class="fa fa-star text-orange"></i>
                                                        <i class="fa fa-star text-orange"></i>
                                                        <i class="fa fa-star text-orange"></i>
                                                        <i class="fa fa-star text-orange"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            @endif
                                        @endforeach
                                            

                                        </ul>
                                        <div class="slimScrollBar"
                                            style="background: rgb(0, 0, 0); width: 3px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 200px;">
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
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa-regular fa-envelope fa-lg"></i>
                                <span
                                    class="label bg-maroon">{{Auth()->user()->unreadNotifications()->where('type', 'App\Notifications\admin\MessageNotify')->count()}}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have <span style="font-size:16px"
                                        class="text-maroon"><b>{{Auth()->user()->unreadNotifications()->where('type', 'App\Notifications\admin\MessageNotify')->count()}}</b></span>
                                    messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">

                                        @foreach (Auth()->user()->unreadNotifications as $notification)
                                        @if($notification->type == 'App\Notifications\admin\MessageNotify')
                                        <li>
                                            <a href="{{route('showMessageFromNotification', $notification->id)}}">
                                                <div class="pull-left">
                                                    <img src="../../../uploads/cars/default.png" class="img-circle"
                                                        alt="User Image">
                                                </div>
                                                <h4>
                                                    {{$notification->data['alert']}}
                                                </h4>
                                                <p>This action by Admin: {{$notification->data['user_create']}}</p>
                                                <i>{{$notification->created_at}}</i>
                                            </a>
                                        </li>
                                        @endif
                                        @endforeach

                                    </ul>
                                </li>
                                <li class="footer"><a href="../../../en/admin/pages/messages">Show All</a></li>
                            </ul>
                        </li>

                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa-regular fa-bell fa-lg"></i>
                                @if (Auth()->user()->unreadNotifications()->count())
                                <span class="label bg-maroon">{{Auth()->user()->unreadNotifications()->count()}}</span>
                                @endif
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have <span style="font-size:16px"
                                        class="text-maroon"><b>{{Auth()->user()->unreadNotifications()->count()}}</b></span>
                                    bookings</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">

                                        @foreach (Auth()->user()->unreadNotifications as $notification)
                                        @if ($notification->type == 'App\Notifications\admin\ProductNotify')
                                        <li>
                                            <a href="{{route('showProductFromNotification', $notification->id)}}">
                                                <div class="pull-left">
                                                    <img src="../../../uploads/cars/default.png" class="img-circle"
                                                        alt="User Image">
                                                </div>
                                                <h4>
                                                    {{$notification->data['alert']}}
                                                </h4>
                                                <p>This action by Admin: {{$notification->data['user_create']}}</p>
                                                <i>{{$notification->created_at}}</i>
                                            </a>
                                        </li>
                                        @elseif($notification->type == 'App\Notifications\admin\MessageNotify')
                                        <li>
                                            <a href="{{route('showProductFromNotification', $notification->id)}}">
                                                <div class="pull-left">
                                                    <img src="../../../uploads/cars/default.png" class="img-circle"
                                                        alt="User Image">
                                                </div>
                                                <h4>
                                                    {{$notification->data['alert']}}
                                                </h4>
                                                <p>This action by Admin: {{$notification->data['user_create']}}</p>
                                                <i>{{$notification->created_at}}</i>
                                            </a>
                                        </li>
                                        @endif
                                        @endforeach

                                    </ul>
                                </li>
                                <li class="footer"><a href="../../../en/admin/bookings">Show All</a></li>
                            </ul>
                        </li>


                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="../../../uploads/avatars/admins/NdH2M6Ite5mdZiezbY82MplXuSvKX9Z2BD2L9XPF.png"
                                    class="user-image" alt="User Image">
                                <span class="hidden-xs">Test Test</span>
                            </a>

                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="../../../uploads/avatars/admins/NdH2M6Ite5mdZiezbY82MplXuSvKX9Z2BD2L9XPF.png"
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
                                                <a href="../../../en/admin/profile" style="margin-bottom:10px"
                                                    class="btn btn-default btn-block "> <i class="fa fa-user fa-fw"></i>
                                                    Profile</a>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="">
                                                <a target="_blank" href="" style="margin-bottom:10px"
                                                    class="btn btn-default btn-block "> <i class="fa fa-eye fa-fw"></i>
                                                    Visit Website</a>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="">
                                                <form action="../../../en/admin/logout" method="POST">
                                                    <input type="hidden" name="_token"
                                                        value="ZAJtw9eJVRmUyfQs0gTEYNxmdrcgAv3fbbrIdUre"> <button
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
            <section class="sidebar">
                <div class="user-panel">
                    <div class="pull-left">
                        <img src="../../../uploads/avatars/admins/NdH2M6Ite5mdZiezbY82MplXuSvKX9Z2BD2L9XPF.png"
                            style="width:40px;height:40px;border-radius:50%" class="" alt="User Image">
                    </div>
                    <div class="pull-left info" style="margin-top:10px">
                        <p> Test Test</p>
                    </div>
                </div>
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">

                    <!--<li class="header">MAIN NAVIGATION</li>-->
                    <li class="">
                        <a href="../../../en/admin"><i class="fa fa-dashboard text-aqua"></i> <span>
                                Dashboard</span></a>
                    </li>

                    <!-- Admins -->
                    <li class=" users-active-li roles-list-active-li role-active-li treeview">
                        <a href="users.html">
                            <i class="fa fa-star"></i> <span>Admins</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="../../../en/admin/admins">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Admins</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="../../../en/admin/admins/create">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Create New</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="../../../en/admin/admins/admingroups">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Admin Groups</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Users -->
                    <li class=" users-active-li roles-list-active-li role-active-li treeview">
                        <a href="users.html">
                            <i class="fa fa-users"></i> <span>Customers</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="../../../en/admin/users">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Customers</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="../../../en/admin/users/create">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Create New</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Categories -->
                    <li class="users-active-li roles-list-active-li role-active-li treeview">
                        <a href="users.html">
                            <i class="fa fa-tags"></i> <span>Categories</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="../../../en/admin/categories/brands">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Brands</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="../../../en/admin/categories">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Categories</span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="../../../en/admin/categories/create">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Create New</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Fuel Types -->
                    <li class=" users-active-li roles-list-active-li role-active-li treeview">
                        <a href="users.html">
                            <i class="fa fa-tint"></i> <span>Fule Types</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="../../../en/admin/fueltypes">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Fule Types</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="../../../en/admin/fueltypes/create">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Create New</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Cars -->
                    <li class=" users-active-li roles-list-active-li role-active-li treeview">
                        <a href="users.html">
                            <i class="fa fa-car"></i> <span>Cars</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="../../../en/admin/cars/attribute">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Car Attributes</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="../../../en/admin/cars">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Cars</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="../../../en/admin/cars/create">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Create New</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Drivers -->
                    <li class=" users-active-li roles-list-active-li role-active-li treeview">
                        <a href="users.html">
                            <i class="fa fa-id-card"></i> <span>Drivers</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="../../../en/admin/drivers">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Drivers</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="../../../en/admin/drivers/create">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Create New</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Bookings -->
                    <li class=" users-active-li roles-list-active-li role-active-li treeview">
                        <a href="users.html">
                            <i class="fa fa-check-circle"></i> <span>Bookings</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="../../../en/admin/bookings">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Bookings</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="../../../en/admin/bookings/pending">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Pending Bookings</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="../../../en/admin/bookings/processing">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Processing Bookings</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="../../../en/admin/bookings/accepted">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Accepted Bookings</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="../../../en/admin/bookings/cancelled">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Cancelled Bookings</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="../../../en/admin/bookings/create">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Create New</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- News -->
                    <li class=" users-active-li roles-list-active-li role-active-li treeview">
                        <a href="users.html">
                            <i class="fa fa-newspaper-o"></i> <span>News</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="../../../en/admin/news">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>News</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="../../../en/admin/news/create">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Create New</span>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <!-- Comments -->
                    <li class=" users-active-li roles-list-active-li role-active-li treeview">
                        <a href="users.html">
                            <i class="fa fa-comments"></i> <span>Comments</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="../../../en/admin/comments/pending">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Pending Comments</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="../../../en/admin/comments/active">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Active Comments</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- News -->
                    <li class=" users-active-li roles-list-active-li role-active-li treeview">
                        <a href="users.html">
                            <i class="fa fa-folder"></i> <span>Pages</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="../../../en/admin/pages/messages">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Messages</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="../../../en/admin/pages/about">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>About Us</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="../../../en/admin/pages/faq">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>FAQs</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="../../../en/admin/pages/service">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Services</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="../../../en/admin/pages/feature">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Features</span>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <!-- Settings -->
                    <li class=" users-active-li roles-list-active-li role-active-li treeview">
                        <a href="users.html">
                            <i class="fa fa-cogs"></i> <span>Settings</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="../../../en/admin/settings/condition">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Terms &amp; Conditions</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="../../../en/admin/settings">
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
        <div class="content-wrapper " style="min-height: 698px;">

            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1 class="dashboard-page-title">

                    <i class="fa fa-plus-circle"></i> Create Product
                </h1>
            </section>
            <!-- Content Header (Page header) -->

            <!-- Main content -->
            <section class="content">


                <div class="box">

                    <div class="box-header with-border">
                        <h3 class="box-title">Enter Informations</h3>

                        <!-- Start Button  -->
                        <div class="button-page-header" style="margin-top:5px">
                            <a class="btn btn-block btn-warning" href="{{route('products.index')}}">
                                <i class="fa fa-reply fa-fw fa-lg"></i> Back</a>
                        </div>

                    </div>

                    <div class="box-body">

                        <form id="myForm" action="{{route('products.store')}}" method="POST" class="userForm"
                            enctype="multipart/form-data" novalidate="novalidate">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            @csrf
                            <!-- Start Row  -->
                            <div class="row">
                                @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                                @endif
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name_en"><b>Name</b></label>
                                        <input type="text" name="name_en" id="name_en" class="form-control "
                                            value="{{old('name_en')}}">
                                        @error('name_en')
                                        <span class="text-danger text-bold text-center">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="processes"><b>processes</b></label>
                                        <select name="processes" id="processes"
                                            class="form-control select2 select2-hidden-accessible" style="width:100%"
                                            tabindex="-1" aria-hidden="true">
                                            <option value="">..........</option>
                                            <option value="accepted" selected>accepted</option>
                                            <option value="disabled">disabled</option>
                                            <option value="processed">processed</option>
                                            <option value="Cancelled">Cancelled</option>
                                        </select>
                                        @error('processes')
                                        <span class="text-danger text-bold text-center">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="creator"><b>Creator</b></label>
                                        <select name="creator" id="creator"
                                            class="form-control select2 select2-hidden-accessible" style="width:100%"
                                            tabindex="-1" aria-hidden="true">
                                            <option value="">..........</option>
                                            <option value="admin" selected>Admin</option>
                                            <option value="user">User</option>
                                        </select>
                                        @error('creator')
                                        <span class="text-danger text-bold text-center">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            {{-- Start Row --}}
                            <!-- Start Row  -->
                            <!-- Start Row  -->

                            {{-- user email --}}
                            <div class="row">
                                <div class="col-md-12 user-email" style="display: none;">
                                    <div class="form-group">
                                        <label for="created_by"><b>User Email</b></label>
                                        <select name="created_by" id="created_by"
                                            class="form-control select2 select2-hidden-accessible" style="width:100%"
                                            tabindex="-1" aria-hidden="true">
                                            <option value="{{old('created_by')}}">..........</option>
                                            @foreach ($users as $user)
                                            <option value="{{$user->id}}">{{$user->email}} </option>
                                            @endforeach
                                        </select>
                                        @error('created_by')
                                        <span class="text-danger text-bold text-center">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- End Row --}}

                            <!-- Start Row  -->
                            <div class="row">
                                {{-- sections --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="section_id"><b>Sections</b></label>
                                        <select name="section_id" id="section_id"
                                            class="form-control select2 select2-hidden-accessible" style="width:100%"
                                            tabindex="-1" aria-hidden="true">
                                            <option value="">..........</option>
                                            @foreach ($sections as $section)
                                            <option value="{{$section->id}}">{{$section->name}} </option>
                                            @endforeach
                                        </select>
                                        @error('section_id')
                                        <span class="text-danger text-bold text-center">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                {{-- brands --}}
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="brand_id"><b>Brand</b></label>
                                        <select name="brand_id" id="brand_id"
                                            class="form-control select2 select2-hidden-accessible" style="width:100%"
                                            tabindex="-1" aria-hidden="true">
                                            <option value="">..........</option>
                                            @foreach ($brands as $brand)
                                            <option value="{{$brand->id}}">{{$brand->name}} </option>
                                            @endforeach
                                        </select>
                                        @error('brand_id')
                                        <span class="text-danger text-bold text-center">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="purpose"><b>Purpose</b></label>
                                        <select name="purpose" id="purpose"
                                            class="form-control select2 select2-hidden-accessible" style="width:100%"
                                            tabindex="-1" aria-hidden="true">
                                            <option value="">..........</option>
                                            <option value="sale">Sale</option>
                                            <option value="buy">Buy</option>
                                        </select>
                                        @error('purpose')
                                        <span class="text-danger text-bold text-center">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- Start Row  -->
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="price"><b>Price</b></label>
                                        <input type="text" name="price" id="price" class="form-control "
                                            value="{{old('price')}}">
                                        @error('price')
                                        <span class="text-danger text-bold text-center">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="discount"><b>Discount %</b></label>
                                        <input type="text" name="discount" id="discount" class="form-control "
                                            value="{{old('discount')}}">
                                        @error('discount')
                                        <span class="text-danger text-bold text-center">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- Start Row  -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="desc_en"><b>Description</b></label>
                                        @error('desc_en')
                                        <span class="text-danger text-bold text-center">{{ $message }}</span>
                                        @enderror
                                        <textarea name="desc_en" id="desc_en" class="form-control"
                                            style="display: none;">{{old('desc_en')}}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputFile"><b>Image</b></label>
                                        <input type="file" name="image" id="exampleInputFile"
                                            style="padding: 10px;height:45px" class="form-control image ">
                                        @error('image')
                                        <span class="text-danger text-bold text-center">{{ $message }}</span>
                                        @enderror
                                        <div class="imagePreview text-center">
                                            <img style="width:250px;height:190px;margin-top:5px"
                                                class="image-preview img-thumbnail"
                                                src="http://carsrental.great-site.net/uploads/cars/default.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label><b>Images Gallery</b></label>
                                        <input type="file" name="multiple_images[]" class="form-control multiImages"
                                            style="padding: 10px;height:45px" id="multiImg" multiple="">
                                        @error('multiple_images[]')
                                        <span class="text-danger text-bold text-center">{{ $message }}</span>
                                        @enderror
                                        <div class="" id="multi_img_preview"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block" style="font-size:16px"><i
                                        class="fa fa-check fa-fw fa-lg"></i> Save</button>
                            </div>

                        </form>

                    </div>

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
            <strong> <i class="fa fa-heart fa-fw fa-lg" style="color:red"></i> &nbsp;&nbsp; Copyright &copy; <span
                    style="color:#56a7ed">2023</span> All Rights Reserved</strong>
        </footer>

    </div>
    <!-- ./wrapper -->




    <!-- Bootstrap 3.3.6 -->
    <script src="../../../Dashboard/bootstrap/js/bootstrap.min.js"></script>

    <!-- end -->

    <!-- SlimScroll -->
    <script src="../../../Dashboard/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../../../Dashboard/plugins/fastclick/fastclick.js"></script>
    <!-- Select2 -->
    <script src="../../../Dashboard/plugins/select2/select2.full.min.js"></script>
    <!-- AdminLTE App -->
    <script>
    var AdminLTEOptions = {
        /*https://adminlte.io/themes/AdminLTE/documentation/index.html*/
        sidebarExpandOnHover: true,
        navbarMenuHeight: "200px", //The height of the inner menu
        animationSpeed: 250,
    };
    </script>
    <script src="../../../Dashboard/dist/js/app.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../../Dashboard/dist/js/demo.js"></script>
    <!-- page script -->
    <!--Toastr notification -->
    <script src="../../../Dashboard/toastr/toastr.js"></script>

    <!--Toastr notification end-->

    <!-- Custom JS -->
    <script src="../../../Dashboard/js/special_char_check.js"></script>
    <script src="../../../Dashboard/js/custom.js"></script>

    <!-- Pace Loader -->
    <script src="../../../Dashboard/plugins/pace/pace.min.js"></script>
    <script type="text/javascript">
    $(document).ajaxStart(function() {
        Pace.restart();
    });
    </script>
    <!-- Sweet alert -->
    <script src="../../../Dashboard/js/sweetalert.min.js"></script>
    <!-- iCheck -->
    <!-- <script src="../../../Dashboard/plugins/iCheck/icheck.min.js"></script> -->

    <!-- <script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-orange',
      /*uncheckedClass: 'bg-white',*/
      radioClass: 'iradio_square-orange',
      increaseArea: '10%' // optional
    });
  });
</script> -->
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
    <!-- bootstrap datepicker -->

    <!-- ChartJS 1.0.1 -->
    <!-- <script src="../../../Dashboard/plugins/chartjs/Chart.min.js"></script> -->


    <!-- Sparkline -->
    <script src="../../../Dashboard/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="../../../Dashboard/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="../../../Dashboard/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- PIE CHART END -->



    <!-- validation -->
    <script src="../../../js/validation/jquery.validate.min.js"></script>
    <script src="../../../js/validation/additional-methods.min.js"></script>


    <!-- lobilist -->
    <!-- custom -->
    <!-- <script src="../../../js/custom.js"></script> -->
    <script src="../../../js/sweetalert.min.js"></script>
    <script src="../../../js/jquery.countTo.js"></script>
    <script>
    $(document).ready(function() {

        // Success Message ...

        // Error Message ...

        // Warning Message ...

        // Confirm Delete .... ??!
        $(document).on('click', '.delete', function(e) {

            e.preventDefault();

            var that = $(this);

            swal({
                    title: "Confirm Delete",
                    icon: "error",
                    buttons: ["No", "Yes"],
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        that.closest('form').submit();
                    }
                });

        });



        // Confirm Delete .... ??!
        $(document).on('click', '.confirm_logout', function(e) {

            e.preventDefault();

            var that = $(this);

            swal({
                    title: "Confirm Logout !",
                    icon: "info",
                    buttons: ["No", "Yes"],
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        that.closest('form').submit();
                    }
                });

        });

    });
    </script>


    <script src="../../../js/bootstrap-datatables/en/jquery.dataTables.min.js"></script>
    <script src="../../../js/bootstrap-datatables/en/dataTables.bootstrap4.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script>
    $(document).ready(function() {

        // Summer note ..
        $('#desc_ar').summernote({
            height: 150
        });
        $('#desc_en').summernote({
            height: 150
        });

        // Validate Form ...
        $('#myForm').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 3
                }
            },
            messages: {

            },
            errorEelement: 'span',
            errorPlacement: function(error, element) {
                element.closest('.form-group').append(error);
            },

        });


        $("#creator").on('change', function() {
            if ($(this).val() == 'user') {
                $('.user-email').show();
            } else {
                $('.user-email').hide();
            }
        })
    });
    </script>
    <script src="../../../Dashboard/js/main.js"></script>
</body>

</html>