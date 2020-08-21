<?PHP


require 'conn.php';






$msg = '';


    $query = "SELECT * FROM students WHERE hash = '$hash' ";

    $result = mysqli_query($dbs, $query);

    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_free_result($result);

 



if(isset($_POST['update'])){
    $file = $_FILES['file']['name'];
    $size = $_FILES['file']['size'];
    $hash = $_COOKIE['hash'];
    $target = "img/".basename($_FILES['file']['name']);
    $fileNameCmps = explode(".", $file); //spiliting strings
    $fileExtension = strtolower(end($fileNameCmps));
    $allowedfileExtensions = array('jpg', 'png', 'jpeg');
    $user =  $posts[0]['user'];


if (in_array($fileExtension, $allowedfileExtensions)){
    
if($_FILES['file']['size'] <= 2097152  ){

if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
    

      
      $update = "UPDATE students SET file = '$file' WHERE hash = '$hash' ";

      $res = mysqli_query($dbs, $update);
      
      if($res == TRUE){

        $action = 'You just updated your profile picture';


          $new = "INSERT INTO recent (action, hash, user) VALUES ('$action', '{$_COOKIE['hash']}', '$user')";
          $r = mysqli_query($dbs, $new);
          if($r == TRUE){
          echo "<script>
          location.href= 'profile.php';
          </script>";
          }
      }else{
          $msg = "An error occured while updating your profile";
      }
      
      
  }else{
      $msg = "An error occured while updating your profile";
  }   
  
} else{
          $msg = "You can't upload files greater than 2mb";
      }
      
}else{
    $msg = "Only jpg, jpeg, png, gif files are allowed";
}


}

   mysqli_close($dbs);