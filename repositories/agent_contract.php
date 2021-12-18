<?php



class agent_contract
{
    public int $id;
    public string $agent;
    public int $apart_id;
    public string $award_type;
    public float $award;
    public DateTime $conclusion_date;
    public DateTime $expiration_date;

    public function __construct(
        $id,
        $agent,
        $apart_id,
        $award_type,
        $fix_award,
        $percent_award,
        $conclusion_date,
        $expiration_date,
        $Apart_Cost
    )
    {
        $this->id = $id;
        $this->agent = $agent;
        $this->apart_id = $apart_id;
        $this->award_type = $award_type;
        if ($award_type === 'FIX'){
            $this->award = $fix_award;
        } else {
            $this->award = $Apart_Cost * ($percent_award / 100);
        }
        $this->conclusion_date = $conclusion_date;
        $this->expiration_date = $expiration_date;
    }
}
