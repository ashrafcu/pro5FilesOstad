<?php
session_start([
    "cookie_lifetime"=> 150
]);
if (!isset($_SESSION["role"]) || $_SESSION["role"]!="admin"){
	header("Location: page-login.php");
}
include "header.php";
?>
        
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">

                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-notebook menu-icon"></i><span class="nav-text">Main Menu</span>
                        </a>
                        <ul aria-expanded="false">
                            <?php
                            if (isset($_SESSION["role"]) || $_SESSION["role"]=="admin"){
                                echo "<li><a href='page-logout.php'>Logout</a></li>";
                            } else {
                                echo "<li><a href='page-register.php'>Register</a></li>";
                            }
                            ?>
                            
                            
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
                            <h3 class="mb-0">Hi, <span id="user-profile-name"></span><?php echo $_SESSION["userName"];?>!</h3>
                            <p class="text-muted">Do you want to <a href="page-logout.php">logout</a> now?</p>
                        </div>
                    </div>
                    
                    
                </div>
            </div>  
        </div>
        <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <h4>Administration Panel</h4>
                                </div>
                                <div class="table-responsive"> 
                                    <table class="table table-bordered table-striped verticle-middle">
                                        <thead>
                                            <tr>
                                                <th scope="col">Sl No.</th>
                                                <th scope="col">User Name</th>
                                                <th scope="col">Email Address</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>&mdash;</td>
                                                <td>&mdash;</td>
                                                <td>&mdash;</td>
                                                <td><span><a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i> </a><a href="#" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger"></i></a></span>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                               
                                    <?php
                       $filename="C:\\xampp\\htdocs\\appM5Files\\data\\users.txt";
                       if (is_readable($filename)){
                       $data= file_get_contents($filename);
                       echo nl2br($data);

                     /*   $fp= fopen("./data/users.txt", "r");  */
                    }
                        ?>   
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