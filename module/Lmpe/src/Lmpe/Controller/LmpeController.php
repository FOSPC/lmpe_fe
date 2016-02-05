<?php

namespace Lmpe\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class LmpeController extends AbstractActionController {
	public function indexAction() {
		return new ViewModel ();
	}
	public function loginAction() {
		return new ViewModel ();
	}
}
?>
