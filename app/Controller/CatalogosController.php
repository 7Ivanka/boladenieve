<?php
App::uses('AppController', 'Controller');
/**
 * Catalogos Controller
 *
 * @property Catalogo $Catalogo
 */
class CatalogosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Catalogo->recursive = 0;
		$this->set('catalogos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Catalogo->id = $id;
		if (!$this->Catalogo->exists()) {
			throw new NotFoundException(__('Invalid catalogo'));
		}
		$this->set('catalogo', $this->Catalogo->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Catalogo->create();
			if ($this->Catalogo->save($this->request->data)) {
				$this->Session->setFlash(__('The catalogo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The catalogo could not be saved. Please, try again.'));
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
		$this->Catalogo->id = $id;
		if (!$this->Catalogo->exists()) {
			throw new NotFoundException(__('Invalid catalogo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Catalogo->save($this->request->data)) {
				$this->Session->setFlash(__('The catalogo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The catalogo could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Catalogo->read(null, $id);
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
		$this->Catalogo->id = $id;
		if (!$this->Catalogo->exists()) {
			throw new NotFoundException(__('Invalid catalogo'));
		}
		if ($this->Catalogo->delete()) {
			$this->Session->setFlash(__('Catalogo deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Catalogo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	public function beforeFilter() {
    parent::beforeFilter();
    $this->Auth->allow('index', 'view');
}
}
