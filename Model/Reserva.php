<?php
namespace MODEL;

class Reserva
{
    private $id;
    private $hotel_id;
    private $cliente_id;
    private $data_checkin;
    private $data_checkout;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getHotelId()
    {
        return $this->hotel_id;
    }

    public function setHotelId($hotel_id)
    {
        $this->hotel_id = $hotel_id;
    }

    public function getClienteId()
    {
        return $this->cliente_id;
    }

    public function setClienteId($cliente_id)
    {
        $this->cliente_id = $cliente_id;
    }

    public function getDataCheckin()
    {
        return $this->data_checkin;
    }

    public function setDataCheckin($data_checkin)
    {
        $this->data_checkin = $data_checkin;
    }

    public function getDataCheckout()
    {
        return $this->data_checkout;
    }

    public function setDataCheckout($data_checkout)
    {
        $this->data_checkout = $data_checkout;
    }
}
?>
