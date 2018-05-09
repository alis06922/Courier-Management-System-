<?php
//session_start();
?>
<link rel="stylesheet" href="css/topheader.css" type="text/css"> 
<table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
  <tbody>
  <tr>
    <td>
<style type="text/css">
<!--
.style2 {color: #FFFFFF}
-->
</style>
<link href="css/form.css" rel="stylesheet" type="text/css">
  <?php include 'topheader.php';?>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody>
<tr bgcolor="#2284d5">
<td height="30" width="110"><div align="center"><span class="headtext13 style2"><strong>SHIPMENT:</strong></span></div></td>
<td height="30" width="83"><div class="lowerstyle anchor" align="center"> <a href="view-request.php">Pickup Request</a></div></td>
<td height="30" width="83"><div class="lowerstyle anchor" align="center"> <a href="add-courier.php">Add</a></div></td>

<td height="30" width="74"> <div class="lowerstyle anchor" align="center"><a href="courier-list.php">Update  </a></div></td>

<td width="89"><div class="lowerstyle" align="center">
  <div class="anchor" align="center"><a href="search-edit.php">Search &amp; Edit </a></div>
</div></td>

<td height="30" width="96"><div align="center"><span class="headtext13 style2"><strong>REPORTS</strong></span><span class="heading"><strong> : </strong></span></div></td>
<td height="30" width="83"><div class="lowerstyle anchor" align="center"><a href="delivered-list.php">Delivered </a> </div></td>

<td width="76"><div class="lowerstyle anchor" align="center"><a href="datewise-list.php">Datewise </a> </div></td>

<td width="76"><div class="lowerstyle anchor" align="center"><a href="registration.php">Add new user </a> </div></td>
<td width="3">&nbsp;</td>
<td width="71"><div class="lowerstyle" align="center"><a href="http://tracking4web.com/admin/report_statuswise.php?status=all"></a> </div></td>
<td width="3"></td>
<td height="30" width="80">

</td>
</tr>

</tbody></table>

<?php
if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'admin-role') {
?>

<table border="0" cellpadding="0" cellspacing="0" width="100%">
  <tbody><tr style="height:25px;">
    <td bgcolor="#E2E2E2" width="4">&nbsp;</td>
    <td bgcolor="#E2E2E2" width="240">&nbsp;<b>Admin Menu</b></td>
    <td bgcolor="#E2E2E2" width="130"><div align="center anchor"><a href="offices-list.php" class="headtext13 anchor">Office Details</a></div></td>
    <td bgcolor="#E2E2E2" width="10">|</td>
	
    <td bgcolor="#E2E2E2" width="100"><div align="center anchor"><a href="add-office.php" class="headtext13">Add New Office</a></div></td>
    <td bgcolor="#E2E2E2" width="10">|</td>
	<td bgcolor="#E2E2E2" width="162"><div align="center anchor"><a href="manager-list.php" class="headtext13">Manager Details</a> </div></td>
    <td bgcolor="#E2E2E2" width="7">|</td>
    <td bgcolor="#E2E2E2" width="125"><div align="center anchor"><a href="add-new-officer.php" class="headtext13">Add New Manager</a></div></td>
  </tr>
</tbody>
</table>
<?php 
}
?>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
  <tbody><tr style="height:25px;">
    <td bgcolor="#99CCFF" width="4">&nbsp;</td>
    <td bgcolor="#99CCFF" width="350">&nbsp;</td>
    <td bgcolor="#99CCFF" width="130"><div align="center"><a href="admin.php" class="headtext13 anchor"></a></div></td>
    <td bgcolor="#99CCFF" width="10"></td>
    <td bgcolor="#99CCFF" width="162"><div align="center"><a href="admin.php" class="headtext13 anchor">Home</a> </div></td>
    <td bgcolor="#99CCFF" width="7">|</td>
    <td bgcolor="#99CCFF" width="125"><div align="center"><a href="process.php?action=logOut" class="headtext13 anchor">Logout</a></div></td>
  </tr>
</tbody>
</table>