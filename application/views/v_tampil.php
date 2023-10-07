<!DOCTYPE html>
<html>

<head>
    <title>Data Pembayaran SPP</title>
</head>

<body>
    <center>
        <h2>Data Pembayaran SPP<br>SMK Wira Buana 2 Bogor<br>Tahun Ajaran
            2022/2023</h2>
    </center>
    <center><?php echo anchor('crud/tambah', 'Tambah Data'); ?></center>
    <table style="margin:20px auto;" border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>SPP</th>
            <th>Tanggal Bayar</th>
            <th>Action</th>
        </tr>
        <?php
        $no = 1;
        foreach ($user as $u) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $u->nama ?></td>
                <td><?php echo $u->kelas ?></td>
                <td><?php echo $u->jurusan ?></td>
                <td><?php echo $u->spp ?></td>
                <td><?php echo $u->tanggal_bayar ?></td>
                <td>
                    <?php echo anchor('crud/edit/' . $u->id, 'Edit'); ?>
                    <?php echo anchor('crud/hapus/' . $u->id, 'Hapus'); ?>
                </td>
            </tr>
        <?php } ?>
    </table>
    <center><input type="button" value="Cetak" onClick="window.print()" /> </center>
</body>

</html>