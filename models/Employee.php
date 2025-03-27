<?php
class Employee {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll($start, $limit) {
        $sql = "SELECT nhanvien.*, phongban.Ten_Phong FROM nhanvien 
                JOIN phongban ON nhanvien.Ma_Phong = phongban.Ma_Phong 
                LIMIT $start, $limit";
        return $this->conn->query($sql);
    }

    public function getTotal() {
        $result = $this->conn->query("SELECT COUNT(*) AS total FROM nhanvien");
        return $result->fetch_assoc()['total'];
    }

    public function getById($id) {
        $sql = "SELECT * FROM nhanvien WHERE Ma_NV='$id'";
        return $this->conn->query($sql)->fetch_assoc();
    }

    public function add($data) {
        $sql = "INSERT INTO nhanvien (Ma_NV, Ten_NV, Phai, Noi_Sinh, Ma_Phong, Luong) 
                VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sssssi", $data['Ma_NV'], $data['Ten_NV'], $data['Phai'], 
                          $data['Noi_Sinh'], $data['Ma_Phong'], $data['Luong']);
        return $stmt->execute();
    }

    public function update($data) {
        $sql = "UPDATE nhanvien SET Ten_NV=?, Phai=?, Noi_Sinh=?, Ma_Phong=?, Luong=? 
                WHERE Ma_NV=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssssis", $data['Ten_NV'], $data['Phai'], $data['Noi_Sinh'], 
                          $data['Ma_Phong'], $data['Luong'], $data['Ma_NV']);
        return $stmt->execute();
    }

    public function delete($id) {
        $sql = "DELETE FROM nhanvien WHERE Ma_NV=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $id);
        return $stmt->execute();
    }
}
?>