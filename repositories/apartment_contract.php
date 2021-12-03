<?php

class apartment_contract
{
    public $Apart_ID;
    public $Apart_Cost;
    public $Apart_Num;
    public $ResComplex;

    public function __construct($id, $cost, $Apartment_Num, $Res_Complex)
    {
        $this->Apart_ID = $id;
        $this->Apart_Cost = $cost;
        $this->Apart_Num = $Apartment_Num;
        $this->ResComplex = $Res_Complex;
    }
}