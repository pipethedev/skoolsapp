<?php


    require_once __DIR__.'/rb-conn.php';

    require 'conn.php';

    $hash = $_COOKIE['hash'];

    if($hash == ""){
        header('location: register.php');
    }


    $query = "SELECT * FROM students WHERE hash = '$hash' ";

    $result = mysqli_query($dbs, $query);

    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_free_result($result);

    mysqli_close($dbs);




    $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);


    // Put post vars in regular vars
    $fullname =  trim($POST['fullname']);
    $email = trim($POST['email']);
    $user = trim($POST['user']);
    $class = trim($_POST['class']);

    $rows = R::getAll(" SELECT * FROM students WHERE hash =  '$hash'  ");

    foreach ($rows as $row ){
    $fuser = $row['user'];
    $e = $row['email'];
    }



 
if(isset($_POST['save'])){
    
    $request = "SELECT * FROM students WHERE (user = '$user' || email = '$email' ) AND (user != '$fuser'|| email != '$e')  ";
   
    $mans  = mysqli_query($dbs, $request);
    
   if(mysqli_num_rows($mans) > 0){
    $msg =  "<p style='color:#f44336'>Username or email already exist<p>";
   } else {
    
  
    $main = R::exec("UPDATE students SET user = '$user', email = '$email', class = '$class' WHERE hash = '$hash'  ");
     
     if($main == TRUE){
         
         echo "<script>window.location.href = 'profile.php'; </script>";


     }
     
    

}

}

?>