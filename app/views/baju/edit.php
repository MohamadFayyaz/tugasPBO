<h2>Edit Baju</h2>

<form action="<?php echo URL; ?>/baju/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['id']; ?>">
    <table>
        <tr>
            <td>Merk</td>
            <td><input type="text" name="merk" value="<?php echo $data['row']['merk']; ?>" required></td>
        </tr>
        <tr>
            <td>Warna</td>
            <td><input type="text" name="warna" value="<?php echo $data['row']['warna']; ?>" required></td>
        </tr>
        <tr>
            <td>CC</td>
            <td><input type="number" name="harga" value="<?php echo $data['row']['harga']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>