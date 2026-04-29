<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>ตะกร้าสินค้า</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>ตะกร้าสินค้า</h1>
    <a href="index.php">← กลับหน้าหลัก</a>

    <?php
    $total = 0;

    if (!empty($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $item) {
            $sum = $item['price'] * $item['qty'];
            $total += $sum;
    ?>

        <div class="product">
            <h3><?php echo $item['name']; ?></h3>
            <p><?php echo $item['price']; ?> บาท</p>
            <p>จำนวน: <?php echo $item['qty']; ?></p>
        </div>

    <?php
        }
    } else {
        echo "<p>ยังไม่มีสินค้าในตะกร้า</p>";
    }
    ?>

    <h2>รวม: <?php echo $total; ?> บาท</h2>

</div>

</body>
</html>