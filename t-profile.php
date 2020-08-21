<?PHP
require 't-update.php';
require 't-image.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/material.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/image.css">  
</head>
<body>
    <style type="text/css">
        label{

        }
        #update{
            width: 100%; border:1px solid #0984e3; background: #0984e3; color: #fff; box-shadow: none;
            border-radius: 15px;
        }
        #update::focus{
            background: #0984e3;
            color: white;
            transition: 0.5s;
        }
    </style>
<div class="main">
    <div class="jumbotron" style="background: #6c5ce7; height: 35%; width: 100%; position: fixed; top: 0; left: 0;">
      <img src="img/arrow.png" height="20" width="20" onclick="location.href='t-home.php'" style="position: absolute; top: 2rem; left: 2.5rem;">
        <center>
<form method="POST" action="" enctype="multipart/form-data" style="margin-top: -2rem;">
                <div class="avatar-upload" style="z-index: 99999;">
        <div class="avatar-edit">
            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" name="file" />
            <label for="imageUpload"></label>
        </div>
        <div class="avatar-preview">
            <div id="imagePreview" style="background-image: url('img/<?PHP echo $posts[0]['file'];?>');">
            </div>
        </div>

    </div>
   

        </center>
    </div>
    <div class="container">
<div class="form-place" style="background: white; position: absolute; top: 37%; left: -1%; border-top-right-radius:16%; height: 65%; width: 100%; border-top-left-radius:16%;">
 <center>
      <button name="update" class="btn waves-effect" id="update" style="margin-top: 5px; width: auto; border: none;">Update Pic</button>
 </center>
 </form>
    <div class="row" style="margin-top: 3rem;">
    <form class="col s12" method="POST" action="">
     <center>
        <span style="color: red;"><?PHP echo $msg; ?></span>
     </center>
      <br>
      <div class="row">
        <div class="input-field col s6">
              <i class="material-icons prefix">account_circle</i>
          <input placeholder="Placeholder" id="first_name" type="text" class="validate" value="<?PHP echo $posts[0]['fullname'];?>" name="fullname">
          <label for="first_name" style="color: #000;">Full Name</label>
        </div>
        <div class="input-field col s6">
            <i class="material-icons prefix">verified_user</i>
          <input id="last_name" type="text" class="validate" value="<?PHP echo $posts[0]['tuser'];?>" name="tuser">
          <label for="last_name" style="color: #000;">Username</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
            <i class="material-icons prefix">business</i>
          <input id="text" type="text" class="validate" value="<?PHP echo $posts[0]['school'];?>" name="school">
          <label for="text" style="color: #000;">School</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
            <i class="material-icons prefix">message</i>
          <input id="email" type="email" class="validate" value="<?PHP echo $posts[0]['temail'];?>" name="temail">
          <label for="email" style="color: #000;">Email</label>
        </div>
      </div>
          <div class="form-group">
            <button type="submit" name="save" class="waves-effect waves-light btn-large" id="update" type="submit">
               SAVE
            </button>
    </div>
    </form>
  </div>
</div>
</div>
</div>
   <script src="js/jquery.min.js"></script>
   <script src="js/material.min.js"></script>
   <script type="text/javascript">
       $(document).ready(function(){
    $('.materialboxed').materialbox();
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