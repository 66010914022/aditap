<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สรุปข้อมูลการสมัครงาน</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            background-color: #f4f7f6;
        }
        .result-card {
            border: none;
            border-top: 5px solid #198754; /* แถบสีเขียวด้านบน */
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }
        .data-label {
            font-weight: 600;
            color: #495057;
            width: 160px; /* กำหนดความกว้างหัวข้อให้เท่ากัน */
        }
    </style>
</head>

<body class="py-5">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">

        <?php
        // ตรวจสอบว่ามีการกดปุ่ม submit เข้ามาจริงหรือไม่ (ป้องกันการเข้าหน้านี้โดยตรง)
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_btn'])) {
            
            // --- รับค่าจากฟอร์ม และป้องกันความปลอดภัยด้วย htmlspecialchars ---
            // ใช้ ?? '' เพื่อป้องกัน Error กรณีไม่ได้ส่งค่านั้นมา
            $position = htmlspecialchars($_POST['position'] ?? '-');
            $title = htmlspecialchars($_POST['title'] ?? '');
            $fullname = htmlspecialchars($_POST['fullname'] ?? '-');
            $dob_raw = $_POST['dob'] ?? '';
            $education = htmlspecialchars($_POST['education'] ?? '-');
            
            // สำหรับ Textarea ใช้ nl2br แปลงการขึ้นบรรทัดใหม่ให้แสดงผลได้
            $skills = !empty($_POST['skills']) ? nl2br(htmlspecialchars($_POST['skills'])) : '<span class="text-muted">-</span>';
            $experience = !empty($_POST['experience']) ? nl2br(htmlspecialchars($_POST['experience'])) : '<span class="text-muted">-</span>';

            // แปลงวันที่เป็นรูปแบบไทย (วัน/เดือน/ปี)
            $dob_formatted = '-';
            if(!empty($dob_raw)){
                $dob_formatted = date("d/m/Y", strtotime($dob_raw));
            }

            $full_name_display = trim($title . ' ' . $fullname);
        ?>

            <div class="text-center mb-4 animate__animated animate__fadeInDown">
                <i class="bi bi-check-circle-fill text-success" style="font-size: 4rem;"></i>
                <h2 class="mt-2 fw-bold">ส่งใบสมัครเรียบร้อยแล้ว</h2>
                <p class="text-muted">ขอบคุณที่สนใจร่วมงานกับเรา ข้อมูลของคุณถูกบันทึกแล้ว</p>
            </div>

            <div class="card result-card animate__animated animate__fadeInUp">
                <div class="card-body p-4 p-md-5">
                    
                    <div class="alert alert-success d-flex align-items-center mb-4">
                        <i class="bi bi-briefcase-fill fs-3 me-3"></i>
                        <div>
                            <div class="small">สมัครในตำแหน่ง:</div>
                            <div class="fs-4 fw-bold"><?php echo $position; ?></div>
                        </div>
                    </div>

                    <h5 class="text-primary fw-bold mb-3 border-bottom pb-2"><i class="bi bi-person-lines-fill me-2"></i>สรุปข้อมูลผู้สมัคร</h5>

                    <ul class="list-group list-group-flush rounded-3">
                        <li class="list-group-item d-flex py-3">
                            <span class="data-label">ชื่อ-สกุล:</span>
                            <span><?php echo $full_name_display; ?></span>
                        </li>
                        <li class="list-group-item d-flex py-3">
                            <span class="data-label">วันเดือนปีเกิด:</span>
                            <span><?php echo $dob_formatted; ?></span>
                        </li>
                        <li class="list-group-item d-flex py-3">
                            <span class="data-label">ระดับการศึกษา:</span>
                            <span><?php echo $education; ?></span>
                        </li>
                        <li class="list-group-item py-3 bg-light mt-3">
                            <div class="fw-bold mb-2 text-primary"><i class="bi bi-star-fill me-2"></i>ความสามารถพิเศษ:</div>
                            <div class="ps-4"><?php echo $skills; ?></div>
                        </li>
                        <li class="list-group-item py-3 bg-light">
                            <div class="fw-bold mb-2 text-primary"><i class="bi bi-building-fill me-2"></i>ประสบการณ์ทำงาน:</div>
                            <div class="ps-4"><?php echo $experience; ?></div>
                        </li>
                    </ul>

                    <div class="text-center mt-5 d-flex gap-2 justify-content-center print-hide">
                        <button onclick="window.print()" class="btn btn-outline-secondary"><i class="bi bi-printer me-2"></i>พิมพ์หน้านี้</button>
                        <a href="index.php" class="btn btn-primary"><i class="bi bi-house-door-fill me-2"></i>กลับหน้าหลัก</a>
                    </div>

                </div>
            </div>

        <?php 
        } else { 
            // --- แสดงผลกรณีเข้าหน้านี้โดยตรง (ไม่ได้กรอกฟอร์ม) ---
        ?>
            <div class="alert alert-danger text-center p-5 shadow-sm" role="alert">
                <i class="bi bi-x-octagon-fill display-1 d-block mb-3"></i>
                <h2 class="alert-heading fw-bold">เกิดข้อผิดพลาด!</h2>
                <p class="lead">คุณไม่สามารถเข้าถึงหน้านี้โดยตรงได้</p>
                <hr>
                <p class="mb-0">กรุณากลับไปกรอกข้อมูลที่หน้าแบบฟอร์มรับสมัครงาน</p>
                <a href="index.php" class="btn btn-danger mt-4"><i class="bi bi-arrow-left me-2"></i>กลับไปที่แบบฟอร์ม</a>
            </div>
        <?php } ?>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>