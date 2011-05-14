<?php

class AppController extends Controller{
	var $helpers = array('Session', 'Js'=>array('Jquery'));
	//var $components = array('Auth', 'Session', 'RequestHandler', 'Email', 'Util', 'DebugKit.Toolbar');
	
	/*function beforeFilter() {
       // $this->Auth->allow('display', 'view');
       // $this->Auth->loginRedirect = array('controller' => 'pages', 'action' => 'home');
       // $this->set('admin', $this->Auth->user() != null);
		//Compress Html with gzip if we're in production
		if(Configure::read('debug') == 0){
			@ob_start ('ob_gzhandler');
			header('Content-type: text/html; charset: UTF-8');
			header('Cache-Control: must-revalidate');
			$offset = -1;
			$ExpStr = "Expires: " .gmdate('D, d M Y H:i:s',time() + $offset) .' GMT';
			header($ExpStr);
		}
    }*/
    
    function renderElement($element = null){
    	$this->render('/elements/image_dialog', 'ajax_layout');
    }
}

?>