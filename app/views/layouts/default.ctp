<!doctype html>   
    <!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --> 
    <!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
    <!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
    <!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
    <!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
    <!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>World Bean Roasthers: Roast of the Week</title>
        <meta name="description" content="">
        <meta name="author" content="">
        
        <!-- Load favicon -->
        <?php echo $html->meta('icon');?>
        
        <!--  Mobile viewport optimized: j.mp/bplateviewport -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- CSS : implied media="all" -->
        <?php echo $this->element('css_loader');?>

        <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
        <?php echo $html->script('libs/modernizr-1.6.min.js'); ?>
        
        <!-- Less.js - For Dev Code (Remove for Production!) -->
        <!--<?php echo $this->Html->script('less-1.0.41.min'); ?>-->
        
        <!-- Include all inline scripts from views -->
        <?php echo $scripts_for_layout; ?>
	</head>
	
	<body>
		<div id="container" class="container_24">
			<?php echo $this->element('menu');?>
		
	  		<section id="main" class="grid_22 prefix_1 suffix_1 alpha omega">
				<?php echo $this->element('header');?>
		  		<div class="grid_22">
	            	<div id="top-panel" class="grid_12 alpha omega">
						<?php echo $this->element('slideshow'); ?>
				   	</div>
					<?php echo $html->image('meNroaster.png', array('id'=>'roaster'));?>
				</div>
	    		<div class="grid_22">
		    		<div class="grid_13 alpha"> 
			    		<p id="description" >
			    		Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
						diam nonummy nibh euismod tincidunt ut laoreet dolore magna
						aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
						nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
						ex ea commodo consequat. Duis autem vel eum iriure dolor in
						hendrerit in vulputate velit esse molestie consequat, vel illum
						dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto
						odio dignissim qui blandit praesent luptatum zzril delenit augue
						duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
						diam nonummy nibh euismod tincidunt ut laoreet dolore magna
						aliquam erat volutpat.
			    		</p>
		    		</div>
		    		<div class="grid_9 omega">
		    			<div id="order-box">
		    				<?php 
		    					echo $form->create("buyNow", array("action"=>"submit"));
		    					echo $form->input('size', array('type'=>'select', 'options'=>array(
		    						'16oz' => '16oz @ $13.25 (regular bag)',
		    						'80oz' => '80oz @ $58.00 (one big bag :)'
		    					),
		    					'after'=>'<a href="#">?</a>'));
		    					echo $form->input('grind', array('type'=>'select', 'options'=>array(
		    						'whole bean' => 'Whole Bean',
		    						'auto drip' => 'Auto Drip',
		    						'fine' => 'Fine',
		    						'press' => 'Press'
		    					),
		    					'after'=>'<a href="#">?</a>'));    
		    					echo $form->input('quantity', array('maxlength' => '10', 'class'=>'short', 'value'=>'1'));
		    					echo $form->end();
		    				?>
							<?php echo $this->Form->input('price', array('type' => 'hidden', 'value' => '13.25', 'label' => '$13.25'));?>
			    			<p id="price-text" value="13.25">$13.25</p>
			    			<?php 
			    			    echo $this->Html->image('buynow.png', array(
									'alt' => 'buy-now',
			    			    	'url' => array('controller' => 'orders', 'action' => 'add'),
									'id'=>'buy-now-button'
								));
			    			?>
		    			</div>
		    		</div>
	    		</div>
	    		<!-- Clear Row -->
	    		<div class="clear"></div>
	    		<!-- Horizontal Break -->
	    		<div class="break grid_22"></div>
    		
	    		<!-- Coffee Suggestions -->
	    		<div id="suggestions" class="grid_21 suffix_1">
	    			<span>You might also enjoy...</span>
	    			<ul>
	    				<li>
	    					<?php echo $this->Html->link(
	    					    $this->Html->image("surfers-bends.gif", array('width'=>'100%')),
	    					    'http://www.worldbeanroasthers.com/store/index.php?page=shop.product_details&flypage=shop.flypage&product_id=27&category_id=3&manufacturer_id=0&option=com_virtuemart&Itemid=45',
	    					    array('escape'=>false, 'target'=>'_blank')
	    					);?>
	    					<span>Surfer's Bends</span>
	    				</li>
	    				<li>
	    					<?php echo $this->Html->link(
	    					    $this->Html->image("Tour de French Roast.gif", array('width'=>'100%')),
	    					    'http://www.worldbeanroasthers.com/store/index.php?page=shop.product_details&flypage=shop.flypage&product_id=24&category_id=3&manufacturer_id=0&option=com_virtuemart&Itemid=45',
	    					    array('escape'=>false, 'target'=>'_blank')
	    					);?>
	                        <span>Tour de French Roast</span>
	    				</li>
	    				<li>
	    					<?php echo $this->Html->link(
	    					    $this->Html->image("Trigal's Bl3nd.gif", array('width'=>'100%')),
	    					    'http://www.worldbeanroasthers.com/store/index.php?page=shop.product_details&flypage=shop.flypage&product_id=26&category_id=3&manufacturer_id=0&option=com_virtuemart&Itemid=45',
	    					    array('escape'=>false, 'target'=>'_blank')
	    					);?>
	    					<span>Trigal's Bl3nd</span>
	    				</li>
	    			</ul>
	    		</div>
	    		<div class="clear"></div>
	    		<br/>
	    		<br/>
	    		<br/>
	    		<p class="copy">Copyright © 2010 • World Bean Roasthers</p>
	    		<br/>
	    	</section>
	    	<footer>

			</footer>
		</div> <!-- end of #container -->

		<!-- Load Google CDN copy of jQuery /Fall back to local copy if necessary -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
		<script>!window.jQuery && document.write(unescape('%3Cscript src="js/libs/jquery-1.5.1.min.js"%3E%3C/script%3E'))</script>
	
		<!-- Load javascript (inline scripts, buffered scripts and external scripts) -->
	    <?php echo $this->element('js_loader'); ?>
	</body>
</html>