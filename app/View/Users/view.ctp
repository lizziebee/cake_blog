<div class="users view">




<!-- debug($user); -->



<p><h1>UserName:<?php echo ($user['User']['username']); ?></h1></p>
<p> Password:<?php echo $user['User']['password']; ?> </p>
<p> Role: <?php echo ($user['User']['role']); ?> </p>
<p> Created: <?php echo $user['User']['created']; ?> </p>

************************************************************
<?php echo '<p> You have  '.count($user['Post']).'  Posts </p>'; ?>

<?php for ($x= 0; $x< count($user['Post']); $x++){

	
	 echo 'Post: '.$x.'<p>Title: '.h($user['Post'][$x]['title']).'</p>'; 
	 echo '<p>Body: '.h($user['Post'][$x]['body']).'</p>';
	 echo '<p>Created '.h($user['Post'][$x]['created']).'</p>'; 

	}
?>


</div>



<div class = "actions">

<?php echo $this->Html->link(
    'View all users',
    array('controller' => 'users', 'action' => 'index')
); ?>



</div>