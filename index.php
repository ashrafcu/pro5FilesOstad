<?php 
session_start();
if (!isset($_SESSION["userName"])){
	header("Location: page-login.php");
}

if($_SESSION["role"]=="user"){
	header("Location: user-page.php");
} 
	elseif ($_SESSION["role"]=="admin"){
		header("Location: admin-page.php");
	}
include "header.php";
?>
        
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                   
                    <li class="nav-label">Pages</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-notebook menu-icon"></i><span class="nav-text">Pages</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./page-login.php">Login</a></li>
                            <li><a href="./page-register.php">Register</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
       
        <div class="content-body">


        </div>
        
        
<?php include "footer.php"; ?>