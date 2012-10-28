<h1>Add Post</h1>
<?php
/**
 *	$this->Form->create(); will by default create the opening form tag. If no params are present 
 * 	it will assume you are submitting it to the current controllers add action or edit action if 
 * 	the post id is sent with the form data.
 * 	 
 * 
 * 
 */

echo $this->Form->create('Post');
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows', '3'));
echo $this->Form->end('Save Post');
?>