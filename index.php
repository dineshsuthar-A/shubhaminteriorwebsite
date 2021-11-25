<?php 
 $servername = "localhost:4306";
 $username = "root";
 $dbname = "i&h";
 $conn = mysqli_connect($servername,$username,"",$dbname);
?>
<!doctype html>
<html class="no-js" lang="en">

<head>

    <!-- meta data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!--font-family-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet">

    <!-- title of site -->
    <title>Shubham Interios</title>

    <!-- For favicon png -->
    <link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png" />

    <!--font-awesome.min.css-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!--linear icon css-->
    <link rel="stylesheet" href="assets/css/linearicons.css">

    <!--animate.css-->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!--owl.carousel.css-->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- bootsnav -->
    <link rel="stylesheet" href="assets/css/bootsnav.css">

    <!--style.css-->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--responsive.css-->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->


</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->



    <!--welcome-hero start -->
    <header id="home" class="welcome-hero">

        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <!--/.carousel-indicator -->
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"><span class="small-circle"></span>
                </li>
                <li data-target="#header-carousel" data-slide-to="1"><span class="small-circle"></span></li>
                <li data-target="#header-carousel" data-slide-to="2"><span class="small-circle"></span></li>
            </ol><!-- /ol-->
            <!--/.carousel-indicator -->

            <!--/.carousel-inner -->
            <div class="carousel-inner" role="listbox">
                <!-- .item -->
                <div class="item active">
                    <div class="single-slide-item slide1">
                        <div class="container">
                            <div class="welcome-hero-content">
                                <div class="row">
                                    <div class="col-sm-7">
                                        <div class="single-welcome-hero">
                                            <div class="welcome-hero-txt">
                                                <h4>great designs</h4>
                                                <h2>One-stop shop for all things home interiors</h2>
                                                <p>
                                                    Whether it’s a magazine-like dream kitchen or your entire home,
                                                    enjoy end-to-end solutions from design to installation.
                                                </p>


                                            </div>
                                            <!--/.welcome-hero-txt-->
                                        </div>
                                        <!--/.single-welcome-hero-->
                                    </div>
                                    <!--/.col-->
                                    <div class="col-sm-5">
                                        <div class="single-welcome-hero">
                                            <div class="welcome-hero-img">
                                                <img src="assets/images/slider/slider1.png" alt="slider image">
                                            </div>
                                            <!--/.welcome-hero-txt-->
                                        </div>
                                        <!--/.single-welcome-hero-->
                                    </div>
                                    <!--/.col-->
                                </div>
                                <!--/.row-->
                            </div>
                            <!--/.welcome-hero-content-->
                        </div><!-- /.container-->
                    </div><!-- /.single-slide-item-->

                </div><!-- /.item .active-->

                <div class="item">
                    <div class="single-slide-item slide2">
                        <div class="container">
                            <div class="welcome-hero-content">
                                <div class="row">
                                    <div class="col-sm-7">
                                        <div class="single-welcome-hero">
                                            <div class="welcome-hero-txt">
                                                <h4>great designs</h4>
                                                <h2>Bring home woodwork that lasts a lifetime</h2>
                                                <p>
                                                    Get your home up and running in a jiffy.Select offers a wide range
                                                    of budget-friendly,
                                                    high-quality modular solutions like kitchens, wardrobes, TV units,
                                                    bookshelves,
                                                    shoe racks and more in colours, designs and sizes that can be
                                                    customised to match your home.
                                                </p>

                                            </div>
                                            <!--/.welcome-hero-txt-->
                                        </div>
                                        <!--/.single-welcome-hero-->
                                    </div>
                                    <!--/.col-->
                                    <div class="col-sm-5">
                                        <div class="single-welcome-hero">
                                            <div class="welcome-hero-img">
                                                <img src="assets/images/slider/slider2.png" alt="slider image">
                                            </div>
                                            <!--/.welcome-hero-txt-->
                                        </div>
                                        <!--/.single-welcome-hero-->
                                    </div>
                                    <!--/.col-->
                                </div>
                                <!--/.row-->
                            </div>
                            <!--/.welcome-hero-content-->
                        </div><!-- /.container-->
                    </div><!-- /.single-slide-item-->

                </div><!-- /.item .active-->

                <div class="item">
                    <div class="single-slide-item slide3">
                        <div class="container">
                            <div class="welcome-hero-content">
                                <div class="row">
                                    <div class="col-sm-7">
                                        <div class="single-welcome-hero">
                                            <div class="welcome-hero-txt">
                                                <h4>great designs</h4>
                                                <h2>One-stop shop for all things home interiors</h2>
                                                <p>
                                                    Whether it’s a magazine-like dream kitchen or your entire home,
                                                    enjoy end-to-end solutions from design to installation.
                                                </p>

                                            </div>
                                            <!--/.welcome-hero-txt-->
                                        </div>
                                        <!--/.single-welcome-hero-->
                                    </div>
                                    <!--/.col-->
                                    <div class="col-sm-5">
                                        <div class="single-welcome-hero">
                                            <div class="welcome-hero-img">
                                                <img src="assets/images/slider/slider3.png" alt="slider image">
                                            </div>
                                            <!--/.welcome-hero-txt-->
                                        </div>
                                        <!--/.single-welcome-hero-->
                                    </div>
                                    <!--/.col-->
                                </div>
                                <!--/.row-->
                            </div>
                            <!--/.welcome-hero-content-->
                        </div><!-- /.container-->
                    </div><!-- /.single-slide-item-->

                </div><!-- /.item .active-->
            </div><!-- /.carousel-inner-->

        </div>
        <!--/#header-carousel-->

        <!-- top-area Start -->
        <div class="top-area">
            <div class="header-area">
                <!-- Start Navigation -->
                <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"
                    data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

                    <!-- Start Top Search -->
                    <div class="top-search">
                        <div class="container">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                            </div>
                        </div>
                    </div>
                    <!-- End Top Search -->

                    <div class="container">

                        <!-- End Atribute Navigation -->

                        <!-- Start Header Navigation -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target="#navbar-menu">
                                <i class="fa fa-bars"></i>
                            </button>
                            <a class="navbar-brand" href="index.html">Interior and Hardware</a>

                        </div>
                        <!--/.navbar-header-->
                        <!-- End Header Navigation -->

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse menu-ui-design " id="navbar-menu">
                            <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                                <li class=" scroll active"><a href="#home">home</a></li>
                                <li class="scroll"><a href="#new-arrivals">Our Work</a></li>
                                <li class="scroll"><a href="#feature">Harware Catalogs</a></li>
                                <li class="scroll"><a href="#newsletter">Contact</a></li>
                            </ul>
                            <!--/.nav -->
                        </div><!-- /.navbar-collapse -->
                    </div>
                    <!--/.container-->
                </nav>
                <!--/nav-->
                <!-- End Navigation -->
            </div>
            <!--/.header-area-->
            <div class="clearfix"></div>

        </div><!-- /.top-area-->
        <!-- top-area End -->

    </header>
    <!--/.welcome-hero-->
    <!--welcome-hero end -->

    <!--new-arrivals start -->
    <section id="new-arrivals" class="new-arrivals">
        <div class="container">
            <div class="section-header">
                <h2>Design Ideas</h2>
            </div>
            <!--/.section-header-->
            <div class="new-arrivals-content">
                <div class="row">
                    <?php 

$sqlquery1 = 'select * from gallary';
$result1 = mysqli_query($conn,$sqlquery1);
if( mysqli_num_rows( $result1 )==0 ){
    echo '<tr><td colspan="3">No Rows Returned</td></tr>';
  }else{
    while( $row = mysqli_fetch_assoc( $result1 ) ){
        echo "<div class='col-md-3 col-sm-4' >
        
        <div class='single-new-arrival' style='cursor:pointer'>
        
            <div class='single-new-arrival-bg'>
            <a href='Gallary.php?name=".$row['name']."'>
                <img src='data/".$row['image']."' alt='new-arrivals images'>
                <div class='single-new-arrival-bg-overlay'></div>
                </a>
            </div>
            <h4> <a href='Gallary.php?name=".$row['name']."'>".$row['name']."</a></h4>
            
        </div>
        
    </div>";
    }
}
?>



    </section>
    <!--/.new-arrivals-->
    <!--new-arrivals end -->

    <!--sofa-collection start -->
    <section id="sofa-collection">
        <div class="owl-carousel owl-theme" id="collection-carousel">
            <div class="sofa-collection collectionbg1">
                <div class="container">
                    <div class="sofa-collection-txt">
                        <h2>How we work?</h2>
                        <p>
                            We work according to ones requirement how they want to make.
                            We also have our various designs we can suggest some good designs of our own.
                            If you want to make your home look good! Contact us Now!

                        </p>
                        We are curretly available in bangalore only!
                    </div>
                </div>
            </div>
            <!--/.sofa-collection-->
            <div class="sofa-collection collectionbg2">
                <div class="container">
                    <div class="sofa-collection-txt">
                        <h2>Be your own Designer</h2>
                        <p>
                            Give your design and get it real.We also work as per client's need, we make it with best
                            good quality.
                            , so decorate
                            your house with good furniture and quality.
                        </p>
                        We are curretly available in bangalore only!
                    </div>
                </div>
            </div>
            <!--/.sofa-collection-->
        </div>
        <!--/.collection-carousel-->

    </section>
    <!--/.sofa-collection-->
    <!--sofa-collection end -->

    <!--feature start -->
    <section id="feature" class="feature">
        <div class="container">
            <div class="section-header">
                <h2>Hardware Catalogs</h2>
            </div>
            <!--/.section-header-->
            <div class="feature-content">
                <div class="row">
                    <?php 

$sqlquery2 = 'select * from hardwarecatlog';
$result2 = mysqli_query($conn,$sqlquery2);
if( mysqli_num_rows( $result2 )==0 ){
    echo '<tr><td colspan="3">No Rows Returned</td></tr>';
  }else{
    while( $row = mysqli_fetch_assoc( $result2 ) ){
        echo "<div class='col-md-3 col-sm-4' >
        <a href='data/".$row['pdffile']."' target='_blank'>
        <div class='single-new-arrival' style='cursor:pointer'>
            <div class='single-new-arrival-bg' >
                <img src='data/".$row['image']."' alt='new-arrivals images'>
                <div class='single-new'></div>
            </div>
            <h4>".$row['name']."</h4>
        </div>
        </a>
    </div>";
    }
}

?>
                </div>
            </div>
        </div>
        <!--/.container-->

    </section>
    <!--/.feature-->
    <!--feature end -->



    <!-- clients strat -->

    <!-- clients end -->

    <!--newsletter strat -->
    <section id="newsletter" class="newsletter">
        <div class="container ">
            <div class="hm-footer-details">
                <div class="row ">
                    <div class=" col-md-7 col-sm-6 col-xs-12 ">
                        <div class="hm-footer-widget">
                            <div class="hm-foot-title">
                                <h4>About Us</h4>
                            </div>
                            <!--/.hm-foot-title-->
                            <div class="hm-foot-menu">

                                <?php
                                      $sqlquery = 'select * from contact';
                                      $result = mysqli_query($conn,$sqlquery);
                                      if($result){
                                          $row = mysqli_fetch_assoc($result);
                                          echo "<table>
                                              <tr style='padding:10px'>
                                                  <td style='text-align:center' >
                                                      <i class='fa fa-phone'></i>
                                                  </td>
                                                  <td style='padding:10px'>
                                                      +91-".$row['pnumber']." / ".$row['snumber']."
                                                  </td>
                                              </tr>
                                              <tr style='padding:10px'>
                                                  <td style='text-align:center'>
                                                      <i class='fa fa-whatsapp'></i>
                                                  </td>
                                                  <td style='padding:10px ' >
                                                      +91-".$row['whatsapp']." 
                                                  </td>
                                              </tr>
                                              <tr style='padding:10px'>
                                                  <td style='text-align:center'>
                                                      <i class='fa fa-envelope-o'></i>
                                                  </td>
                                                  <td style='padding:10px ;text-transform: none'>
                                                      ".$row['email']."
                                                  </td>
                                              </tr>
                                              <tr  style='padding:10px' >
                                                  <td style='text-align:center'>
                                                      <i class='fa fa-map-marker'></i>
                                                  </td>
                                                  <td  style='padding:10px; width:500px'>
                                                      ".$row['Address']."
                                                  </td>
                                              </tr>

                                      </table>
                                      <p>GSTIN   <span style='padding-left:10px'> 22AHAS24D1AFSDE </span></p>
                                      ";
                                      }
                                    ?>





                                <!--/ul-->
                            </div>
                            <!--/.hm-foot-menu-->
                        </div>
                        <!--/.hm-footer-widget-->
                    </div>
                    <!--/.col-->

                    <div class=" col-md-5 col-sm-6  col-xs-12 ">
                        <div class="hm-footer-widget ">
                            <form method="post">
                                <div class="hm-foot-title">
                                    <h4>Any Queries</h4>
                                </div>

                                <!--/.hm-foot-title-->
                                <div class="hm-foot-email">
                                    <div class="foot-email-box">
                                        <input type="text" class="form-control" name='number' id="mobileNumber"
                                            placeholder="Enter Your Mobile Number">
                                    </div>
                                    <!--/.foot-email-box-->
                                </div>
                                <!--/.hm-foot-email-->
                                <br />

                                <div class="hm-foot-email">
                                    <div class="foot-email-box">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="query"
                                            placeholder="Enter Query Here...."></textarea>
                                    </div>
                                    <!--/.foot-email-box-->
                                    <div class="foot-email-subscribe">
                                        <span></span>
                                    </div>
                                    <!--/.foot-email-icon-->
                                </div>
                                <br />

                                <button type="submit" name="querySubmit" id="submitBtn" class="d-none"></button>
                            </form>
                            <button onclick="checkColumns();" class="btn btn-sm btn-warning">Submit <i
                                    class="fa fa-location-arrow"></i></button>
                        </div>

                        <!--/.hm-footer-widget-->
                    </div>
                    <!--/.col-->

                </div>
                <!--/.row-->
            </div>
            <!--/.hm-footer-details-->

        </div>
        <!--/.container-->

    </section>
    <?php 
    if(isset($_REQUEST['querySubmit'])){
        $number = $_POST['number'];
        $query = $_POST['query'];
        $insert = "insert into queries(number,query) values('".$number."','".$query."')";
        if(mysqli_query($conn,$insert)){
            echo "<script>alert('Successfully!! Submitted the Query');</script>";
        }else{
            echo "<script>alert('Failed!! Query is not submitted.');</script>";
        }
    }
    ?>

    <!--/newsletter-->
    <!--newsletter end -->

    <!--footer start-->
    <footer id="footer" class="footer">
        <div class="container">
            <div class="hm-footer-copyright text-center">
                <p>
                    Copyright &copy; designed and developed by <a href="https://www.themesine.com/">1960454 Dinesh
                        Suthar</a>
                </p>
                <!--/p-->
            </div>
            <!--/.text-center-->
        </div>
        <!--/.container-->

        <div id="scroll-Top">
            <div class="return-to-top">
                <i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title=""
                    data-original-title="Back to Top" aria-hidden="true"></i>
            </div>

        </div>
        <!--/.scroll-Top-->

    </footer>
    <!--/.footer-->
    <!--footer end-->

    <!-- Include all js compiled plugins (below), or include individual files as needed -->

    <script src="assets/js/jquery.js"></script>

    <!--modernizr.min.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

    <!--bootstrap.min.js-->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- bootsnav js -->
    <script src="assets/js/bootsnav.js"></script>

    <!--owl.carousel.js-->
    <script src="assets/js/owl.carousel.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>


    <!--Custom JS-->
    <script src="assets/js/custom.js"></script>
    <script>
        function checkColumns(event) {
            var a = document.getElementById('mobileNumber').value;
            var b = document.getElementById('exampleFormControlTextarea1').value;
            if (a === null || !a) {
                alert("Enter the mobile number");
                event.preventDefault();
            } else if (b === null || !b) {
                window.history.back();
                alert("Enter the Query");
            } else if (isNaN(a)) {
                alert("Mobile number is invalid.");
            } else if ((a.length < 10) || (a.length > 10)) {
                alert("Mobile number is invalid.");
            }
            else {
                document.getElementById('submitBtn').click();
            }
        }
    </script>


</body>


</html>