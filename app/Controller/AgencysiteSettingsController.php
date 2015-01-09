<?php
App::uses('AppController', 'Controller');
/**
 * AgencysiteSettings Controller
 *
 * @property AgencysiteSetting $AgencysiteSetting
 * @property PaginatorComponent $Paginator
 */
class AgencysiteSettingsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->AgencysiteSetting->recursive = 0;
		$this->set('agencysiteSettings', $this->Paginator->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AgencysiteSetting->exists($id)) {
			throw new NotFoundException(__('Invalid agencysite setting'));
		}
		$options = array('conditions' => array('AgencysiteSetting.' . $this->AgencysiteSetting->primaryKey => $id));
		$this->set('agencysiteSetting', $this->AgencysiteSetting->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AgencysiteSetting->create();
			if ($this->AgencysiteSetting->save($this->request->data)) {
				$this->Session->setFlash(__('The agencysite setting has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The agencysite setting could not be saved. Please, try again.'));
			}
		}
		$users = $this->AgencysiteSetting->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->AgencysiteSetting->exists($id)) {
			throw new NotFoundException(__('Invalid agencysite setting'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->AgencysiteSetting->save($this->request->data)) {
				$this->Session->setFlash(__('The agencysite setting has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The agencysite setting could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AgencysiteSetting.' . $this->AgencysiteSetting->primaryKey => $id));
			$this->request->data = $this->AgencysiteSetting->find('first', $options);
		}
		$users = $this->AgencysiteSetting->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->AgencysiteSetting->id = $id;
		if (!$this->AgencysiteSetting->exists()) {
			throw new NotFoundException(__('Invalid agencysite setting'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->AgencysiteSetting->delete()) {
			$this->Session->setFlash(__('The agencysite setting has been deleted.'));
		} else {
			$this->Session->setFlash(__('The agencysite setting could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
