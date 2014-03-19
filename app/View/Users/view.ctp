<!-- File: /app/View/Users/view.ctp -->
<div class="users view">
<p><h1>UserName:<?php echo ($user['User']['username']); ?></h1></p>
<p> Password:<?php echo $user['User']['password']; ?> </p>
<p> Role: <?php echo ($user['User']['role']); ?> </p>
<p> Created: <?php echo $user['User']['created']; ?> </p>
</div>

<div class = "actions">

<?php echo $this->Html->link(
    'Back to Home page',
    array('controller' => 'users', 'action' => 'index')
); ?>

</div>