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
                    <form method="post" action="editCatalog.php" enctype="multipart/form-data">

                        <div class="card card-outline card-primary">
                            <div class="card-header">
                                <div class="card-title">Hardware Catalog</div>
                            </div>
                            <?php 
                            $servername = "localhost:4306";
                            $username = "root";
                            $password = "1234";
                            $dbname = "i&h";
                            $db = mysqli_connect($servername, $username, "",$dbname);
                            if(isset($_GET['id'])){
                            $id = $_GET['id'];
                            $sql = "select * from hardwarecatlog where id = ".$id."";
                            $result = mysqli_query($db,$sql);
                            $row = mysqli_fetch_assoc( $result );


                            echo "<div class='card-body'>
                                <div class='form-group'>
                                    <label for='brandname'>Brand Name</label>
                                    <input type='text' class='form-control' name='updatebrandname' id='brandname'
                                        value='".$row['name']."'/>
                                    <br />
                                    <label for='headerimage'>Add New Image</label>
                                    <input type='file' class='form-control' name='updateheaderimage' id='headerimage'
                                        accept='image/png, image/jpeg' />
                                    <br />
                                    <label for='fileinput'>Add New PDF catalog</label>
                                    <input type='file' class='form-control' name='updatefileinput' id='fileinput'
                                        accept='application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document' />
                                    <input type='hidden' name='dataid' value='".$_GET['id']."'/>
                                </div>
                            </div>";
                            }

                            if(isset($_REQUEST['updateinfo'])){
                                if(isset($_POST['updatebrandname'])){
                                    if(isset($_FILES["updateheaderimage"]["name"])){
                                        if(isset($_FILES["updatefileinput"]["name"])){
                                            if(isset($_POST['dataid'])){
                                                $id = $_POST['dataid'];
                                                $sql = "select * from hardwarecatlog where id = ".$id."";
                                                $result = mysqli_query($db,$sql);
                                                $row = mysqli_fetch_assoc( $result );
                                                unlink("data/".$row['image']."");
                                                unlink("data/".$row['pdffile']."");
                                                $tempimagename = $_FILES["updateheaderimage"]["tmp_name"]; 
                                                $temppdfname = $_FILES["updatefileinput"]["tmp_name"];                                           
                                                $imagefolder="data/".$_FILES["updateheaderimage"]["name"];
                                                $pdffolder="data/".$_FILES["updatefileinput"]["name"];
                                                $insert = "UPDATE hardwarecatlog SET name = '".$_POST['updatebrandname']."', image='".$_FILES    ["updateheaderimage"]["name"]."', pdffile='".$_FILES["updatefileinput"]["name"]."' WHERE  id ='".$id."'";
                                                if (mysqli_query($db,$insert) && move_uploaded_file($tempimagename, $imagefolder) && move_uploaded_file    ($temppdfname, $pdffolder) )  {
                                                    echo "<script>
                                                    const swalWithBootstrapButtons = Swal.mixin({
                                                        customClass: {
                                                          confirmButton: 'btn btn-success',
                                                          cancelButton: 'btn btn-danger'
                                                        },
                                                        buttonsStyling: false
                                                      })
                                                    swalWithBootstrapButtons.fire({
                                                        title: 'Updated',
                                                        text: 'Successfully Update!',
                                                        icon: 'success',
                                                        showCancelButton: false,
                                                        confirmButtonText: 'Okay'
                                                      }).then((result) => {
                                                        if (result.isConfirmed) {
                                                      location.replace('http://127.0.0.1/productType.php');
                                                        } 
                                                      })
                                                     </script>";
                                                     
                                                 }else{
                                                    echo "<script>
                                                    Swal.fire(
                                                     'Retry',
                                                     'Not Uploaded',
                                                     'error'
                                                 )</script>";
                                                }
                                           }
                                       }
                                    }
                                }
                            }
                            ?>
                            <div class="card-footer">
                                <button type="submit" name="updateinfo" class="btn btn-primary">Update</button>
                              <a href="productType.php" class="btn btn-danger">Cancel</a>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>

        var d2 = document.getElementById("producttype");
        d2.addEventListener("click", changeActive(d2));
        function changeActive(ele) {
            document.getElementsByClassName("nav-link active")[0].className = "nav-link";
            ele.className = "nav-link active";
        }
    </script>
    <?php include "script.php"?>
</body>

</html>