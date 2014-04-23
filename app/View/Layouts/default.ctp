<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');  
		
		echo $this->Html->css('bootstrap'); 

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>

<body>
	<div id="container">
		
		<div id="header">
		
		<ul class = "nav nav-pills">
	 
	 
	 	<li><?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'login'));?> </li>
			
		<li><?php if(!isset($username)) { //  if users not login, it will bring to login page when users click on button of USER
           
               	echo $this->Html->link('User', array('controller' => 'users', 'action' => 'login'));
            
        } else { echo $this->Html->link('User', array('controller' => 'users', 'action' => 'index'));}?> </li>
			
		<li><?php if(!isset($username)) { //  if users not login, it will bring to login page when users click on button of POST
           
               	echo $this->Html->link('Post', array('controller' => 'users', 'action' => 'login'));
            
        } else { echo $this->Html->link('Post', array('controller' => 'posts', 'action' => 'index'));}?> </li>
			

		
		<li><?php if(isset($username)) { ?>
			<?php echo $this->Html->link('Log out', array('plugin'=>null,
			'admin'=>false, 'controller'=>'users', 'action'=>'logout'));
			}

  			 else   {  echo $this->Html->link('Log in', array('plugin'=>null,
			'admin'=>false, 'controller'=>'users', 'action'=>'login'));	} ?>
		</li>
		
	
		</ul>
		
		
		<!--<h1><?php echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>-->
			
	
			
	</div>
	
		<div id="content">
	
	
		<div id="welcome">
<!-- get username function from user login -->
				
		
    	<h1><?php echo $username; ?> Welcome </h1>
		</div>

		
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
			
		
		</div>
		<div id="footer">
                    <div id ="name">
                    Liz Cheah &copy; All Rights Reserved 2014 
                    </div>
					
			<!--<?php echo $this->Html->link(
				$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>-->
			
			
		</div>
	</div>
	<!-- <?php echo $this->element('sql_dump'); ?>-->
</body>
</html>