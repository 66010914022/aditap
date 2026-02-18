<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>อดิเทพ จำเริญเจือ (อาร์ม) 66010914022</title>
<style>
    
</style>
</head>

<body>
<h1> อดิเทพ จำเริญเจือ (อาร์ม) 66010914022 </h1>
<form method="post" action="">
            รหัสนิสิต <input type="number"  name="a" autofocus required>
            <button type="submit" name="Submit">OK</button>
        </form>
<hr>
<?php
if(isset($_POST['Submit'])) {
    $id = $_POST['a'];
    $y = substr($id,0,2);
    echo "<img src='http://202.28.32.211/picture/student/{$y}/{$id}.jpg' widht='600'>";
}
?>
</body>
</html>