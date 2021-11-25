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
                    <form method="post" action="productType.php" enctype="multipart/form-data">

                        <div class="card card-outline card-primary">
                            <div class="card-header">
                                <div class="card-title">Hardware Catalog</div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="brandname">Brand Name</label>
                                    <input type="text" class="form-control" name="brandname" id="brandname"
                                        placeholder="Brand Name" />
                                    <br />
                                    <label for="headerimage">Display Image</label>
                                    <input type="file" class="form-control" name="headerimage" id="headerimage"
                                        accept="image/png, image/jpeg" />
                                    <br />
                                    <label for="fileinput">PDF catalog</label>
                                    <input type="file" class="form-control" name="fileinput" id="fileinput"
                                        accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" />
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" name="upload" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </form>
                    <?php 
                     $servername = "localhost:4306";
                     $username = "root";
                     $password = "1234";
                     $dbname = "i&h";

                     if (isset($_POST['upload'])) {
                        $imagename = $_FILES["headerimage"]["name"];
                        $tempimagename = $_FILES["headerimage"]["tmp_name"];    
                        $imagefolder = "data/".$imagename;
                        $pdfname = $_FILES["fileinput"]["name"];
                        $temppdfname = $_FILES["fileinput"]["tmp_name"];    
                        $pdffolder = "data/".$pdfname;
                        $brand = $_POST['brandname'];
                        $db = mysqli_connect($servername, $username, "",$dbname);
                        // Get all the submitted data from the form
                        $sql = "INSERT INTO  hardwarecatlog (name,image,pdffile) VALUES ('$brand','$imagename','$pdfname')";
                       // Execute query
                        mysqli_query($db, $sql);  
                       // Now let's move the uploaded image into the folder: image
                       if (move_uploaded_file($tempimagename, $imagefolder) && move_uploaded_file($temppdfname, $pdffolder) )  {
                           echo "<script>
                           Swal.fire(
                               'Uploaded!',
                               'Successfully Uploaded!',
                               'success'
                             )</script>";
                       }else{
                           echo "<script>
                            Swal.fire(
                                'Retry',
                                'Not Uploaded',
                                'error'
                            )</script>";
                       }
                     }

                     if(isset($_REQUEST['submit'])){
                         $sql = "Delete from hardwarecatlog where id = ".$_POST['postId']."";
                         unlink("data/".$_POST['img']."");
                         unlink("data/".$_POST['pdf']."");
                         $db = mysqli_connect($servername, $username, "",$dbname);
                         if(mysqli_query($db,$sql)){
                             echo "<script>
                                Swal.fire(
                                    'Deleted!',
                                    'Successfully Deleted!',
                                    'success'
                                )</script>";
                         }
                         else{
                             echo "<script>
                                Swal.fire(
                                    'Failed!',
                                    'Deletion Failed!',
                                    'error'
                                )</script>";
                         }
                     }
                    ?>
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Hardware Catalogs</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="height: 300px;">
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>IMAGE</th>
                                        <th>PDF</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                      $servername = "localhost:4306";
                                      $username = "root";
                                      $password = "1234";
                                      $dbname = "i&h";
                                      $db = mysqli_connect($servername, $username, "",$dbname);
                                      $result = mysqli_query($db,'select * from hardwarecatlog');
                                      if( mysqli_num_rows( $result )==0 ){
                                        echo '<tr><td colspan="3">No Rows Returned</td></tr>';
                                      }else{
                                        while( $row = mysqli_fetch_assoc( $result ) ){
                                          echo "<tr><td>{$row['name']}</td><td><a href='data/".$row['image']."' target='_blank' >{$row['image']}</a><br/><br/> <img src='data/".$row['image']."' alt='Not loaded' width='200px' height='150px'/></td><td><a href='data/".$row['pdffile']."' target='_blank'>".$row['pdffile']."</a></td><td>";
                                          echo "<form action='productType.php' method='post'>
                                          <input type='hidden' id='postId' name='postId' value='".$row['id']."'>
                                          <input type='hidden' id='img' name='img' value='".$row['image']."'>
                                          <input type='hidden' id='pdf' name='pdf' value='".$row['pdffile']."'>
                                          <a href='editCatalog.php?id=".$row['id']."' class='btn btn-sm btn-primary w-25' ><i class='fas fa-edit'></i></a>
                                          <button type='submit' class='btn btn-sm btn-danger w-25 h-25' name='submit'  ><i class='fas fa-trash'></i></button>
                                          </form>
                                          </td></tr>";
                                        }
                                      }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
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