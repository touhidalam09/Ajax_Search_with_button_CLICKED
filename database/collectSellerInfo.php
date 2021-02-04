<?php
include_once 'db.php';

$sql = "SELECT * FROM sellinformation";
$count = 0;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $count = $count + 1;
        ?>
        <tr>
            <th scope="row"><?php echo $count ?></th>
            <td><?php echo $row["Catagory"] ?></td>
            <td><?php echo $row["Product"] ?></td>
            <td><?php echo $row["SellerName"] ?></td>
            <td><?php echo $row["SellerContactNumber"] ?></td>
        </tr>
        <?php
    }
} else {
    echo "no data!!";
}
?>