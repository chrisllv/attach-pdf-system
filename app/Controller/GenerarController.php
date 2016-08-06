<?php
App::uses('AppController', 'Controller');
/**
 * Modulos Controller
 *
 * @property Modulo $Modulo
 */
class GenerarController extends AppController {

var $uses= array('Usuario');


/**
 * beforeFilter method
 *
 * @return void
 */
    public function beforeFilter(){
		$this->checkSession();
	}

/**
 * index method
 *
 * @return void
 */
    public function index(){
    	$this->layout = 'panel';
	}


/**
 * index method
 *
 * @return void
 */
    public function generar(){
    	$this->layout = 'ajax';
    	App::import('Vendor', 'yt_downloader', array('file' => 'youtube/youtube-dl.class.php'));
    	$mytube = new yt_downloader($this->request->data["generar"]["url"], TRUE, "audio", $this->request->data["generar"]["inicio"], $this->request->data["generar"]["fin"]);
		$audio   = $mytube->get_audio();
		$path_dl = $mytube->get_downloads_dir();
		clearstatcache();
		if($audio !== FALSE && file_exists($path_dl . $audio) !== FALSE){

		}
		App::import('Vendor', 'TCPDF',         array('file' => 'TCPDF-master/tcpdf.php'));
	    $this->set("name", "generado.pdf");
	    $this->set("url", "/var/www/attach-pdf-system/app/webroot/videos/".$audio );

	}

/**
 * session method
 *
 * @return void
 */
    public function session(){
    	$this->layout = 'ajax';

	}
/**
 * sessionl method
 *
 * @return void
 */
    public function sessionl(){
    	$this->layout = 'ajax';

	}
}
?>