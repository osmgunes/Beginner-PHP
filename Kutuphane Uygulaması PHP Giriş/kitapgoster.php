<html>
<head>
<title>kitap bilgisi</title>
</head>

<body bgcolor="#ffffff" text="#000000">
<br><br>
<center>

<?PHP 
include 'dbclass.php';
$dbo=new  dbclass('localhost','root','','kutuphane');
$isbn_ = $_POST['isbn'];
$sql = "SELECT * FROM kitap WHERE isbn = '$isbn_'";
$sonuc = $dbo->fetch_all($sql,true);
  $baslik_ = $sonuc['baslik'];
  $yazar_ = $sonuc['yazar'];
  $tur_ = $sonuc['tur'];
  $adet_ = $sonuc['adet'];


?>

<table>

<form>

<tr>
 <td>
  <input type="label" value="ISBN:" size="10" readonly="readonly" style="border: 0px;font-style:veranda; font-size:12px; font-weight:bold;text-transform:lowercase;color:white;background-color:#B20352;height:22px;border-style:ridge;text-align:center;">
 </td>
 <td>
  <input type="text" <?PHP  print("value='$isbn_'"); ?> readonly="readonly" name="no" size="40">
 </td>
 </tr>

<tr>
 <td>
  <input type="label" value="BASLIK :" size="10" readonly="readonly" style="border: 0px;font-style:veranda; font-size:12px; font-weight:bold;text-transform:lowercase;color:white;background-color:#B20352;height:22px;border-style:ridge;text-align:center;">
 </td>
 <td>
  <input type="text" <?PHP  print("value='$baslik_'"); ?> readonly="readonly" name="baslik"size="40">
 </td>
 </tr>
<tr>
 <td>
  <input type="label" value="YAZAR :" size="10" readonly="readonly" style="border: 0px;font-style:veranda; font-size:12px; font-weight:bold;text-transform:lowercase;color:white;background-color:#B20352;height:22px;border-style:ridge;text-align:center;">
 </td>
 <td>
  <input type="text" name="yazar" <?PHP  echo "value='$yazar_'"; ?> readonly="readonly" size="40">
  </td>
</tr>

<tr>
 <td>
  <input type="label" value="TUR :" size="10" readonly="readonly" style="border: 0px;font-style:veranda; font-size:12px; font-weight:bold;text-transform:lowercase;color:white;background-color:#B20352;height:22px;border-style:ridge;text-align:center;">
 </td>
 <td>
  <input type="text" name="tur" <?PHP  print("value='$tur_'"); ?> readonly="readonly" size="40">
 </td>
 </tr>
<tr>
 <td>
  <input type="label" value="ADET :" size="10" readonly="readonly" style="border: 0px;font-style:veranda; font-size:12px; font-weight:bold;text-transform:lowercase;color:white;background-color:#B20352;height:22px;border-style:ridge;text-align:center;">
 </td>
 <td>
  <input type="text" name="adet" <?PHP  print("value='$adet_'"); ?> readonly="readonly" size="40">
  </td>
</tr>


</form>

</table>

</center>
</body>
</html>