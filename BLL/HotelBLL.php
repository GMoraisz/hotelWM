<?php

namespace BLL;

use DAL\HotelDAL;
use MODEL\Hotel;

class HotelBLL
{
    private $hotelDAL;

    public function __construct()
    {
        $this->hotelDAL = new HotelDAL();
    }

    public function getAllHotels()
    {
        return $this->hotelDAL->fetchAll();
    }

    public function getHotelById($id)
    {
        return $this->hotelDAL->fetchById($id);
    }

    public function addHotel(Hotel $hotel)
    {
        // Adicione validações antes de salvar o hotel
        if ($this->validateHotel($hotel)) {
            return $this->hotelDAL->insert($hotel);
        }
        return false;
    }

    public function updateHotel(Hotel $hotel)
    {
        // Adicione validações antes de atualizar o hotel
        if ($this->validateHotel($hotel)) {
            return $this->hotelDAL->update($hotel);
        }
        return false;
    }

    public function deleteHotel($id)
    {
        return $this->hotelDAL->delete($id);
    }

    private function validateHotel(Hotel $hotel)
    {
        // Validações simples como exemplo
        if (empty($hotel->nome) || empty($hotel->endereco) || empty($hotel->cidade) || empty($hotel->estado) || empty($hotel->telefone) || empty($hotel->email)) {
            return false;
        }
        return true;
    }
}
