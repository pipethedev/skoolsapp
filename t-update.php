<?php


    require_once __DIR__.'/rb-conn.php';

    require 'conn.php';

    $fetcher = $_COOKIE['fetcher'];

    if($fetcher == ""){
        header('location:register.php');
    }


    $query = "SELECT * FROM teachers WHERE fetcher = '$fetcher' ";

    $result = mysqli_query($dbs, $query);

    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_free_result($result);

    mysqli_close($dbs);




    $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);


    // Put post vars in regular vars
    $fullname =  trim($POST['fullname']);
    $temail = trim($POST['temail']);
    $tuser = trim($POST['tuser']);
    $school = trim($_POST['school']);

    $rows = R::getAll(" SELECT * FROM teachers WHERE fetcher =  '$fetcher'  ");

    foreach ($rows as $row ){
    $ftuser = $row['tuser'];
    $e = $row['temail'];
    }



 
if(isset($_POST['save'])){
    
    $request = "SELECT * FROM teachers WHERE (tuser = '$tuser' || temail = '$temail' ) AND (tuser != '$ftuser'|| temail != '$e')  ";
   
    $mans  = mysqli_query($dbs, $request);
    
   if(mysqli_num_rows($mans) > 0){
    $msg =  "<p style='color:#f44336'>Username or Email already exist<p>";
   } else {
    
  
    $main = R::exec("UPDATE teachers SET tuser = '$tuser', temail = '$temail', school = '$school' WHERE fetcher = '$fetcher'  ");
     
     if($main == TRUE){
         
         header('location:t-profile.php'); 


     }
     
    

}

}

?>