<?php

namespace BLL;

use DAL\ReservaDAL;
use MODEL\Reserva;

class ReservaBLL
{
    private $reservaDAL;

    public function __construct()
    {
        $this->reservaDAL = new ReservaDAL();
    }

    public function getAllReservas()
    {
        return $this->reservaDAL->fetchAll();
    }

    public function getReservaById($id)
    {
        return $this->reservaDAL->fetchById($id);
    }

    public function addReserva(Reserva $reserva)
    {
        // Adicione validações antes de salvar a reserva
        if ($this->validateReserva($reserva)) {
            return $this->reservaDAL->insert($reserva);
        }
        return false;
    }

    public function updateReserva(Reserva $reserva)
    {
        // Adicione validações antes de atualizar a reserva
        if ($this->validateReserva($reserva)) {
            return $this->reservaDAL->update($reserva);
        }
        return false;
    }

    public function deleteReserva($id)
    {
        return $this->reservaDAL->delete($id);
    }

    private function validateReserva(Reserva $reserva)
    {
        // Validações simples como exemplo
        if (empty($reserva->idhotel) || empty($reserva->status)) {
            return false;
        }
        return true;
    }
}
