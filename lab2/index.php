<?php

// $arr = array("Sara" => 31, "John" => 41, "Walaa" => 39, "Ramy" => 40);
// asort($arr);
// echo "a) ascending order sort by value";
// echo '<pre>';
// foreach ($arr as $key => $value) {
//     echo "Key: $key; Value: $value\n";
// }
// echo '</pre>';

// ksort($arr);
// echo "b) ascending order sort by Key";
// echo '<pre>';
// foreach ($arr as $key => $value) {
//     echo "Key: $key; Value: $value\n";
// }
// echo '</pre>';
// arsort($arr);
// echo "c) descending order sorting by Value";
// echo '<pre>';
// foreach ($arr as $key => $value) {
//     echo "Key: $key; Value: $value\n";
// }
// echo '</pre>';

// krsort($arr);
// echo "d) descending order sorting by Key";
// echo '<pre>';
// foreach ($arr as $key => $value) {
//     echo "Key: $key; Value: $value\n";
// }
// echo '</pre>';

?>

<?php
$students = [
    ['name' => 'Alaa', 'email' => 'alaa@test.com', 'status' => 'PHP'],
    ['name' => 'Shamy', 'email' => 'shamy@test.com', 'status' => '.Net'],
    ['name' => 'Youssef', 'email' => 'youssef@test.com', 'status' => 'Testing'],
    ['name' => 'Waleid', 'email' => 'waleid@test.com', 'status' => 'PHP'],
    ['name' => 'Rahma', 'email' => 'rahma@test.com', 'status' => 'Front End'],
];
?>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($students as $value) {
            $phpColor = $value["status"] == "PHP" ? "color:red" : "";
            echo "<tr style=$phpColor;>";
            echo "<td> $value[name] </td>";
            echo "<td> $value[email] </td>";
            echo "<td> $value[status] </td>";
            echo "</tr>";
        }
        ?>
    </tbody>

</table>