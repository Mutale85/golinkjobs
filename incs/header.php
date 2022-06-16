<?php include "includes/db.php";?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/humber.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link rel="icon" type="images/remotejobsLogo.png" href="images/remotejobsLogo.png">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script type="text/javascript" src="js/toastr.min.js"></script>
<link rel="stylesheet" type="text/css" href="js/toastr.min.css">
<title>Access Remote Jobs</title>
<style>
    .success_btn {
        border: none;
        padding: .7em 1.1em;
        border-radius: 6px;
        background-color: #1ecbe1;
        color: #fff;
        box-shadow: 0 0 0 2px rgba(0, 0, 0, .5);
        transition: 0.5s;
    }
    .success_btn:hover {
        background-color: #fff;
        color: #1ecbe1;
    }
</style>
<script>
    $(document).ready(function(){
        $(".hamburger").click(function(){
            $(this).toggleClass("is-active");
        });
    });
</script>