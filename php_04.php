<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แสดงข้อมูลตัวเลขจาก Input</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
<?php 
// php_04.php: แสดงข้อมูลตัวเลขจาก $start ถึง $end ว่าเป็นเลขคู่ หรือ เลขคี่ โดยรับค่าจาก FORM
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['start'], $_POST['end'])) {
    $start = (int) $_POST['start'];
    $end = (int) $_POST['end'];

    echo "<h2>ข้อมูลตัวเลขจาก $start ถึง $end</h2>";
    for ($num = $start; $num <= $end; $num++) {
        if ($num % 2 == 0) {
            echo "$num เป็นเลขคู่<br>";
        } else {
            echo "$num เป็นเลขคี่<br>";
        }
    }
} else {
    echo "<form method='post'>
            ระบุเลขเริ่มต้น: <input type='number' name='start' required>
            ระบุเลขสิ้นสุด: <input type='number' name='end' required>
            <button type='submit'>แสดงข้อมูล</button>
          </form>";
}
?>
</body>
</html>