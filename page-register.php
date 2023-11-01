<?php
session_start([
    "cookie_lifetime"=> 150
]);

/* 
$dataFile='data/users.json';
$users= file_exists($dataFile)? json_decode(file_get_contents($dataFile),true): [];
function saveUsers ($users, $file){
    file_put_contents($file, json_encode($users, JSON_PRETTY_PRINT));
}

if(isset($_POST['register'])){
    $username=$_POST['userName'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    if(empty($username) || empty($email) || empty($password)){
        $errorMessage ="Please fill in all the fields for registration.";
    } else {
        if(isset($users[$email])){
            $errorMessage= "Email has already been used.";
        } else{
            $users[$email]= [
                'username'=>$username,
                'password'=>$password,
                'role'=> 'user'
            ];
            saveUsers($users, $dataFile);
            $_SESSION['email']=$email;
            header('Location: update-user.php');
        }
    }
} */

$username=$_POST["userName"] ?? "";
$email=$_POST["email"] ?? "";
$password=$_POST["password"] ?? "";
$role="user";
if ($username !="" && $email !="" && $password !=""){
    $fp=fopen("data/users.txt", "a");
    fwrite($fp, "\n{$role}, {$username}, {$email}, {$password}");
    fclose($fp);
    header("Location: page-login.php");
}
else {$errorMessage="<strong>USER NAME</strong>, <strong>EMAIL</strong> and <strong>PASSWORD</strong> is mandatory for registration.";}

?>
<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>OSTAD APP | Module 5 Assignment</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    
</head>

<body class="h-100">
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                
                            <a class="text-center" href="index.php"> <div class="d-flex justify-content-center"><img src="images\media\logo.jpg"></div><h2>Registration Form</h2></a>
        
                                <form class="mt-5 mb-5 login-input" action="page-register.php" method="POST">
                                    <div class="form-group">
                                        <input type="text" class="form-control"  placeholder="User Name" name="userName" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control"  placeholder="Email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                                    </div>
                                    <p class="terxt-warning"><?php if(isset($errorMessage)) {echo "<p>$errorMessage</p>";} ?></p>
                                    <input class="btn login-form__btn w-100" type="submit" name="register" value="Register">
                                </form>
                                    <p class="mt-5 login-form__footer">Already have an account? 
                                         <a href="page-login.php" class="text-primary">Login Here.</a></p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>
</body>
</html>





