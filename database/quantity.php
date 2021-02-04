<?php
include_once 'db.php';
//stock - CategoryId ProductId Quantity
//$sql = "SELECT "
//        . " product.CategoryId, product.ProductId, product.Price, stock.Quantity"
//        . " FROM product"
//        . " INNER JOIN stock"
//        . " ON stock.CategoryId = product.CategoryId AND stock.ProductId = product.ProductId AND stock.Quantity >= 6";
//$sql = "SELECT "
//        . " product.CategoryId, product.ProductId, product.Price, stock.Quantity"
//        . " FROM product"
//        . " LEFT JOIN stock"
//        . " ON stock.CategoryId = product.CategoryId AND stock.ProductId = product.ProductId"
//        . " WHERE stock.Quantity > 5";
//$sql = "SELECT "
//        . " product.CategoryId, product.ProductId, product.Price, stock.Quantity"
//        . " FROM product"
//        . " LEFT JOIN stock"
//        . " ON stock.CategoryId = product.CategoryId AND stock.ProductId = product.ProductId"
//        . " WHERE stock.Quantity > 5 OR stock.Quantity IS NULL ";
//remarks - Quantity Remark 
$sql = "SELECT
    product.CategoryId,
    product.ProductId,
    product.Price,
    stock.Quantity,
    remarks.Remark
FROM
    stock
LEFT JOIN product ON stock.CategoryId = product.CategoryId AND stock.ProductId = product.ProductId
LEFT JOIN remarks ON stock.Quantity = remarks.Quantity
WHERE
    remarks.Quantity = 8 AND stock.Quantity > 5";

$count = 0;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $count = $count + 1;
        ?>
        <tr>
            <th scope="row"><?php echo $count ?></th>
            <td><?php echo $row["CategoryId"] ?></td>
            <td><?php echo $row["ProductId"] ?></td>
            <td><?php echo $row["Price"] ?></td>
            <td><?php echo $row["Quantity"] ?></td>
            <td><?php echo $row["Remark"] ?></td>
        </tr>
        <?php
    }
} else {
    echo "no data!!";
}
?>