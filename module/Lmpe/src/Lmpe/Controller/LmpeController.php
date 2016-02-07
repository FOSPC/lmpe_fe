<?php

namespace Lmpe\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class LmpeController extends AbstractActionController {
	public function indexAction() {
        
        $adapter=$this->getServiceLocator()->get('Zend/Db/Adapter/Adapter');

		return new ViewModel ();
	}
	public function loginAction() {
		return new ViewModel ();
	}
	public function signupAction() {
		return new ViewModel ();
	}
}
?>
