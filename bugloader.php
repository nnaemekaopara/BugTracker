<?php
include ("connection.php");
 if(isset($_FILES['file'])) {
     $name = $_FILES['bug']['name'];

     $type = $_FILES['bug']['type'];
     $allowed = array('php', 'txt','html');

     $size = $_FILES['bug'][size];
     $max_size = 2097152;

     $tmp_name = $_FILES['bug']['tmp_name'];

     if (isset($name)) {
         if (!empty($name)) {

             if (($extension == 'php' || $extension == 'html') && $size <= $max_size) {

                 $location = 'bug/';

                 if (move_uploaded_file($tmp_name, $location . $name)) {
                     echo 'Uploaded!';
                     header("Location:bugstatus.php");
                 } else {
                     echo 'There was an error.';
                 }

             } else {
                 echo 'Please choose an appropriate file ext.';
             }
         }

     }
 }
?>