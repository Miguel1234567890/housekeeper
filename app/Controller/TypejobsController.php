<?php
App::uses('AppController', 'Controller');
/**
 * Typejobs Controller
 *
 * @property Typejob $Typejob
 * @property PaginatorComponent $Paginator
 */
class TypejobsController extends AppController {

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
		$this->Typejob->recursive = 0;
		$this->set('typejobs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Typejob->exists($id)) {
			throw new NotFoundException(__('Invalid typejob'));
		}
		$options = array('conditions' => array('Typejob.' . $this->Typejob->primaryKey => $id));
		$this->set('typejob', $this->Typejob->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Typejob->create();
			if ($this->Typejob->save($this->request->data)) {
				$this->Flash->success(__('The typejob has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The typejob could not be saved. Please, try again.'));
			}
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
		if (!$this->Typejob->exists($id)) {
			throw new NotFoundException(__('Invalid typejob'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Typejob->save($this->request->data)) {
				$this->Flash->success(__('The typejob has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The typejob could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Typejob.' . $this->Typejob->primaryKey => $id));
			$this->request->data = $this->Typejob->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Typejob->id = $id;
		if (!$this->Typejob->exists()) {
			throw new NotFoundException(__('Invalid typejob'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Typejob->delete()) {
			$this->Flash->success(__('The typejob has been deleted.'));
		} else {
			$this->Flash->error(__('The typejob could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
