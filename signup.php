<?PHP
  // Include db config
require_once 'pdo_conn.php';


session_start();


 $err  = '';



if(isset($_POST['addUser'])){
    
    $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);


    echo $_POST['class'];

    // Put post vars in regular vars
    $fullname =  trim($POST['fullname']);
    $email = trim($POST['email']);
    $password = trim($POST['pass']);
    $user = trim($POST['user']);
    $class = trim($_POST['class']);
    $set = "{$email}{$password}";
    $hash = md5($set);
    $img = 'empty.png';
    $hashed = password_hash($password, PASSWORD_DEFAULT);
    
    // Query for validation of userfullname and email-id
$ret="SELECT * FROM students where   email=:email AND user = :user ";
$queryt = $conn -> prepare($ret);
$queryt->bindParam(':email',$email,PDO::PARAM_STR);
$queryt->bindParam(':user',$user,PDO::PARAM_STR);
$queryt -> execute();
$results = $queryt -> fetchAll(PDO::FETCH_OBJ);
if($queryt -> rowCount() == 0)
{
// Query for Insertion
$sql="INSERT INTO students (fullname, user, email,  pass, class, hash, file) VALUES (:fullname, :user, :email, :pass, :class, :hash, :file)";
$query = $conn->prepare($sql);
// Binding Post Values
$query->bindParam(':fullname',$fullname,PDO::PARAM_STR);
$query->bindParam(':user',$user,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':pass', $hashed,PDO::PARAM_STR);
$query->bindParam(':class',$class, PDO::PARAM_STR);
$query->bindParam(':hash',$hash, PDO::PARAM_STR);
$query->bindParam(':file', $img, PDO::PARAM_STR);
$query->execute();
$lastInsertId = $conn->lastInsertId();



if($lastInsertId){
    setcookie("hash", $hash, time() +(1*365*60*60));
    header('location:home.php');


}else{
$err ="Something went wrong.Please try again";
}

}
 else
{
$err  = "Email Address or username already exist. Please try again";
}







}
?>