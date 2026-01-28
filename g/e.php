<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales Dashboard - อดิเทพ</title>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;700&display=swap" rel="stylesheet">
    
    <style>
        body { font-family: 'Sarabun', sans-serif; background-color: #f4f7f6; margin: 0; padding: 20px; color: #333; }
        .container { max-width: 1000px; margin: auto; }
        .header-card { background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%); color: white; padding: 20px; border-radius: 15px; text-align: center; box-shadow: 0 4px 15px rgba(0,0,0,0.1); margin-bottom: 25px; }
        .grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 25px; }
        .card { background: white; padding: 20px; border-radius: 15px; box-shadow: 0 4px 10px rgba(0,0,0,0.05); }
        .table-card { background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.05); }
        table { width: 100%; border-collapse: collapse; }
        th { background-color: #f8f9fa; padding: 15px; text-align: left; border-bottom: 2px solid #eee; }
        td { padding: 12px 15px; border-bottom: 1px solid #eee; }
        tr:hover { background-color: #fcfcfc; }
        .text-right { text-align: right; }
        @media (max-width: 768px) { .grid { grid-template-columns: 1fr; } }
    </style>
</head>
<body>

<div class="container">
    <div class="header-card">
        <h2 style="margin:0;">66010914022 อดิเทพ จำเริญเจือ (อาร์ม)</h2>
        <p style="opacity: 0.8; margin-top: 5px;">ระบบรายงานสรุปยอดขายตามประเทศ (Pop Supermarket)</p>
    </div>

    <?php
    include_once("connectdb.php");
    $sql = "SELECT `p_country`, SUM(`p_amount`) AS total FROM `popsupermarket` GROUP BY `p_country` ORDER BY total DESC";
    $rs = mysqli_query($conn, $sql);
    
    $labels = [];
    $values = [];
    $rows = [];

    while ($data = mysqli_fetch_array($rs)) {
        $rows[] = $data;
        $labels[] = $data['p_country'];
        $values[] = (float)$data['total'];
    }
    ?>

    <div class="grid">
        <div class="card">
            <h3 style="margin-top:0;">ยอดขายตามประเทศ (Bar)</h3>
            <div id="barChart"></div>
        </div>
        <div class="card">
            <h3 style="margin-top:0;">สัดส่วนยอดขาย (Donut)</h3>
            <div id="donutChart"></div>
        </div>
    </div>

    <div class="table-card">
        <table>
            <thead>
                <tr>
                    <th>ลำดับ</th>
                    <th>ประเทศ (Country)</th>
                    <th class="text-right">ยอดขายรวม (Total Sales)</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rows as $index => $row) { ?>
                <tr>
                    <td><?php echo $index + 1; ?></td>
                    <td><strong><?php echo $row['p_country']; ?></strong></td>
                    <td class="text-right"><?php echo number_format($row['total'], 2); ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    // ข้อมูลจาก PHP
    const labels = <?php echo json_encode($labels); ?>;
    const values = <?php echo json_encode($values); ?>;

    // ตั้งค่ากราฟแท่ง
    var barOptions = {
        series: [{ name: 'ยอดขาย', data: values }],
        chart: { type: 'bar', height: 300, toolbar: { show: false } },
        colors: ['#3498db'],
        plotOptions: { bar: { borderRadius: 6, columnWidth: '50%', distributed: true } },
        dataLabels: { enabled: false },
        xaxis: { categories: labels },
        fill: { type: 'gradient', gradient: { shade: 'light', type: "vertical", strength: 0.5, gradientToColors: ['#2ecc71'], stops: [0, 100] } }
    };

    // ตั้งค่ากราฟวงกลม (Donut)
    var donutOptions = {
        series: values,
        chart: { type: 'donut', height: 320 },
        labels: labels,
        colors: ['#1e3c72', '#2ecc71', '#f1c40f', '#e74c3c', '#9b59b6'],
        legend: { position: 'bottom' },
        plotOptions: { pie: { donut: { size: '65%' } } }
    };

    new ApexCharts(document.querySelector("#barChart"), barOptions).render();
    new ApexCharts(document.querySelector("#donutChart"), donutOptions).render();
</script>

</body>
</html>