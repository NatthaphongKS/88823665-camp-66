<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แสดงตารางสูตรคูณจาก Input</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
<?php 
// php_03.php: แสดงตารางสูตรคูณ ตามแม่สูตรคูณที่ระบุค่าจาก FORM
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['multiplier'])) {
    $multiplier = (int) $_POST['multiplier'];

    echo "<h2>ตารางสูตรคูณแม่ $multiplier</h2>";
    for ($i = 1; $i <= 12; $i++) {
        $result = $multiplier * $i;
        echo "$multiplier x $i = $result<br>";
    }
} else {
    echo "<form method='post'>
            ระบุแม่สูตรคูณ: <input type='number' name='multiplier' required>
            <button type='submit'>แสดงตาราง</button>
          </form>";
}
?>
</body>
</html>