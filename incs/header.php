<?php 
    include "includes/db.php";
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/humber.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link rel="icon" type="images/Gologo.png" href="images/Gologo.png">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/toastr.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<link rel="stylesheet" type="text/css" href="js/toastr.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
<title>Access Remote Jobs</title>
<style>
    .success_btn {
        border: 2px solid #1ecbe1;
        padding: .7em 1.1em;
        border-radius: 6px;
        background-color: #1ecbe1;
        color: #fff;
        transition: 0.5s;
    }
    .success_btn:hover {
        background-color: #6c757d;
        color: #fff;
        border:2px solid #6c757d;
    }
    .new_job {
        border: 2px solid #0239b0;
        padding: .3em .7em;
        border-radius: 2em;
        box-shadow: 0 0  5px;
        transition: 0.5s;
        text-align: center;
    }
    .new_job:hover {
        box-shadow: none;
    }

    .job_btn {
        border-radius: 2em;
    }
</style>
<script>
    $(document).ready(function(){
        $(".hamburger").click(function(){
            $(this).toggleClass("is-active");
        });
    });

    function successNow(msg){
        toastr.success(msg);
        toastr.options.progressBar = true;
        toastr.options.positionClass = "toast-top-center";
        toastr.options.showDuration = 1000;
    }

    function errorNow(msg){
        toastr.error(msg);
        toastr.options.progressBar = true;
        toastr.options.positionClass = "toast-top-center";
        toastr.options.showDuration = 1000;
    }
</script>