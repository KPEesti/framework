<?php

class agent_contract
{
    public int $id;
    public int $apart_id;
    public int $agent_id;
    public DateTime $conclusion_date;
    public DateTime $expiration_date;
    public bool $comm_type;
    public int $comm_amt;

    public function __construct(
        $id,
        $apart_id,
        $agent_id,
        $conclusion_date,
        $expiration_date,
        $comm_type,
        $comm_amt)
    {
        $this->id = $id;
        $this->apart_id = $apart_id;
        $this->agent_id = $agent_id;
        $this->conclusion_date = $conclusion_date;
        $this->expiration_date = $expiration_date;
        $this->comm_type = $comm_type;
        $this->comm_amt = $comm_amt;
    }
}
