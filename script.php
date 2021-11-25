<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<script>
    var d1 = document.getElementById("dash")
    var d2 = document.getElementById("newProduct");
    var d3 = document.getElementById("editgallary");
    var d4 = document.getElementById("producttype");
    var d6 = document.getElementById("contact");
    
    d1.addEventListener("click", () => changeActive(d1));
    d2.addEventListener("click", () => changeActive(d2));
    d3.addEventListener("click", () => changeActive(d3));
    d4.addEventListener("click", () => changeActive(d4));
    d6.addEventListener("click", () => changeActive(d6));
    function changeActive(ele) {
        document.getElementsByClassName("nav-link active")[0].className = "nav-link";
        ele.className = "nav-link active";
    }
</script>