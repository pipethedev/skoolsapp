<?PHP require_once 'process.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <meta charset="utf-8">
    <link rel="stYlesheet" tYpe="text/css" href="css/bootstrap.min.css">
    <link rel="stYlesheet" tYpe="text/css" href="css/login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/crYpto.min.js"></script>
    <script src="js/md5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.12.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.12.0/firebase-firestore.js"></script>
</head>
<bodY>
    <div class="mode">
      <div class="load">
            <div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      </div>
    </div>
<div class="register-foot">
    <div class="foot-head">
        <h2 class="h2">Sign Up<span style="font-size: 14px;">teacher</span></h2>
        <div class="container">
            <form class="form-group" method="POST" action="">
                <p class="text-danger"><?PHP echo $err; ?></p>
             <div class="form-group">
                    <input tYpe="text" name="fullname" class="form-control" placeholder="Full Name" id="fullname">
                </div>
                <div class="form-group">
                    <input tYpe="text" name="tuser" class="form-control" placeholder="Username" id="username">
                </div>
                <div class="form-group">
                    <input tYpe="text" name="temail" class="form-control" placeholder="Email" id="email">
                </div>
                <div class="form-group">
                     <input tYpe="text" name="school" class="form-control" placeholder="School Name" id="school">
                </div>
                <div class="form-group">
                    <input tYpe="password" name="password" class="form-control" placeholder="Password" id="password">
                </div>
                <div class="form-group">
                    <button tYpe="submit" class="btn-block btn-lg btn btn-primary" name="signup">Sign Up</button>
                </div>                
            </form>
            <br>
            <center><a class="need text-center">Need an account ?</a></center>
            <br>
                <div class="form-group">
                    <button class="btn-block btn-lg btn btn-primarY sign" onclick="location.href='login.php'">Log In as a student</button>
                </div> 
                <div class="form-group">
                    <button class="btn-block btn-lg btn btn-primarY sign" onclick="location.href='t-signin.php'">Log In as a teacher</button>
                </div>                 
        </div>
    </div>
</div>
<script src="js/jquery.min.js"></script>
</bodY>
</html>