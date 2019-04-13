<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Create UT kampus By TeMix</title>
</head>
<body>
<form method="post" name="ut akun">
      <table width="273" border="0">
        <tr>
          <td colspan="3" align="center"><p>Create Akun UT</p></td>
        </tr>
        <tr>
          <td width="101">Nim</td>
          <td width="10" align="center">:</td>
          <td width="175"><input type="text" name="nim" maxlength="9" placeholder="9digitnim....."/></td>
        </tr>
        <tr>
          <td width="101">Masa Registrasi</td>
          <td width="10" align="center">:</td>
          <td width="175"><input type="text" name="registrasi" maxlength="5" placeholder="masaregistrasi....."/></td>
        </tr>
        <tr>
          <td width="101">Tanggal lahir</td>
          <td width="10" align="center">:</td>
          <td width="175"><input type="text" name="tgllahir" maxlength="8" placeholder="tanggallahir....."/></td>
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
$nim= $_POST['nim'];
$registrasi= $_POST['registrasi'];
$tgllahir= $_POST['tgllahir'];
	echo "Username = ".$nim."@ut.ac.id<br>";
	echo "Password = ".$registrasi.$tgllahir."<br>";
}
?>
</body>
</html>