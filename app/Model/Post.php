<?php 
/** 
 *  -- This is the Model --
 * 
 * 	-- URL Schema --
 * 	www.example.com/controller_name/action/param
 * 
 * 	-- Model Conventions --
 *  The model name is singular and camel cased
 * 	The table it corresponds to in the DB is plural and lower case
 * 
 * 	-- File Conventions --
 * 	The model is camel cased and singular. (camel cased means the first letter of each word is caps)
 * 
 * 	-- Database Conventions --
 * 	Table names are plural and underscorred.
 * 	Multi word field names are underscorred like "first_name".
 * 	
 * 
 */


class Post extends AppModel {
	public $name = 'Post';

	public $validate = array(
		'title' => array('rule' => 'notEmpty'),
		'body' 	=> array('rule' => 'notEmpty')
	);
}

?>