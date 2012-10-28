<?php 
/**
 *  Notice that the class name has the same capitalization as the file name and the 
 * 	name variables' value also shares that.
 * 
 *	the name convention for the model, 'Post' tells cake that:
 * 	- the controller for this is called PostsController.
 * 	- the database table is called posts
 * 
 */

class PostsController extends AppController {
	public $helpers = array('Html','Form'); //the special ablities we want to be able to leverage.
	public $name = 'Posts';					//what you hit in the url (I.E mysite.com/Posts/action)

	//These are called actions
	public function index(){
		//Tells the controller to set the view variable "posts" with the data from the model Post
		$this->set('posts', $this->Post->find('all'));
	}
}
?>