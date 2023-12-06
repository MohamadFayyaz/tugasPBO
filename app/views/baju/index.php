<h2>baju</h2>

<a href="<?php echo URL; ?>/baju/input" class="btn">Input baju</a>

<table>
      <tr>
            <th>NO</th>
            <th>Merk</th>
            <th>Warna</th>
            <th>harga</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['merk']; ?></td>
                  <td><?php echo $row['warna']; ?></td>
                  <td><?php echo $row['harga']; ?></td>
                  <td><a href="<?php echo URL; ?>/baju/edit/<?php echo $row['id']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/baju/delete/<?php echo $row['id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>