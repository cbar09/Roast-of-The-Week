<?php 
    echo $this->Html->css(array('http://fonts.googleapis.com/css?family=Droid+Sans:regular,bold'));

    //Load global css files
    $cssFiles = array(
        'style.css?v=2', 
		'960_24_col.css?v=2', 
		'colorbox', 
		'custom-theme/jquery-ui-1.8.11.custom.css'
	);

    //Load admin css files
    if(isset($admin) && $admin){
        $cssFiles[] = 'admin.css';
    }

	//Load pages css file
    if(strpos($this->params['url']['url'], 'pages'.DS.'firm') >= 0){
        $cssFiles[] = 'pages.css';
    }
     
    //Load controller-specific css files
    if (is_file(APP.WEBROOT_DIR.DS."css".DS.$this->params["controller"].".css")){
       $cssFiles[] = $this->params["controller"];
    }
    //Load page specific css files
    else if ($this->params["controller"] == "pages" && is_file(APP.WEBROOT_DIR.DS."css".DS.$this->params["pass"][0].".css")){
       $cssFiles[] = $this->params["pass"][0];
    } 
    echo $this->Html->css($cssFiles);
?>
<!--[if lt IE 7 ]>
    <script src="js/libs/dd_belatedpng.js"></script>
    <script> DD_belatedPNG.fix('img, .png_bg'); //fix any <img> or .png_bg background-images </script>
<![endif]-->
