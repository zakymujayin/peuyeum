<?php


class OutboxController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
		$this->view->title = "Outbox - ";
		$this->view->selectmenu	= "outbox";
		$response = $this->smsweb->post('http://batikku.ml/outbox.py','outbox');
		$this->view->response = $response;
		
    }

}

