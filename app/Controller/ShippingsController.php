<?php
App::uses('AppController', 'Controller');
/**
 * Shippings Controller
 *
 * @property Shipping $Shipping
 * @property PaginatorComponent $Paginator
 */
class ShippingsController extends AppController {

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
		$this->Shipping->recursive = 0;
		$this->set('shippings', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Shipping->exists($id)) {
			throw new NotFoundException(__('Invalid shipping'));
		}
		$options = array('conditions' => array('Shipping.' . $this->Shipping->primaryKey => $id));
		$this->set('shipping', $this->Shipping->find('first', $options));
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
			$this->Shipping->create();
			if ($this->Shipping->save($this->request->data)) {
				$this->Session->setFlash(__('The shipping has been saved.'), 'flash_success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shipping could not be saved. Please, try again.'), 'flash_fail');
			}
		}
		$planets = $this->Shipping->Planet->find('list');
		$products = $this->Shipping->Product->find('list');
		$this->set(compact('planets', 'products'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Shipping->exists($id)) {
			throw new NotFoundException(__('Invalid shipping'));
		}
		$shipping = $this->Shipping->findById($id);
		if (AuthComponent::user('id') != $shipping['Planet']['user_id'] && AuthComponent::user('role') != 'admin') {
			$this->Session->setFlash(__("You're now allowed to do this."), 'flash_fail');
			return $this->redirect(array('action' => 'index'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Shipping->save($this->request->data)) {
				$this->Session->setFlash(__('The shipping has been saved.'), 'flash_success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shipping could not be saved. Please, try again.'), 'flash_fail');
			}
		} else {
			$options = array('conditions' => array('Shipping.' . $this->Shipping->primaryKey => $id));
			$this->request->data = $this->Shipping->find('first', $options);
		}
		$planets = $this->Shipping->Planet->find('list');
		$products = $this->Shipping->Product->find('list');
		$this->set(compact('planets', 'products'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Shipping->id = $id;
		if (!$this->Shipping->exists()) {
			throw new NotFoundException(__('Invalid shipping'));
		}
		$shipping = $this->Shipping->findById($id);
		if (AuthComponent::user('id') != $shipping['Planet']['user_id'] && AuthComponent::user('role') != 'admin') {
			$this->Session->setFlash(__("You're now allowed to do this."), 'flash_fail');
			return $this->redirect(array('action' => 'index'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Shipping->delete()) {
			$this->Session->setFlash(__('The shipping has been deleted.'), 'flash_success');
		} else {
			$this->Session->setFlash(__('The shipping could not be deleted. Please, try again.'), 'flash_fail');
		}
		return $this->redirect(array('action' => 'index'));
	}}
