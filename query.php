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
                    <div class="card card-outline card-primary h-100">
                        <div class="card-header">
                            <h3 class="card-title">All Queries</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="height: 300px;">
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Number</th>
                                        <th>Query</th>
                                        <th>Date</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php 
                                    $servername = "localhost:4306";
                                    $username = "root";
                                    $dbname = "i&h";
                                    $conn = mysqli_connect($servername,$username,"",$dbname);
                                    $sql = "select * from queries"; 
                                    if(isset($_REQUEST['delete'])){

                                        $did = $_POST['deleteid'];
                                        $deletequery = "Delete from queries where id='".$did."'";
                                        if(mysqli_query($conn,$deletequery)){
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
                                    $result = mysqli_query($conn,$sql);
                                    if( mysqli_num_rows( $result )==0 ){
                                        echo '<tr><td colspan="3">No Rows Returned</td></tr>';
                                      }else{
                                        while( $row = mysqli_fetch_assoc( $result ) ){
                                            echo "<tr><td >".$row['number']."</td><td>".$row['query']."</td><td>".$row['created_at']."</td><td>
                                            <button id='trigger' onclick='deletefunc(".$row['id'].")' class='btn btn-sm btn-danger w-25' ><i class='fas fa-trash'></i></button>
                                            <form method='post' action='query.php'>
                                                <input type='hidden' name='deleteid' value='".$row['id']."'/>
                                                <button type='submit' name='delete' id='deletebtn".$row['id']."' class='btn btn-sm btn-danger w-25 d-none'> </button>
                                            </form></td></tr>";
                                        }
                                   }
                                   ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
         function deletefunc(i){
            Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
   document.getElementById("deletebtn"+i).click();
  }
})
        }
        var d2 = document.getElementById("query");
        d2.addEventListener("click", changeActive(d2));
        function changeActive(ele) {
            document.getElementsByClassName("nav-link active")[0].className = "nav-link";
            ele.className = "nav-link active";
        }
    </script>
    <?php include "script.php"?>
</body>

</html>