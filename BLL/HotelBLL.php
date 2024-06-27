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
        // Adicionar validações, se necessário
        return $this->hotelDAL->insert($hotel);
    }

    public function updateHotel(Hotel $hotel)
    {
        // Adicionar validações, se necessário
        return $this->hotelDAL->update($hotel);
    }

    public function deleteHotel($id)
    {
        return $this->hotelDAL->delete($id);
    }
}
?>
