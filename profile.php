<?PHP
require 'update.php';
require 'image.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Profile Page</title>
    <link rel="stylesheet" type="text/css" href="css/material.min.css">
    <link rel="stylesheet" type="text/css" href="css/image.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">    
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.12.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.12.0/firebase-firestore.js"></script>
</head>
<body>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Poppins&display=swap');
        body{
            font-family: 'Poppins', sans-serif;
        }
        #save{
            width: 100%;
            border:none;
            background: #5433FF;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #A5FECB, #20BDFF, #5433FF);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #A5FECB, #20BDFF, #5433FF);
            border-radius:10px;
       
        }
    </style>
<div class="container">
    <div class="head">

            <img src="img/arrow.png" height="20" width="20" onclick="location.href='home.php'" style="position: absolute; top: 2rem; left: 2.5rem;"> 
<br>
        <h4 style="padding: 20px 20px 20px 20px;">Edit Profile</h4>
        <center>
<form method="POST" action="" enctype="multipart/form-data">
                <div class="avatar-upload">
        <div class="avatar-edit">
            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" name="file" />
            <label for="imageUpload" class="material-icons" style="border: none;">camera_alt</label>
        </div>
        <div class="avatar-preview">
            <div id="imagePreview" style="background-image: url('img/<?PHP echo $posts[0]['file'];?>');">
            </div>
        </div>
    </div>
    <button class="btn waves-effect"name="update" type="submit" onclick="addRecent()">Update Pic</button>
</form>
        </center>
    </div>

    <br>
    <br>
    <br>
    <div class="row">
    <form class="col s12" method="POST" action="">
       <center>
        <span style="color: red;"><?PHP echo $msg; ?></span>
     </center>
      <div class="row">
        <div class="input-field col s12">
           <i class="material-icons prefix">account_circle</i>
          <input placeholder="Placeholder" id="first_name" name="fullname" type="text" class="validate" value="<?PHP echo $posts[0]['fullname'];?>" autocomplete="off">
          <label for="first_name">Full Name</label>
        </div>
      </div>

            <div class="row">
        <div class="input-field col s12">
           <i class="material-icons prefix">all_inclusive</i>
          <input placeholder="Placeholder" id="user_name" name="user" type="text" class="validate" value="<?PHP echo $posts[0]['user'];?>" autocomplete="off">
          <label for="first_name">User Name</label>
        </div>
      </div>

      <div class="row">

  <div class="input-field col s12">
    <i class="material-icons prefix">building</i>
    <select name="class">
      <option value="<?PHP echo $posts[0]['class'];?>"><?PHP echo $posts[0]['class'];?></option>
                        <option value="Year 7">Year 7</option>
                        <option value="Year 8">Year 8</option>
                        <option value="Year 9">Year 9</option>
                        <option value="Year 10">Year 10</option>
                        <option value="Year 11">Year 11</option>
                        <option value="Year 12">Year 12</option>
    </select>
    <label>Class</label>
  </div>

      </div>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">message</i>
          <input id="email" type="email" name="email" class="validate" value="<?PHP echo $posts[0]['email'];?>" autocomplete="off">
          <label for="email">Email</label>
        </div>
      </div>
      <button class="waves-effect waves-light btn-large" id="save" name="save" type="submit">SAVE</button>
    </form>
  </div>
</div>
   <script src="js/jquery.min.js"></script>
   <script src="js/material.min.js"></script>
   <script>
  var firebaseConfig = {
    apiKey: "AIzaSyBDdnlsj89lXMGcdTRkHPoO-skKejZy3J4",
    authDomain: "skoolsapp-2d56d.firebaseapp.com",
    databaseURL: "https://skoolsapp-2d56d.firebaseio.com",
    projectId: "skoolsapp-2d56d",
    storageBucket: "skoolsapp-2d56d.appspot.com",
    messagingSenderId: "514574529103",
    appId: "1:514574529103:web:65db7784ec42646eb6303a"
  };
  firebase.initializeApp(firebaseConfig);
  const db = firebase.firestore();

      var myArray = ['#0097e6', '#44bd32', '#fbc531', '#e84118', '#9b59b6', '#e74c3c', '#95a5a6', '#9b59b6'];

      var randomItem = myArray[Math.floor(Math.random()*myArray.length)];


</script>
   <script type="text/javascript">
      $(document).ready(function(){
    $('select').formSelect();
  });

      function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});

   </script>
</body>
</html>