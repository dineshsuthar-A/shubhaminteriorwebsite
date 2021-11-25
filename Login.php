<?php 
session_start();

if(isset($_REQUEST['submitForm'])){
  $mobile = $_POST['inputmobile'];
  $pass = $_POST['inputPassword'];
  if($mobile == '9610300118'){
    if($pass == "Admin"){
      $_SESSION['token']=1;
      header("Location: http://127.0.0.1/Admin.php");
    }

  }else{

  }
}

?>

<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Login</title>
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

<body>
  <div style="display:flex; justify-content:center; align-content:center; ">
    <form class="form-horizontal w-50 h-100 " method="post" action="Login.php" style="margin-top:100px">
      <div class="card-body">

        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Mobile</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" name="inputmobile" placeholder="Mobile Number" maxlength="10">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" name="inputPassword" placeholder="Password">
          </div>
        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" name="submitForm" class="btn btn-info">Sign in</button>
      </div>
      <!-- /.card-footer -->
    </form>
  </div>
  <?php include "script.php" ?>
</body>

</html>