<?PHP



require 'conn.php';

$msg = '';



if(isset($_POST['update'])){
    $file = $_FILES['file']['name'];
    $size = $_FILES['file']['size'];
    $fetcher = $_COOKIE['fetcher'];
    $target = "img/".basename($_FILES['file']['name']);
    $fileNameCmps = explode(".", $file); //spiliting strings
    $fileExtension = strtolower(end($fileNameCmps));
    $allowedfileExtensions = array('jpg', 'png', 'jpeg');

//    $msg =  $msgile;


if (in_array($fileExtension, $allowedfileExtensions)){
    


    
  if($_FILES['file']['size'] <= 2097152 ){

    if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
      
      $update = "UPDATE teachers SET file = '$file' WHERE fetcher = '$fetcher' ";

      $res = mysqli_query($conn, $update);
      
      if($res == TRUE){
          $msg =  "<script>
          location.href= 't-profile.php';
          </script>";
      }else{
         $msg =  "An error occured while updating your profile";
      }
      
      
  }else{
     $msg =  "An error occured while updating your profile";
  }   
  
} else{
         $msg =  "You can't upload files greater than 2mb";
      }
      
}else{
   $msg =  "Only jpg, jpeg, png, gif files are allowed";
}


}

