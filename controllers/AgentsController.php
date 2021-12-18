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

            $contract = $request->getRequestParameter('contract');
            $agentsValidator = new AgentsValidator();
            $errors = $agentsValidator->validate($contract);

            if(empty($errors)){
                $this->agContractsRepository->add($contract);

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
}