<?php
//session_start();
include "header.php";
$users = json_decode(file_get_contents('data/users.json'), true);

function displayAllUsers($users)
{
    foreach ($users as $innerUserEmails) {
        foreach ($innerUserEmails as $userValues => $keys) {
            $i=0;
            while($i<count($innerUserEmails)){$i++;}
            echo "<td>$i</td><td>" . "$keys" . "</td>";
        
        }
    }
}

?>

<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
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
    <h3>Edit User's Role</h3>
    <div class="table-responsive">
    <table class="table table-bordered table-striped verticle-middle">
        <thead>
            <tr>
                <th scope="col">Sl No.</th>
                <th scope="col">User Name</th>
                <th scope="col">Password</th>
                <th scope="col">Email Address</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php displayAllUsers($users); ?>
            </tr>
        </tbody>
    </table>
</div>
</div>


<?php include "footer.php"; ?>