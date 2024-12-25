<?php

/**
 * แสดงตารางสูตรคูณ ตามแม่สูกตรคูณที่ระบุในตัวแปร
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แสดงตารางสูตรคูณ ตามแม่สูกตรคูณที่ระบุในตัวแปร</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <?php
        $my_var = 2;
        ?>
        <h1>สูตรคูณแม่ <?php echo $my_var; ?></h1>
    </div>
    <div class="row">
        <div class="col h2 text-start">
            <?php
            $my_var = 2; // ตัวอย่างตัวแปร

            echo '<div style="text-align: center;">'; // เริ่มต้น div พร้อมจัดกึ่งกลาง
            for ($i = 1; $i <= 12; $i++) {
                $result = $my_var * $i;
                echo $my_var . " * " . $i . " = " . $result; // แสดงผลลัพธ์
                echo "<br>"; // ขึ้นบรรทัดใหม่
            }
            echo '</div>'; // ปิด div
            ?>
        </div>
        <div class="col h2 test-end">
            <?php
            for ($i = 1; $i <= 12; $i++) {
                $result = $my_var * $i;
                echo $result;
                echo "<br>";
            }
            ?>
        </div>
    </div>
</body>

</html>