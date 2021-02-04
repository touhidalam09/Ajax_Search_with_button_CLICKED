<?php
include_once 'db.php';
//category - CategoryId CategoryName, product - CategoryId ProductId Price
$sql = "SELECT "
        . " product.CategoryId, product.ProductId, product.Price, category.CategoryName"
//        . " CASE"
//        . " WHEN category.CategoryId = product.CategoryId"
//        . " THEN category.CategoryName"
//        . " ELSE ''"
//        . " END AS CategoryName"
        . " FROM category"
        . " LEFT JOIN product"
        . " ON category.CategoryId = product.CategoryId";

$result = $conn->query($sql);
$count = 0;
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $count = $count + 1;
        ?>
        <tr>
            <td><?php echo $count; ?></td>
            <td><?php echo $row["CategoryId"] ?></td>
            <td><?php echo $row["ProductId"] ?></td>
            <td><?php echo $row["Price"] ?></td>
            <td><?php echo $row["CategoryName"] ?></td>
        </tr>

        <?php
    }
} else {
    echo "0 results";
}
?>
