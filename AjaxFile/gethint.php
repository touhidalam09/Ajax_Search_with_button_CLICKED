<?php
include_once '../database/db.php';
?>


<?php

$q = $_REQUEST["q"];

$count = 0;
if ($q !== "") {
    $sql = "SELECT * FROM sellinformation WHERE SellerName LIKE '$q%' ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $count = $count + 1;
            ?>
            <tr>
                <th scope="row"><?php echo $count; ?></th>
                <td><?php echo $row["Catagory"] ?></td>
                <td><?php echo $row["Product"] ?></td>
                <td><?php echo $row["SellerName"] ?></td>
                <td><?php echo $row["SellerContactNumber"] ?></td>
            </tr>
            <?php
        }
    } else {
        ?>
        <div class="bg-light">
            <p>
                You Don't Know me!Again Search ME !!
            </p>
        </div>
        <?php
    }
} elseif (empty($q)) {
    include_once '../database/collectSellerInfo.php';
}
?>