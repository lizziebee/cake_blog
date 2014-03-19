<!-- File: /app/View/Posts/index.ctp -->

<div class="posts index">
<h1>Blog posts</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
        <th>Edit</th>
        <th>Delete</th>
        <th>User_ID</th>
    </tr>
    
    
    

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($posts as $post): ?>
    <tr>
      
    
        <td><?php echo $post['Post']['id']; ?></td>
        
        
        <td>
            <?php echo $this->Html->link(
            $post['Post']['title'],
			array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?>
        </td>
        <td>
        
        <?php echo $post['Post']['created']; ?></td>
        
          <td>
        <?php
                echo $this->Html->link(
                    'Edit',
                    array('action' => 'edit', $post['Post']['id'])
                );
            ?>
            </td>
            <td>
            
             <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $post['Post']['id']),
                    array('confirm' => 'Are you sure?')
                );
            ?>
            
            <td>
                    <?php echo $post['Post']['user_id']; ?>  <!--create anothe column or table data-->
                   <!-- and pass user_id from post database-->
            </td>
               
        </td>
    </tr>
    <?php endforeach; ?>
    <?php unset($post); ?>
</table>

	
</div>

<div class="actions"> 

	<div id = "addpost">   <!--It is used in  css div#addpost -->
	<?php echo $this->Html->link( 
    'Add Post',
    array('controller' => 'posts', 'action' => 'add')); ?>
	</div>

	<div id = "buttonlogout"> <!-- It is used in  css div#buttonlogout-->
	<h1><?php if(isset($username)) { ?>  <!--if user login into my application--> 
	<h1><?php echo $this->Html->link('Logout', array('plugin'=>null, // then it create a button of Logout
	// and Html helper also create a link to logout page. it is executed  action logout by controller from users. 
			'admin'=>false, 'controller'=>'users', 'action'=>'logout'));
		}
			// otherwise it create a button for Login if user has not login into application yet.

  			 else   {  echo $this->Html->link('Login', array('plugin'=>null,
			'admin'=>false, 'controller'=>'users', 'action'=>'login'));	}

			 ?>
			</h1> </h1>
	</div>