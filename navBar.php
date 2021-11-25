<?php
session_start();
if($_SESSION['token']){

}else{
    header("Location: http://127.0.0.1/Login.php");
}
?>
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
       
        <!-- Messages Dropdown Menu -->
        
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-1 ">
    <!-- Brand Logo -->
    <a href="Admin.php" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="Admin.php" class="nav-link active" id="dash">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                <li class="nav-item">
                    <a href="addProduct.php" class="nav-link" id="newProduct">
                        <i class="nav-icon fa fa-plus-square"></i>
                        <p>
                            Add New Gallery
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a  href="editgallary.php" class="nav-link" id="editgallary">
                        <i class="nav-icon fa fa-file"></i>
                        <p>
                            Edit Gallery
                        </p>
                    </a>
                </li>
                </li>
                <li class="nav-item">
                    <a href="productType.php" class="nav-link" id="producttype">
                        <i class="nav-icon fa fa-book"></i>
                        <p>
                            Hardware catalog
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="query.php" class="nav-link" id="query">
                    <i class="nav-icon fa fa-question"></i>
                        <p>
                            Query
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="contact.php" class="nav-link" id="contact">
                        <i class="nav-icon fas fa-address-book"></i>
                        <p>
                            Contact Info
                        </p>
                    </a>
                </li>
               
            </ul>
            
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    
    <!-- /.sidebar -->
</aside>