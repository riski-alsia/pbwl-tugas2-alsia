<h2>Input User</h2>

<form action="<?php echo URL; ?>/users/simpan" method="post">
    <table>
        <tr>
            <td>EMAIL</td>
            <td><input type="text" name="user_email"></td>
        </tr>
        <tr>
            <td>PASSWORD</td>
            <td><input type="text" name="user_password"></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="user_nama"></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><textarea name="user_alamat" id="" cols="30" rows="10"></textarea>
        </tr>
        <tr>
            <td>HP</td>
            <td><input type="text" name="user_hp"></td>
        </tr>
        <tr>
            <td>POS</td>
            <td><input type="text" name="user_pos"></td>
        </tr>
        <tr>
            <td>STATUS</td>
            <td><select class="input-data" name="user_aktif" id="">
                <option value="">PILIH</option>
                <option value="1">Aktif</option>
                <option value="0">Tidak Aktif</option>
            </select>
        </tr>
        
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>