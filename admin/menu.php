<nav class="navbar navbar-default top-navbar" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php"><img src="../images/lord_logo.png" style="max-height:50px;width:auto;margin-top:-10px"></a>
    </div>

    <ul class="nav navbar-top-links navbar-right">

        <!-- /.dropdown -->
        <li class="dropdown">
            <a style="color:#fff" class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                <i class="fa fa-user fa-fw"></i> <?php echo $_SESSION['name']; ?> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">

                <li class="divider"></li>
                <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
</nav>
<!--/. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">

            <li>
                <a class="active-menu" href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-cutlery"></i> Special Menu<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="special_menu.php"><i class="fa fa-eye"></i> View Special Menus</a>
                    </li>
                    <li>
                        <a href="add_menu_item.php"><i class="fa fa-plus"></i> Add New Special Menu</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-users"></i> Employees of the Month<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="employees.php"><i class="fa fa-eye"></i> View Employees</a>
                    </li>
                    <li>
                        <a href="add_employee.php"><i class="fa fa-plus"></i> Add New Employee</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-picture-o"></i> Gallery<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="gallery.php"><i class="fa fa-eye"></i> View Photos</a>
                    </li>
                    <li>
                        <a href="add_photo.php"><i class="fa fa-plus"></i> Add New Photo</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-user"></i> Admins<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="admins.php"><i class="fa fa-eye"></i> View Admins</a>
                    </li>
                    <li>
                        <a href="add_admin.php"><i class="fa fa-plus"></i> Add Admin</a>
                    </li>

                </ul>
            </li>

            <li>
                <a href="../index.php"><i class="fa fa-fw fa-globe"></i> Back to Website</a>
            </li>
        </ul>

    </div>

</nav>
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
