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
                    <form method="post" action="editGalleryDetail.php" enctype="multipart/form-data">
                        <div class="card card-outline card-primary">
                            <div class="card-header">
                                <div class="card-title">Edit Gallery Details</div>
                            </div>
                            <?php
                            $servername = "localhost:4306";
                            $username = "root";
                            $password = "1234";
                            $dbname = "i&h";
                            $db = mysqli_connect($servername, $username, "",$dbname);
                            if(isset($_GET['id'])){
                            $id = $_GET['id'];
                            $sql = "select * from gallary where id = ".$id."";
                            $result = mysqli_query($db,$sql);
                            $row = mysqli_fetch_assoc( $result );
                      echo "<div class='card-body'>
                                <div class='form-group'>
                                  <label for='updateGalleryName'>Gallery Name</label>
                                  <input type='text' class='form-control' name='updateGalleryName' id='Galleryname' value='".$row['name']."'/>
                                  <br/>
                                  <label for='galleryDisplayImage'>Display Image</label>
                                  <br/>
                                  <image id='imagev' src='data/".$row['image']."' alt='Not Loaded' width='200px' height='150px'/>
                                  <input type='hidden' name='rowid' value='".$row['id']."'/>
                                  <input type='file' onchange='setImage();' class='form-control d-none' name='galleryDisplayImage' id='galleryDisplayImage' accept='image/png, image/jpeg' />
                                  <button type='button' onclick='changeImage();' class='btn btn-sm btn-primary' id='changebtn'>Change Image</button>
                                </div>
                            </div>
                            <div class='card-footer'>
                                <button type='submit' name='upload' class='btn btn-primary'>update</button>
                            </div>
                        </div>
                    </form>";
                    }
                    if(isset($_REQUEST['upload'])){
                        if(isset($_POST['rowid'])){
                        $id= $_POST['rowid'];
                        $sqlquery = "select * from gallary where id='".$id."'";
                        $resultquery = mysqli_query($db,$sqlquery);
                        $rowdata = mysqli_fetch_assoc($resultquery);
                        if($_FILES['galleryDisplayImage']['name']){
                            $insertq = "update gallary set name ='".$_POST['updateGalleryName']."', image='".$_FILES['galleryDisplayImage']['name']."' where id='".$id."'";
                            unlink("data/".$rowdata['image']);
                            $tmpfilename = $_FILES['galleryDisplayImage']['tmp_name'];
                            $folder = "data/".$_FILES['galleryDisplayImage']['name'];
                            move_uploaded_file($tmpfilename,$folder);
                        }
                        else{
                            $insertq = "update gallary set name ='".$_POST['updateGalleryName']."' where id='".$id."'";
                        }
                        
                        if(rename("data/".$rowdata['name'],"data/".$_POST['updateGalleryName']))
                        if(mysqli_query($db,$insertq)){
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
                                                      location.replace('http://127.0.0.1/editgallary.php');
                                                        } 
                                                      })
                                                     </script>";
                        }else{
                            echo "<script>
                                                    const swalWithBootstrapButtons = Swal.mixin({
                                                        customClass: {
                                                          confirmButton: 'btn btn-success',
                                                          cancelButton: 'btn btn-danger'
                                                        },
                                                        buttonsStyling: false
                                                      })
                                                    swalWithBootstrapButtons.fire({
                                                        title: 'Retry',
                                                        text: 'Not Update!',
                                                        icon: 'error',
                                                        showCancelButton: false,
                                                        confirmButtonText: 'Okay'
                                                      }).then((result) => {
                                                        if (result.isConfirmed) {
                                                      location.replace('http://127.0.0.1/editgallary.php');
                                                        } 
                                                      })
                                                     </script>";
                        }else{
                            echo "<script>
                                                    const swalWithBootstrapButtons = Swal.mixin({
                                                        customClass: {
                                                          confirmButton: 'btn btn-success',
                                                          cancelButton: 'btn btn-danger'
                                                        },
                                                        buttonsStyling: false
                                                      })
                                                    swalWithBootstrapButtons.fire({
                                                        title: 'Retry',
                                                        text: 'Not Update!',
                                                        icon: 'error',
                                                        showCancelButton: false,
                                                        confirmButtonText: 'Okay'
                                                      }).then((result) => {
                                                        if (result.isConfirmed) {
                                                      location.replace('http://127.0.0.1/editgallary.php');
                                                        } 
                                                      })
                                                     </script>";
                        }
                    }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script>
        function changeImage(){
            document.getElementById("galleryDisplayImage").click();
        }
        var d2 = document.getElementById("editgallary");
        d2.addEventListener("click", changeActive(d2));
        function changeActive(ele) {
            document.getElementsByClassName("nav-link active")[0].className = "nav-link";
            ele.className = "nav-link active";
        }
        function setImage(event){
            var preview = document.getElementById('imagev');
            var file    = document.getElementById('galleryDisplayImage').files[0];
            var reader  = new FileReader();
            reader.onloadend = function () {
               preview.src = reader.result;
            }
            if (file) {
               reader.readAsDataURL(file);
             } else {
               preview.src = "";
             }
        }
    </script>
    <?php include "script.php"?>
</body>

</html>