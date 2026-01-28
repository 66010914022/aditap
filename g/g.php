<?php include_once("connectdb.php"); ?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <title>Dashboard - อดิเทพ จำเริญเจือ</title>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        :root {
            --primary: #4e73df;
            --success: #1cc88a;
            --info: #36b9cc;
            --dark: #5a5c69;
            --bg: #f8f9fc;
        }
        body { 
            font-family: 'Sarabun', sans-serif; 
            background-color: var(--bg); 
            margin: 0; padding: 40px; color: var(--dark);
        }
        .container { max-width: 1000px; margin: auto; }
        h1 { font-weight: 600; color: #333; margin-bottom: 30px; text-align: center; }
        
        /* สไตล์ตาราง */
        .card {
            background: #fff; border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            padding: 20px; margin-bottom: 30px; border: none;
        }
        table { 
            width: 100%; border-collapse: collapse; overflow: hidden; border-radius: 8px;
        }
        th { 
            background-color: var(--primary); color: white; 
            padding: 15px; text-align: left; font-weight: 400;
        }
        td { padding: 12px 15px; border-bottom: 1px solid #eee; }
        tr:hover { background-color: #f1f4ff; transition: 0.3s; }

        /* ส่วนของกราฟ */
        .grid-charts {
            display: grid; grid-template-columns: 1.5fr 1fr; gap: 20px;
        }
        @media (max-width: 768px) { .grid-charts { grid-template-columns: 1fr; } }
    </style>
</head>

<body>
<div class="container">
    <h1>📊 สรุปยอดขายรายเดือน</h1>
    <p style="text-align:center; color: #888;">รหัสนิสิต: 66010914022 | ชื่อ: อดิเทพ จำเริญเจือ (อาร์ม)</p>

    <div class="card">
        <table>
            <thead>
                <tr>
                    <th>ประจำเดือน</th>
                    <th style="text-align: right;">ยอดขายรวม (บาท)</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $monthTH = [1=>"มกราคม", 2=>"กุมภาพันธ์", 3=>"มีนาคม", 4=>"เมษายน", 5=>"พฤษภาคม", 6=>"มิถุนายน", 
                        7=>"กรกฎาคม", 8=>"สิงหาคม", 9=>"กันยายน", 10=>"ตุลาคม", 11=>"พฤศจิกายน", 12=>"ธันวาคม"];
            
            $sql = "SELECT MONTH(p_date) AS Month, SUM(p_amount) AS Total_Sales 
                    FROM popsupermarket GROUP BY MONTH(p_date) ORDER BY Month;";
            $rs = mysqli_query($conn, $sql);
            
            $labels = []; $values = [];
            while($data = mysqli_fetch_array($rs)){
                $mName = $monthTH[$data['Month']];
                $labels[] = $mName;
                $values[] = $data['Total_Sales'];
            ?>
                <tr>
                    <td><strong><?php echo $mName; ?></strong></td>
                    <td align="right"><?php echo number_format($data['Total_Sales'], 2); ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>

    <div class="grid-charts">
        <div class="card">
            <canvas id="barChart"></canvas>
        </div>
        <div class="card">
            <canvas id="donutChart"></canvas>
        </div>
    </div>
</div>

<script>
    const labels = <?php echo json_encode($labels); ?>;
    const dataValues = <?php echo json_encode($values); ?>;
    const colors = ['#4e73df', '#1cc88a', '#36b9cc', '#f6c23e', '#e74a3b', '#858796', '#5a5c69', '#f8f9fc'];

    const chartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: { position: 'bottom', labels: { font: { family: 'Sarabun' } } }
        }
    };

    // กราฟแท่ง
    new Chart(document.getElementById('barChart'), {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'ยอดขาย',
                data: dataValues,
                backgroundColor: 'rgba(78, 115, 223, 0.8)',
                borderRadius: 5
            }]
        },
        options: chartOptions
    });

    // กราฟโดนัท
    new Chart(document.getElementById('donutChart'), {
        type: 'doughnut',
        data: {
            labels: labels,
            datasets: [{
                data: dataValues,
                backgroundColor: colors,
                hoverOffset: 10
            }]
        },
        options: chartOptions
    });
</script>
</body>
</html>