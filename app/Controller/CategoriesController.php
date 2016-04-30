<?php
class CategoriesController extends AppController {
	public $helpers = ['Form'];
	public $components = ['Flash'];
	public function index() {
		$cats = $this->Category->find('all', [
			'recursive' => -1,
			'fields' => ['Category.id','Category.title']
		]);
		$this->set(compact('cats'));
	}
	public function view($catId = null) {
		if (empty( (int)$catId ) ) {
			throw new NotFoundException('404');
		}
		$this->Category->bindModel(['hasMany' =>
		        ['Post' => ['fields' => ['title']]]
	    ]);
		$cat = $this->Category->find('first',[
			'conditions' => array('Category.id' => $catId),
		]);
		if (!$cat) {
			throw new NotFoundException('404');
		}
		$this->set(compact('cat'));
	}
	public function add() {
		if ($this->request->is('post')) {
			$this->Category->create();
			if ($this->Category->save($this->request->data)) {
				$this->Flash->set('Your stuff has been saved.');
				$this->redirect(['action' => 'add']);
			} else {
				$this->Flash->set('Error not saved.');
			}
		}
	}
}
