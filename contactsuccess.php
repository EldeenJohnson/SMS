<?php 
    $title = 'Contact Success';
    require_once 'includes/header.php';

    require_once 'sendemail.php';
    

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
            echo '<h1 class="text-center text-success"> Request Submitted Successfully</h1>';
            SendEmail::SendMail($email, 'Thanks for contacting the ABC Academy', 'We are happy to heear from you and, you will be contacted soon.');
            include 'includes/successmessage.php';
        }
        else{
           // echo '<h1 class="text-center text-danger"> There was an error in processing!</h1>';
           include 'includes/errormessage.php';
            }

    ?>


<?php require_once 'includes/footer.php'; ?>