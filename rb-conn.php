<?PHP
require_once 'rb.php';

$conn =  R::setup( 'mysql:host=localhost;dbname=skoolsapp', 'root', 'mysql' );

if($conn == TRUE){
//echo 'connected';
}else{
    echo "bad connection";
}
       
?>