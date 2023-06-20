<h2>INPUT PELANGGAN</h2>

<form action="<?php echo URL; ?>/pelanggan/simpan" method="post">
    <table>
        <tr>
            <td>ID GOLONGAN PELANGGAN</td>
            <td><input type="text" name="pel_id_gol"></td>
        </tr>
        <tr>
            <td>NOMOR REKENING</td>
            <td><input type="text" name="pel_no"></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="pel_nama"></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><textarea name="pel_alamat" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td>HP</td>
            <td><input type="text" name="pel_hp"></td>
        </tr>
        <tr>
            <td>KTP</td>
            <td><input type="text" name="pel_ktp"></td>
        </tr>
        <tr>
            <td>SERI</td>
            <td><input type="text" name="pel_seri"></td>
        </tr>
        <tr>
            <td>METERAN</td>
            <td><input type="text" name="pel_meteran"></td>
        </tr>
        <tr>
            <td>STATUS</td>
            <td><select class="input-data" name="pel_aktif" id="">
                <option value="">PILIH</option>
                <option value="1">Aktif</option>
                <option value="0">Tidak Aktif</option>
            </select> </td>
        </tr>
        <tr>
            <td>ID USER PELANGGAN</td>
            <td><input type="text" name="pel_id_user"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>