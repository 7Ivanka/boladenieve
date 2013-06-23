<?php
App::uses('AppController', 'Controller');
/**
 * Presupuestos Controller
 *
 * @property Presupuesto $Presupuesto
 */
class PresupuestosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Presupuesto->recursive = 0;
		$this->set('presupuestos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Presupuesto->id = $id;
		if (!$this->Presupuesto->exists()) {
			throw new NotFoundException(__('Invalid presupuesto'));
		}
		$this->set('presupuesto', $this->Presupuesto->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->Groups->id = $idgroup;
		if ($this->request->is('post')) {
			$this->request->data['Post']['user_id'] = $this->Auth->user('id');
			$this->Presupuesto->create();
			if ($this->Presupuesto->save($this->request->data)) {
				$this->Session->setFlash(__('The presupuesto has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The presupuesto could not be saved. Please, try again.'));
			}
		}
		$departamentos = $this->Presupuesto->Departamento->find('list');
		$procesos = $this->Presupuesto->Proceso->find('list');
		$catalogos = $this->Presupuesto->Catalogo->find('list');
		$subcidios = $this->Presupuesto->Subcidio->find('list');
		$users = $this->Presupuesto->User->find('list');
		
		$this->set(compact('departamentos', 'procesos', 'catalogos', 'subcidios', 'users'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Presupuesto->id = $id;
		if (!$this->Presupuesto->exists()) {
			throw new NotFoundException(__('Invalid presupuesto'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Presupuesto->save($this->request->data)) {
				$this->Session->setFlash(__('The presupuesto has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The presupuesto could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Presupuesto->read(null, $id);
		}
		$departamentos = $this->Presupuesto->Departamento->find('list');
		$procesos = $this->Presupuesto->Proceso->find('list');
		$catalogos = $this->Presupuesto->Catalogo->find('list');
		
		$subcidios = $this->Presupuesto->Subcidio->find('list');
		$users = $this->Presupuesto->User->find('list');
		$this->set(compact('departamentos', 'procesos', 'catalogos', 'subcidios', 'users'));
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
		$this->Presupuesto->id = $id;
		if (!$this->Presupuesto->exists()) {
			throw new NotFoundException(__('Invalid presupuesto'));
		}
		if ($this->Presupuesto->delete()) {
			$this->Session->setFlash(__('Presupuesto deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Presupuesto was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	public function isAuthorized($user) {
    // All registered users can add posts
    if ($this->action === 'add') {
        return true;
    }

    // The owner of a post can edit and delete it
    if (in_array($this->action, array('edit', 'delete'))) {
        $presupuestoId = $this->request->params['pass'][0];
        if ($this->Post->isOwnedBy($presupuestoId, $user['id'])) {
            return true;
        }
    }

    return parent::isAuthorized($user);
}
public function beforeFilter() {
    parent::beforeFilter();
    $this->Auth->allow('index', 'view');
}
}
