<!doctype html>
    <html>
        <head>
            <title>Menampilkan Daftar Siswa</title>
        </head>
        <body>
    <table
        align="center"
        border="solid,1px"
        width="400px"
        >
    <tr>
    <th>No</th>
    <th>Nis</th>
    <th>Nama</th>
    <th>Nilai</th>
    </tr>
    <?php
        $data=array('anin'=>array('1','0809.01.001','Anin','75'),
        'puspa'=>array('2','0809.02.002','Puspa','90'),
        'nasya'=>array('3','0809.03.003','Nasya','85'),
        'tiana'=>array('4','0809.04.004','Tiana','80'),
        'rami'=>array('5','0809.05.005','Ramitha','80')
        );
        echo "<tr>";
            foreach($data['anin'] as $nama) {
            echo "<td align=center>$nama</td>";
        }
        echo "</tr>";
        echo "<tr>";
        foreach($data['puspa'] as $nama) {
        echo "<td align=center>$nama</td>";
        }
        echo "</tr>";
        echo "<tr>";
        foreach($data['nasya'] as $nama) {
        echo "<td align=center>$nama</td>";
        }
        echo "</tr>";
        echo "<tr>";
        foreach($data['tiana'] as $nama) {
        echo "<td align=center>$nama</td>";
        }
        echo "</tr>";
        echo "<tr>";
        foreach($data['rami'] as $nama) {
        echo "<td align=center>$nama</td>";
        }
        echo "</tr>";
        ?>
        </table>
    </body>
</html>