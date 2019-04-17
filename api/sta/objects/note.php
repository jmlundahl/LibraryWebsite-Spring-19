<?php

class Note {
  private $conn;
  private $table_name = "sta_note";
  private $title;
  private $id;
  private $dept;
  private $description;
  private $active;

  // constructor with $db as database connection
  public function __construct($db){
      $this->conn = $db;
  }

  public function getNotes() {
    $sql = "SELECT noteAID, noteTitle, FK_deptID FROM $this->table_name";
    $query = $this->conn->query($sql);
    return $query;
  }

  public function getById($idQuery) {
    $sql = "SELECT noteAID, noteTitle, FK_deptID FROM $this->table_name WHERE noteAID=$idQuery";
    $query = $this->conn->query($sql);
    return $query;
  }

  public function getByName($nameQuery) {
    $sql = "SELECT noteAID, noteTitle, FK_deptID FROM $this->table_name WHERE noteTitle='$nameQuery'";
    $query = $this->conn->query($sql);
    return $query;
  }

}
 ?>
