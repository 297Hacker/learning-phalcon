<?php

class LoginControlller extends Phalcon\Mvc\controller
{

	public function initialize()
	{
		echo 'INIT!';
	}

	public function indexAction()
	{
		echo 'Login!';
	}

	public function processAction($username = false, $age = 12)
	{
		echo 'Processing';
		echo $username;
		echo $age;

		$this->dispatcher->forward([
									'controller' => 'login',
									'action' => 'test'
									]);
	}

	public fucntion testAction()
	{
		echo '--TEST ACTION--';
	}
}