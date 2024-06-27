<?php

namespace BLL;

use DAL\UsuarioDAL;
use MODEL\Usuario;

class UsuarioBLL
{
    private $usuarioDAL;

    public function __construct()
    {
        $this->usuarioDAL = new UsuarioDAL();
    }

    public function getAllUsuarios()
    {
        return $this->usuarioDAL->fetchAll();
    }

    public function getUsuarioById($id)
    {
        return $this->usuarioDAL->fetchById($id);
    }

    public function addUsuario(Usuario $usuario)
    {
        // Adicione validações antes de salvar o usuário
        if ($this->validateUsuario($usuario)) {
            return $this->usuarioDAL->insert($usuario);
        }
        return false;
    }

    public function updateUsuario(Usuario $usuario)
    {
        // Adicione validações antes de atualizar o usuário
        if ($this->validateUsuario($usuario)) {
            return $this->usuarioDAL->update($usuario);
        }
        return false;
    }

    public function deleteUsuario($id)
    {
        return $this->usuarioDAL->delete($id);
    }

    private function validateUsuario(Usuario $usuario)
    {
        // Validações simples como exemplo
        if (empty($usuario->nome) || empty($usuario->email) || empty($usuario->senha)) {
            return false;
        }
        return true;
    }
}
