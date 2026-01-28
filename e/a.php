<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>อดิเทพ จำเริญเจือ (อาร์ม)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            background-color: #f8f9fa;
        }
        .required-mark {
            color: #dc3545;
            margin-left: 3px;
        }
    </style>
</head>

<body class="py-5">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">

                <div class="card shadow-sm mb-5 border-0">
                    <div class="card-header bg-primary text-white text-center py-3">
                        <h2 class="h4 mb-0">ฟอร์มรับข้อมูล - อดิเทพ จำเริญเจือ (อาร์ม) -Gemini</h2>
                    </div>
                    <div class="card-body p-4">

                        <form method="post" action="">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="fullname" class="form-label">ชื่อ-สกุล <span class="required-mark">*</span></label>
                                    <input type="text" class="form-control" id="fullname" name="fullname" autofocus required placeholder="ระบุชื่อ-นามสกุล">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="phone" class="form-label">เบอร์โทร <span class="required-mark">*</span></label>
                                    <input type="text" class="form-control" id="phone" name="phone" required placeholder="เช่น 08xxxxxxxx">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="height" class="form-label">ส่วนสูง <span class="required-mark">*</span></label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" id="height" name="height" min="100" max="200" required placeholder="100-200">
                                        <span class="input-group-text">ซม.</span>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="birthday" class="form-label">วันเดือนปีเกิด</label>
                                    <input type="date" class="form-control" id="birthday" name="birthday">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="color" class="form-label">สีที่ชอบ</label>
                                    <input type="color" class="form-control form-control-color w-100" id="color" name="color" value="#0d6efd" title="เลือกสีที่ชอบ">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="address" class="form-label">ที่อยู่</label>
                                <textarea class="form-control" id="address" name="address" rows="3" placeholder="บ้านเลขที่ หมู่บ้าน ถนน..."></textarea>
                            </div>

                            <div class="mb-4">
                                <label for="major" class="form-label">สาขาวิชา</label>
                                <select class="form-select" id="major" name="major">
                                    <option value="" selected disabled>-- กรุณาเลือกสาขาวิชา --</option>
                                    <option value="การบัญชี">การบัญชี</option>
                                    <option value="การตลาด">การตลาด</option>
                                    <option value="การจัดการ">การจัดการ</option>
                                    <option value="การคอมพิวเตอร์ธุรกิจ">การคอมพิวเตอร์ธุรกิจ</option>
                                </select>
                            </div>

                            <hr class="my-4">

                            <div class="d-flex flex-wrap gap-2 justify-content-center justify-content-md-end">
                                <button type="submit" name="Submit" class="btn btn-primary px-4">
                                    <i class="bi bi-person-plus-fill me-1"></i> สมัครสมาชิก
                                </button>
                                <button type="reset" class="btn btn-secondary">ยกเลิก</button>
                                <button type="button" class="btn btn-outline-info" onClick="window.location='https://www.msu.ac.th/';">Go to MSU</button>
                                <button type="button" class="btn btn-outline-warning" onMouseOver="alert('อันแน้!');">Hello</button>
                                <button type="button" class="btn btn-dark" onClick="window.print();">พิมพ์</button>
                            </div>

                        </form>
                    </div>
                </div>
                <?php
                if(isset($_POST['Submit'])){
                   
                    $fullname = $_POST['fullname'];
                    $phone = $_POST['phone'];
                    $height = $_POST['height'];
                    $address = !empty($_POST['address']) ? $_POST['address'] : '-';
                    $birthday = !empty($_POST['birthday']) ? $_POST['birthday'] : '-';
                    $color = $_POST['color'];
                    $major = isset($_POST['major']) ? $_POST['major'] : '-';

                    include_once("connectdb.php");

                    $host = "localhost";
                    $user = "root";
                    $pwd = "";
                    $db = "4022db";
                    $conn = mysqli_connect ($host, $user,  $pwd, $db) or die ("เชื่อมต่อฐานข้อมูลไม่ได้");
                    mysqli_query($conn,"SET NAMES utf8");

                    $sql = "INSERT INTO register (r_id ,r_name ,r_phone,r_height,r_address,r_birthday,r_color,r_major)
                    VALUES (NULL,'{$fullname}','{$phone}','{$height}','{$address}','{$birthday}','{$color}','{$major}');";
                    mysqli_query($conn,$sql)or die ("insert ไม่ได้");

                echo"<script>";
                echo"alert('บันทึกข้อมูลสำเร็จ');";
                echo"</script>";
                }
                ?>

                </div>  
                <?php  ?>
                </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</body>
</html>