<?php 
session_start([
    "cookie_lifetime"=> 150
]);
if (!isset($_SESSION["role"]) || $_SESSION["role"]!="user"){
	header("Location: page-login.php");
}
include "header.php";
?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-notebook menu-icon"></i><span class="nav-text">Main Menu</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./page-logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        
    </div>
</div>
<!-- row -->

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center mb-4">
                        <div class="media-body">
                            <h4 class="mb-0">Welcome, <?php echo $_SESSION["userName"];?>!</h4>
                            
                        </div>
                    </div>
                    
                    

                   
                  
                   
                </div>
            </div>  
        </div>
        <div class="col-lg-8 col-xl-9">

            <div class="card">
                <div class="card-body">
                    

                <div class="media media-reply">
                    <img class="mr-3 circle-rounded" src="images/avatar/1.jpg" width="50" height="50" alt="Generic placeholder image">
                    <div class="media-body">
                        <div class="d-sm-flex justify-content-between mb-2">
                            <h5 class="mb-sm-0"><?php echo $_SESSION['userName']."'s"?> Panel</h5>
                        </div>
                        <p>You will be able to view all your relevant information here. Want to log out? <a href="page-logout.php">Click here</a>.</p>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<!-- #/ container -->
</div>
        <!--**********************************
            Content body end
        ***********************************-->
        
<?php include "footer.php"; ?>