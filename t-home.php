<?PHP
require 't-update.php';


?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/t-home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.12.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.12.0/firebase-firestore.js"></script>
</head>
<body>
<div class="jumbotron head">
    <div class="container text-white">
     <div class="row">
         <div class="col-md-6 col-sm-6 col-lg-6">
         <h4><?PHP echo $posts[0]['tuser'];?></h4>
         <p><?PHP echo $posts[0]['school'];?></p>
         </div>
         <div class="col-md-6 col-sm-6 col-lg-6" align="right" style="margin-top: -4.5rem; ">
            <div class="img-rounded" style="background-image: url('img/<?PHP echo $posts[0]['file'];?>'); height: 75px; width: 75px; background-position: center; background-size: cover; border-radius: 50%;" onclick="location.href='t-profile.php'"></div>
            <p><?PHP echo $posts[0]['temail'];?></p>
         </div>
    </div>
</div>
<div class="jumbo-foot">
<ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <a href="t-logout.php" class="text-dark">Logout</a>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center" onclick="location.href='t-class.html'">
    Classrooms
    <span class="badge badge-primary badge-pill" id="badge"></span>
  </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
    <a href="send.php" class="text-dark">Send Results</a>
    <span class="badge badge-primary badge-pill">1</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Send Notifications
    <span class="badge badge-primary badge-pill">1</span>
  </li>
</ul>
</div>
<div class="main-body">
    <h2 style="font-family:'Poppins', sans-serif; padding: 20px 20px 20px 20px; ">Create a class</h2>
    <div class="form-group">
            <button type="button" class="btn btn-primary btn-block btn-lg" data-toggle="modal" data-target="#exampleModal">
                Create a class
            </button>
    </div>

        <h2 style="font-family:'Poppins', sans-serif; padding: 20px 20px 20px 20px; ">Class chat</h2>
    <div class="form-group">
            <button type="button" class="btn btn-danger btn-block btn-lg dangers" onclick="location.href='group-chat.php'">
                Chatroom
            </button>
    </div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create a class</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="form-group">
      <div class="modal-body">
      
<div class="form-group">
<select  class="form-control" id="subject">
  <option value="ARABIC">ARABIC</option>
  <option value="AGRICULTURAL SCIENCE">AGRICULTURAL SCIENCE</option>
  <option value="AUTO PARTS MERCHANDISING">AUTO PARTS MERCHANDISING</option>
  <option value="AUTO MECHANICS">AUTO MECHANICS</option>
  <option value="AUTO MECHANICAL WORK">AUTO MECHANICAL WORK</option>
  <option value="AUTO ELECTRICAL WORK">AUTO ELECTRICAL WORK</option>
  <option value="AUTO BODY REPAIRS AND SPRAY PAINTING">AUTO BODY REPAIRS AND SPRAY PAINTING</option>
  <option value="APPLIED ELECTRICITY">APPLIED ELECTRICITY</option>
  <option value="ANIMAL HUSBANDRY">ANIMAL HUSBANDRY</option>
  <option value="BUSINESS MANAGEMENT">BUSINESS MANAGEMENT</option>
  <option value="BUILDING CONSTRUCTION">BUILDING CONSTRUCTION</option>
  <option value="BOOK KEEPING">BOOK KEEPING</option>
  <option value="BRICKLAYING">BRICKLAYING AND CONCRETING</option>
  <option value="BIOLOGY">BIOLOGY</option>
  <option value="BASKETRY">BASKETRY</option>
  <option value="CROP HUSBANDRY AND HORTICULTURE">CROP HUSBANDRY AND HORTICULTURE</option>
  <option value="COSMETOLOGY">COSMETOLOGY</option>
  <option value="COMPUTER STUDIES">COMPUTER STUDIES</option>
  <option value="COMMERCE">COMMERCE</option>
  <option value="CLOTHING AND TEXTILES">CLOTHING AND TEXTILES</option>
  <option value="CLERICAL OFFICE DUTIES">CLERICAL OFFICE DUTIES</option>
  <option value="CIVIC EDUCATION">CIVIC EDUCATION</option>
  <option value="CHRISTIAN RELIGIOUS STUDIES">CHRISTIAN RELIGIOUS STUDIES</option>
  <option value="CHEMISTRY">CHEMISTRY</option>
  <option value="CERAMICS">CERAMICS</option>
  <option value="CATERING CRAFT PRACTICE">CATERING CRAFT PRACTICE</option>
  <option value="CAPENTRY AND JOINERY">CAPENTRY AND JOINERY</option>
  <option value="DYEING & BLEACHING">DYEING & BLEACHING</option>
  <option value="DATA PROCESSING">DATA PROCESSING</option>
  <option value="ENGLISH LANGUAGE">ENGLISH LANGUAGE</option>
  <option value="ELECTRONICS OR BASIC ELECTRONICS">ELECTRONICS OR BASIC ELECTRONICS</option>
  <option value="ELECTRICAL INSTALLATION AND MAINTENANCE">ELECTRICAL INSTALLATION AND MAINTENANCE</option>
  <option value="ECONOMICS">ECONOMICS</option>
  <option value="FURTHER MATHEMATICS">FURTHER MATHEMATICS</option>
  <option value="FURNITURE MAKING">FURNITURE MAKING</option>
  <option value="FRENCH">FRENCH</option>
  <option value="FORESTRY">FORESTRY</option>
  <option value="FOODS AND NUTRITION">FOODS AND NUTRITION</option>
  <option value="FISHERIES">FISHERIES</option>
  <option value="FINANCIAL ACCOUNTING">FINANCIAL ACCOUNTING</option>
  <option value="TYPEWRITING">TYPEWRITING</option>
  <option value="TOURISM">TOURISM</option>
  <option value="TEXTILES">TEXTILES</option>
  <option value="TECHNICAL DRAWING">TECHNICAL DRAWING</option>
  <option value="STORE MANAGEMENT">STORE MANAGEMENT</option>
  <option value="STORE KEEPING">STORE KEEPING</option>
  <option value="SOCIAL STUDIES">SOCIAL STUDIES</option>
  <option value="SHORTHAND">SHORTHAND</option>
  <option value="SCULPTURE">SCULPTURE</option>
  <option value="SALESMANSHIP">SALESMANSHIP</option>
  <option value="REFRIGERATION AND AIR CONDITIONING">REFRIGERATION AND AIR CONDITIONING</option>
  <option value="RADIO">TELEVISION AND ELECTRONICS WORKS</option>
  <option value="PRINTING CRAFT PRACTICE">PRINTING CRAFT PRACTICE</option>
  <option value="PLUMBING AND PIPE FITTING">PLUMBING AND PIPE FITTING</option>
  <option value="PICTURE MAKING">PICTURE MAKING</option>
  <option value="PHYSICS">PHYSICS</option>
  <option value="PHYSICAL EDUCATION">PHYSICAL EDUCATION</option>
  <option value="PHOTOGRAPHY">PHOTOGRAPHY</option>
  <option value="PAINTING AND DECORATING">PAINTING AND DECORATING</option>
  <option value="OFFICE PRACTICE">OFFICE PRACTICE</option>
  <option value="MUSIC">MUSIC</option>
  <option value="MINING">MINING</option>
  <option value="METALWORK">METALWORK</option>
  <option value="MARKETING">MARKETING</option>
  <option value="MACHINE WOODWORKING">MACHINE WOODWORKING</option>
  <option value="LITERATURE IN ENGLISH">LITERATURE IN ENGLISH</option>
  <option value="LEATHERWORK">LEATHERWORK</option>
  <option value="LEATHER GOODS">LEATHER GOODS</option>
  <option value="JEWELLERY">JEWELLERY</option>
  <option value="ISLAMIC RELIGIOUS STUDIES">ISLAMIC RELIGIOUS STUDIES</option>
  <option value="INTEGRATED SCIENCE">INTEGRATED SCIENCE</option>
  <option value="INSURANCE">INSURANCE</option>
  <option value="INFORMATION AND COMMUNICATION TECHNOLOGY">INFORMATION AND COMMUNICATION TECHNOLOGY</option>
  <option value="IGBO">IGBO</option>
  <option value="HOME MANAGEMENT">HOME MANAGEMENT</option>
  <option value="HISTORY">HISTORY</option>
  <option value="HEALTH EDUCATION">HEALTH EDUCATION</option>
  <option value="HAUSA">HAUSA</option>
  <option value="GSM PHONES MAINTENANCE AND REPAIRS">GSM PHONES MAINTENANCE AND REPAIRS</option>
  <option value="GRAPHIC DESIGN">GRAPHIC DESIGN</option>
  <option value="GOVERNMENT">GOVERNMENT</option>
  <option value="GEOGRAPHY">GEOGRAPHY</option>
  <option value="MATHEMATICS">MATHEMATICS</option>
  <option value="GENERAL KNOWLEDGE IN ART">ART</option>
  <option value="GENERAL AGRICULTURE">GENERAL AGRICULTURE</option>
  <option value="GARMENT MAKING">GARMENT MAKING</option>
  <option value="VISUAL ART">VISUAL ART</option>
  <option value="UPHOLSTERY">UPHOLSTERY</option>
  <option value="WOODWORK">WOODWORK</option>
  <option value="WELDING AND FABRICATION ENGINEERING CRAFT PRACTICE">WELDING AND FABRICATION ENGINEERING CRAFT PRACTICE</option>
  <option value="YORUBA">YORUBA</option>
</select>
            </div>
            <div class="form-group">
                <input type="number" name="" min="0" max="6" class="form-control" placeholder="Create a group code" required id="code">
            </div>

      
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary login btn-lg btn-block" onclick="createClass()">Create</button>
      </div>
        </div>
    </div>
  </div>
</div>



</div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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


    db.collection('classes').where('hash', '==', '<?PHP echo $_COOKIE['fetcher']?>').get().then(snap => {
   size = snap.size // will return the collection size
   document.getElementById('badge').innerHTML = size ;
});



</script>
<script src="js/jquery.min.js"></script>
<script src ="js/class.js"></script>
<script type="text/javascript">
  var hash = Cookies.get('fetcher');
  if(hash == ""){
    location.href = 't-signin.php';
  }
</script>
</body>
</html>