<!DOCTYPE html>
<html>

<head>
    <title>Edit Data</title>
</head>

<body>
    <center>
        <h3>Edit Data</h3>
    </center>
    <?php foreach ($user as $u) { ?>
        <form action="<?php echo base_url() . 'crud/update'; ?>" method="post">
            <table style="margin:20px auto;">
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $u->id ?>">
                        <input type="text" name="nama" value="<?php echo $u->nama ?>">
                    </td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td><select name='kelas'>
                            <option value="<?php echo $u->kelas ?>"><?php echo $u->kelas ?></option>
                            <option value='X'>X</option>
                            <option value='XI'>XI</option>
                            <option value='XII'>XII</option>
                        </select></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td><select name='jurusan'>
                            <option value="<?php echo $u->jurusan ?>"><?php echo $u->jurusan ?></option>
                            <option value='RPL'>RPL</option>
                            <option value='TKJ'>TKJ</option>
                            <option value='MM'>MM</option>
                        </select></td>
                </tr>
                <tr>
                    <td>SPP Bulan</td>
                    <td><select name='spp'>
                            <option value="<?php echo $u->spp ?>"><?php echo $u->spp ?></option>
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
                    <td>: <?php echo $u->tanggal_bayar ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
                <table>
        </form>
    <?php } ?>
</body>

</html>