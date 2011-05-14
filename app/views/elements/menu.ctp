<sidebar id="menu" class="grid_2">
<?php 
	echo $this->Html->link(
	    $this->Html->image("menu/menubutton_blog.png", array('id'=>'blog-tab')),
	    'http://worldbeanroasthers.com/',
	    array('escape'=>false, 'target'=>'_blank')
	);
	echo $this->Html->link(
	    $this->Html->image("menu/menubutton_store.png", array('id'=>'store-tab')),
	    'http://www.worldbeanroasthers.com/store/',
	    array('escape'=>false, 'target'=>'_blank')
	);
	echo $html->div('newsletter', 
		'<input type="text" value="Enter Email Address" />'.
		$html->image('menu/menubutton_newsletter_submitbutton.png')
	);
	echo $this->Html->link(
	    $this->Html->image("menu/menubutton_facebook.png", array('id'=>'facebook-tab')),
	    'http://www.facebook.com/WorldBeanRoastHers',
	    array('escape'=>false, 'target'=>'_blank')
	);
	echo $html->image("menu/menubutton_twitter.png", array('id'=>'twitter-tab'));
?>
</sidebar>