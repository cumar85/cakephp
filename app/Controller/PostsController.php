<?php
class PostsController extends AppController {
	public function index() {
		$posts = $this->Post->find('all',[
             'fields' => ['Post.title', 'Category.id', 'Category.title' ]
		]);
		$this->set(compact('posts'));
	}
}
