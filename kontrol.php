<?php //Main di If-Else
$nilaiifelse= 100;

if ($nilaiifelse >= 90) {
    echo  "Nilai Anda: A";
}
    elseif ($nilaiifelse >= 80) {
        echo "Nilai Anda: B";
    
    }
    elseif ($nilaiifelse >= 70) {
        echo "Nilai Anda: C";
    } else {
        echo "Nilai Anda: D";
    }
 echo "<br>";
?>

<?php //Main di Switch
$nilai_php = 88;

switch (true) {
    case ($nilai_php >= 90):
        echo "Nilai Anda dalam Switch: A";
        break;
    case ($nilai_php >= 80):
        echo "Nilai Anda dalam Switch: B";
        break;
    case ($nilai_php >= 70):
        echo "Nilai Anda dalam Switch: C";
        break;
    default:
        echo "Nilai Anda dalam Switch: D";
}
echo "<br> <br>";

?>

<?php //Main di Looping For
for($i=1;$i<=10;$i++){
echo "Looping ke: ".$i."<br />";
}
?>

<?php //Main di Looping While
$i = 10;
while ($i >= 1) {
    echo "Looping ke: " . $i . "<br />";
    $i--;
}

echo "<br> <br>";

?>

<?php //Main di Array
$nama = array("Ajim", "Amin", "Abdi");
for ($ix = 0; $ix < 3; $ix++) {
    echo "$nama[$ix]";
    echo "<br />";
}
?>


<?php //Main di Foreach
$nama = array("Aidul", "Arif", "Iqbal", "Basirun");
foreach ($nama as $geng) {
    echo "$geng";
    echo "<br />";
}

echo "<br> <br>";
?>

<?php //Main di Function
function perkalian($bil_1, $bil_2) {
    $hasil = $bil_1 * $bil_2;
    return $hasil;
}

echo "5 x 10 = " . perkalian(5, 10);
echo "<br> <br>";
?>



<?php //Main di If-Else & Looping
for($i=1;$i<=6;$i++){
if($i == 3){
break;
}
echo "Nilai Itu di Break: ".$i."<br />";
}
echo "Break Muncul!"; echo "<br>";

for($i=1;$i<=7;$i++){
if($i == 3){
continue;
}
echo "Nilai Itu di Continue: ".$i."<br />";
}

for($i=1;$i<=5;$i++){
if($i == 4){
exit();
}
echo "Nilai Itu di Exit: ".$i."<br />";
}
?>

