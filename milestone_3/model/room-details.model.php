<?php
require 'Database.php';

class RoomDetailsModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getRoomDetailsById($room_id) {
        $query = "SELECT * FROM properties WHERE id = :room_id";
        $statement = $this->pdo->prepare($query);
        $statement->bindParam(':room_id', $room_id);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }
}