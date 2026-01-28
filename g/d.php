<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>อดิเทพ จำเริญเจือ (อาร์ม)</title>
</head>

<body>
<h1>66010914022 อดิเทพ จำเริญเจือ (อาร์ม)</h1>

<table border='1'>
<tr>
    <th>ประเภท</th>
    <th>ยอดขาย</th>

</tr>
<?php
include_once("connectdb.php");
$sql="SELECT `p_country` ,SUM(`p_amount`) 
AS total FROM `popsupermarket` GROUP BY`p_country`;";
$rs= mysqli_query($conn,$sql);
while($data=mysqli_fetch_array($rs)){
?>
<tr>
    <td><?php echo $data ['p_country'];?></td>
    <td align ="right"><?php echo number_format($data['total'],0);?></td>

<?php } ?>
</table>

</body>     
</html>
