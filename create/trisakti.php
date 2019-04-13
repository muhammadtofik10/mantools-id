<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Create Trisakti By TeMix</title>
</head>
<body>
<form method="post" name="trisakti">
      <table width="200" border="0">
        <tr>
          <td colspan="3" align="center"><p>Create Akun Trisakti</p></td>
        </tr>
        <tr>
          <td width="35">Nim</td>
          <td width="16" align="center">:</td>
          <td width="135"><input type="text" name="nim" id="nim" maxlength="7" placeholder="7digitnim....."/></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td align="center"><input type="submit" name="kirim" id="kirim" value="Proses" />
          	<input type="submit" name="clear" id="clear" value="Clear" /></td>
        </tr>
      </table>    	
    </form>
<?php
	if (isset($_POST['kirim'])){
$ok= $_POST['nim'];
$a=1;
while($a <= 10 ){
	echo "Username = ".$ok."0".$a."@trisakti"."<br>";
	echo "Password = ".$ok."0".$a."<br>";
	$a++;}}
	elseif (isset($_POST['clear'])){
		echo " ";}
?>
<?php
if (isset($_POST['kirim'])){
$ok = $_POST['nim'];
$a=10;
while($a <= 99 ){
	echo "Username = "."$ok".$a."@trisakti"."<br>";
	echo "Password = "."$ok".$a."<br>";
	$a++;}}
	elseif (isset($_POST['clear'])){
		echo " ";}
?>
</body>
</html>