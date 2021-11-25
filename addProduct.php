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
                    <form method="post" action="addProduct.php" enctype="multipart/form-data">

                        <div class="card card-outline card-primary">
                            <div class="card-header">
                                <div class="card-title">Add New Work Gallery</div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInput">Gallery Name</label>
                                    <input type="text" class="form-control" name="gallaryName"
                                        placeholder="Gallery Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Display Image</label>
                                    <input type="file" class="form-control" name="imageName"
                                        accept="image/png, image/jpeg">
                                </div>

                            </div>
                            <div class="card-footer">
                                <input type="submit" name="gallarysubmit" class="btn btn-primary" value="Submit">
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </form>
                    <?php
                    if(isset($_REQUEST['gallarysubmit'])){
                        $servername = "localhost:4306";
                        $username = "root";
                        $password = "1234";
                        $dbname = "i&h";
                        $gname = $_POST['gallaryName'];
                        $image = $_FILES["imageName"]['name'];
                        $temp_img = $_FILES["imageName"]['tmp_name'];
                        $db = mysqli_connect($servername, $username, "",$dbname);
                        $sql = "insert into gallary(name,image) values('".$gname."','".$image."')";
                        mkdir("data/".$gname, 0755, true);
                        if(mysqli_query($db,$sql) && move_uploaded_file($temp_img,"data/".$image)){
                            echo "<script>
                            Swal.fire(
                                'Added!',
                                'Successfully Added!',
                                'success'
                              )</script>";
                        }else{
                            echo "<script>
                            Swal.fire(
                                'Retry',
                                'Not Added',
                                'error'
                            )</script>";

                        }
                        
                        
                    }
                      ?>
                </div>

            </div>
        </div>
    </div>
    <script>
        var d2 = document.getElementById("newProduct");
        d2.addEventListener("click", changeActive(d2));
        function changeActive(ele) {
            document.getElementsByClassName("nav-link active")[0].className = "nav-link";
            ele.className = "nav-link active";
        }
    </script>

    <?php include "script.php"?>
</body>

</html>