<?php require('./config/conn.php'); ?>

<?php
$sql = "SELECT * FROM users";
$stmt = $pdo->query($sql);
$i = 0;
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    ++$i;
    echo "
        <tr class='text-center'>
            <th width='5%'>{$i}</th>
            <td><img src='{$row['img']}' alt='User Image' width='100'></td>
            <td width='5%'>" . htmlspecialchars($row['f_name']) . "</td>
            <td width='15%'>" . htmlspecialchars($row['l_name']) . "</td>
            <td width='15%'>" . htmlspecialchars($row['age']) . "</td>
            <td width='5%'>" . htmlspecialchars($row['phone']) . "</td>
            <td width='10%'>" . htmlspecialchars($row['address']) . "</td>
            <td width='15%'>" . htmlspecialchars($row['country']) . "</td>
            <td width='5%'>" . htmlspecialchars($row['time_create']) . "</td>
            <td>
                <button class='btn btn-warning' onclick='editUser(" . $row['id'] . ")'>
                    <i class='fa-solid fa-pen-to-square'></i>
                </button>
                <button class='btn btn-danger' onclick='deleteUser(" . $row['id'] . ")'>
                    <i class='fa-solid fa-trash'></i>
                </button>
            </td>
        </tr>
    ";
}
?>



