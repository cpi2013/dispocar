<?php
class FormulairecontactsController extends AppController {

	var $name = 'Formulairecontacts';

	function index() {
		$this->Formulairecontact->recursive = 0;
		$this->set('formulairecontacts', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid formulairecontact', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('formulairecontact', $this->Formulairecontact->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Formulairecontact->create();
			if ($this->Formulairecontact->save($this->data)) {
				$this->Session->setFlash(__('The formulairecontact has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The formulairecontact could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid formulairecontact', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Formulairecontact->save($this->data)) {
				$this->Session->setFlash(__('The formulairecontact has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The formulairecontact could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Formulairecontact->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for formulairecontact', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Formulairecontact->delete($id)) {
			$this->Session->setFlash(__('Formulairecontact deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Formulairecontact was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Formulairecontact->recursive = 0;
		$this->set('formulairecontacts', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid formulairecontact', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('formulairecontact', $this->Formulairecontact->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Formulairecontact->create();
			if ($this->Formulairecontact->save($this->data)) {
				$this->Session->setFlash(__('The formulairecontact has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The formulairecontact could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid formulairecontact', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Formulairecontact->save($this->data)) {
				$this->Session->setFlash(__('The formulairecontact has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The formulairecontact could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Formulairecontact->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for formulairecontact', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Formulairecontact->delete($id)) {
			$this->Session->setFlash(__('Formulairecontact deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Formulairecontact was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
