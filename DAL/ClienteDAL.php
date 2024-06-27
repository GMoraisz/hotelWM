<?php

namespace DAL;

use PDO;
use MODEL\Cliente;

class ClienteDAL
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=hotel_db', 'root', '');
    }

    public function fetchAll()
    {
        $stmt = $this->db->query("SELECT * FROM clientes");
        return $stmt->fetchAll(PDO::FETCH_CLASS, 'MODEL\Cliente');
    }

    public function fetchById($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM clientes WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetchObject('MODEL\Cliente');
    }

    public function insert(Cliente $cliente)
    {
        $stmt = $this->db->prepare("INSERT INTO clientes (nome, endereco, telefone, email) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$cliente->nome, $cliente->endereco, $cliente->telefone, $cliente->email]);
    }

    public function update(Cliente $cliente)
    {
        $stmt = $this->db->prepare("UPDATE clientes SET nome = ?, endereco = ?, telefone = ?, email = ? WHERE id = ?");
        return $stmt->execute([$cliente->nome, $cliente->endereco, $cliente->telefone, $cliente->email, $cliente->id]);
    }

    public function delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM clientes WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
