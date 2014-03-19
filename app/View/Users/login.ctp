<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend>
            <?php echo __('Please enter your username and password'); ?>
        </legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login')); ?>
</div>

<div class="actions">




	
	<h1><?php if(isset($username)) { ?>
			<h1><?php echo $this->Html->link('Logout', array('plugin'=>null,
			'admin'=>false, 'controller'=>'users', 'action'=>'logout'));
			}


  			 else   {  echo $this->Html->link('Login', array('plugin'=>null,
			'admin'=>false, 'controller'=>'users', 'action'=>'login'));	}

			 ?>
			</h1> 
	</h1>



</div>
