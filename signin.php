<?PHP

require_once 'pdo_conn.php';

$err = '';

  if (isset($_POST['login'])) {

    $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

    $email = trim($POST['email']);
    $pass = trim($POST['pass']);

    $records = $conn->prepare('SELECT * FROM students WHERE email = :email ');

    $records->bindParam(':email', $email);
  //  $records->bindParam(':pass', $_POST['pass']);

    $records->execute();

    $results = $records->fetch(PDO::FETCH_ASSOC);
    
    



    if (count($results) > 0 && password_verify($pass, $results['pass'])) {

                
                setcookie("hash", $results['hash'], time() +(1*365*24*60*60));
                header("Location: home.php");

    } else {

      $err = 'Sorry, those credentials do not match';

    }

  }


?>