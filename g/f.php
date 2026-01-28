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
$sql="SELECT 
MONTH(p_date) AS Month, 
SUM(p_amount) AS Total_Sales
FROM popsupermarket
GROUP BY MONTH(p_date)
ORDER BY Month;";
$rs= mysqli_query($conn,$sql);
while($data=mysqli_fetch_array($rs)){
?>
<tr>
    <td><?php echo $data ['Month'];?></td>
    <td align ="right"><?php echo number_format($data['Total_Sales'],0);?></td>

<?php } ?>
</table>

</body>     