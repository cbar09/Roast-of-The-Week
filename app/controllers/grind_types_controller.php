<?php
class GrindTypesController extends AppController {

	var $name = 'GrindTypes';

	function index() {
		$this->GrindType->recursive = 0;
		$this->set('grindTypes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid grind type', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('grindType', $this->GrindType->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->GrindType->create();
			if ($this->GrindType->save($this->data)) {
				$this->Session->setFlash(__('The grind type has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grind type could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid grind type', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->GrindType->save($this->data)) {
				$this->Session->setFlash(__('The grind type has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grind type could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->GrindType->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for grind type', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->GrindType->delete($id)) {
			$this->Session->setFlash(__('Grind type deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Grind type was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>