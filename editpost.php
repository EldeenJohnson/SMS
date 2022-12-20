<?php 
$title = 'edit-post';
require_once 'db/conn.php';


if(isset($_POST['submit']))
{
    //extract values from the $_POST array
    $id = $_POST['id'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $contact = $_POST['phone'];
    $gender = $_POST['gender'];
   // $a_path = $_POST['avatar_path'];

   /* $orig_file = $_FILES["avatar"]["tmp_name"];
        $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
        $target_dir = 'uploads/';
        $destination = "$target_dir$contact.$ext";
        move_uploaded_file($orig_file,$destination);*/

    //call function to update and track if success / not
    $result = $crud->editRegistrant($id, $fname, $lname, $dob, $email, $contact, $gender, $a_path);

    if($result){
        header("location: viewrecords.php");
    }
    else{
        //echo 'error';
        include 'includes/errormessage.php';
    }
}

?>