<?php include('server.php') ?>
<?php

 $targetfolder = "resumes/";

 $targetfolder = $targetfolder . basename( $_FILES['file']['resume']) ;

if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

 {

 echo "The file ". basename( $_FILES['file']['resume']). " is uploaded";

 }

 else {

 echo "Problem uploading file";

 }

 ?>