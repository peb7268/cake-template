<?php
/**
 * 	This is the default posts view
 * 
 * 	-- View Conventions --
 * 	- Views reside in a camel cased named plural version of the Model name. 
 * 	- Each view within those is named lower case and that corresponds.
 * 	- views have a .ctp extension which stands for cake template.
 * 
 * 	 So the view for the Post model would be in a folder called "Posts".
 * 	 The Post model's edit action would have a view titled "edit.ctp"
 * 
 * 	-- Helpers --
 * 	Are the componets / behaviors of views.
 * 	These prebuilt packages of functionality server to do things like building forms, generating links and more.
 * 	
 * 	
 */
 ?>

<h1>Blog Posts</h1>
<table>
	<tr>
		<th>ID</th><th>Title</th><th>Edit</th><th>Delete</th><th>Created</th>
	</tr>
	<!-- Grab the posts data from the variable that was set by the PostsController -->
	<?php foreach($posts as $post) { ?>
	<tr>
		<td><?php echo $post['Post']['id']; ?></td>
		<td><?php echo $this->Html->link($post['Post']['title'], array('controller' => 'posts', 'action' => 'view', $post['Post']['id']));?>
		</td>
		<td>
			<?php echo $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id'])); ?>
		</td>
		<td>
			<?php //using postLink() cake will generate JavaScript that will do the post for us
				 //This view also uses the Form helper to generate the JS prompt for the confirmation
			echo $this->Form->postLink('Delete', 
									array('action' => 'delete', $post['Post']['id']), 
									array('confirm' => 'Are you sure?')); 
			?>
		</td>
		<td><?php echo $post['Post']['created']; ?></td>
	</tr>
	<?php } ?>
</table>

<p><?php echo $this->Html->link('New Post', array('controller' => 'posts', 'action' =>'add')); ?></p>