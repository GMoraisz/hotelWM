<?php

namespace DAL;

use PDO;
use MODEL\Hotel;

class HotelDAL
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=hotel_db', 'root', '');
    }

    public function fetchAll()
    {
        $stmt = $this->db->query("SELECT * FROM hotels");
        return $stmt->fetchAll(PDO::FETCH_CLASS, 'MODEL\Hotel');
    }

    public function fetchById($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM hotels WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetchObject('MODEL\Hotel');
    }

    public function insert(Hotel $hotel)
    {
        $stmt = $this->db->prepare("INSERT INTO hotels (nome, endereco, cidade, estado, telefone, email) VALUES (?, ?, ?, ?, ?, ?)");
        return $stmt->execute([$hotel->nome, $hotel->endereco, $hotel->cidade, $hotel->estado, $hotel->telefone, $hotel->email]);
    }

    public function update(Hotel $hotel)
    {
        $stmt = $this->db->prepare("UPDATE hotels SET nome = ?, endereco = ?, cidade = ?, estado = ?, telefone = ?, email = ? WHERE id = ?");
        return $stmt->execute([$hotel->nome, $hotel->endereco, $hotel->cidade, $hotel->estado, $hotel->telefone, $hotel->email, $hotel->id]);
    }

    public function delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM hotels WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
