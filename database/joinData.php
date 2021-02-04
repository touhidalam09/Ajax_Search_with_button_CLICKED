<?php
//stockinformation.Product, catagorylist.Product
//, stockinformation.Product, stockinformation.Quantity, catagorylist.Price
include_once 'db.php';

$sql = "SELECT  stockinformation.Catagory, stockinformation.Product, stockinformation.Quantity, catagorylist.Price FROM stockinformation INNER JOIN catagorylist ON stockinformation.Product = catagorylist.Product";
$result = $conn->query($sql);
$count =0;
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $count = $count +1;
        ?>
        <tr>
            <td><?php echo $count; ?></td>
            <td><?php echo $row["Catagory"] ?></td>
            <td><?php echo $row["Product"] ?></td>
            <td><?php echo $row["Quantity"] ?></td>
            <td><?php echo $row["Price"] ?></td>
        </tr>

        <?php
    }
} else {
    echo "0 results";
}
?>