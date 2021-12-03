<?php
require_once 'apartment_contract.php';

class ApartmentRepository
{
    protected $connection = null;

    protected array $apartments = [];

    public function  __construct(PDO $connection)
    {
        $this->connection =$connection;
    }

    public function getAllApartments()
    {
        $statement = $this->connection->query("select * from apartment");
        $arr = $statement->fetchAll();
        foreach ($arr as $value):
            $this->apartments[] = new apartment_contract(
                $value['Apart_ID'],
                $value['Apart_Cost'],
                $value['Apart_Num'],
                $value['ResComplex']
            );
        endforeach;
        return $this->apartments;
    }

    public function add($contract)
    {
        $this->connection->prepare("insert into apartment
                (Apart_Cost, Apart_Num, ResComplex)
                values (?, ?, ?)")
            ->execute(
              [
                  $contract[Apart_Cost],
                  $contract[Apart_Num],
                  $contract[ResComplex]
              ]
            );
    }
}