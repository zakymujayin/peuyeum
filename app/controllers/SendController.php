<?php

class SendController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
		$this->view->title = "Send - ";
		$this->view->selectmenu	= "send";
		$params = array(
		   "rcpt" => "081312000300",
		   "msg" => "dari php cocoba malam hari nih"
		);
		$response = $this->smsweb->post('http://batikku.ml/s.py',$params);
		$this->view->response = $response;
    }

}

