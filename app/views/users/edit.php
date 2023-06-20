<h2>Edit User</h2>

<form action="<?php echo URL; ?>/users/update" method="post">
<input type="hidden" name="user_id" value="<?php echo $data['user_id']; ?>">
    <table>
        <tr>
            <td>EMAIL</td>
            <td><input type="text" name="user_email" value="<?php echo $data['user_email']; ?>"></td>
        </tr>
        <tr>
            <td>PASSWORD</td>
            <td><input type="text" name="user_password" value="<?php echo $data['user_password']; ?>"></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="user_nama" value="<?php echo $data['user_nama']; ?>"></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><input type="text" name="user_alamat" value="<?php echo $data['user_alamat']; ?>"></td>
        </tr>
        <tr>
            <td>HP</td>
            <td><input type="text" name="user_hp" value="<?php echo $data['user_hp']; ?>"></td>
        </tr>
        <tr>
            <td>POS</td>
            <td><input type="text" name="user_pos" value="<?php echo $data['user_pos']; ?>"></td>
        </tr>
        <tr>
            <td>STATUS</td>
            <td><input type="text" name="user_aktif" value="<?php echo $data['user_aktif']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>