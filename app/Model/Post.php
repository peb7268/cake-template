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

class Post extends AppModel {
	public $name = 'Post';
}

?>