<?PHP
require 'src/Clockwork.php';
require 'src/ClockworkException.php';

try
{
    // Create a Clockwork object using your API key
    $clockwork = new mediaburst\ClockworkSMS\Clockwork('c12a9801b416da72d38f6ee6aa8084dfda97bba7');

    // Setup and send a message
    $message = array( 'to' => '447000000000', 'message' => 'Hello World' );
    $result = $clockwork->send( $message );

    // Check if the send was successful
    if($result['success']) {
        echo 'Message sent - ID: ' . $result['id'];
    } else {
        echo 'Message failed - Error: ' . $result['error_message'];
    }
}
catch (mediaburst\ClockworkSMS\ClockworkException $e)
{
    echo 'Exception sending SMS: ' . $e->getMessage();
}
read, write

?>