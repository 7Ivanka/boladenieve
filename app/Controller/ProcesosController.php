<?php
App::uses('AppController', 'Controller');
/**
 * Procesos Controller
 *
 * @property Proceso $Proceso
 */
class ProcesosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Proceso->recursive = 0;
		$this->set('procesos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Proceso->id = $id;
		if (!$this->Proceso->exists()) {
			throw new NotFoundException(__('Invalid proceso'));
		}
		$this->set('proceso', $this->Proceso->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Proceso->create();
			if ($this->Proceso->save($this->request->data)) {
				$this->Session->setFlash(__('The proceso has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proceso could not be saved. Please, try again.'));
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
		$this->Proceso->id = $id;
		if (!$this->Proceso->exists()) {
			throw new NotFoundException(__('Invalid proceso'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Proceso->save($this->request->data)) {
				$this->Session->setFlash(__('The proceso has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proceso could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Proceso->read(null, $id);
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
		$this->Proceso->id = $id;
		if (!$this->Proceso->exists()) {
			throw new NotFoundException(__('Invalid proceso'));
		}
		if ($this->Proceso->delete()) {
			$this->Session->setFlash(__('Proceso deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Proceso was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	public function beforeFilter() {
    parent::beforeFilter();
    $this->Auth->allow('index', 'view');
}
}
