<?php

namespace DAL;

use PDO;
use MODEL\Reserva;

class ReservaDAL
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=hotel_db', 'root', '');
    }

    public function fetchAll()
    {
        $stmt = $this->db->query("SELECT * FROM reservas");
        return $stmt->fetchAll(PDO::FETCH_CLASS, 'MODEL\Reserva');
    }

    public function fetchById($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM reservas WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetchObject('MODEL\Reserva');
    }

    public function insert(Reserva $reserva)
    {
        $stmt = $this->db->prepare("INSERT INTO reservas (hotel_id) VALUES (?)");
        return $stmt->execute([$reserva->getHotelId()]);
    }

    public function update(Reserva $reserva)
    {
        $stmt = $this->db->prepare("UPDATE reservas SET hotel_id = ? WHERE id = ?");
        return $stmt->execute([$reserva->getHotelId(), $reserva->getId()]);
    }

    public function delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM reservas WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>
