<?php
$j = 1;
while ($j <= 5) {
    echo "Perulangan ke-$j <br>";
    $j++;
}

$k = 1;
do {
    echo "Hasil Perulangan ke-$k <br>";
    $k++;
} while ($k <= 5);

$colors = array("Merah", "Hijau", "Biru", "kuning");

foreach ($colors as $color) {
    echo "Warna: $color <br>";
}

for ($i = 1; $i <= 3; $i++) {
    echo "Perulangan luar ke-$i: ";
    for ($j = 1; $j <= 3; $j++) {
        echo "$j ";
    }
    echo "<br>";
}
?>