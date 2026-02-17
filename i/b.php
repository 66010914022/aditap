<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>อดิเทพ จำเริญเจือ (อาร์ม)</title>
</head>

<body>
<h1>งาน i  อดิเทพ จำเริญเจือ (อาร์ม)</h1>
<form method="post"action="">
    ชื่อจังหวัด <input type="text"pname="rname" autofocus required>
    รูป <input type="file" name="pimage"required> <br>
    <button type="submit" name ="Submit">บันทึก</button>
    ภาค 
    <select name="rid"
    <?php
include_once("connectdb.php");
$sql3 = "SELECT * FROM `regions`";
$rs3 = mysqli_query($conn,$sql3);
while ($data3 = mysqli_fetch_array($rs3)){
}
?>
    
    <option value="xxx"><?php echo $data3['r_id'];?><?php echo $data3['r_name'];?>
?></option>

<button type="submit" name ="Submit">บันทึก</button>
</select>
</form> <br><br>


<?php
if(isset($_POST["Submit"])){    
    include_once("connectdb.php");
    $pname = $_POST["pname"];
    $exit= pathinfo($_FILES["pimage"]["name"],PATHINFO_EXTENSION);
    $rid = $_POST["rid"];
    $sql2="INSERT INTO `provinces`  VALUES (NULL,'{$pname}','{$exit}','{$rid}')";
    mysqli_query($conn,$sql3) or die ("เพิ่มข้อมูลไม่ได้");
    $pid = mysqli_insert_id($conn);
    copy($_FILES["pimage"]["tmp_name"],"images/".$pid.".".$exit);
}


?>
<?php
include_once("connectdb.php");
$sql = "SELECT * FROM `provinces`";
$rs = mysqli_query($conn,$sql);
?>

<table border="1">
    <tr>
        <th>รหัสภาค</th>
        <th>ชื่อภาค</th>

        
        <th>รูป</th>
        <th>ลบ</th>
    </tr>

<?php

while ($data = mysqli_fetch_array($rs)){
?>
<tr>
        <td><?php echo $data['p_id'];?></td>
        <td><?php echo $data['p_name'];?></td>
        <td> <img src="images/
        <?php echo $data['p_id'];?>
        <?php echo $data['p_exit'];?>.png" width="140"></td>

        <td width= "80" align="center"><a href="delete_region.php?id=<?php echo $data['r_id'];?>" onClick="return confirm('ยืนยันการลบ?');">
        <img src="images/delete.png" width="20"></a> </td>

</tr>
<?php }?>


</table>
<?php
mysqli_close($conn);
?>





</body>
</html>