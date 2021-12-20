<?php

class AgentsController extends BaseController
{
    public $name ='agents';

    protected $AgentRepository;

    public function __construct($AgentRepository)
    {
        $this->AgentRepository = $AgentRepository;
    }

    public function agentsAction(Request $request)
    {
        $agents = $this->AgentRepository->getAllAgContracts();
        return new Response($this->render('/AgentsContracts/agents', [
            'Contracts_Agent' => $agents
        ]));
    }

    public function createFormAction(Request $request)
    {
        return new Response($this->render('/AgentsContracts/creation_agents'));
    }

    public function createAction($request)
    {
        if ($request->isPost() && !empty($request->getRequestParameter('contract'))) {

            $contract = $request->getRequestParameter('contract');
            $agentsValidator = new AgentsValidator();
            $errors = $agentsValidator->validate($contract);

            if(empty($errors)){
                $this->AgentRepository->add($contract);

                return new Response(
                    '/agents_Contracts', '301', 'Moved'
                );
            } else {
                return new Response(
                    $this->render('AgentsContracts/creation_agents', ['errors' => $errors])
                );
            }
        }
    }

    public function FindByNameAction($request)
    {
        $agent = $request->getRequestParameter('name');
        $contracts = $this->AgentRepository->getAgentsContractByName($agent);
        $paySum = $this->AgentRepository->getSumPay();
        return new Response($this->render('/AgentsContracts/agents', [
            'Contracts_Agent' => $contracts,
            'Pay_Sum' => $paySum
        ]));
    }
}