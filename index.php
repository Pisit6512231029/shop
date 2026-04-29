<?php
include 'connect.php';

$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>ร้านขายของ</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>สินค้า</h1>
    <a href="cart.php" class="cart">🛒 ดูตะกร้า</a>

    <?php while($row = $result->fetch_assoc()) { ?>
        <div class="product">
            <img src="images/<?php echo $row['image']; ?>">
            <h3><?php echo $row['name']; ?></h3>
            <p><?php echo $row['price']; ?> บาท</p>
            <p style="color:#ccc; font-size:14px;">
    <?php echo nl2br($row['description']); ?>
            </p>

            <form method="POST" action="add_to_cart.php">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <input type="hidden" name="name" value="<?php echo $row['name']; ?>">
                <input type="hidden" name="price" value="<?php echo $row['price']; ?>">
                <button type="submit">เพิ่มลงตะกร้า</button>
            </form>
        </div>
    <?php } ?>

</div>

</body>
</html>