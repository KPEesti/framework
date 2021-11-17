<?php
require_once 'agent_contract.php';

class AgContractsRepository
{
    protected $connection = null;

    protected array $agents = [];

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function getAllAgContracts()
    {
        $statment = $this->connection->query("select * from agents_Contracts");
        $arr = $statment->fetchAll();
        foreach ($arr as $value):
            array_push($this->agents,
                new agent_contract(
                    $value['Contract_Id'],
                    $value['Agent_Id'],
                    $value['Apart_Id'],
                    new DateTime($value['Conclusion_Date']),
                    new DateTime($value['Expiration_Date']),
                    $value['Comm_Type'],
                    $value['Comm_AMT']));
        endforeach;
        return $this->agents;
    }

    public function getAllApartContracts()
    {
        $statment = $this->connection->query("select * from apartment_Contracts");
        return $statment->fetchAll();
    }
}