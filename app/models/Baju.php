<?php

namespace App\Models;

use App\Core\Model;

class Baju extends Model
{

      public function show()
      {
            $query = "SELECT * FROM tb_baju";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }

      public function save()
      {
            $merk = $_POST['merk'];
            $warna = $_POST['warna'];
            $harga = $_POST['harga'];

            $sql = "INSERT INTO tb_baju
            SET merk=:merk, warna=:warna, harga=:harga";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":merk", $merk);
            $stmt->bindParam(":warna", $warna);
            $stmt->bindParam(":harga", $harga);

            $stmt->execute();
      }

      public function edit($id)
      {
            $query = "SELECT * FROM tb_baju WHERE id=:id";
            $stmt = $this->db->prepare($query);

            $stmt->bindParam(":id", $id);
            $stmt->execute();

            return $this->select($stmt);
      }

      public function update()
      {
            $merk = $_POST['merk'];
            $warna = $_POST['warna'];
            $harga = $_POST['harga'];
            $id = $_POST['id'];

            $sql = "UPDATE tb_baju
            SET merk=:merk, warna=:warna, harga=:harga
                  WHERE id=:id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":merk", $merk);
            $stmt->bindParam(":warna", $warna);
            $stmt->bindParam(":harga", $harga);
            $stmt->bindParam(":id", $id);

            $stmt->execute();
      }

      public function delete($id)
      {
            $sql = "DELETE FROM tb_baju WHERE id=:id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":id", $id);
            $stmt->execute();
      }
}
