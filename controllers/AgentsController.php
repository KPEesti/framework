<?php

class AgentsController extends BaseController
{
    public $name ='agents';

    protected $agContractsRepository;

    public function __construct($agContractsRepository)
    {
        $this->agContractsRepository = $agContractsRepository;
    }

    public function agentsAction(Request $request)
    {
        $agents = $this->agContractsRepository->getAllAgContracts();
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

            $this->agContractsRepository->add($request->getRequestParameter('contract'));

            return new Response(
                '/agents_Contracts', '301', 'Moved'
            );
        }
    }
}