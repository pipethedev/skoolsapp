<?PHP
  // Include db config
require_once 'pdo_conn.php';


session_start();


 $err  = '';



if(isset($_POST['signup'])){
    
    $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);


    echo $_POST['school'];

    // Put post vars in regular vars
    $fullname =  trim($POST['fullname']);
    $temail = trim($POST['temail']);
    $password = trim($POST['password']);
    $tuser = trim($POST['tuser']);
    $school = trim($_POST['school']);
    $set = "{$temail}{$password}";
    $hash = md5($set);
    $file = 'empty.png';
    $hashed = password_hash($password, PASSWORD_DEFAULT);
    
    // Query for validation of tuserfullname and temail-id
$ret="SELECT * FROM teachers where  temail=:temail";
$queryt = $conn -> prepare($ret);
$queryt->bindParam(':temail',$temail,PDO::PARAM_STR);
$queryt -> execute();
$results = $queryt -> fetchAll(PDO::FETCH_OBJ);
if($queryt -> rowCount() == 0)
{
// Query for Insertion
$sql="INSERT INTO teachers (fullname, tuser, temail,  password, school, fetcher, file) VALUES (:fullname, :tuser, :temail, :password, :school, :fetcher, :file)";
$query = $conn->prepare($sql);
// Binding Post Values
$query->bindParam(':fullname',$fullname,PDO::PARAM_STR);
$query->bindParam(':tuser',$tuser,PDO::PARAM_STR);
$query->bindParam(':temail',$temail,PDO::PARAM_STR);
$query->bindParam(':password', $hashed,PDO::PARAM_STR);
$query->bindParam(':school',$school, PDO::PARAM_STR);
$query->bindParam(':fetcher',$hash, PDO::PARAM_STR);
$query->bindParam(':file',$file, PDO::PARAM_STR);
$query->execute();
$lastInsertId = $conn->lastInsertId();



if($lastInsertId){
    setcookie("fetcher", $hash, time() +(1*365*60*60));
    header('location:t-home.php');


}else{
$err ="Something went wrong.Please try again";
}

}
 else
{
$err  = "temail Address already exist. Please try again";
}







}
?>