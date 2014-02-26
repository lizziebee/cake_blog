<!-- File: /app/View/Posts/index.ctp -->

<h1>Blog posts</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
		<th>Edit</th>
		<th>Delete</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($posts as $post): ?>
    <tr>
        <td><?php echo $post['Post']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($post['Post']['title'],
array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?>
        </td>
        <td><?php echo $post['Post']['created']; ?></td>
		<td><?php echo $this->Html->link('edit Post',
array('controller' => 'posts', 'action' => 'edit', $post['Post']['id'])); ?></td>

<td><?php echo $this->Html->link('delete',
array('controller' => 'posts', 'action' => 'delete', $post['Post']['id'])); ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($post); ?>
</table>

<?php echo $this->Html->link(
    'Add Post',
    array('controller' => 'posts', 'action' => 'add')
); ?>
