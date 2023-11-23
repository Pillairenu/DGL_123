<?php

require 'Database.php';

class RoomModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getRoomDetails() {
        $query = "SELECT * FROM properties";
        $statement = $this->pdo->query($query);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>