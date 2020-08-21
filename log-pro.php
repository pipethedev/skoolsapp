<?PHP

require_once 'pdo_conn.php';

$err = '';

  if (isset($_POST['login'])) {

    $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

    $temail = trim($POST['temail']);
    $password = trim($POST['password']);

    $records = $conn->prepare('SELECT * FROM teachers WHERE temail = :temail ');

    $records->bindParam(':temail', $temail);
  //  $records->bindParam(':password', $_POST['password']);

    $records->execute();

    $results = $records->fetch(PDO::FETCH_ASSOC);
    
    



    if (count($results) > 0 && password_verify($password, $results['password'])) {

                
                setcookie("fetcher", $results['fetcher'], time() +(1*365*24*60*60));
                header("Location: t-home.php");

    } else {

      $err = 'Sorry, those credentials do not match';

    }

  }


?>