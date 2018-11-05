<?php 
    session_start(); 

    if (!isset($_SESSION['roll'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['roll']);
        header("location: login.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
     <link rel="shortcut icon" type="image/x-icon" href="img/logo1.png" />
    <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="table.css">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
        <script type="text/javascript" src="app.js"></script>
       <link href="https://fonts.googleapis.com/css?family=Convergence|Pathway+Gothic+One|Rosario" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
       
        <style>
        #logo4{
	width:40%;
	}
	#phome{
	margin-top:-40px;}
        .date{
         font-family: 'Arial';
         }
         caption{
          padding-bottom:25px;
          }
          
          
          .cente{
           text-align:center;
           }
        </style>
</head>

<body ng-app="myApp" ng-controller="orderCtrl">
    <div class="header">
       <img id="logo4" src="logo.png" />
        <h2 id="phome">Home Page</h2>
    </div>
    <div class="content">

        <!-- notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="error success" >
                <h3>
                    <?php 
                        echo $_SESSION['success']; 
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>

        <!-- logged in user information -->
        <?php  if (isset($_SESSION['roll'])) : ?>
            <div style="padding-bottom:20px">
            <div style="float:left">Welcome <strong><?php echo $_SESSION['roll']; ?></strong></div>
            <div style="float:right"> <a href="index.php?logout='1'" style="color:red;">logout</a> </div>
            </div>
        <?php endif ?>
    </div>
     


<div ng-show="tab==0" >
<table class="bordered" ng-show="i==0">
     
    <thead>
    
    <tr>
        <th style="text-align:center">Sr.No.</th>        
        <th style="text-align:center">Company Name</th>
          <th style="text-align:center">JAF</th>
        <th style="text-align:center">Closes on</th>
        <th style="text-align:center">Detail</th>
        
    </tr>
    </thead>
    
    <tr>
        <td style="text-align:center" class="date">1</td>        
        <td style="text-align:center">LetsEndorse Development</td>
     
        <td style="text-align:center"><a href="" ng-click="tab=1" >Community Builder </td>
           <td style="text-align:center" class="date">15/11/17</td>  
         <td style="text-align:center"><a href="sign.php" target="_blank" >Click here to sign/unsign</a></td>
    </tr>        
   
      <tr>
        <td style="text-align:center" class="date">2</td>        
        <td style="text-align:center">LetsEndorse Development</td>
        <td style="text-align:center"><a href="" ng-click="tab=2" >Innovation Onboarding</a></td>
        <td style="text-align:center" class="date">15/11/17</td>  
         <td style="text-align:center"><a href="sign.php" target="_blank" >Click here to sign/unsign</a></td>
    </tr>  
    
     <tr>
        <td style="text-align:center" class="date">3</td>        
        <td style="text-align:center"> LetsEndorse Development</td>
        <td style="text-align:center"><a href="" ng-click="tab=3" >OPINE</a></td>
         <td style="text-align:center" class="date">15/11/17</td>  
         <td style="text-align:center"><a href="sign.php" target="_blank" >Click here to sign/unsign</a></td>
    </tr>  
    
     <tr>
        <td style="text-align:center" class="date">4</td>        
        <td style="text-align:center">LetsEndorse Development</td> 
        <td style="text-align:center"><a href="" ng-click="tab=4" >NGO Outreach, On-boarding and Technology adoption </a></td>
         <td style="text-align:center" class="date">15/11/17</td>  
         <td style="text-align:center"><a href="sign.php" target="_blank" >Click here to sign/unsign</a></td>
    </tr>  
    
        <tr>
        <td style="text-align:center" class="date">5</td>        
        <td style="text-align:center">LetsEndorse Development</td>
     
        <td style="text-align:center"><a href="" ng-click="tab=5" >Open Ended Role</td>
           <td style="text-align:center" class="date">15/11/17</td>  
         <td style="text-align:center"><a href="sign.php" target="_blank" >Click here to sign/unsign</a></td>
    </tr>        
   
      <tr>
        <td style="text-align:center" class="date">6</td>        
        <td style="text-align:center">Ketto Online Ventures Pvt Ltd</td>
        <td style="text-align:center"><a href="" ng-click="tab=6" >Intern-BD NGO</a></td>
        <td style="text-align:center" class="date">15/11/17</td>  
         <td style="text-align:center"><a href="sign.php" target="_blank" >Click here to sign/unsign</a></td>
    </tr>  
    
    
    
    <tr>
        <td style="text-align:center" class="date">7</td>        
        <td style="text-align:center">Vanguard Info Services</td>
     
        <td style="text-align:center"><a href="" ng-click="tab=7" >Project Intern</td>
           <td style="text-align:center" class="date">15/11/17</td>  
         <td style="text-align:center"><a href="sign.php" target="_blank" >Click here to sign/unsign</a></td>
    </tr>        
   
    
     <tr>
        <td style="text-align:center" class="date">8</td>        
        <td style="text-align:center"> Kherwadi Social Welfare Association</td> 
        <td style="text-align:center"><a href="" ng-click="tab=8" > AAL-Architects ( Anytime Anywhere Learning)
</a></td>
         <td style="text-align:center" class="date">15/11/17</td>  
         <td style="text-align:center"><a href="sign.php" target="_blank" >Click here to sign/unsign</a></td>
    </tr>  
    
      <tr>
        <td style="text-align:center" class="date">9</td>        
        <td style="text-align:center"> CRY</td>
        <td style="text-align:center"><a href="" ng-click="tab=9" >Winter Intern</a></td>
         <td style="text-align:center" class="date">15/11/17</td>  
         <td style="text-align:center"><a href="sign.php" target="_blank" >Click here to sign/unsign</a></td>
    </tr>     
   
      <tr>
        <td style="text-align:center" class="date">10</td>        
        <td style="text-align:center">Swachhalay</td>
        <td style="text-align:center"><a href="" ng-click="tab=10" >Social Media / Design</a></td>
        <td style="text-align:center" class="date">15/11/17</td>  
         <td style="text-align:center"><a href="sign.php" target="_blank" >Click here to sign/unsign</a></td>
    </tr>  
    

 
    
    

</table>

</div>




<div ng-show="tab==1">
 
 <table class="bordered">
   
    <caption ><b>JAF of LetsEndorse Development (1)</b></caption>
    
    <tr>
       
        <td class="lables"><b>Website</b></td>
        <td><a href="https://www.letsendorse.com/" target="_blank" >https://www.letsendorse.com/</a></td>
    </tr> 
    <tr>
       
        <td class="lables"><b>About</b></td>
        <td>LetsEndorse is a social venture and a digital market-network of powerful social innovations /entrepreneurs from across the globe, grass-root implementation partners/NGOs, responsible corporations, local administration and socially-savvy individuals. Through its technology footprint, LetsEndorse enables intelligent knowledge harnessing of practicable social models, builds collaborations for co-creating and scaling-up of solutions and fosters mobilization of funds/resources from various stakeholders transparently for accelerated intervention. The homegrown suite of technology-enabled products build operational efficiency and greater transparency in the way social organizations function and deliver the solutions at the last-mile. LetsEndorse is empowered by the Social Alpha (an initiative of TATA Trusts) and NASSCOM 10k Start-up and harbours an ambitious vision of aggregating the hugely fragmented socio-development ecosystem.
We work with over 500 NGOs across India, 300 Social Entrepreneurs from 35 Countries across the World, several Corporates and Individuals and are on a mission to solve social issues at Scale!</td>
    </tr> 
      
  
      
    <tr>
       
        <td class="lables"><b>Job Description</b></td>
        <td>Research / landscaping the student volunteer community across India and working with the Founding team to strengthen this community thereby maximizing the collective impact. Ideal candidate would be part of the leadership team at NSS / Rotaract or similar impact focused club.</td>
    </tr>  
    
     <tr>
       
        <td class="lables"><b>Accommodation</b></td>
        <td>Not Provided</td>
    </tr>  
      
    <tr>
       
        <td class="lables"><b>Stipend/month</b></td>
        <td class="date">5000.00 INR</td>
    </tr>
     
    <tr>
        <td class="lables"><b>Place of Posting</b></td>
        <td>Bengaluru</td>
    </tr>  
    
         
    <tr>
        <td class="lables"><b>Duration</b></td>
        <td class="date">Winters(4-6 Weeks)</td>
    </tr>
    
      <tr>
        <td class="lables"><b>Selection Procedure</b></td>
        <td>Interview and Assignment</td>
    </tr>   
    
      <tr>
        <td class="lables"><b>Additional Information</b></td>
        <td> Food is provided. Accommodation is not provided. Travel expenses - 3AC class from Mumbai to Bengaluru and back.</td>
    </tr>    
           
           
    
   
</table>
<div style="text-align:center">
<a href="" ng-click="tab=0">Go to JAF</a>
</div>

</div>



<div ng-show="tab==2">
 
 <table class="bordered">
   
    <caption ><b>JAF of LetsEndorse Development (2)</b></caption>
    
    <tr>
       
        <td class="lables"><b>Website</b></td>
        <td><a href="https://www.letsendorse.com/" target="_blank" >https://www.letsendorse.com/</a></td>
    </tr> 
    <tr>
       
        <td class="lables"><b>About</b></td>
        <td>LetsEndorse is a social venture and a digital market-network of powerful social innovations /entrepreneurs from across the globe, grass-root implementation partners/NGOs, responsible corporations, local administration and socially-savvy individuals. Through its technology footprint, LetsEndorse enables intelligent knowledge harnessing of practicable social models, builds collaborations for co-creating and scaling-up of solutions and fosters mobilization of funds/resources from various stakeholders transparently for accelerated intervention. The homegrown suite of technology-enabled products build operational efficiency and greater transparency in the way social organizations function and deliver the solutions at the last-mile. LetsEndorse is empowered by the Social Alpha (an initiative of TATA Trusts) and NASSCOM 10k Start-up and harbours an ambitious vision of aggregating the hugely fragmented socio-development ecosystem.
We work with over 500 NGOs across India, 300 Social Entrepreneurs from 35 Countries across the World, several Corporates and Individuals and are on a mission to solve social issues at Scale!</td>
    </tr> 
      
  
      
    <tr>
       
        <td class="lables"><b>Job Description</b></td>
        <td>LetsEndorse works with about 300 Social entrepreneurs across the world. The candidate in this role would get an opportunity to research, reach out to and on-board innovators from across the world thereby learning a great deal about social innovations and networking with innovators from across the world. Ideal candidate would be someone who is a hustler, go-getter and self-starter.
</td>
    </tr>  
    
     <tr>
       
        <td class="lables"><b>Accommodation</b></td>
        <td>Not Provided</td>
    </tr>  
      
    <tr>
       
        <td class="lables"><b>Stipend/month</b></td>
        <td class="date">5000.00 INR</td>
    </tr>
     
    <tr>
        <td class="lables"><b>Place of Posting</b></td>
        <td>Bengaluru</td>
    </tr>  
    
         
    <tr>
        <td class="lables"><b>Duration</b></td>
        <td class="date">Winters(4-6 Weeks)</td>
    </tr>
    
      <tr>
        <td class="lables"><b>Selection Procedure</b></td>
        <td>Interview and Assignment</td>
    </tr>   
    
      <tr>
        <td class="lables"><b>Additional Information</b></td>
        <td>Food is provided. Accommodation is not provided. Travel expenses - 3AC class from Mumbai to Bengaluru and back.</td>
    </tr>    
           
           
    
   
</table>
<div style="text-align:center">
<a href="" ng-click="tab=0">Go to JAF</a>
</div>

</div>





<div ng-show="tab==3">
 
 <table class="bordered">
   
    <caption ><b>JAF of LetsEndorse Development (3)</b></caption>
    
    <tr>
       
        <td class="lables"><b>Website</b></td>
        <td><a href="https://www.letsendorse.com/" target="_blank" >https://www.letsendorse.com/</a></td>
    </tr> 
    <tr>
       
        <td class="lables"><b>About</b></td>
        <td>LetsEndorse is a social venture and a digital market-network of powerful social innovations /entrepreneurs from across the globe, grass-root implementation partners/NGOs, responsible corporations, local administration and socially-savvy individuals. Through its technology footprint, LetsEndorse enables intelligent knowledge harnessing of practicable social models, builds collaborations for co-creating and scaling-up of solutions and fosters mobilization of funds/resources from various stakeholders transparently for accelerated intervention. The homegrown suite of technology-enabled products build operational efficiency and greater transparency in the way social organizations function and deliver the solutions at the last-mile. LetsEndorse is empowered by the Social Alpha (an initiative of TATA Trusts) and NASSCOM 10k Start-up and harbours an ambitious vision of aggregating the hugely fragmented socio-development ecosystem.
We work with over 500 NGOs across India, 300 Social Entrepreneurs from 35 Countries across the World, several Corporates and Individuals and are on a mission to solve social issues at Scale!</td>
    </tr> 
      
  
      
    <tr>
       
        <td class="lables"><b>Job Description</b></td>
        <td>World's first open innovation engine with real challenges crowdsourced from the grassroots community. Students, Entrepreneurs and Innovators ideate and invent solutions and Corporate sponsors support the cause. The selected candidate to look at the scope of this platform and design a go to market strategy as well as organize atleast one Pan-India challenge.</td>
    </tr>  
    
     <tr>
       
        <td class="lables"><b>Accommodation</b></td>
        <td>Not Provided</td>
    </tr>  
      
    <tr>
       
        <td class="lables"><b>Stipend/month</b></td>
        <td class="date">5000.00 INR</td>
    </tr>
     
    <tr>
        <td class="lables"><b>Place of Posting</b></td>
        <td>Bengaluru</td>
    </tr>  
    
         
    <tr>
        <td class="lables"><b>Duration</b></td>
        <td class="date">Winters(4-6 Weeks)</td>
    </tr>
    
      <tr>
        <td class="lables"><b>Selection Procedure</b></td>
        <td>Interview and Assignment</td>
    </tr>   
    
      <tr>
        <td class="lables"><b>Additional Information</b></td>
        <td>Please note that Food is provided. But, accommodation is not provided. Travel expenses - 3AC class from Mumbai to Bengaluru and back.</td>
    </tr>    
           
           
    
   
</table>
<div style="text-align:center">
<a href="" ng-click="tab=0">Go to JAF</a>
</div>

</div>






<div ng-show="tab==4">
 
 <table class="bordered">
   
    <caption ><b>JAF of LetsEndorse Development (4)</b></caption>
    
    <tr>
       
        <td class="lables"><b>Website</b></td>
        <td><a href="https://www.letsendorse.com/" target="_blank" >https://www.letsendorse.com/</a></td>
    </tr> 
    <tr>
       
        <td class="lables"><b>About</b></td>
        <td>LetsEndorse is a social venture and a digital market-network of powerful social innovations /entrepreneurs from across the globe, grass-root implementation partners/NGOs, responsible corporations, local administration and socially-savvy individuals. Through its technology footprint, LetsEndorse enables intelligent knowledge harnessing of practicable social models, builds collaborations for co-creating and scaling-up of solutions and fosters mobilization of funds/resources from various stakeholders transparently for accelerated intervention. The homegrown suite of technology-enabled products build operational efficiency and greater transparency in the way social organizations function and deliver the solutions at the last-mile. LetsEndorse is empowered by the Social Alpha (an initiative of TATA Trusts) and NASSCOM 10k Start-up and harbours an ambitious vision of aggregating the hugely fragmented socio-development ecosystem.
We work with over 500 NGOs across India, 300 Social Entrepreneurs from 35 Countries across the World, several Corporates and Individuals and are on a mission to solve social issues at Scale!</td>
    </tr> 
      
  
      
    <tr>
       
        <td class="lables"><b>Job Description</b></td>
        <td>LetsEndorse has created the World's simplest website builder product especially for NGOs. Along with the website builder, we offer online payment capabilities, CRM, ERP, Social media synchronization and several other state of the art technology tools to empower the NGOs in sync with the Digital India campaign. The candidate in this role would be a hustler, go-getter and self-starter and would get to closely experience a number of NGOs and understand their issues and ideate solutions with the Core team.</td>
    </tr>  
    
     <tr>
       
        <td class="lables"><b>Accommodation</b></td>
        <td>Not Provided</td>
    </tr>  
      
    <tr>
       
        <td class="lables"><b>Stipend/month</b></td>
        <td class="date">5000.00 INR</td>
    </tr>
     
    <tr>
        <td class="lables"><b>Place of Posting</b></td>
        <td>Bengaluru</td>
    </tr>  
    
         
    <tr>
        <td class="lables"><b>Duration</b></td>
        <td class="date">Winters(4-6 Weeks)</td>
    </tr>
    
      <tr>
        <td class="lables"><b>Selection Procedure</b></td>
        <td>Interview and Assignment</td>
    </tr>   
    
      <tr>
        <td class="lables"><b>Additional Information</b></td>
        <td>Food is provided. Accommodation is not provided. Travel expenses - 3AC class from Mumbai to Bengaluru and back.</td>
    </tr>    
           
           
    
   
</table>
<div style="text-align:center">
<a href="" ng-click="tab=0">Go to JAF</a>
</div>

</div>


<div ng-show="tab==5">
 
 <table class="bordered">
   
    <caption ><b>JAF of LetsEndorse Development (5)</b></caption>
    
    <tr>
       
        <td class="lables"><b>Website</b></td>
        <td><a href="https://www.letsendorse.com/" target="_blank" >https://www.letsendorse.com/</a></td>
    </tr> 
    <tr>
       
        <td class="lables"><b>About</b></td>
        <td>LetsEndorse is a social venture and a digital market-network of powerful social innovations /entrepreneurs from across the globe, grass-root implementation partners/NGOs, responsible corporations, local administration and socially-savvy individuals. Through its technology footprint, LetsEndorse enables intelligent knowledge harnessing of practicable social models, builds collaborations for co-creating and scaling-up of solutions and fosters mobilization of funds/resources from various stakeholders transparently for accelerated intervention. The homegrown suite of technology-enabled products build operational efficiency and greater transparency in the way social organizations function and deliver the solutions at the last-mile. LetsEndorse is empowered by the Social Alpha (an initiative of TATA Trusts) and NASSCOM 10k Start-up and harbours an ambitious vision of aggregating the hugely fragmented socio-development ecosystem.
We work with over 500 NGOs across India, 300 Social Entrepreneurs from 35 Countries across the World, several Corporates and Individuals and are on a mission to solve social issues at Scale!</td>
    </tr> 
      
  
      
    <tr>
       
        <td class="lables"><b>Job Description</b></td>
        <td>The candidate must be entrepreneurial with a deep inclination towards social development and impact. Would get to work closely with the Founders and get a good insight of how to build a startup particularly in the impact space. The role would also be the 'dirtiest' since the candidate would be expected to do different kinds of tasks pretty much like a Founder.
</td>
    </tr>  
    
     <tr>
       
        <td class="lables"><b>Accommodation</b></td>
        <td>Not Provided</td>
    </tr>  
      
    <tr>
       
        <td class="lables"><b>Stipend/month</b></td>
        <td class="date">5000.00 INR</td>
    </tr>
     
    <tr>
        <td class="lables"><b>Place of Posting</b></td>
        <td>Bengaluru</td>
    </tr>  
    
         
    <tr>
        <td class="lables"><b>Duration</b></td>
        <td class="date">Winters(4-6 Weeks)</td>
    </tr>
    
      <tr>
        <td class="lables"><b>Selection Procedure</b></td>
        <td>Interview and Assignment</td>
    </tr>   
    
      <tr>
        <td class="lables"><b>Additional Information</b></td>
        <td>Food is provided. Accommodation is not provided. Travel expenses - 3AC class from Mumbai to Bengaluru and back.</td>
    </tr>    
           
           
    
   
</table>
<div style="text-align:center">
<a href="" ng-click="tab=0">Go to JAF</a>
</div>

</div>



<div ng-show="tab==6">
 
 <table class="bordered">
   
    <caption ><b>JAF of Ketto Online Ventures Pvt.Ltd</b></caption>
    
    <tr>
       
        <td class="lables"><b>Website</b></td>
        <td><a href="https://www.ketto.org/" target="_blank" >https://www.ketto.org/</a></td>
    </tr> 
    <tr>
       
        <td class="lables"><b>About</b></td>
        <td>Ketto is a tech company, founded in 2012 by Varun Sheth, Zaheer Adenwala and Kunal Kapoor, and is engaged in the business of crowd-funding, an age-old practice of raising small sums of money from large numbers of people to achieve a common goal. Ketto has given this offline practice an online avatar by using technology and processes to make the activity more transparent and cost-effective.</td>
    </tr> 
      
  
      
    <tr>
       
        <td class="lables"><b>Job Description</b></td>
        <td>Intern-BD NGO , assisting business development team in fund raising and leading the campaigns of different ngos</td>
    </tr>  
    
     <tr>
       
        <td class="lables"><b>Accommodation</b></td>
        <td>Not Provided</td>
    </tr>  
      
    <tr>
       
        <td class="lables"><b>Stipend/month</b></td>
        <td class="date">5000.00 INR</td>
    </tr>
     
    <tr>
        <td class="lables"><b>Place of Posting</b></td>
        <td>Andheri West, Mumbai</td>
    </tr>  
    
         
    <tr>
        <td class="lables"><b>Duration</b></td>
        <td class="date">Summer(2 Months)</td>
    </tr>
    
      <tr>
        <td class="lables"><b>Selection Procedure</b></td>
        <td>Personal Interview</td>
    </tr>   
    
      <tr>
        <td class="lables"><b>Additional Information</b></td>
        <td>-</td>
    </tr>    
           
           
    
   
</table>
<div style="text-align:center">
<a href="" ng-click="tab=0">Go to JAF</a>
</div>

</div>



<div ng-show="tab==7">
 
 <table class="bordered">
   
    <caption ><b>JAF of Vanguard Info Services</b></caption>
    
    <tr>
       
        <td class="lables"><b>Website</b></td>
        <td><a href="" >-</a></td>
    </tr> 
    <tr>
       
        <td class="lables"><b>About</b></td>
        <td>-
        </td>
    </tr> 
      
  
      
    <tr>
       
        <td class="lables"><b>Job Description</b></td>
        <td>Meeting Communities, Organize Mass Contact Programs, Prepare reports and project proposals for donors, Liaise with Government officials periodically (if needed), Plan and implement programs and initiatives laid down by the organization, Provide suggestions and alternatives, devise innovative methods in order to ensure success of the programs.
        </td>
    </tr>  
    
     <tr>
       
        <td class="lables"><b>Accommodation</b></td>
        <td>Provided</td>
    </tr>  
      
    <tr>
       
        <td class="lables"><b>Stipend/month(per project)</b></td>
        <td class="date">2000.00 INR</td>
    </tr>
     
    <tr>
        <td class="lables"><b>Place of Posting</b></td>
        <td>Mumbai City, Maharashtra, Karnataka</td>
    </tr>  
    
         
    <tr>
        <td class="lables"><b>Duration</b></td>
        <td class="date">Winter(15 Days to 2 Months)</td>
    </tr>
    
      <tr>
        <td class="lables"><b>Selection Procedure</b></td>
        <td>Personal Interview</td>
    </tr>   
    
      <tr>
        <td class="lables"><b>Additional Information</b></td>
        <td>-</td>
    </tr>    
           
           
    
   
</table>
<div style="text-align:center">
<a href="" ng-click="tab=0">Go to JAF</a>
</div>

</div>



<div ng-show="tab==8">
 
 <table class="bordered">
   
    <caption ><b>JAF of Kherwadi Social Welfare Association</b></caption>
    
    <tr>
       
        <td class="lables"><b>Website</b></td>
        <td><a href="www.yuvaparivartan.org" target="_blank" >www.yuvaparivartan.org/</a></td>
    </tr> 
    <tr>
       
        <td class="lables"><b>About</b></td>
        <td>KSWA has an experience of 90 years as a Community Initiative and 59 years as a Registered  Not-for-Profit Organization (NPO)/ Non-Governmental Organization (NGO). The Yuva Parivartan (YP) programme (Youth Transformation) was launched in 1998 and was officially inaugurated by the then President of India Dr.A.P.J. Abdul Kalam in February 2003.<br>
       Yuva Parivartan has today emerged as one of the largest livelihoods organization in the country, training about 150000 students during 2015-16. It focuses on a segment of society that is relatively ignored by the Government as well as the NGOs – less educated and deprived youth dropouts.


        </td>
    </tr> 
      
  
      
    <tr>
       
        <td class="lables"><b>Job Description</b></td>
        <td>.Broadband penetration, aided by smartphone revolution, can make it possible to let these millions learn new skills through intuitive audio-visual or e-content content which they can learn from, at a time of their convenience. We call this “Yuva Parivartan’s Anytime Anywhere Learning”. The possibilities are immense the content can be audio-visual supplemented by voice guidance, graphics and even a teacher-on-call to clear doubts. There are examples of multi-lingual voice lectures at student’s choice. The student can learn at her own pace and move from less to the more difficult modules. To further reinforce the learning the student can opt to visit the nearest training Centre for practical training related to the course. All this can be phased as per the appetite of the student.<br>
        Expected Skill Set Required:-  Information Technology, Academics, course content writing, Instructional designing, voice over, SME.
        </td>
    </tr>  
    
     <tr>
       
        <td class="lables"><b>Accommodation</b></td>
        <td>Not Provided</td>
    </tr>  
      
    <tr>
       
        <td class="lables"><b>Stipend/month</b></td>
        <td class="date">4000.00 INR</td>
    </tr>
     
    <tr>
        <td class="lables"><b>Place of Posting</b></td>
        <td>Mumbai</td>
    </tr>  
    
         
    <tr>
        <td class="lables"><b>Duration</b></td>
        <td class="date">Summer(2 Months)</td>
    </tr>
    
      <tr>
        <td class="lables"><b>Selection Procedure</b></td>
        <td>Personal Interview</td>
    </tr>   
    
      <tr>
        <td class="lables"><b>Additional Information</b></td>
        <td>-</td>
    </tr>    
           
           
    
   
</table>
<div style="text-align:center">
<a href="" ng-click="tab=0">Go to JAF</a>
</div>

</div>



<div ng-show="tab==9">
 
 <table class="bordered">
   
    <caption ><b>JAF of CRY</b></caption>
    
    <tr>
       
        <td class="lables"><b>Website</b></td>
        <td><a href="https://www.cry.org/" target="_blank" >https://www.cry.org/</a></td>
    </tr> 
    <tr>
       
        <td class="lables"><b>About</b></td>
        <td>CRY believes in building a happy, healthy and creative child whose rights are protected and honoured in a society that is built on respect for dignity, justice and equity for all</td>
    </tr> 
      
  
      
    <tr>
       
        <td class="lables"><b>Job Description</b></td>
        <td>Intern-BD NGO , assisting business development team in fund raising and leading the campaigns of different ngos</td>
    </tr>  
    
     <tr>
       
        <td class="lables"><b>Accommodation</b></td>
        <td>Not Provided</td>
    </tr>  
      
    <tr>
       
        <td class="lables"><b>Stipend/month</b></td>
        <td class="date">5000.00 INR</td>
    </tr>
     
    <tr>
        <td class="lables"><b>Place of Posting</b></td>
        <td>Chinchpokli, Mumbai</td>
    </tr>  
    
         
    <tr>
        <td class="lables"><b>Duration</b></td>
        <td class="date">Winter(1 Months)</td>
    </tr>
    
      <tr>
        <td class="lables"><b>Selection Procedure</b></td>
        <td>Resume/SOP shorlist followed by telephonic interview</td>
    </tr>   
    
      <tr>
        <td class="lables"><b>Additional Information</b></td>
        <td>-</td>
    </tr>    
           
           
    
   
</table>
<div style="text-align:center">
<a href="" ng-click="tab=0">Go to JAF</a>
</div>

</div>






<div ng-show="tab==10">
 
 <table class="bordered">
   
    <caption ><b>JAF of Swachhalay</b></caption>
    
    <tr>
       
        <td class="lables"><b>Website</b></td>
        <td><a href="https://swachhalay.org/" target="_blank">https://swachhalay.org/</a></td>
    </tr> 
    <tr>
       
        <td class="lables"><b>About</b></td>
        <td>Swachhalay supports the UN Sanitation campaign working to meet the Sustainable Development Goals on sanitation, access to clean water & ending open defecation.</td>
    </tr> 
      
  
      
    <tr>
       
        <td class="lables"><b>Job Description</b></td>
        <td>Social Media / Design</td>
    </tr>  
    
     <tr>
       
        <td class="lables"><b>Accommodation</b></td>
        <td>Provided</td>
    </tr>  
      
    <tr>
       
        <td class="lables"><b>Stipend/month</b></td>
        <td class="date">2000.00 INR</td>
    </tr>
     
    <tr>
        <td class="lables"><b>Place of Posting</b></td>
        <td>Mumbai / Work from home</td>
    </tr>  
    
         
    <tr>
        <td class="lables"><b>Duration</b></td>
        <td class="date">Winter(15 Days to 2 Months)</td>
    </tr>
    
      <tr>
        <td class="lables"><b>Selection Procedure</b></td>
        <td>Personal Interview</td>
    </tr>   
    
      <tr>
        <td class="lables"><b>Additional Information</b></td>
        <td>-</td>
    </tr>    
           
           
    
   
</table>
<div style="text-align:center">
<a href="" ng-click="tab=0">Go to JAF</a>
</div>

</div>

















<br><br>


<br>
    




        
</body>
</html>