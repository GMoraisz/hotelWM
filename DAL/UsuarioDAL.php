<?php

namespace DAL;

use PDO;
use MODEL\Usuario;

class UsuarioDAL
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=hotel_db', 'root', '');
    }

    public function fetchAll()
    {
        $stmt = $this->db->query("SELECT * FROM usuarios");
        return $stmt->fetchAll(PDO::FETCH_CLASS, 'MODEL\Usuario');
    }

    public function fetchById($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM usuarios WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetchObject('MODEL\Usuario');
    }

    public function insert(Usuario $usuario)
    {
        $stmt = $this->db->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
        return $stmt->execute([$usuario->nome, $usuario->email, $usuario->senha]);
    }

    public function update(Usuario $usuario)
    {
        $stmt = $this->db->prepare("UPDATE usuarios SET nome = ?, email = ?, senha = ? WHERE id = ?");
        return $stmt->execute([$usuario->nome, $usuario->email, $usuario->senha, $usuario->id]);
    }

    public function delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM usuarios WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
