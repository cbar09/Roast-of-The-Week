<?php 
	//Load main javascript files
	$jsScripts = array(
	    'jquery.cycle.all.min.js', 
		'jquery.colorbox-min.js',
		'libs/jquery-ui-1.8.11.custom.min.js',
		'libs/live.js', //Remove for production
		'script.js'
	); 
	
	//Load Admin Specific Scripts
	if(isset($admin) && $admin){
	    array_push($jsScripts,
		    DS.'plugins'.DS.'jquery.wysiwyg'.DS.'js'.DS.'jquery.wysiwyg.js',
		    DS.'plugins'.DS.'jquery.imageUpload'.DS.'fileuploader.js'
		);
	}
	
	//Load controller-specific js files
	if (is_file(APP.WEBROOT_DIR.DS."js".DS.$this->params["controller"].".js")){
		$jsScripts[] = $this->params["controller"];
	}

	//Load page specific js files
	else if ($this->params["controller"] == "pages" && is_file(APP.WEBROOT_DIR.DS."js".DS.$this->params["pass"][0].".js")){
		$jsScripts[] = $this->params["pass"][0];
	}
	
	//Write Scripts to page
	echo $this->Html->script($jsScripts);
?>

<!-- asynchronous google analytics: mathiasbynens.be/notes/async-analytics-snippet - Only for production -->
<?php if(Configure::Read('debug') == 0){?>
	<script>
		var _gaq = [['_setAccount', 'UA-21883274-1'], ['_trackPageview']];
		(function(d, t) {
		var g = d.createElement(t),
		s = d.getElementsByTagName(t)[0];
		g.async = true;
		g.src = ('https:' == location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g, s);
		})(document, 'script');
	</script>
<?php }?> 

<!--Write Buffered Script from Js Helper -->
<?php echo $this->Js->writeBuffer(); ?>	