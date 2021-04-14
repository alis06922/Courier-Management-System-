<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Courier / Cargo Tracking Script in PHP - Ver 0.97</title>
<link href="css/mystyle.css" rel="stylesheet" type="text/css">
<link href="css/footer.css" rel="stylesheet" type="text/css">
<link href="css/form.css" rel="stylesheet" type="text/css">
<script>

</script>
<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
    
//-->
</script>
</head>

<body >
<table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
  <tbody><tr>
    <td width="100%">
	
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody>
  <tr><td>
   <?php include 'topheader.php';?>
  </td></tr>
  <tr><td>
     <nav id="navbar1" class="navbar navbar-inverse " data-spy="affix" data-offset-top="197">
		  <div class="container">
  <div class="container-fluid">
  	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
	      <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav"  >

      <li class="active"><a href="index.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle"  data-toggle="dropdown" href="#">SERVICES <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="all-services.php">All Services</a></li>
          <li><a href="road.php">Road Freight Forwarding</a></li>
          <li><a href="ocean.php">Ocean Freight Forwarding</a></li>
		  <li><a href="air.php">Air Freight Forwarding</a></li>
          <li><a href="warehouse.php">Warehousing</a></li>
		  <li><a href="door.php">Door to Door Delivery</a></li>
		  <li><a href="ground.php">Ground Transport</a></li>
		  <li><a href="worldwide.php">Worldwide Transport</a></li>
		  <li><a href="cargo.php">Cargo Services</a></li>
		  <li><a href="package.php">Packaging & Storage</a></li>
		</ul>
      </li>
	  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">PAGES <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="aboutus.php">About Us</a></li>
          <li><a href="#">Our Prices</a></li>
		  <li><a href="#">Testimonials</a></li>
		</ul>
      </li>
      <li><a href="#">GALLERY</a></li>
	   <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">FEATURES <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="request.php" >Request A Quote</a></li>
          <li><a href="track-status.php">Track Your Shipment</a></li>
		</ul>
      </li>
      <li><a href="#">NEWS</a></li>
	  <li><a href="#">CONTACT</a></li>
   <li ><a href="request.php" >Get A Quote</a></li>
    </ul>
	</div>
  </div>
  </div>
</nav>
  </td></tr>
<tr>
<td bgcolor="#FFCC00" >&nbsp;</td>
</tr>
</tbody></table>
	</td>
  </tr>
  
  <tr>
    <td bgcolor="#FFFFFF"><table border="0" cellpadding="1" cellspacing="1" align="center" width="98%">
      <tbody><tr>
        <td class="Partext1">&nbsp;</td>
      </tr>
      
      <tr>
        <td class="Partext1"><div align="center">
          <table cellpadding="4" cellspacing="0" align="center" width="70%">
<script language="javascript">
function validate()
  {
 if (form.Consignment.value == "" )
		 {
			alert("Consignment No is required.");
			form.track.focus( );
			return false;
		}
	}
</script>
            
              <tbody><tr>
                <td class="TrackTitle" valign="top"><div class="newtext" align="center"><strong> Track and Trace your Cargo/Courier <br>
                        </strong></div></td>
              </tr>
              <tr>
                <td class="bottom" valign="middle">&nbsp;</td>
              </tr>
              <tr bgcolor="EFEFEF">
                <td class="aalpha" valign="top"><div align="center">Enter the Consignment no </div></td>
              </tr>
              <tr bgcolor="EFEFEF">
                <td valign="top"><div align="center">
            <form action="track-result.php" method="post" name="form" id="form" >
			      <input name="Consignment" class="gentxt" id="Consignment" maxlength="50" type="text"> 
                  <input name="Submit" type="submit" class="gentxt" onClick="MM_validateForm('Consignment','','R');return document.MM_returnValue" value="Track now">
            </form>
			      <span class="gentxt">Ex: IXM53533553 </span> </div></td>
                </tr>
              <tr bgcolor="EFEFEF">
                <td valign="top">&nbsp;</td>
              </tr>
              <tr bgcolor="EFEFEF">
                <td class="TrackNormalBlue" bgcolor="#FFFFFF" valign="top">&nbsp;</td>
              </tr>
            
          </tbody></table>
        </div></td>
        </tr>
      <tr>
        <td class="Partext1">&nbsp;</td>
        </tr>
      
      
      <tr>
        <td>&nbsp;</td>
        </tr>
    </tbody></table>      </td>
  </tr>
  <tr>
    <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
  <tbody><tr>
    <td bgcolor="#2284d5" >&nbsp;</td>
    <td bgcolor="#2284d5">&nbsp;</td>
  </tr>
</tbody></table>
</td>
  </tr>
</tbody></table>
 <tr>
  <td>
<footer class="container-fluid" style="background-color:rgb(26,26,26); width:100%;">
     <div class="container">
         <div class="row footer1">
		     <div class="col-sm-3">
			    <p>ABOUT US</p>
				 <label>Courier Management System  is a global supplier of transport and logistics solutions. We have offices in more than 20 countries and an international network of partners and agents.</label>
			 </div>
			 
			 <div class="col-sm-3 linkfooter">
			    <p>USEFUL LINKS</p>
				<ul class="list-unstyled">
				<li><a href="all-services.php" >All Services</a> </li>
					<li><a href="ocean.php" >Ocean Freight Forwarding</a> </li>
					<li><a href="road.php" >Road Freight Forwarding </a> </li>
					<li><a href="air.php" >Air Freight Forwarding</a> </li>
					 <li><a href="ground.php" >Ground Transport</a> </li>
					<li><a href="warehouse.php" >Warehousing</a> </li>
					</ul>
			 </div>
			 
			 <div class="col-sm-3">
			     <p>COMPANY INFORMATION</p>
				 <ul class="list-unstyled">
				     <li>Company Adress</li>
					 <li><br><br></li>
					  <li><img src="images/contact.png"> &nbsp +91- 123456789</li>
					  <li><img src="images/email.png"> &nbsp  example@gmail.com </li>
					  <li><label>Aliganj Lucknow, India</label></li>
				 </ul>
			 </div>
			 
			 <div class="col-sm-3">
			    <p>NEWSLETTER SIGN UP</p>
					 <label>Sign up today for tips and latest news and exclusive special offers.</label>
				<ul class="list-unstyled">
				<li></li>
				<li><input type="email" class="form-control" id="emailtxt" placeholder="Enter Your Email" name="email"/><br> </li>
				<li><button type="submit" id="btnsubmit" class="btn btn-default footerbtn">SUBMIT</button>
				<li><br></li>
				<li><div class="footer1-border"><a href="#"><img src="images/fb-footer.png"></a><a href="#"><img src="images/twitter-footer.png"></a></div></li>
				</ul>
			 </div>
			 </div>
		    <div class="footer2">
			
			<div class="row" >
			
			<div class="col-sm-6">
			<strong  style="float:left;color:gray;"> ©Courier Management System 2018.All right reserved</strong>
			</div>
			
			<div class="col-sm-6">
			<div style="float:right;">
			<img src="images/master.png">
			<img src="images/visa.png">
			<img src="images/american-express.png">
			<img src="images/discover.png">
			</div>
			</div>
			
			</div>
			
		 </div>
    </footer>
  </td>
  </tr>
</body></html>