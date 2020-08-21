<?PHP

?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/material.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
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
        .floating{
    animation-name: floating;
    animation-duration: 3s;
    animation-iteration-count: infinite;
    animation-timing-function: ease-in-out;
}
@keyframes floating {
    from { transform: translate(0,  0px); }
    65%  { transform: translate(0, 15px); }
    to   { transform: translate(0, -0px); }    
}
    </style>
<div class="main">
    <div class="jumbotron" style="background: #6c5ce7; height: 35%; width: 100%; position: fixed; top: 0; left: 0;">
        <img src="img/arrow.png" height="20" width="20" onclick="location.href='t-home.php'" style="position: absolute; top: 1.5rem; left: 1.5rem;">
        <center>
              <div style="background-image:url('img/choice.png'); 
              background-size:cover; background-position:center; height:100px; width:100px; border-radius: 50%; z-index: 99999999;
              margin: 10% auto;" class="floating">
              </div>
              <p style="color: white; margin-top: -2rem; font-size: 18px; font-family:'Nunito', sans-serif; ">Send Results</p>
        </center>
    </div>
    <div class="container">
<div class="form-place" style="background: white; position: absolute; top: 30%; left: -1%; border-top-right-radius:16%; height: 65%; width: 100%; border-top-left-radius:16%;">
    <div class="row" style="margin-top: 3rem;">
    <form class="col s12" method="POST" action="" enctype="multipart/form-data">
      <?PHP echo $mesg; ?>
      <div class="row">
        <div class="input-field col s12">
              <i class="material-icons prefix">account_circle</i>
          <input placeholder="Title" id="first_name" type="text" class="validate" required name="title" value="Notification From Amos Famoye" readonly>
          <label for="first_name" style="color: #000;">Title</label>
        </div>
      </div>

            <div class="row">
        <div class="input-field col s12">
            <i class="material-icons prefix">attach_file</i>
          <input id="text" type="text" class="validate" name="user" required autocomplete="off" placeholder="This is case sensitive">
          <label for="text" style="color: #000;">Parent Email</label>
        </div>
      </div>
  <div class="row">
    <div class="col s12">
      <div class="row">
        <div class="input-field col s12">
           <i class="material-icons prefix">markunread</i>
          <textarea id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1">Textarea</label>
        </div>
      </div>
    </div>
  </div>
          <div class="form-group">
        <button class="btn waves-effect waves-light btn-large" style="width: 100%;" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
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
   </script>
</body>
</html>