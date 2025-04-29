<?php
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo "$i ";
    }
}
?>

<table border="1px">
    <tr>
        <th>bilangan</th>
        <?php
        // Header kolom (1–10)
        for ($i = 1; $i <= 10; $i++) {
            echo "<th class = 'header'>$i</th>";
        }
        ?>
    </tr>
    <style>
        .header {
            background-color: #00FF00; /* Hijau */

        }
        .genap {
            background-color: #00FFFF; /* Biru */
        }
        .ganjil {
            background-color: #FFFF00; /* Kuning */
        }
    </style>

    <?php
    // Isi tabel perkalian
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr>";
        echo "<th class = 'header'>$i</th>"; // Header baris

        for ($j = 1; $j <= 10; $j++) {
            $hasil = $i * $j;
            $warna = ($hasil % 2 == 0) ? 'genap' : 'ganjil';
            echo "<td class='$warna'>$hasil</td>";
        }

        echo "</tr>";
    }
    ?>
</table>