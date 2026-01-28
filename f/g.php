<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>อดิเทพ จำเริญเจือ (อาร์ม)</title>
</head>

<body>
<h1>66010914022 อดิเทพ จำเริญเจือ (อาร์ม)- โปรแกรมสูตรคูณ</h1>
<hr>
<form method= "post" action="">
    แม่สูตรคูณ <input type ="number" min="2" max="1000" name="a" autofocus required>
    <button  type ="submit"name="Submit" >OK</button>
</form>
<hr>


<?php
  if(isset($_POST["Submit"])){
    $m = $_POST ['a'];
    for($a=1; $a<=12; $a++) {
        $x=$m*$a ;
        echo "{$m} x {$a}= {$x} <br>";


    }
}
?>
</body>
</html>