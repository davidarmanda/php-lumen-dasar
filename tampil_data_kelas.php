<!doctype html>
    <html>
        <head>
            <title>Menampilkan Daftar Kelas</title>
        </head>
        <body>
    <table
        align="center"
        border="solid,1px"
        width="400px"
        >
    <tr>
    <th>Kode Kelas</th>
    <th>Nama Kelas</th>
    <th>Kapasitas Kelas</th>
    <th>Perlatan Kelas</th>
    </tr>
    <?php
        $data=array('1B'=>array('1B','Curtin','30 Orang','Lengkap'),
        '2B'=>array('2B','Wolonggong','30 Orang','Lengkap'),
        '3B'=>array('3B','Malaysia','35 Orang','Lengkap'),
        '4B'=>array('4B','Thailand','35 Orang','Lengkap'),
        '5B'=>array('5B','Indonesia','25 Orang','Lengkap')
        );
        echo "<tr>";
            foreach($data['1B'] as $kode) {
            echo "<td align=center>$kode</td>";
        }
        echo "</tr>";
        echo "<tr>";
        foreach($data['2B'] as $kode) {
        echo "<td align=center>$kode</td>";
        }
        echo "</tr>";
        echo "<tr>";
        foreach($data['3B'] as $kode) {
        echo "<td align=center>$kode</td>";
        }
        echo "</tr>";
        echo "<tr>";
        foreach($data['4B'] as $kode) {
        echo "<td align=center>$kode</td>";
        }
        echo "</tr>";
        echo "<tr>";
        foreach($data['5B'] as $kode) {
        echo "<td align=center>$kode</td>";
        }
        echo "</tr>";
        ?>
        </table>
    </body>
</html>