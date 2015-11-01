<?php


class SentitemsController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
		$this->view->title = "Sentitems - ";
		$this->view->selectmenu	= "sentitems";
		$response = $this->smsweb->post('http://batikku.ml/sentitems.py','sentitems');
		$this->view->response = $response;
    }

}

