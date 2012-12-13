<?php
class UsersController extends AppController
{



	function login()
	{
 
	}
 
	function admin_logout()
	{
		$this->redirect($this->AppAuth->logout());
	}
/*	
	function add(){
	    $data=array();
		$data['User']['login']='test';
		$data['User']['password']='test';
		$this->User->save($data);

	} */
	function admin_home() {

	}


	}
?>