<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Shoppe Bootstarp Website Template | Registration :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="js/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/menu_jquery.js"></script>
<script type="text/javascript">
     function dropdown(ddl1,ddl2) {
    var colours = new Array('Lifting of Dead -Big Animals', 'Lifting of dead- Small Animals', 'other');
    var shapes = new Array('Cleaning not carried out', 'Container/Dustbin not lifted/notclear', 'Lifting of building materials','Hawkers not maintaining cleanliness','Improper diposal of hotel/restaurant','other');
    var names = new Array('Insufficient lighting', 'Street light not working', 'Street Light pole collapsed','Street light working in day time','Street light not working in BRTS road','other');
	var un=new Array('on road side','on the footpath','others');
	var hs=new Array('on road side','breaking of pipe lines','borewells not working','others');
	
	var un1=new Array('not cleaned','no sufficient water supply','no proper maintainance','others');
	
	var un2=new Array('no dustbin','broken benches','play area not maintained','others');
	
	var un3=new Array('Damaged Road','Damage Footpath','Damage Road Divider','No Marking on Bump','others');
	
	var un4=new Array('unclcear dustbin','garden','leacking water tank','others');

    switch (ddl1.value) {
        case 'Dead Animals':
            ddl2.options.length = 0;
            for (i = 0; i < colours.length; i++) {
                createOption(ddl2, colours[i], colours[i]);
            }
            break;
        case 'Garbage':
            ddl2.options.length = 0; 
        for (i = 0; i < shapes.length; i++) {
            createOption(ddl2, shapes[i], shapes[i]);
            }
            break;
        case 'Street light':
            ddl2.options.length = 0;
            for (i = 0; i < names.length; i++) {
                createOption(ddl2, names[i], names[i]);
            }
            break;
			
			 case 'Stagnant water':
            ddl2.options.length = 0;
            for (i = 0; i < un.length; i++) {
                createOption(ddl2, un[i], un[i]);
            }
            break;
			
			 case 'water leakage':
            ddl2.options.length = 0;
            for (i = 0; i < hs.length; i++) {
                createOption(ddl2, hs[i], hs[i]);
            }
            break;
			
			
			
			
			
			 case 'public toilet':
            ddl2.options.length = 0;
            for (i = 0; i < un1.length; i++) {
                createOption(ddl2, un1[i], un1[i]);
            }
            break;
			
			
			
			case 'public parks':
            ddl2.options.length = 0;
            for (i = 0; i < un2.length; i++) {
                createOption(ddl2, un2[i], un2[i]);
            }
            break;
			
			
			case 'Roads and Footpath':
            ddl2.options.length = 0;
            for (i = 0; i < un3.length; i++) {
                createOption(ddl2, un3[i], un3[i]);
            }
            break;
			
			
			
			case 'college campus':
            ddl2.options.length = 0;
            for (i = 0; i < un4.length; i++) {
                createOption(ddl2, un4[i], un4[i]);
            }
            break;
			
			
			
			
            default:
                ddl2.options.length = 0;
            break;
    }

}

    function createOption(ddl, text, value) {
        var opt = document.createElement('option');
        opt.value = value;
        opt.text = text;
        ddl.options.add(opt);
    }
</script>
</head>
<body>
<!-- header_top -->
<div class="top_bg">
<div class="container">
`
<div class="header_top">
	<div class="top_left">
	</div>
	<div class="top_right">
		<ul>
			<li></li>
		  
		
			
		</ul>
	</div>
	<div class="clearfix"></div>
</div>
</div>
</div>
<!-- header -->
<div class="header_bg">
<div class="container">
	<div class="header">
		<div class="logo">
			<a href="index.html"><img src="images/logo.png" alt=""/> </a>
		</div>
		<!-- start header_right -->
		<div class="header_right">
		<div class="create_btn">
			<a class="arrow"  href="index.html">Logout <img src="images/right_arrow.png" alt=""/>  </a>
		</div>
		
		<ul class="icon1 sub-icon1 profile_img">
			
		</ul>
		<ul class="icon1 sub-icon1 profile_img">
			<li><a class="active-icon c1" href="#"> </a>
				
			</li>
		</ul>
		<div class="clearfix"></div>
		</div>
		<!-- start header menu -->
		<ul class="megamenu skyblue">
			<li><a class="color1" href="citizen_home.php">Home</a></li>
			<li class="grid"><a class="color2" href="about2.html">About Us</a>
				
				</li>				
				<li><a class="color5" href="vision2.html">Our Vision</a>
				
				</li>
                
                <li><a class="color5" href="public2.html">Public Awarness</a>
				
				</li>
                
                
                <li><a class="color5" href="ComplaintDetail.html">Complaint Registration</a></li>
                
                <li><a class="color5" href="complaint_view_user.php">Check Your Complaint</a>
				
				</li>
                
				<li><a class="color6" href="feedback.html">FeedBack</a>
				</li>
				
		 </ul> 
							
    </div>
</div>
</div>
<!-- content -->
<div class="container">
<div class="main">
	<!-- start registration -->
	<div class="registration">
		<div class="registration_left">
		<h2 align="left">&nbsp;</h2>
		<h2 style="color:#0000FF">Feedback</h2>
		<!-- [if IE] 
		    < link rel='stylesheet' type='text/css' href='ie.css'/>  
		 [endif] -->  
		  
		<!-- [if lt IE 7]>  
		    < link rel='stylesheet' type='text/css' href='ie6.css'/>  
		<! [endif] -->  
		<script>
			(function() {
		
			// Create input element for testing
			var inputs = document.createElement('input');
			
			// Create the supports object
			var supports = {};
			
			supports.autofocus   = 'autofocus' in inputs;
			supports.required    = 'required' in inputs;
			supports.placeholder = 'placeholder' in inputs;
		
			// Fallback for autofocus attribute
			if(!supports.autofocus) {
				
			}
			
			// Fallback for required attribute
			if(!supports.required) {
				
			}
		
			// Fallback for placeholder attribute
			if(!supports.placeholder) {
				
			}
			
			// Change text inside send button on submit
			var send = document.getElementById('register-submit');
			if(send) {
				send.onclick = function () {
					this.innerHTML = '...Sending';
				}
			}
		
		})();
		</script>
		 <div class="registration_form">
		 <!-- Form -->
		   <?php 
		    require_once('dbcon.php');
		    $ss="select * from feedback";
		    $res=mysqli_query($con,$ss);
		   ?>
		     <table width="747" border="1">
               <tr bgcolor="#0000FF">
                 <td  bgcolor="#0000FF"><div style="color:#FFFFFF"><strong>Citizen Name</strong></div></td>
                 <td  bgcolor="#0000FF"><div style="color:#FFFFFF"><strong>Complaint ID</strong></div></td>
                 <td  bgcolor="#0000FF"><div style="color:#FFFFFF"><strong>Complaint Status</strong></div></td>
                 <td  bgcolor="#0000FF"><div style="color:#FFFFFF"><strong>About Service </strong></div></td>
                 <td  bgcolor="#0000FF"><div style="color:#FFFFFF"><strong>Worker Status</strong></div></td>
               </tr>
               <?php
                   while($row=mysqli_fetch_array($res))
				   {
			   ?>
               <tr>
                 <td><?php echo $row['citizen_name'];?></td>
                 <td><?php echo $row['complaint_id'];?></td>
                 <td><?php echo $row['complaint_status'];?></td>
                 <td><?php echo $row['about_service'];?></td>
                 <td><?php echo $row['worker_status'];?></td>
               </tr>
               <?php
			    }
			   ?>
             </table>
		   
		   <!-- /Form -->
		</div>
	</div>
	<div class="registration_left">
		<h2>&nbsp;</h2>
		<div class="registration_form">
		 <!-- Form -->
			
			<!-- /Form -->
		</div>
	</div>
	<div class="clearfix"></div>
	</div>
	<!-- end registration -->
</div>
</div>
<!-- footer_top -->
<div class="footer_top">
 <div class="container">
	<div class="span_of_4">
	  <div class="clearfix"></div>
		</div>
		<!-- start span_of_2 -->
		<div class="span_of_2">
		<div class="span1_of_2">
			<h5>need help? <a href="#">contact us <span> ></span> </a> </h5>
			<p>(or) Call us: +91-70-45022088</p>
		</div>
		<div class="span1_of_2">
			<h5>follow us </h5>
			<div class="social-icons">
				     <ul>
				        <li><a href="#" target="_blank"></a></li>
				        <li><a href="#" target="_blank"></a></li>
				        <li><a href="#" target="_blank"></a></li>
				        <li><a href="#" target="_blank"></a></li>
				        <li><a href="#" target="_blank"></a></li>
					</ul>
			</div>
		</div>
		<div class="clearfix"></div>
		</div>
  </div>
</div>
<!-- footer -->
<div class="footer">
 <div class="container">
	<div class="copy">
		<p class="link">@PSMS 2022 All rights reserved </p>
	</div>
 </div>
</div>
</body>
</html>