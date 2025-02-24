<?php
    $ns1 = ["id" => 1, "nim" => "0110124022", "uts" => 99, "uas" => 100, "tugas" => 78];
    $ns2 = ["id" => 2, "nim" => "0110124023", "uts" => 89, "uas" => 80, "tugas" => 88];
    $ns3 = ["id" => 3, "nim" => "0110124024", "uts" => 79, "uas" => 70, "tugas" => 68];
    $ns4 = ["id" => 4, "nim" => "0110124025", "uts" => 69, "uas" => 60, "tugas" => 98];

    $ar_nilai = [$ns1, $ns2, $ns3, $ns4];

echo $ar_nilai[0]["nim"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Mahasiswa/title>
</head>
<body>
    <h3>Daftar Nilai Siswa</h3>
    <table border="1" width="100%">
        <thead>
            <th>No</th>
            <th>NIM</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>Tugas</th>
            <th>Nilai Akhir</th>
        </thead>
        <tbody>
            <?php
                $nomor =1;
                foreach ($ar_nilai as $ns) {
                    echo '<tr></td>'.$nomor.'</td>';
                    echo '<td>'.$ns['nim'].'</td>';
                    echo '<td>'.$ns['uts'].'</td>';
                    echo '<td>'.$ns['uas'].'</td>';
                    echo '<td>'.$ns['tugas'].'</td>';
                    $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas'])/3;
                    echo '<td>'.number_format($nilai_akhir, 2, ', ', '.').'</td>';
                    echo '<tr/>';
                    $nomor++;
                }
                ?>
        </tbody>
        </table>
</body>
</html>