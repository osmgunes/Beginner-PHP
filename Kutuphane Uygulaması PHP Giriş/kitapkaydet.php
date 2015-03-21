<html>

<head>
  <title></title>
</head>

<body>
<?php
include 'dbclass.php';
$dbo=new  dbclass('localhost','root','','kutuphane');

 $dbo->ekle('kitap',$_POST);
 
?>


</body>
</html>