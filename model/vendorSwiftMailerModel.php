<?php
require '../vendor/autoload.php';

class Mailer
{
    private $transport;
    private $mailer;

    public function initMailer()
    {
        // Create the Transport
        $this->transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
            ->setUsername('preethisenthilkumar1801@gmail.com')
            ->setPassword('123456');

        // Create the Mailer using your created Transport
        $this->mailer = new Swift_Mailer($this->transport);
    }

    public function sendMessage($mailTo, $password)
    {
        try {
            // Create a message
            $message = (new Swift_Message('Recovered Password'))
                ->setFrom(['preethisenthilkumar1801@gmail.com' => 'Test Mail Service'])
                ->setTo([$mailTo => 'Forget Password'])
                ->setBody('Here is Your password: ' . $password);

            // Send the message
            $result = $this->mailer->send($message);
            if ($result) {
                echo "<br/>Password sent to<br/>" . $mailTo . '. Please check.';
            } else {
                echo "<br/>Message not sent.<br/>";
            }
        } catch (Exception $e) {
            echo 'Caught exception: ' . $e->getMessage();
        }
    }
}

// Usage example:
$mailer = new Mailer();
$mailer->initMailer();
$mailTo = 'preethisenthilkumar1801@gmail.com';
$password = '123456';
$mailer->sendMessage($mailTo, $password);
?>
