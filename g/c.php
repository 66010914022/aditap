<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>66010914022 อดิเทพ จำเริญเจือ (อาร์ม)</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    
    <style>
        /* ปรับแต่งฟอนต์หรือสีเพิ่มเติมได้ที่นี่ */
        body {
            background-color: #f8f9fa;
            font-family: 'Sarabun', sans-serif; /* แนะนำให้หา Google Font ภาษาไทยมาใส่เพิ่มถ้าต้องการ */
        }
        .container {
            margin-top: 50px;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
    </style>
</head>

<body>

<div class="container">
    <h1 class="text-center text-primary mb-4">66010914022 อดิเทพ จำเริญเจือ (อาร์ม)</h1>
    <hr>

    <div class="table-responsive">
        <table id="myTable" class="table table-striped table-hover table-bordered">
            <thead class="table-dark"> <tr>
                    <th>Order ID</th>
                    <th>ชื่อสินค้า</th>
                    <th>ประเภทสินค้า</th>
                    <th>วันที่</th>
                    <th>ประเทศ</th>
                    <th class="text-end">จำนวนเงิน</th> <th class="text-center">รูปภาพ</th>
                </tr>
            </thead>
            <tbody>
            <?php
            include_once("connectdb.php");
            // เช็คว่าเชื่อมต่อสำเร็จหรือไม่ ก่อนรันคำสั่ง (Optional)
            if(isset($conn)){
                $sql = "SELECT * FROM `popsupermarket`";
                $rs = mysqli_query($conn, $sql);
                while ($data = mysqli_fetch_array($rs)) {
            ?>
                <tr>
                    <td><?php echo $data['p_order_id']; ?></td>
                    <td><?php echo $data['p_product_name']; ?></td>
                    <td>
                        <span class="badge bg-info text-dark"><?php echo $data['p_category']; ?></span>
                    </td>
                    <td><?php echo $data['p_date']; ?></td>
                    <td><?php echo $data['p_country']; ?></td>
                    <td class="text-end"><?php echo number_format($data['p_amount'], 0); ?></td>
                    <td class="text-center">
                        <img src="images/<?php echo $data['p_product_name']; ?>.jpg" class="rounded" width="55" alt="Product Image">
                    </td>
                </tr>
            <?php 
                } 
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#myTable').DataTable({
            // ตั้งค่าภาษาไทย (Optional)
            language: {
                "lengthMenu": "แสดง _MENU_ รายการ ต่อหน้า",
                "zeroRecords": "ไม่พบข้อมูล",
                "info": "แสดงหน้า _PAGE_ จาก _PAGES_",
                "infoEmpty": "ไม่มีข้อมูล",
                "infoFiltered": "(กรองจากทั้งหมด _MAX_ รายการ)",
                "search": "ค้นหา:",
                "paginate": {
                    "first": "หน้าแรก",
                    "last": "หน้าสุดท้าย",
                    "next": "ถัดไป",
                    "previous": "ก่อนหน้า"
                }
            }
        });
    });
</script>

</body>    
</html>