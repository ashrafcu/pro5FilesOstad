<?php
session_start([
    "cookie_lifetime"=> 150
]);
$userName=$_POST["userName"] ?? "";
$password=$_POST["password"] ?? "";

$errorMessage= "";
/* 
$dataFile='data/users.json';
$users= json_decode(file_get_contents($dataFile),true);
$roles=array();
$userNames=array();
$passwords= array();

foreach($users as $innerUserEmails){
    foreach ($innerUserEmails as $userValues=>$keys){
        echo $keys."\n";
        echo "<br/>";
    array_push($roles, trim($keys));
    array_push($userNames, trim($keys));
	array_push($passwords, trim($keys));
    }
}
print_r($userNames);
 */
//Failed to use the JSON data to authenticate login

$fp= fopen("./data/users.txt", "r");

$roles=array();
$userNames=array();
$emails=array();
$passwords= array();

while ($line=fgets($fp)){
	$values= explode(",",$line);
	array_push($roles, trim($values[0]));
    array_push($userNames, trim($values[1]));
    array_push($emails, trim($values[2]));
	array_push($passwords, trim($values[3]));
}
fclose($fp); 
for ($i=0; $i<count($roles); $i++ ){
	if($userName==$userNames[$i] && $password== $passwords[$i]){
		$_SESSION["role"]=$roles[$i];
        $_SESSION["userName"]=$userNames[$i];
		$_SESSION["password"]=$passwords[$i];
		header("Location: index.php");
	}
		else {
			$errorMessage = "Your <strong>USER NAME</strong> or <strong>PASSWORD</strong> seems invalid!";
		}
	
	
}
?>

<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login | OSTAD APP</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
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
                                <a class="text-center" href="index.php"> <div class="d-flex justify-content-center"><img src="images\media\logo.jpg"></div><h2>Login Here</h2></a>
        
                                <form class="mt-5 mb-5 login-input" action="page-login.php" method="POST">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="User Name" name="userName" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                                    </div>
                                    <button class="btn login-form__btn submit w-100">Sign In</button>
                                </form>
                                <?php //echo $errorMessage; ?>
                                <hr/>
                                <p><strong>User Name:</strong> <em>Manager</em>, <strong>Password:</strong> <em>123456</em> <hr/><strong>User Name:</strong> <em>User</em>, <strong>Password:</strong> <em>123456</em></p>
                                <p class="mt-5 login-form__footer">Dont have account? <a href="page-register.php" class="text-primary">Sign Up</a> now.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
</body>
</html>





