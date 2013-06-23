<?php
App::uses('AppController', 'Controller');
/**
 * Subcidios Controller
 *
 * @property Subcidio $Subcidio
 */
class SubcidiosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Subcidio->recursive = 0;
		$this->set('subcidios', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Subcidio->id = $id;
		if (!$this->Subcidio->exists()) {
			throw new NotFoundException(__('Invalid subcidio'));
		}
		$this->set('subcidio', $this->Subcidio->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Subcidio->create();
			if ($this->Subcidio->save($this->request->data)) {
				$this->Session->setFlash(__('The subcidio has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subcidio could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Subcidio->id = $id;
		if (!$this->Subcidio->exists()) {
			throw new NotFoundException(__('Invalid subcidio'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Subcidio->save($this->request->data)) {
				$this->Session->setFlash(__('The subcidio has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subcidio could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Subcidio->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Subcidio->id = $id;
		if (!$this->Subcidio->exists()) {
			throw new NotFoundException(__('Invalid subcidio'));
		}
		if ($this->Subcidio->delete()) {
			$this->Session->setFlash(__('Subcidio deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Subcidio was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	public function beforeFilter() {
    parent::beforeFilter();
    $this->Auth->allow('index', 'view');
}
}
