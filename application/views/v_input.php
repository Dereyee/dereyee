<!DOCTYPE html>
<html>

<head>
    <title>Tambah data baru </title>
</head>

<body>
    <center>
        <h3>Tambah data baru</h3>
    </center>
    <form action="<?php echo base_url() . 'crud/tambah_aksi'; ?>" method="post">
        <table style="margin:20px auto;">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><select name='kelas'>
                        <option value='X'>X</option>
                        <option value='XI'>XI</option>
                        <option value='XII'>XII</option>
                    </select></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td><select name='jurusan'>
                        <option value='RPL'>RPL</option>
                        <option value='TKJ'>TKJ</option>
                        <option value='MM'>MM</option>
                    </select></td>
            </tr>
            <tr>
                <td>SPP Bulan</td>
                <td><select name='spp'>
                        <option value='Januari'>Januari</option>
                        <option value='Februari'>Februari</option>
                        <option value='Maret'>Maret</option>
                        <option value='April'>Apri</option>
                        <option value='Mei'>Mei</option>
                        <option value='Juni'>Juni</option>
                        <option value='Juli'>Juli</option>
                        <option value='Agustus'>Agustus</option>
                        <option value='September'>September</option>
                        <option value='Oktober'>Oktober</option>
                        <option value='November'>November</option>
                        <option value='Desember'>Desember</option>
                    </select></td>
            </tr>
            <tr>
                <td>Tanggal Bayar</td>
                <td><input type="date" name="tanggal_bayar"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Tambah"></td>
            </tr>
        </table>
    </form>
</body>

</html>