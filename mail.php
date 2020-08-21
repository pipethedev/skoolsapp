
<?php

    error_reporting(E_ALL);

    ini_set('display_errors', 1);

    require_once __DIR__. "/mailer/PHPMailer.php";
    require_once __DIR__. "/mailer/SMTP.php";
    require_once __DIR__."/mailer/Exception.php";

    $mesg = '';




if (isset($_FILES) && (bool) $_FILES) {

    ini_set('SMTP', "smtp.gmail.com");
    ini_set('smtp_port', "465");
    ini_set('sendmail_from', "davmuri1414@gmail.com");



    $allowedExtensions = array("pdf", "doc", "docx", "jpeg", "jpg", "png");

    $files = array();
    foreach ($_FILES as $name => $file) {
        $file_name = $file['name'];
        $temp_name = $file['tmp_name'];
        $file_type = $file['type'];
        $path_parts = pathinfo($file_name);
        $ext = $path_parts['extension'];
        if (!in_array($ext, $allowedExtensions)) {
            die("File $file_name has the extensions $ext which is not allowed");
        }
        array_push($files, $file);
    }

    // email fields: to, from, subject, and so on
    $to = $_POST['email'];
    $user = $_POST['user'];
    $from = "davmuri1414@gmail.com";
    $subject = $_POST['title'];
    $message = "School reports";
    $headers = "From: $from";



    $select = R::getAll("SELECT * FROM students WHERE user = '$user' ");

    if($select){


            // boundary 
    $semi_rand = md5(time());
    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

    // headers for attachment 
    $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";

    // multipart boundary 
    $message = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/plain; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n";
    $message .= "--{$mime_boundary}\n";

    // preparing attachments
    for ($x = 0; $x < count($files); $x++) {
        $file = fopen($files[$x]['tmp_name'], "rb");
        $data = fread($file, filesize($files[$x]['tmp_name']));
        fclose($file);
        $data = chunk_split(base64_encode($data));
        $name = $files[$x]['name'];
        $message .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$name\"\n" .
                "Content-Disposition: attachment;\n" . " filename=\"$name\"\n" .
                "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
        $message .= "--{$mime_boundary}\n";
    }
    // send

    $ok = mail($to, $subject, $message, $headers);
    if ($ok) {
        $mesg =  "<p>mail sent to $to!</p>";
    } else {
        $mesg =  "<p style='color:red';>mail could not be sent!</p>";
    }

    }else{
        $mesg =  "<p>The students email or username doesn't exist.</p>";
    }


}
?>