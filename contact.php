<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link rel="stylesheet" href="addproduct.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script src="sweetalert2.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="sweetalert2.min.css">
    <?php 
include "css.php";
?>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed ">
    <div class="wrapper">
        <?php include "navBar.php" ?>
        <div class="content-wrapper">
            <div class="content-header"></div>
            <div class="content">
                <div class="container-fluid">
                    <form method="post" action="contact.php" enctype="multipart/form-data">

                        <div class="card card-outline card-primary">
                            <div class="card-header">
                                <div class="card-title">Contact Info</div>
                            </div>
                            <?php 

                            $servername = "localhost:4306";
                            $username = "root";
                            $password = "1234";
                            $dbname = "i&h";
                            $db = mysqli_connect($servername, $username, "",$dbname);
                            
                            if(isset($_REQUEST['contactinfo'])){       
                                $insert = "UPDATE contact SET pnumber = '".$_POST['pno']."', snumber='".$_POST["sno"]."', whatsapp='".$_POST["wno"]."',email='".$_POST['email']."',Address='".$_POST['address']."'";
                                if (mysqli_query($db,$insert))  {
                                    echo "<script>
                                    Swal.fire(
                                        'Updated!',
                                        'Successfully updated!',
                                        'success'
                                      )
                                      
                                      </script>";
                                }else{
                                    echo "<script>
                                     Swal.fire(
                                         'Retry',
                                         'Not updated',
                                         'error'
                                     )</script>";
                                }
                            }
                            $sql = "select * from contact";
                            $result = mysqli_query($db,$sql);
                            $row = mysqli_fetch_assoc( $result );


                            echo "<div class='card-body'>
                                <div class='form-group'>
                                    <label for='pno'>Primary Mobile Number</label>
                                    <input type='text' class='form-control' name='pno' id='pno'
                                        value='".$row['pnumber']."'/>
                                    <br />
                                    <label for='sno'>Secondary Mobile Number</label>
                                    <input type='text' class='form-control' name='sno' id='sno'
                                        value='".$row['snumber']."'/>
                                    <br />
                                    <label for='wno'>WhatsApp Number</label>
                                    <input type='text' class='form-control' name='wno' id='wno'
                                        value='".$row['whatsapp']."'/>
                                    <br />
                                    <label for='email'>Email</label>
                                    <input type='text' class='form-control' name='email' id='email'
                                            value='".$row['email']."'/>
                                    <br />
                                    <label for='address'>Address</label>
                                    <input type='text' class='form-control' name='address' id='address'
                                    value='".$row['Address']."'/>    
                                </div>
                            </div>";
                            

                            
                            
                            ?>
                            <div class="card-footer">
                                <button type="submit" name="contactinfo" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>

        var d2 = document.getElementById("contact");
        d2.addEventListener("click", changeActive(d2));
        function changeActive(ele) {
            document.getElementsByClassName("nav-link active")[0].className = "nav-link";
            ele.className = "nav-link active";
        }
    </script>
    <?php include "script.php"?>
</body>

</html>