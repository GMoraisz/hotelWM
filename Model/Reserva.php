<?php

namespace MODEL;

class Reserva
{
    public $id;
    public $status;
    public $idhotel; // Chave estrangeira da tabela hoteis

    public function __construct($id, $status, $idhotel)
    {
        $this->id = $id;
        $this->status = $status;
        $this->idhotel = $idhotel;
    }
}
