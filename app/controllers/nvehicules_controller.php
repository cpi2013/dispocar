<?php
class NvehiculesController extends AppController {

	var $name = 'Nvehicules';

	function index() {
		$this->Nvehicule->recursive = 0;
		$this->set('nvehicules', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid nvehicule', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('nvehicule', $this->Nvehicule->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Nvehicule->create();
			if ($this->Nvehicule->save($this->data)) {
				$this->Session->setFlash(__('The nvehicule has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The nvehicule could not be saved. Please, try again.', true));
			}
		}
		$clients = $this->Nvehicule->Client->find('list');
		$this->set(compact('clients'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid nvehicule', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Nvehicule->save($this->data)) {
				$this->Session->setFlash(__('The nvehicule has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The nvehicule could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Nvehicule->read(null, $id);
		}
		$clients = $this->Nvehicule->Client->find('list');
		$this->set(compact('clients'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for nvehicule', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Nvehicule->delete($id)) {
			$this->Session->setFlash(__('Nvehicule deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Nvehicule was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
