<?php

class AgentsController
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
        return new Response($this->render('AgentsContracts/creation_agents'));
    }

    public function createAction()
    {

    }

    protected function render($templateName, $vars = [])
    {
        ob_start();
        extract($vars);
        include sprintf('templates/%s.php', $templateName);
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

    public function __call($name, $arguments)
    {
        return new Response('Sorry but this action not found',
            '404', 'Not found');
    }
}