<?php
require_once 'agent_contract.php';

class AgentRepository
{
    protected $connection = null;

    protected array $agents = [];

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function getAllAgContracts()
    {
        $statement = $this->connection->query("select * from agents_apartment");
        $this->setAgContracts($statement);
        return $this->agents;
    }

    public function add($contract)
    {
        $this->connection->prepare("insert into agents_Contracts 
                (Agent, Apart_ID, Award_Type, FIX_AWARD, PERCENT_AWARD, Conclusion_Date, Expiration_Date)
                values (?, ?, ?, ?, ?, ?, ?)")
            ->execute(
                [
                    $contract[Agent],
                    $contract[Apart_ID],
                    $contract[Award_Type],
                    ($contract[Award_Type] === 'FIX') ? $contract[FIX_AWARD] : null,
                    ($contract[Award_Type] === 'PERCENT') ? $contract[PERCENT_AWARD] : null,
                    date($contract[Conclusion_Date]),
                    date($contract[Expiration_Date])
                ]
            );
    }

    public function getAgentsContractByName($Agent)
    {
        $statement = $this->connection->query("select * from agents_apartment where Agent like '%$Agent%'");
        $this->setAgContracts($statement);
        return $this->agents;
    }

    protected function setAgContracts($statement)
    {
        $arr = $statement->fetchAll();
        foreach ($arr as $value):
            $this->agents[] = new agent_contract(
                $value['Contract_ID'],
                $value['Agent'],
                $value['Apart_ID'],
                $value['Award_Type'],
                $value['FIX_AWARD'],
                $value['PERCENT_AWARD'],
                new DateTime($value['Conclusion_Date']),
                new DateTime($value['Expiration_Date']),
                $value['Apart_Cost']
            );
        endforeach;
    }

    public function getSumPay(): int
    {
        $sum = 0;

        foreach ($this->agents as $agent){
            $sum += $agent->award;
        }

        return $sum;
    }
}