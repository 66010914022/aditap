<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ฟอร์มรับสมัครงาน - บริษัท เอเพ็กซ์ อินโนเวชั่น จำกัด</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            background-color: #f4f7f6;
        }
        .company-header {
            background: linear-gradient(to right, #0d6efd, #0099ff);
            color: white;
            padding: 30px;
            border-radius: 15px 15px 0 0;
        }
        .form-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        .required-star {
            color: #dc3545;
        }
    </style>
</head>

<body class="py-5">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card form-card">
                
                <div class="company-header text-center">
                    <h2><i class="bi bi-buildings-fill me-2"></i>บริษัท เอเพ็กซ์ อินโนเวชั่น จำกัด</h2>
                    <p class="mb-0 opacity-75">Apex Innovations Co., Ltd.</p>
                    <h4 class="mt-3">แบบฟอร์มรับสมัครงานออนไลน์</h4>
                </div>

                <div class="card-body p-4 p-md-5">
                    <form action="f.php" method="post" class="needs-validation">

                        <h5 class="mb-4 text-primary fw-bold"><i class="bi bi-briefcase me-2"></i>ตำแหน่งที่ต้องการสมัคร</h5>
                        <div class="mb-4">
                            <label for="position" class="form-label fw-bold">เลือกตำแหน่ง <span class="required-star">*</span></label>
                            <select class="form-select form-select-lg" id="position" name="position" required>
                                <option value="" selected disabled>-- กรุณาเลือกตำแหน่ง --</option>
                                <option value="Web Developer (Full Stack)">Web Developer (Full Stack)</option>
                                <option value="Mobile Application Developer">Mobile Application Developer</option>
                                <option value="UX/UI Designer">UX/UI Designer</option>
                                <option value="Digital Marketing Executive">Digital Marketing Executive</option>
                                <option value="Human Resources Officer">Human Resources Officer</option>
                            </select>
                        </div>

                        <hr class="my-4">

                        <h5 class="mb-4 text-primary fw-bold"><i class="bi bi-person-vcard me-2"></i>ข้อมูลส่วนตัว</h5>
                        
                        <div class="row g-3 mb-3">
                            <div class="col-md-4">
                                <label for="title" class="form-label fw-bold">คำนำหน้าชื่อ <span class="required-star">*</span></label>
                                <select class="form-select" id="title" name="title" required>
                                    <option value="" selected disabled>เลือก</option>
                                    <option value="นาย">นาย</option>
                                    <option value="นาง">นาง</option>
                                    <option value="นางสาว">นางสาว</option>
                                </select>
                            </div>
                            <div class="col-md-8">
                                <label for="fullname" class="form-label fw-bold">ชื่อ-สกุล <span class="required-star">*</span></label>
                                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="กรอกชื่อและนามสกุล" required>
                            </div>
                        </div>

                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label for="dob" class="form-label fw-bold">วันเดือนปีเกิด <span class="required-star">*</span></label>
                                <input type="date" class="form-control" id="dob" name="dob" required>
                            </div>
                            <div class="col-md-6">
                                <label for="education" class="form-label fw-bold">ระดับการศึกษา <span class="required-star">*</span></label>
                                <select class="form-select" id="education" name="education" required>
                                    <option value="" selected disabled>-- เลือกระดับการศึกษา --</option>
                                    <option value="ต่ำกว่าปริญญาตรี">ต่ำกว่าปริญญาตรี</option>
                                    <option value="ปริญญาตรี">ปริญญาตรี</option>
                                    <option value="ปริญญาโท">ปริญญาโท</option>
                                    <option value="ปริญญาเอก">ปริญญาเอก</option>
                                </select>
                            </div>
                        </div>

                        <hr class="my-4">

                        <h5 class="mb-4 text-primary fw-bold"><i class="bi bi-stars me-2"></i>คุณสมบัติและประสบการณ์</h5>

                        <div class="mb-3">
                            <label for="skills" class="form-label fw-bold">ความสามารถพิเศษ</label>
                            <textarea class="form-control" id="skills" name="skills" rows="3" placeholder="เช่น ทักษะภาษา, โปรแกรมคอมพิวเตอร์, ใบรับรองต่างๆ"></textarea>
                        </div>

                        <div class="mb-4">
                            <label for="experience" class="form-label fw-bold">ประสบการณ์ทำงาน</label>
                            <textarea class="form-control" id="experience" name="experience" rows="4" placeholder="ระบุชื่อบริษัท, ตำแหน่ง, ระยะเวลา และหน้าที่รับผิดชอบ (หากไม่มีให้ระบุว่า 'ไม่มี')"></textarea>
                        </div>

                        <div class="d-flex gap-2 justify-content-end">
                            <button type="reset" class="btn btn-light btn-lg px-4">ล้างข้อมูล</button>
                            <button type="submit" name="submit_btn" class="btn btn-primary btn-lg px-5"><i class="bi bi-send me-2"></i>ส่งใบสมัคร</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>