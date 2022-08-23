<?php
include("includes/config.php");
error_reporting(0);
?>
<?php if ($_SESSION['login'] != "") { ?>

    <head>
        <script src="https://kit.fontawesome.com/846fda1b35.js" crossorigin="anonymous"></script>
        <style>
            .fa-solid {
                font-size: 50px;
                color: white;
                text-align: left;
                width: 100%;
            }
        </style>
    </head>

<?php } ?>
<!-- HEADER END-->
<div class="navbar navbar-dark bg-primary">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" style="color:white; font-size:40px;10px; line-height:45px; align:justify;  margin-left:90px; margin-bottom: -50px; ">
                TECHSTER
                <p style="font-size:15px;"> An Online Course Platform </p>
            </a>
        </div>
        <div class="left-div">
            <i class="fa-solid fa-chalkboard-user"></i>
        </div>
    </div>
</div>