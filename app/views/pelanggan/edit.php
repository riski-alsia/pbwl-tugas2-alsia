<h2>Edit Pelanggan</h2>

<form action="<?php echo URL; ?>/pelanggan/update" method="post">
<input type="hidden" name="pel_id" value="<?php echo $data['pel_id']; ?>">
    <table>
        <tr>
            <td>ID GOLONGAN PELANGGAN</td>
            <td><input type="text" name="pel_id_gol" value="<?php echo $data['pel_id_gol']; ?>"></td>
        </tr>
        <tr>
            <td>NOMOR REKENING</td>
            <td><input type="text" name="pel_no" value="<?php echo $data['pel_no']; ?>"></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="pel_nama" value="<?php echo $data['pel_nama']; ?>"></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><input type="text" name="pel_alamat" value="<?php echo $data['pel_alamat']; ?>"></td>
        </tr>
        <tr>
            <td>HP</td>
            <td><input type="text" name="pel_hp" value="<?php echo $data['pel_hp']; ?>"></td>
        </tr>
        <tr>
            <td>KTP</td>
            <td><input type="text" name="pel_ktp" value="<?php echo $data['pel_ktp']; ?>"></td>
        </tr>
        <tr>
            <td>SERI</td>
            <td><input type="text" name="pel_seri" value="<?php echo $data['pel_seri']; ?>"></td>
        </tr>
        <tr>
            <td>METERAN</td>
            <td><input type="text" name="pel_meteran" value="<?php echo $data['pel_meteran']; ?>"></td>
        </tr>
        <tr>
            <td>STATUS</td>
            <td><input type="text" name="pel_aktif" value="<?php echo $data['pel_aktif']; ?>"></td>
        </tr>
        <tr>
            <td>ID USER PELANGGAN</td>
            <td><input type="text" name="pel_id_user" value="<?php echo $data['pel_id_user']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>