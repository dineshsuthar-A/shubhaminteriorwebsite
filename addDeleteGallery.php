<?php
 session_start();
 if(isset($_GET['name']))
   $_SESSION['name'] = $_GET['name']; ?>
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
    <style type="text/css">
        .cardimage {
            display: flex;
            flex-direction: column; 
            justify-content: start;
            width: 200px;
            margin: 10px;
        }
        .imageGallery{
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
        }
    </style>
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
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <?php
                             echo "<div class='card-title'>".$_SESSION['name']." Gallery</div>";
                            ?>
                        </div>
                        <div class='card-body'>
                            <div class='form-group imageGallery'>
                                <?php
                                 if(isset($_REQUEST["formsubmitBtn"])){
                                    $filename = $_FILES['imageupload']['name'];
                                    $tempfilename = $_FILES['imageupload']['tmp_name'];
                                    $folder = "data/".$_POST['namefile']."/".$filename;
                                    if(move_uploaded_file($tempfilename,$folder)){
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
                                                } 
                                                })
                                                </script>";
                                    }else{
        
                                    }
                                }
                                if(isset($_REQUEST['btnDeleteImage'])){
                               
                                    if( unlink("data/".$_POST['foldername']."/".$_POST['deleteimagename'])){
                                        echo "<script>
                                              Swal.fire(
                                                'Deleted',
                                                'Successfully Deleted!',
                                                'success'
                                              )</script>";
                                    }else{
                                        echo "<script>
                                        Swal.fire(
                                              'Retry',
                                              'Not Deleted',
                                              'error'
                                        )</script>";
                                   }
                                }
                            $imagesDirectory = "data/".$_SESSION['name'];

                            if(is_dir($imagesDirectory))
                            {
	                          $opendirectory = opendir($imagesDirectory);
  
                              while (($image = readdir($opendirectory)) !== false)
	                          {
	                          	if(($image == '.') || ($image == '..'))
	                          	{
	                          		continue;
	                          	}
	                          	
	                          	$imgFileType = pathinfo($image,PATHINFO_EXTENSION);
	                          	
	                          	if(($imgFileType == 'jpg') || ($imgFileType == 'png'))
	                          	{
	                          		echo "<form method='post' action='addDeleteGallery.php' >
                                          <div class='cardimage'><img src='data/".$_SESSION['name']."/".$image."' alt='Not loaded' width='200px' height='150px'/>
                                          <input type='hidden' name='deleteimagename' value='".$image."'/>
                                          <input type='hidden' name='foldername' value='".$_SESSION['name']."'/>
                                          <a class='d-none' id='myAnchor'></a>
                                          <button type='submit' class='btn btn-sm btn-danger' id='btnDeleteImage' name='btnDeleteImage'>Delete</button> 
                                          </div>
                                          </form>";
	                          	}
                              }
	
                              closedir($opendirectory);
 
                            }
                            
                            ?>


                            </div>
                        </div>
                        <div class='card-footer'>
                            <button type='button' onclick="getImage();" name='upload' class='btn btn-primary'><i class="fa fa-upload" aria-hidden="true"></i> Upload</button>
                            <form method="post" action="addDeleteGallery.php" id="myForm" enctype="multipart/form-data">
                                <input type="file" onchange="submitFormOnChange();" accept="image/*" id="imageupload"
                                    name="imageupload" class="d-none" />
                                    <?php echo "<input type='hidden' name='namefile' value='".$_SESSION["name"]."'/>" ?>
                                <button type="submit" name="formsubmitBtn" id="formsubmitBtn" class="d-none"></button>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function getImage(){
            document.getElementById("imageupload").click();
        }
        function submitFormOnChange() {
            document.getElementById("formsubmitBtn").click();
        }
        var d2 = document.getElementById("editgallary");
        d2.addEventListener("click", changeActive(d2));
        function changeActive(ele) {
            document.getElementsByClassName("nav-link active")[0].className = "nav-link";
            ele.className = "nav-link active";
        }
    </script>
    <?php include "script.php"?>
</body>

</html>