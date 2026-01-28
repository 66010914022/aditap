<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<title>อดิเทพ จำเริญเจือ (อาร์ม)</title>

<!-- Bootstrap 5.3 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-body">
            <h1 class="mb-4 text-center">ฟอร์มรับข้อมูล <br> อดิเทพ จำเริญเจือ (อาร์ม)- chat GPT</h1>

            <form method="post" action="">
                
                <div class="mb-3">
                    <label class="form-label">ชื่อ-สกุล *</label>
                    <input type="text" name="fullname" class="form-control" required autofocus>
                </div>

                <div class="mb-3">
                    <label class="form-label">เบอร์โทร *</label>
                    <input type="text" name="phone" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">ส่วนสูง (ซม.) *</label>
                    <input type="number" name="height" min="100" max="200" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">ที่อยู่</label>
                    <textarea name="address" cols="40" rows="4" class="form-control"></textarea>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">วันเดือนปีเกิด</label>
                        <input type="date" name="birthday" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">สีที่ชอบ</label><br>
                        <input type="color" name="color" class="form-control form-control-color">
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label">สาขาวิชา</label>
                    <select name="major" class="form-select">
                        <option value="การบัญชี">การบัญชี</option>
                        <option value="การตลาด">การตลาด</option>
                        <option value="การจัดาร">การจัดการ</option>
                        <option value="การคอมพิวเตอร์ธุรกิจ">การคอมพิวเตอร์ธุรกิจ</option>
                    </select>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" name="Submit" class="btn btn-primary">สมัครสมาชิก</button>
                    <button type="reset" class="btn btn-warning">ยกเลิก</button>
                    <button type="button" class="btn btn-success" onclick="window.location='https://www.msu.ac.th/'">Go to MSU</button>
                    <button type="button" class="btn btn-info" onmouseover="alert('อันแน้!')">Hello</button>
                    <button type="button" class="btn btn-secondary" onclick="window.print()">พิมพ์</button>
                </div>

            </form>
        </div>
    </div>

    <hr class="my-4">

    <?php
    if(isset($_POST['Submit'])){
        $fullname = $_POST['fullname'];
        $phone    = $_POST['phone'];    
        $height   = $_POST['height'];    
        $address  = $_POST['address'];    
        $birthday = $_POST['birthday'];    
        $color    = $_POST['color'];    
        $major    = $_POST['major'];
    ?>

    <div class="card shadow mt-4">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">ผลลัพธ์ข้อมูลที่ส่งมา</h4>
        </div>
        <div class="card-body">
            <p><strong>ชื่อ-สกุล:</strong> <?= $fullname ?></p>
            <p><strong>เบอร์โทร:</strong> <?= $phone ?></p>
            <p><strong>ส่วนสูง:</strong> <?= $height ?> ซม.</p>
            <p><strong>ที่อยู่:</strong> <?= nl2br($address) ?></p>
            <p><strong>วันเดือนปีเกิด:</strong> <?= $birthday ?></p>
            <p><strong>สีที่ชอบ:</strong> 
                <div style="background-color:<?= $color ?>; width:150px; height:30px; border:1px solid #000;">
                </div>
                <?= $color ?>
            </p>
            <p><strong>สาขาวิชา:</strong> <?= $major ?></p>
        </div>
    </div>

    <?php } ?>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
