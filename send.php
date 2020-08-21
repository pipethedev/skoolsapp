<?PHP
require 't-update.php';
require 'mail.php';


  $user = '';


if(isset($_POST['send'])){

  $oh = $_POST['user'];
  $select = R::getAll("SELECT * FROM students WHERE user = '$oh' ");
  if($select){
    $user = $oh;

    var_dump($select);

  }else{
    $user = '';
  }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/material.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.12.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.12.0/firebase-firestore.js"></script>
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
          <input placeholder="Title" id="first_name" type="text" class="validate" required name="title">
          <label for="first_name" style="color: #000;">Title</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
         <div class="file-field input-field">
      <div class="btn" style="background: #e67e22;">
        <span>File</span>
        <input type="file" name="attach1" required>
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
                </div>
      </div>
            <div class="row">
        <div class="input-field col s12">
            <i class="material-icons prefix">attach_file</i>
          <input id="text" type="text" class="validate" name="user" required autocomplete="off" placeholder="This is case sensitive">
          <label for="text" style="color: #000;">Student email or username</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
            <i class="material-icons prefix">message</i>
          <input id="email" type="email" class="validate" name="email">
          <label for="email" style="color: #000;">Parent's Email</label>
        </div>
      </div>
          <div class="form-group">
            <button type="submit" name="send" class="waves-effect waves-light btn-large" style="width: 100%;">
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


    db.collection("recent").where("user", "==", "<?PHP echo $user;?>").limit(1)
    .get()
    .then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
 
            var x = doc.data().hash;
            var y = doc.data().user;

      var myArray = ['#0097e6', '#44bd32', '#fbc531', '#e84118', '#9b59b6', '#e74c3c', '#95a5a6', '#9b59b6'];

      var randomItem = myArray[Math.floor(Math.random()*myArray.length)];

        db.collection("recent").doc().set({
        hash: x,
        code: "",
        action: "<?PHP echo $posts[0]['fullname'];?>" + " " + "sent your result" ,
        user: y,
        color: randomItem
    })
        .then(function() {
         console.log("Document successfully written!");
    })
        .catch(function(error) {
        console.error("Error writing document: ", error);
   });


        });
    })
    .catch(function(error) {
        console.log("Error getting documents: ", error);
    });

</script>
   <script type="text/javascript">
       $(document).ready(function(){
    $('.materialboxed').materialbox();
  });
   </script>
</body>
</html>