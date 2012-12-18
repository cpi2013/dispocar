<?php

	class MembersController extends AppController{
    var $name = 'Members';

/*  function beforeFilter() {
    parent::beforeFilter();
    $this->Auth->allowedActions = array('*');
    } */
	
	/******************************************************************** les fonctions simples *************************/
	function index() {
		$this->Member->recursive = 0;
		$this->set('members', $this->paginate());
	}
	
	function login() {
       if($this->Session->check('Auth.Member.id'))
    {
        $this->redirect($this->referer(array('controller' => 'members', 'action' => 'membres_home', 'membres' => true)), true);
    }
	}
	
	function add() {
		if (!empty($this->data)) {
			$this->Member->create();
			if ($this->Member->save($this->data)) {
				$this->Session->setFlash(__('The member has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The member could not be saved. Please, try again.', true));
			}
		}
		$parcs = $this->Member->Parc->find('list');
		$this->set(compact('parcs'));
	}
	
	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid membre', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Member->save($this->data)) {
				$this->Session->setFlash(__('The membre has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The membre could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Member->read(null, $id);
		}
		$parcs = $this->Member->Parc->find('list');
		$this->set(compact('parcs'));
	}
	
	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid member', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('member', $this->Member->read(null, $id));
	}
	
	/******************************************************************* les fonctions membres  ***************/
		
    function membres_logout(){
		$this->redirect($this->AppAuth->logout());
	}
	
    function membres_home(){

	}
	
	
	/******************************************************************* les fonctions admin  ***************/

	function admin_index() {
	     $this->Member->recursive = 0;
		$this->set('members', $this->paginate());

	}
	
	function admin_add() {
		if (!empty($this->data)) {
			$this->Member->create();
			if ($this->Member->save($this->data)) {
				$this->Session->setFlash(__('The member has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The member could not be saved. Please, try again.', true));
			}
		}
		$parcs = $this->Member->Parc->find('list');
		$this->set(compact('parcs'));
	}
		
	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid membre', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Member->save($this->data)) {
				$this->Session->setFlash(__('The membre has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The membre could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Member->read(null, $id);
		}
		$parcs = $this->Member->Parc->find('list');
		$this->set(compact('parcs'));
	}
	
	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid member', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('member', $this->Member->read(null, $id));
	}
	
	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for membere', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Member->delete($id)) {
			$this->Session->setFlash(__('Membre deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Membre was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	
	
		

}
?>