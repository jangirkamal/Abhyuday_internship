<?PHP

if (isset($_POST['hidden'])) {
	$cname=$_POST['cname'];
	$roll=$_POST['roll'];
	$sign=$_POST['sign'];
	$db = mysqli_connect('localhost', 'root', '', 'abhyuday');
    $query = "INSERT INTO sign (roll, cname, sign) 
    VALUES('$roll','$cname','$sign')";
    mysqli_query($db, $query);
    echo "Succesfully ".$sign."ed"."<br>";
}
else{
	echo " --- ERROR --- "."<br>";
	// header('location: index.php');
}
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
	 <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
</head>
<body>
  <a href="index.php">Go Back?</a>
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