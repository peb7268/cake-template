<?php 
/**
 *  Notice that the class name has the same capitalization as the file name and the 
 * 	name variables' value also shares that.
 * 
 *	the name convention for the model, 'Post' tells cake that:
 * 	- the controller for this is called PostsController.
 * 	- the database table is called posts
 * 
 * 	-- Noteable methods --
 * 	setFlash() : sets a session variable that will be shown to the user in the view
 * 
 */

class PostsController extends AppController {
	public $helpers = array('Html','Form'); //the special ablities we want to be able to leverage.
	public $components = array('Session');	//
	public $name = 'Posts';					//what you hit in the url (I.E mysite.com/Posts/action)

	//These are called actions
	public function index(){
		//Tells the controller to set the view variable "posts" with the data from the model Post
		$this->set('posts', $this->Post->find('all'));
	}
	/** View -----------------------------------------
	 * - sets the Post model's id so it knows what to grab
	 * - Passes the info to the post variable of the view
	 * 
	 */
	public function view($id){
		$this->Post->id = $id;
		$this->set('post', $this->Post);
	}
	/** Add -----------------------------------------
	 * - Calls the save function of the post model passing  it the request data
	 * - Sets data to be displayed in the view
	 * - redirects to the index action of the current controller
	 *------------------------------------------------*/
	public function add(){
		if($this->request->is('post')){
			if($this->Post->save($this->request->data)){
				$this->Session->setFlash('Your post has been saved');
				$this->redirect(array('action'=>'index'));
			} 
		}
	}
	/** Edit -----------------------------------------
	 * - if its a get request it assumes you want to read the data for a post
	 * - else it assumes you want to save some data with the current id and re save it
	 * - redirects to the index action of the current controller
	 *------------------------------------------------*/
	public function edit($id = null){
		$this->Post->id = $id;

		if($this->request->is('get')){
			$this->request->data = $this->Post->read();
		} else {
			if($this->Post->save($this->request->data)){
				$this->Session->setFlash('Your post has been updated');
				$this->redirect(array('action' => 'index'));
			}
		}
	}
	/** Delete -----------------------------------------
	 * - if its a get request it assumes you want to read the data for a post
	 * - else it assumes you want to save some data with the current id and re save it
	 * - redirects to the index action of the current controller
	 *------------------------------------------------*/
	public function delete($id){
		if($this->request->is('get')){
			throw new MethodNotAllowedException();
		}
		if($this->Post->delete($id)){
			$this->Session->setFlash('The post'. $id .'has been successfully deleted');
			$this->redirect(array('action', 'index'));
		}
	}


} //closes the PostsController