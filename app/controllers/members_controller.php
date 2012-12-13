<?php

class MembersController extends AppController
{

/*
    function beforeFilter() {
    parent::beforeFilter();
    $this->Auth->allowedActions = array('*');
    } */
	
	function index() {
		$this->Member->recursive = 0;
		$this->set('members', $this->paginate());
	}

	function login()
	{
       if($this->Session->check('Auth.Member.id'))
    {
        $this->redirect($this->referer(array('controller' => 'members', 'action' => 'membres_home', 'membres' => true)), true);
    }
	}
 
	function membres_logout()
	{
		$this->redirect($this->AppAuth->logout());
	}
	/*
	function add(){
	    $data=array();
		$data['Member']['email']='test@yahoo.fr';
		$data['Member']['password']='test';
		$this->Member->save($data);
	

} */

	
	function add() {

	} 
	

    function membres_home() {

	}
	
	

	

}
?>