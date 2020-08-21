<?PHP require_once 'signin.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login </title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="login-foot">
    <div class="foot-head">
        <h2 class="h2">Log In   <span style="font-size: 14px;">student</span></h2>
        <div class="container">
            <form class="form-group" method="POST" action="">
                <p class="text-danger"><?PHP echo $err; ?></p>
                <div class="form-group">
                    <input type="text" name="email" class="form-control" placeholder="Email Address">
                </div>
                <div class="form-group">
                    <input type="password" name="pass" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn-block btn-lg btn btn-primary" name="login">Log In</button>
                </div>                
            </form>
            <center><a class="forgot text-center">Forgot password ?</a></center>
            <br>
            <center><a class="need text-center">Need an account ?</a></center>
            <br>
                <div class="form-group">
                    <button class="btn-block btn-lg btn btn-primary sign" onclick="location.href='register.php'">Sign Up as a student</button>
                </div> 
                <div class="form-group">
                    <button class="btn-block btn-lg btn btn-danger sign" onclick="location.href='t-signup.php'">Sign Up as a tutor</button>
                </div> 
        </div>
    </div>
</div>
</body>
</html>