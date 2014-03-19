<!-- File: /app/View/Users/index.ctp -->

<h1>Blog users</h1>
<table>
    <tr>
        <th>UserId</th>
        <th>UserName</th>
        <th>Password</th>
         <th>Role</th>
        <th>Created</th>
    </tr>

    <!-- Here is where we loop through our $users array, printing out user info -->

    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['User']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($user['User']['username'],
array('controller' => 'users', 'action' => 'view', $user['User']['id'])); ?>
        </td>
        <td><?php echo $user['User']['password']; ?></td>
        
        <td><?php echo $user['User']['role']; ?></td>
        
        <td><?php echo $user['User']['created']; ?></td>
        
         <td>
        <?php
                echo $this->Html->link(
                    'Edit',
                    array('action' => 'edit', $user['User']['id']) 
                    // send data to User model by identify the user Id
                );
				
				 ?>
				 
				 <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $user['User']['id']),
                    array('confirm' => 'Are you sure?')
                );
            ?>
			</td>
            <td>
               
    </tr>
    <?php endforeach; ?>
    <?php unset($user); ?>
</table>

<div class="actions">
<div id ="addpost">
<?php echo $this->Html->link(
    'Add User',
    array('controller' => 'users', 'action' => 'add')
); ?>

</div>

<div id = "buttonlogout">
	<h1><?php if(isset($username)) { ?>
	<h1><?php echo $this->Html->link('Logout', array('plugin'=>null,
			'admin'=>false, 'controller'=>'users', 'action'=>'logout'));
		}


  			 else   {  echo $this->Html->link('Login', array('plugin'=>null,
			'admin'=>false, 'controller'=>'users', 'action'=>'login'));	}

			 ?>
			</h1> </h1>
	</div>



</div>
