 <?php
session_start();
require_once('database.php');
require_once('library.php');
$error = "";
if(isset($_POST['txtusername'])){
	$error = checkUser($_POST['txtusername'],$_POST['txtpassword'],$_POST['OfficeName']);
}//if

require_once('database.php');
 $server = "localhost";
  $user ="root";
  $pass ="";
  $dbname ="courier_db";
  //create connection 
  $conn =mysqli_connect($server, $user, $pass, $dbname);
  //check connection
  if(!$conn) {
     die ("connection failed : ". mysqli_connect_error());
  } else {
     echo "";
  }
$sql = "SELECT DISTINCT(off_name)
		FROM tbl_offices";
$result = dbQuery($sql);

	if(isset ($_POST['Submit'])) {
    $name = $_POST['txtname'];
       $mobile = $_POST['txtmobile'];
	      $email = $_POST['txtemailid'];
		     $source = $_POST['txtsource'];
			    $dest = $_POST['txtdest'];
	         $freight=$_POST['txtfreight'];
			 $dist=$_POST['txtdist'];
    $weight=$_POST['txtweight'];
	$parcel=$_POST['txtparcel'];
	$msg=$_POST['txtmsg'];

	$sql = "INSERT INTO tbl_quote (name,mobile,email,source,destination,freighttype,distance,weight,parceltype,msg)
VALUES ('$name', '$mobile', '$email','$source','$dest','$freight','$dist','$weight','parcel','$msg')";

if (mysqli_query($conn, $sql)) {
   $success=  "Request successfully completed";
   echo "<script type='text/javascript'>alert('$success');</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}



?>
	<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/mystyle.css" rel="stylesheet" type="text/css">
<link href="css/footer.css" rel="stylesheet" type="text/css">
<link href="css/form.css" rel="stylesheet" type="text/css">
<style>
font {
	font-size:20px !important;
color:white;
margin-right:10px;
padding:10px;
}
h1{
color:white !important;
border-bottom:1px solid white;
}
input[type=text] {
    
    padding: 10px 15px;
    margin: 8px 0;
    box-sizing: border-box;
}
.green-button {
    margin-top:10px;
	 margin-bottom:10px;
	width:50%;
}
.success1 {
text-align:center;
color:white;
font-size:20px;
}
</style>
<body>
<?php include 'topheader.php';?>
  <td><table class="GreenBox" border="0" cellpadding="0" cellspacing="0" align="center" width="1000">
                      <tbody><tr>
                        <form class="form2" id="form2" method="post">
                          <td><table bgcolor="#FFFFFF" border="0" cellpadding="3" cellspacing="1" width="100%">
                              <tbody><tr>
                                <td colspan="3" class="smalltextgrey">&nbsp;</td>
                              </tr>
                              <tr>
                                <td colspan="3" class="smalltextgrey">
								<div class="headtext13" align="center"><h1>Request Quote </h1></div></td>
                              </tr>
                              <tr>
                                <td width="">&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:12px;">Name</font></td>
                                <td width="">:</td>
                                <td width="160">
								<input name="txtname" class="forminput" id="txtname" maxlength="20" type="text" placeholder="enter your  name" size="30" required></td>
                              </tr>
							   <tr>
                                <td width="">&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:12px;">Mobile</font></td>
                                <td width="">:</td>
                                <td width="">
								<input name="txtmobile" class="forminput" id="txtmobile" maxlength="20" type="text" placeholder="enter your mobile no." size="30" required></td>
                              </tr>
							   <tr>
                                <td width="">&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:12px;">E-mail Id</font></td>
                                <td width="">:</td>
                                <td width="">
								<input name="txtemailid" class="forminput" id="txtemailid" maxlength="30" type="text" placeholder="enter your e-mail id" size="30" name="Confirm E-mail Id"required></td>
                              
							 </tr>
							   <tr>
                                <td width="">&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:12px;">Source</font></td>
                                <td width="">:</td>
                                <td width="">
								<input name="txtsource" class="forminput" id="txtsource" maxlength="20" type="text" placeholder="enter your source address" size="30" name="Confirm E-mail Id-repeat"required></td>
                                  </tr>                      
							   <tr>
                                <td width="">&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:12px;">Destination</font></td>
                                <td width="">:</td>
                                <td width="">
								<input name="txtdest" class="forminput" id="txtcontact no." maxlength="20" type="text" placeholder="enter your destination address" size="30" ></td>
                              </tr>
							  <tr>
                                <td width="">&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:12px;">Freight Type</font></td>
                                <td width="">:</td>
                                <td width="">
								<input type="text" name="txtfreight" class="forminput" id="txtcontact no." placeholder="enter freight type." size="30" ></td>
                              </tr>
                              <tr>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:12px;">Distance</font></td>
                                <td>:</td>
                                <td><input name="txtdist" class="forminput" id="txtpassword" maxlength="20" type="text" placeholder="enter distance in km" size="30" ></td>
                              </tr>
							  <tr>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:12px;">Weight</font></td>
                                <td>:</td>
                                <td><input name="txtweight" class="forminput" id="txtpassword" type="text" placeholder="enter parcel weight" size="30" ></td>
                              </tr>
							  <tr>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:12px;">Parcel Type</font></td>
                                <td>:</td>
                               <td><input name="txtparcel" class="forminput" id="txtpassword" type="text" placeholder="enter parcel type" size="30" ></td>
                              </tr>
							   <tr>
                                <td width="">&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:12px;">Message</font></td>
                                <td width="">:</td>
                                <td width="">
								<textarea name="txtmsg" class="forminput" id="txtemailid" cols="50" rows="10" type="text" placeholder="enter any msg..." size="30" name="Confirm E-mail Id-repeat"required></textarea></td>
                                  </tr>   
                              <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
								<td><input name="Submit" class="green-button"  value="Submit" type="submit" style="padding:5px 10px;font-weight:bold;"></td>
                              </tr>
                          </tbody>
						  </table>
						  </form>
						  <?php include 'footer.php';?>
</body>