<?php
App::uses('AppController', 'Controller');
/**
 * Planets Controller
 *
 * @property Planet $Planet
 * @property PaginatorComponent $Paginator
 */
class PlanetsController extends AppController {

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
		$this->Planet->recursive = 0;
		$this->set('planets', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Planet->exists($id)) {
			throw new NotFoundException(__('Invalid planet'));
		}
		$options = array('conditions' => array('Planet.' . $this->Planet->primaryKey => $id));
		$this->set('planet', $this->Planet->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if (AuthComponent::user('role') == 'visitor') {
			$this->Session->setFlash(__("You're now allowed to do this."), 'flash_fail');
			return $this->redirect(array('action' => 'index'));
		}
		if ($this->request->is('post')) {
			$this->Planet->create();
			if ($this->Planet->save($this->request->data)) {
				$this->Session->setFlash(__('The planet has been saved.'), 'flash_success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The planet could not be saved. Please, try again.'), 'flash_fail');
			}
		}
                if ($this->request->is('ajax')) {
                    $term = $this->request->query('term');
                    $planetNames = $this->Planet->getCarNames($term);
                    $users = $this->Planet->User->find('list');
                    $this->set(compact('carNames', 'users'));
                    $this->set('_serialize', 'planetNames');
                }
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Planet->exists($id)) {
			throw new NotFoundException(__('Invalid planet'));
		}
		$planet = $this->Planet->findById($id);
		if (AuthComponent::user('id') != $planet['Planet']['user_id'] && AuthComponent::user('role') != 'admin') {
			$this->Session->setFlash(__("You're now allowed to do this."), 'flash_fail');
			return $this->redirect(array('action' => 'index'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Planet->save($this->request->data)) {
				$this->Session->setFlash(__('The planet has been saved.'), 'flash_success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The planet could not be saved. Please, try again.'), 'flash_fail');
			}
		} else {
			$options = array('conditions' => array('Planet.' . $this->Planet->primaryKey => $id));
			$this->request->data = $this->Planet->find('first', $options);
		}
		$users = $this->Planet->User->find('list');
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
		$this->Planet->id = $id;
		if (!$this->Planet->exists()) {
			throw new NotFoundException(__('Invalid planet'));
		}
		$planet = $this->Planet->findById($id);
		if (AuthComponent::user('id') != $planet['Planet']['user_id'] && AuthComponent::user('role') != 'admin') {
			$this->Session->setFlash(__("You're now allowed to do this."), 'flash_fail');
			return $this->redirect(array('action' => 'index'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Planet->delete()) {
			$this->Session->setFlash(__('The planet has been deleted.'), 'flash_success');
		} else {
			$this->Session->setFlash(__('The planet could not be deleted. Please, try again.'), 'flash_fail');
		}
		return $this->redirect(array('action' => 'index'));
	}
}
