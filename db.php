<?php
require_once 'config.php';

class Database extends Config {

    // insert user into database
    public function insert($fname,$lname,$email,$phone) {
      $sql ="INSERT INTO users ( first_name, last_name, email, telephone) VALUES (:fname, :lname, :email, :phone)";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute([
        'fname'=>$fname,
        'lname'=>$lname,
        'email'=>$email,
        'phone'=>$phone
      ]);
      return true;
    }

    // Fetch All Users From Database
    public function read(){
      $sql = "SELECT * FROM users ORDER BY id DESC";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll();
      return $result;
    }
}
?>