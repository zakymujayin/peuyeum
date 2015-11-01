<?php


class ErrorsController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
		$this->view->title = "Errors - ";
		$this->view->selectmenu	= "errors";
		$response = $this->smsweb->post('http://batikku.ml/errors.py','errors');
		$this->view->response = $response;
    }

}

