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
        $stmt = $this->db->prepare("INSERT INTO reservas (hotel_id, cliente_id, data_checkin, data_checkout) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$reserva->hotel_id, $reserva->cliente_id, $reserva->data_checkin, $reserva->data_checkout]);
    }

    public function update(Reserva $reserva)
    {
        $stmt = $this->db->prepare("UPDATE reservas SET hotel_id = ?, cliente_id = ?, data_checkin = ?, data_checkout = ? WHERE id = ?");
        return $stmt->execute([$reserva->hotel_id, $reserva->cliente_id, $reserva->data_checkin, $reserva->data_checkout, $reserva->id]);
    }

    public function delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM reservas WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
