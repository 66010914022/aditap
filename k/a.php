<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>อดิเทพ จำเริญเจือ (อาร์ม)</title>
</head>

<body>
<h1>งาน k  อดิเทพ จำเริญเจือ (อาร์ม)</h1>
<?php
$image = "";

if(isset($_POST['btn1'])){
    $image = "image1.jpg"; // รูปแรก
}

if(isset($_POST['btn2'])){
    $image = "image2.jpg"; // รูปที่สอง
}
?>

<!DOCTYPE html>
<html>
<

<form method="post">
    <button type="submit" name="btn1" style="background-color:green; color:white; padding:10px 20px; border:none;">
        เปิดรูปที่ 1
    </button>

    <button type="submit" name="btn2" style="background-color:orange; color:white; padding:10px 20px; border:none;">
        เปิดรูปที่ 2
    </button>
</form>

<br>

<?php
if($image != ""){
    echo "<img src='$image' width='300'>";
}
?>

</body>
</html>