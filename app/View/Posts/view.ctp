<div class="posts view">

<p><h1>Title: <?php echo h($post['Post']['title']); ?></h1></p>

<p>Created: <?php echo $post['Post']['created']; ?></p>

<p>Body: <?php echo h($post['Post']['body']); ?></p>

<p>User: <?php echo h($post['User']['username']); ?></p>



</div>



<div class = "actions">

<div id = "goback">
<?php echo $this->Html->link(
    'View all Posts',
    array('controller' => 'posts', 'action' => 'index')
); ?>

</div>

</div>
