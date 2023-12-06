<h2>Input Baju</h2>

<form action="<?php echo URL; ?>/baju/save" method="post">
    <table>
        <tr>
            <td>merk</td>
            <td><input type="text" name="merk" required></td>
        </tr>
        <tr>
            <td>warna</td>
            <td><input type="text" name="warna" required></td>
        </tr>
        <tr>
            <td>harga</td>
            <td><input type="number" name="harga" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>