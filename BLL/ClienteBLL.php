<?php

namespace BLL;

use DAL\ClienteDAL;
use MODEL\Cliente;

class ClienteBLL
{
    private $clienteDAL;

    public function __construct()
    {
        $this->clienteDAL = new ClienteDAL();
    }

    public function getAllClientes()
    {
        return $this->clienteDAL->fetchAll();
    }

    public function getClienteById($id)
    {
        return $this->clienteDAL->fetchById($id);
    }

    public function addCliente(Cliente $cliente)
    {
        // Adicione validações antes de salvar o cliente
        if ($this->validateCliente($cliente)) {
            return $this->clienteDAL->insert($cliente);
        }
        return false;
    }

    public function updateCliente(Cliente $cliente)
    {
        // Adicione validações antes de atualizar o cliente
        if ($this->validateCliente($cliente)) {
            return $this->clienteDAL->update($cliente);
        }
        return false;
    }

    public function deleteCliente($id)
    {
        return $this->clienteDAL->delete($id);
    }

    private function validateCliente(Cliente $cliente)
    {
        // Validações simples como exemplo
        if (empty($cliente->nome) || empty($cliente->endereco) || empty($cliente->telefone) || empty($cliente->email)) {
            return false;
        }
        return true;
    }
}
