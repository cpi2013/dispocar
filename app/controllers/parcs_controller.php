<?php
class ParcsController extends AppController {

	var $name = 'Parcs';
/************************************************************************ fonctions membres****/

	function membres_index() {
		$this->Parc->recursive = 0;
		$this->set('parcs', $this->paginate());
	} 

	function membres_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid parc', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('parc', $this->Parc->read(null, $id));
	}

	
	
	/************************************************************************************** fonctions admin***********/

	function admin_index() {
		$this->Parc->recursive = 0;
		$this->set('parcs', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid parc', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('parc', $this->Parc->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Parc->create();
			if ($this->Parc->save($this->data)) {
				$this->Session->setFlash(__('The parc has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The parc could not be saved. Please, try again.', true));
			}
		}
		$ovehicules = $this->Parc->Ovehicule->find('list');
		$nvehicules = $this->Parc->Nvehicule->find('list');
		$this->set(compact('ovehicules', 'nvehicules'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid parc', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Parc->save($this->data)) {
				$this->Session->setFlash(__('The parc has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The parc could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Parc->read(null, $id);
		}
		$ovehicules = $this->Parc->Ovehicule->find('list');
		$nvehicules = $this->Parc->Nvehicule->find('list');
		$this->set(compact('ovehicules', 'nvehicules'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for parc', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Parc->delete($id)) {
			$this->Session->setFlash(__('Parc deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Parc was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
