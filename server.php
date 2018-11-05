<?php 
    session_start();

    // variable declaration
   // $username = "";
    $firstname = "";
    $lastname  = "";
    $year= "";
    $department = "";
    $phone = "";
    $email= "";
    $roll="";
  
    $file="";


    $errors = array(); 
    $_SESSION['success'] = "";

    // connect to database
    $db = mysqli_connect('localhost', 'root', '', 'abhyuday');

    // REGISTER USER
    if (isset($_POST['reg_user'])) {
        // receive all input values from the form
        //$username = mysqli_real_escape_string($db, $_POST['username']);
        $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
        $year = mysqli_real_escape_string($db, $_POST['year']);
        $department = mysqli_real_escape_string($db, $_POST['department']);
        $phone = mysqli_real_escape_string($db, $_POST['phone']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
        $roll = mysqli_real_escape_string($db, $_POST['roll']);
        $file=$_FILES['file']['name'];
        
        
   

        // form validation: ensure that the form is correctly filled
       
        if (empty($firstname)) { array_push($errors, "Firstname is required"); }
        if (empty($lastname)) { array_push($errors, "Lastname is required"); }
        if (empty($phone)) { array_push($errors, "Phone is required"); }
        if (empty($email)) { array_push($errors, "Email is required"); }
         if (empty($roll)) { array_push($errors, "IITB Roll no is required"); }
         if (empty($department)) { array_push($errors, "Department is required"); }
          if (empty($year)) { array_push($errors, "Year of study is required"); }
         //if (empty($username)) { array_push($errors, "Username is required"); }
        if (empty($password_1)) { array_push($errors, "Password is required"); }
         if (empty($file)) { array_push($errors, "Upload resume"); }
   
  
        

        if ($password_1 != $password_2) {
            array_push($errors, "The two passwords do not match");
        }

        // register user if there are no errors in the form
        if (count($errors) == 0) {
            $password = md5($password_1);//encrypt the password before saving in the database
            $query = "INSERT INTO fellowshipUsers (roll, firstname, lastname, year, department, phone, email, password) 
                      VALUES('$roll','$firstname','$lastname','$year','$department','$phone','$email', '$password')";
            mysqli_query($db, $query);
      

            $_SESSION['roll'] = $roll;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        }
    
         $file_result= "";
         
 
 
 
        if($_FILES["file"]["error"]>0)
           {
            $file_result .="no file uploade";
            $file_result .="error code uploade";  
           }

       else{
             move_uploaded_file($_FILES['file']['tmp_name'], "resumes/" . $_FILES["file"]["name"]);
             $file_result .="success";
           }
 
 
 

    }

    // ... 

    // LOGIN USER
    if (isset($_POST['login_user'])) {
        $roll = mysqli_real_escape_string($db, $_POST['roll']);
        $password = mysqli_real_escape_string($db, $_POST['password']);

        if (empty($roll)) {
            array_push($errors, "Roll No. is required");
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
        }
        

        if (count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM fellowshipUsers WHERE roll='$roll' AND password='$password'";
            $results = mysqli_query($db, $query);

            if (mysqli_num_rows($results) == 1) {
                $_SESSION['roll'] = $roll;
                $_SESSION['success'] = "You are now logged in";
                header('location: index.php');
            }else {
                array_push($errors, "Wrong Roll No. /password combination");
            }
        }
    }
    
    
    
  



?>