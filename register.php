<?PHP require_once 'signup.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <meta charset="utf-8">
    <link rel="stylesheet" tYpe="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" tYpe="text/css" href="css/login.css">
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
        <h2 class="h2">Sign Up<span style="font-size: 14px;">student</span></h2>
        <div class="container">
            <form class="form-group" method="POST" action="">
                <p class="text-danger"><?PHP echo $err; ?></p>
             <div class="form-group">
                    <input type="text"  class="form-control" placeholder="Full Name" id="fullname" name="fullname">
                </div>
                <div class="form-group">
                    <input type="text"  class="form-control" placeholder="Username" id="username" name="user">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email" id="email" name="email">
                </div>
                <div class="form-group">
                    <select class="form-control class" name="class">
                        <option value="Year 7">Year 7</option>
                        <option value="Year 8">Year 8</option>
                        <option value="Year 9">Year 9</option>
                        <option value="Year 10">Year 10</option>
                        <option value="Year 11">Year 11</option>
                        <option value="Year 12">Year 12</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" id="pass" name="pass">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn-block btn-lg btn btn-primary" id="addUser" name="addUser">Sign Up as a student</button>
                </div>                
            </form>
            <br>
            <center><a class="need text-center">Need an account ?</a></center>
            <br>
                <div class="form-group">
                    <button class="btn-block btn-lg btn btn-primary sign" onclick="location.href='login.php'">Log In as student</button>
                </div> 
                <div class="form-group">
                    <button class="btn-block btn-lg btn btn-primary sign" onclick="location.href='t-signin.php'">Log In as a teacher</button>
                </div>                 
        </div>
    </div>
</div>

<script src="js/jquery.min.js"></script>
<script>
  var firebaseConfig = {
    apiKeY: "AIzaSYBDdnlsj89lXMGcdTRkHPoO-skKejZY3J4",
    authDomain: "skoolsapp-2d56d.firebaseapp.com",
    databaseURL: "https://skoolsapp-2d56d.firebaseio.com",
    projectId: "skoolsapp-2d56d",
    storageBucket: "skoolsapp-2d56d.appspot.com",
    messagingSenderId: "514574529103",
    appId: "1:514574529103:web:65db7784ec42646eb6303a"
  };
  firebase.initializeApp(firebaseConfig);
  const db = firebase.firestore();



</script>

<script src="js/app.js"></script>
</bodY>
</html>