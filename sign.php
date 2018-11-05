<?php
// use show.php to display data
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Abhyuday</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo1.png" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Convergence|Pathway+Gothic+One|Rosario" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
<div id="heading" >
<img id="logo4" src="logo.png" />
<p id="mainheading"><b>PROFECTUS 2018-2019</b></p>
 <p id="subheading">FELLOWSHIP PROGRAM OF ABHYUDAY IIT BOMBAY</p>
 </div>
    <div id="input-group">
    <form action="sign_1.php" method="post" class ="form"><br>
    <p id="input">IITB Roll No : <input type="text" name="roll" placeholder="Roll No. " required=""></p><br>
    <div id="input-group">
                            
          <label>Company : </label>
          <select name="cname">
            <option value="LetsEndorse Development">LetsEndorse Development</option>
            <option value="Ketto Online Ventures Pvt Ltdg">Ketto Online Ventures Pvt Ltd</option>
            <option value="Vanguard Info Services">Vanguard Info Services</option>
            <option value="Kherwadi Social Welfare Association">Kherwadi Social Welfare Association</option>
            <option value="CRY">CRY</option>
            <option value="Swachhalay">Swachhalay</option>
         </select>
    </div>
	<br>
    <p id="input-group">
        <input type="radio" name="sign" value="sign" checked> Sign<br>
        <input type="radio" name="sign" value="unsign" > Unsign<br>   
    </p>
	<br>
    <input type="hidden" name="hidden" value="1">
    <button type="submit" class="btn">Submit</button>
    </form>
    </div>

    <style>
	#logo4{
	width:20%;
	}
	#mainheading{
	margin-top:-30px;
	}
	@media screen and (max-width:1280px) {
	
	#logo4{
	width:60%;
	}
	#mainheading{
	margin-top:-20px;
	}
	
	#mainheading{
	 font-size:70px;
	 }
	 
	#member{
	font-size:40px;
	}
	#mainheading{
	 font-size:50px;
	 }
	 
	#subheading{
	 font-size:16px;
	 }
	 #sub{
	 font-size:60px;
	 
	 }
	
	}
	</style>
</body>
</html>