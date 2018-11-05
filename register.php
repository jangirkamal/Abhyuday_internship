<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	 <link rel="shortcut icon" type="image/x-icon" href="img/logo1.png" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Convergence|Pathway+Gothic+One|Rosario" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<style>
	#logo4{
	width:60%;
	}
	#sop{
	padding-left:120px;
	}
	#format{
	 font-size:15px;
	}
	#reg1{
	margin-top:-40px;
	}
	
	@media screen and (max-width: 1280px){
          #reg{
                font-size: 60px;
              }
              }
	</style>
        
</head>
<body>
   
        <div class="header">
                 <img id="logo4" src="logo.png" />
		<h2 style="letter-spacing: 1px;" id="reg1" >GUIDELINES</h2>
		<p style="font-size:15px;"><b>Please go through the following guidelines before registration</b></p>
		
	</div>
	<br>
	<div class="guidediv">
	<p ><i class="fa fa-check-circle" aria-hidden="true"></i> This web portal is for the registration of first year and fourth year (dual degree) of any branch.</p>
	 <p ><i class="fa fa-check-circle" aria-hidden="true"></i> The rest must signup for the fellowships through <a href="http://placements.iitb.ac.in/training/" style="text-decoration:none"  target="_blank">PT cell</a> </p>

       </div>
       <br>
       
       <div class="guidediv">
       <h4>REGISTRATION</h4>
	<p><i class="fa fa-check-circle" aria-hidden="true"></i> Candidates can either upload their one page resume or the SoP given. </p>
	 <p ><i class="fa fa-check-circle" aria-hidden="true"></i> Candidate must upload their one page resume in the pdf format. </p>

          <p><i class="fa fa-check-circle" aria-hidden="true"></i> Incase, he/she wishes to fill the SoP, they must download the given <a href="sop.docx" style="text-decoration:none" >SoP format</a> and upload in pdf format. </p>
          	 <p><i class="fa fa-check-circle" aria-hidden="true"></i> File name must be <b>Roll_Number.pdf </b> where 'Roll_Number' is your IIT Bombay enrolled roll number.</p>

       </div>
       <br>

      <div  class="guidediv">
        <h4>PENALTY</h4>
	<p><i class="fa fa-check-circle" aria-hidden="true"></i> A report of each fellow would be submitted to the Dean of student affairs at the end of their fellowship tenure. 
        </p><br>
	 <p >If the candidate is found to be- </p>
          <p>involved in any misconduct during the fellowship duration/
            have quit the fellowship any time before his/her fellowship duration ends/
              rejected the fellowship once accepted</p><br>
              <p><b>it would lead to bad remarks being noted in his/her final report sent to the dean of student affairs and candidate would be further penalized. </b></p>


       </div>
	
   
	<div class="header">
		<h2 style="letter-spacing: 1px;" id="reg" >REGISTER</h2>
	</div>
	
	<form method="post" action="register.php" enctype="multipart/form-data">

		<?php include('errors.php'); ?>

		

		<div class="input-group">
			<label>Firstname</label>
			<input type="text" name="firstname" value="<?php echo $firstname; ?>">
		</div>

		<div class="input-group">
			<label>Lastname</label>
			<input type="text" name="lastname" value="<?php echo $lastname; ?>">
		</div>

	

		<div class="input-group">
			<label>Phone</label>
			<input type="text" name="phone" value="<?php echo $phone; ?>">
		</div>

		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		
		
		<div class="input-group">
			<label>IITB Roll No</label>
			<input type="text" name="roll" value="<?php echo $roll; ?>">
		</div>
		
		

          <div class="input-group">
                            
                              <label>Department</label>
                            <select name="department" >
                      
                                 <option value="Aerospace Engineering">Aerospace Engineering</option>
                                 <option value="Biosciences and Bioengineering">Biosciences and Bioengineering</option>
                                 <option value="Chemical Engineering">Chemical Engineering</option>
                                 <option value="Chemistry">Chemistry</option>
                                 <option value="Civil Engineering">Civil Engineering</option>
                                 <option value="Computer Science & Engineering">Computer Science & Engineering</option>
                                 <option value="Earth Sciences">Earth Sciences</option>
                                 <option value="Electrical Engineering">Electrical Engineering</option>
                                 <option value="Energy Science and Engineering">Energy Science and Engineering</option>
                                 <option value="Humanities & Social Science">Humanities & Social Science</option>
                                 <option value="Industrial Design Centre">Industrial Design Centre</option>
                                 <option value="Mathematics">Mathematics</option>
                                 <option value="Mechanical Engineering">Mechanical Engineering</option>
                                 <option value="Metallurgical Engineering & Materials Science">Metallurgical Engineering & Materials Science</option>
                                 <option value="Physics">Physics</option>
                                 <option value="Shailesh J. Mehta School of Managemen">Shailesh J. Mehta School of Managemen</option>
                          </select>
                             
         </div>
           <div class="input-group">
                           <label>Year of study</label>
                            <select name="year">
                                 <option value="1st year">1st year</option>
                                 <option value="4th year Dual degree">4th year Dual degree</option>
                              </select>
        </div>


		<!--<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value=""> 
		</div>-->
		
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		
		<div class="input-group">
			<label>Upload Resume/SoP</label>
			<p style="font-size:15px;">file name must be Your_RollNumber.pdf (eg.150020037.pdf)</p>
			<input type="file" name="file">
		</div>
            
          
	   
              





 
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already registered? <a href="login.php">Sign in</a>
		</p>
	</form>
	<br>
	<br></body>
</html>