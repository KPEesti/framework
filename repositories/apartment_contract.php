<?php

class apartment_contract
{
    public $id;
    public $cost;
    public $Apartment_Num;
    public $Res_Complex;
    public $status;

    public function __construct($id, $cost, $Apartment_Num, $Res_Complex, $status)
    {
        $this->id = $id;
        $this->cost = $cost;
        $this->Apartment_Num = $Apartment_Num;
        $this->Res_Complex = $Res_Complex;
        $this->status = $status;
    }
}