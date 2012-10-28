<h1>Blog Posts</h1>
<table>
	<tr>
		<th>ID</th><th>Title</th><th>Created</th>
	</tr>
	<!-- Grab the posts data from the variable that was set by the PostsController -->
	<?php foreach($posts as $post) { ?>
	<tr>
		<td><?php echo $post['Post']['id']; ?></td>
		<td><?php echo $this->Html->link($post['Post']['title'], array('controller' => 'posts', 'action' => 'view', $post['Post']['id']));?>
		</td>
		<td><?php echo $post['Post']['created']; ?></td>
	</tr>
	<?php } ?>
</table>
