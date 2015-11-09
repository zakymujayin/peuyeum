<?php

class SendController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
		$this->view->title = "Send - ";
		$this->view->selectmenu	= "send";
		$params = array(
		   "rcpt" => "089649319613",
		   "msg" => "testing dari laptop zaki okeh"
		);
		$response = $this->smsweb->post('http://batikku.ml/s.py',$params);
		$this->view->response = $response;
    }

}

