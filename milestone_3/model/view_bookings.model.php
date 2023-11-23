<?php

require 'Database.php';
class ViewBookingsModel
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getBookingData()
    {
        $query = "
        SELECT properties.unit_number, properties.street, properties.property_type, properties.listing_type
        FROM bookings
        INNER JOIN properties ON bookings.property_id = properties.id
        INNER JOIN favorites ON favorites.property_id = properties.id
        WHERE favorites.user_id = :user_id
    ";

        // Replace ":user_id" with the actual user ID or fetch it from the session
        $user_id = $_SESSION['user_id'];

        $statement = $this->pdo->prepare($query);
        $statement->bindParam(':user_id', $user_id);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>